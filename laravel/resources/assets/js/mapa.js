var url = 'http://'+document.location.hostname+'/';
var lat,lng,ph_field,ph_box,map,input,searchBox,defaultBounds,autocomplete;
var dealersLocations = [];
var markers = [];
var styles = [
				
				{
				  "stylers": [
					{ hue: "#dbdfe2" },
					{ saturation: -90 },
					{ invert_lightness: true },
					{ lightness: 93 },
					{ gamma: 0.5 }
				  ]
				},{
				  "featureType": "road",
				  "elementType": "geometry",
				  "stylers": [
					{ lightness: 50 },
					{ visibility: "simplified" }
				  ]
				},{
				  "featureType": "all",	
				  "elementType": "labels.text.fill",
				  "stylers": [
					{ "color": "#939393" }
				  ]
				}
			  ];

initMap = function(){

	if($('#q').length==0){
		return false;
	}

	input = document.getElementById('q');
	defaultBounds = new google.maps.LatLngBounds( new google.maps.LatLng(23.6266557, -102.5375005) );

	if(! /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		ph_box = '<p>Localiza un distribuidor <strong>Toyota</strong> ingresando tu dirección en el campo de texto ubicado a la izquierda de la pantalla.</p>';
		ph_field = 'Localiza tu distribuidor más cercano. Ej. Av. Universidad 1112, Col. Xoco';

		map = new google.maps.Map(document.getElementById('mapa_ubicacion'), { mapTypeId: google.maps.MapTypeId.ROADMAP,zoom:11,center:new google.maps.LatLng(19.3200988, -99.1521845),styles:styles  });

		searchBox = new google.maps.places.SearchBox((input));
		map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

	}else{
		ph_box = '<p>Localiza un distribuidor <strong>Toyota</strong> ingresando tu dirección en el campo de texto.</p>';
		ph_field = 'Ej. Av. Universidad 1112, Col. Xoco';

		map = new google.maps.Map(document.getElementById('mapa_ubicacion'), { mapTypeId: google.maps.MapTypeId.ROADMAP,zoom:7,center:new google.maps.LatLng(19.3200988, -99.1521845),styles:styles  });

		autocomplete = new google.maps.places.Autocomplete((input),{ types: ['geocode'] });
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
		    search_place();
		});

	}

	search_place = function() {
	  var place = autocomplete.getPlace();
	  
	  if (place.length == 0) {
	  	return false;
	  }else{
	  	lat = place.geometry.location.lat();
	  	lng = place.geometry.location.lng();
	  	search_dealer(lat,lng);
	  }

	}

	distribuidores_map = function() {

		google.maps.event.trigger(map, 'resize');

	  	google.maps.event.addListener(searchBox, 'places_changed', function() {

		    var places = searchBox.getPlaces();

		    if (places.length == 0) {
		      return;
		    }

		    for (var i = 0, marker; marker = markers[i]; i++) {
		      marker.setMap(null);
		    }

	  		var bounds = new google.maps.LatLngBounds();

	  		lat = places[0].geometry.location.lat();
	  		lng = places[0].geometry.location.lng();

		    search_dealer(lat,lng);

		});

		google.maps.event.addListener(map, 'bounds_changed', function() {
		    var bounds = map.getBounds();
		    searchBox.setBounds(bounds);
		});

	}

	search_dealer = function(lat,lng){

		var request = $.ajax({
		  url: url+'/dealer/search',
		  type: 'POST',
		  data: { lat : lat, lng: lng },
		  "text json": jQuery.parseJSON,
		  dataType: 'json'
		});
		 
		console.log(request);

		request.done(function( json_response ) {
			
			if(json_response.dealers){
				show_dealers(json_response);
			}else{
				clearMap();
			}

		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Ocurrió el siguiente error: " + textStatus );
		});

	}

	show_dealers = function(json){

		dealersLocations = [];

		$('.distribuidoras div div.col2 ul').empty();

		$.each( json.dealers, function( index, value ){

			dealersLocations[index] = [json.dealers[index].nombre, '<h2>'+json.dealers[index].nombre+'</h2><p>'+json.dealers[index].direccion+', '+json.dealers[index].ciudad+', '+json.dealers[index].estado+'</p>', json.dealers[index].lat, json.dealers[index].lng, (json.dealers.length-index)];

			var html = '<li data-lat="'+json.dealers[index].lat+'" data-lng="'+json.dealers[index].lng+'"><h5>'+json.dealers[index].nombre+'</h5><img src="'+url+'assets/images/dealers/'+json.dealers[index].img+'"><p>'+json.dealers[index].direccion+', '+json.dealers[index].ciudad+', '+json.dealers[index].estado+'</p><span></span><p>'+json.dealers[index].telefono+'</p><a target="_blank" href="'+json.dealers[index].website+'">'+json.dealers[index].website+'</a></li>';
		  
			$( html ).prependTo( $('.distribuidoras div div.col2 ul') );

		});

		for (var i=0; i<markers.length; i++) {
	        markers[i].setMap(null);
		}
		
		markers = [];

		if(! /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		    setMarkers(dealersLocations);
		}else{
			$('.distribuidoras div div.col2 ul li').addClass('activo');
		}

	}

	setMarkers = function(locations) {

		var bounds = new google.maps.LatLngBounds();

		var i = 0;

	    for (i; i < locations.length; i++) {
	        var dealer = locations[i];
	        var myLatLng = new google.maps.LatLng(dealer[2], dealer[3]);
	        var marker = new google.maps.Marker({
	            position: myLatLng,
	            map: map,
	            animation: google.maps.Animation.DROP,
	            title: dealer[0],
	            zIndex: dealer[4]
	        });

			var infowindow = new google.maps.InfoWindow();
			var content = dealer[1];

			marker.infowindow = new google.maps.InfoWindow({
					content: content,
					maxWidth: 300
			});

			google.maps.event.addListener(marker,'click',   ( function(marker,i) {
	        return function() {
	        		closeMarkers();
	        		var f = ((locations.length)-1)-i;
	        		$('.distribuidoras div div.col2 ul li').removeClass('activo');
	        		$('.distribuidoras div div.col2 ul li:eq('+f+')').addClass('activo');
	               	marker.infowindow.open(map,marker);
	               	scrollToDealer();
	        	}
	     	})(marker,i));

	        markers.push(marker);
	        bounds.extend(myLatLng);
	    }
	    
	    map.setCenter(bounds.getCenter());
		map.fitBounds(bounds);

		$('.distribuidoras div div.col2 ul li:first-child').addClass('activo');
		locate((locations.length)-1);

	}

	setMarker = function(locations,index) {

		var bounds = new google.maps.LatLngBounds();

        var dealer = locations[index];
        var myLatLng = new google.maps.LatLng(dealer[2], dealer[3]);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
            title: dealer[0],
            zIndex: dealer[4]
        });

		var infowindow = new google.maps.InfoWindow();
		var content = dealer[1];

		marker.infowindow = new google.maps.InfoWindow({
				content: content,
				maxWidth: 200
		});

		google.maps.event.addListener(marker,'click',   ( function(marker,index) {
        return function() {
        		closeMarkers();
        		var f = ((locations.length)-1)-index;
        		$('.distribuidoras div div.col2 ul li').removeClass('activo');
        		$('.distribuidoras div div.col2 ul li:eq('+f+')').addClass('activo');
               	marker.infowindow.open(map,marker);
               	scrollToDealer();
        	}
     	})(marker,index));

        markers.push(marker);
        bounds.extend(myLatLng);
	    
	    map.setCenter(bounds.getCenter());
		//map.fitBounds(bounds);
		map.setZoom(14);

		locate(0);
	}

	resizeMap = function(){
		var contenedor = $(window).height();
		var total = contenedor-89;
		$('.distribuidoras div div.col1 .mapa').height(total)
	}

	clearMap = function(){
		dealersLocations = [];

		$('.distribuidoras div div.col2 ul').empty();

		var html = '<li class="result"><h5>Sin resultados.</h5><p>Lo sentimos, la búsqueda realizada no ha producido ningún resultado. Intenta nuevamente usando otra dirección.</p></li>';
		$( html ).prependTo( $('.distribuidoras div div.col2 ul') );
		
		closeMarkers();

		for (var i=0; i<markers.length; i++) {
	        markers[i].setMap(null);
	    }

	    markers = [];
	}

	clearMapMobile = function(){
		
		closeMarkers();

		for (var i=0; i<markers.length; i++) {
	        markers[i].setMap(null);
	    }

	    markers = [];
	}

	scrollToDealer = function(){
		$('.col2').animate({
	        scrollTop: $('.distribuidoras div div.col2 ul li.activo').offset().top - $('.col2').offset().top + $('.col2').scrollTop() - 20
	    });
	}

	locate = function(index) {
		closeMarkers();
		var myMarker = markers[index];
		var markerPosition = myMarker.getPosition();
		map.setCenter(markerPosition);
		myMarker.infowindow.open(map,myMarker);
	}


	closeMarkers = function(){
		for (var i=0;i<markers.length;i++) {
			markers[i].infowindow.close();
		}
	}

	showPanel =  function(index){
		resizeMap();
		$('.mapa').show();
		$('.regresar').css('display','block');
		google.maps.event.trigger(map, 'resize');
		setMarker(dealersLocations,((dealersLocations.length)-1)-index);
	}

	$('.regresar').on('click',function(e){
		e.preventDefault();
		$('.mapa').hide();
		$('.regresar').css('display','none');
		clearMapMobile();
	});


	$('.distribuidoras .cerrar').on('click',function(e){
		e.preventDefault();
		$('.distribuidoras').fadeOut('normal',function(){
			$('body,html').toggleClass('hidden');
			setSize();
			google.maps.event.clearListeners(map, 'places_changed');
			google.maps.event.clearListeners(map, 'bounds_changed');
		});
	});

	$( "#search_dealer" ).submit(function( event ) {
  		event.preventDefault();
	});

	$(document).on('click','.distribuidoras ul li h5, .distribuidoras ul li img, .distribuidoras ul li p', function(event) {
		event.preventDefault();

		if(! /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$('.distribuidoras ul li').removeClass('activo');
			$(this).parent().addClass('activo');
			closeMarkers();
			var real = ($('.distribuidoras ul li').length)-1;
			locate((real)-$(this).parent().index());
			scrollToDealer();
		}else{
			showPanel($(this).parent().index());
		}

	});

	$('.distribuidoras div div.col1 form input#q').attr('placeholder',ph_field);
	$('.distribuidoras div div.col2 ul li.result').html(ph_box);

	setSize();
	
	if(! /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		distribuidores_map();
	}
	
	$('form#search_dealer input#q').focus();

}

$(document).on('ready',initMap)
