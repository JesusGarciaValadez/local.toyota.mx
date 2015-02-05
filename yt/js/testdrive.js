// Prueba de manejo
var url = 'https://lunave.com.mx/drivetoyota/';
var inputField, address, lat, lng, json;

initTestDrive = function(){

	inputField = document.getElementById('dealer_search');
	address = new google.maps.places.Autocomplete((inputField),{ types: ['geocode'] });

	google.maps.event.addListener(address, 'place_changed', function() {
		select_dealer();
	});

	select_dealer = function() {
	  var place = address.getPlace();
	  
	  if (place.length == 0) {
	  	return false;
	  }else{
	  	lat = place.geometry.location.lat();
	  	lng = place.geometry.location.lng();
	  	search_dealer_by_location(lat,lng);
	  }

	}

	search_dealer_by_location = function(lat,lng){
		
		var request = $.ajax({
		  url: url+'dealers/search_dealers',
		  type: 'POST',
		  data: { lat : lat, lng: lng },
		  "text json": jQuery.parseJSON,
		  dataType: 'json'
		});
		 
		request.done(function( json_response ) {

			if(json_response.dealers){
				
				$.each( json_response.dealers, function( index, value ){

					var html = '<option value="'+index+'">'+json_response.dealers[index].nombre+'</option>';
				  
					$('div#dealer select').append( html );

				});

				json =  json_response;

				$('div#dealer').fadeIn();

			}else{
				alert('No se encontraron resultados');
			}

		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Ocurrió el siguiente error: " + textStatus );
		});

	}

	sendData = function(){

		var i = $('div#dealer select option:selected').val();

		var n = $('form input#nombre').val();
		var m = $('form input#correo').val();
		var p = $('form input#telefono').val();
		var e = json.dealers[i].estado;
		var d = json.dealers[i].id;

		// console.log(n+'|'+m+'|'+p+'|'+e+'|'+d);

		if(n && m && p && e && d){

			var request = $.ajax({
			  	type: 'POST',
			  	url: url+"/casos/save_caso/",
			 	data: { nombre: n, mail: m, phone: p, edo:e, auto:"BrandChannel", dealer:d},
				"text json": jQuery.parseJSON,
		  		dataType: 'json'
			});

			request.done(function( json_rsp ) {
			    if(json_rsp.response=="ok"){
			    	$('div.contPrueba').fadeOut('normal',function(){
			    		$(this).remove();
			    	});
			    	$('div.textPrueba').fadeOut('normal',function(){
			    		$('div.textPrueba p').text('Tus datos fueron enviados correctamente. Unos de nuestros asesores se pondrá en contacto contigo.');
			    		$('div.textPrueba').fadeIn();
			    	});
			    }else{
			    	alert(json_rsp.response);
			    }
			});

		}else{
			alert('Todos los campos son obligatorios.');
		}

	}

	$( "#testDrive" ).submit(function( event ) {
  		event.preventDefault();
	});

	$('div#dealer select').change(function() {
		var select = $('div#dealer select option:selected');
		$('div#dealer .box').text(select.text());
		if(select.index()>0){
			$('#enviar').fadeIn();
		}else{
			$('#enviar').fadeOut();
		}
	});
	
	$('#enviar').on('click',function(event){
		event.preventDefault();
		sendData();
	});

}

$(document).on('ready',initTestDrive)