;(function($){

  var distribuidoresMap, dealers, stateDealers, marker, infoWindow,
  //baseUrl = 'http://backend.corollaexperience.com';
  baseUrl = '';

  var $form             = $('#distribuidores-search-form');
  var $selectEstado     = $('#distribuidores-select-estado');
  var $selectDealer     = $('#distribuidores-select-distribuidor');
  var $inputCp          = $('#distribuidores-input-codigo-postal');
  var $searchBtn        = $('#distribuidores-search-btn');
  var $allInputs        = $('#distribuidores-select-estado, #distribuidores-select-distribuidor, #distribuidores-input-codigo-postal');
  var $resultsContainer = $('#distribuidores-cp-search-results');
  var $mainContainer    = $('#cp-results-container');

  google.maps.visualRefresh = true;

  var distribuidoresMap = new google.maps.Map($('#map-container')[0], {
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROAD,
    center: new google.maps.LatLng(19.407673733993203, -99.17590543627739),
    scrollwheel: false,
    streetViewControl: false,
    mapTypeControl: false,
    draggable: true,
    panControl: false,
    scaleControl: false,
    keyboardShortcuts: false,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.RIGHT_CENTER
    },
    disableDoubleClickZoom: true
  });

  $.ajax({ url: baseUrl + '/dealers' , type: 'GET', dataType: 'JSON'}).
  //$.ajax({ url: baseUrl + '/dealers/getAllDealers' , type: 'GET', dataType: 'JSONP'}).
  done(function(dealersJson){
    $allInputs.removeAttr('disabled');
    dealers = dealersJson;
  });

  $selectEstado.on('change', function(){
    var val = $(this).val();
    if ( val == '' ) return;

    stateDealers = $.grep(dealers, function(dealer){
      return dealer.estado == val;
    });

    setDealers(stateDealers);
    $mainContainer.slideUp();
  });

  $selectDealer.on('change', function(e){
    var val = $(this).val();
    if ( val == '' ) return;

    var dealer = $.grep( dealers, function(dealer) {
      return dealer.id == val;
    });

    if ( dealer.length != 1 ) return;
    setMarker(dealer[0]);
  });

  $searchBtn.on('click', function(e){
    e.preventDefault();
    if ( !$form.valid() ) { return false; }
    $(this).button('loading');

    getCpData(sprintf("%05d", $inputCp.val()));

  });

  $form.on('submit', function(e){
    e.preventDefault();
    return false;
  });


  $('body').on('click', '.resultado-busqueda-cp', function(e){
    e.preventDefault();
    setMarker($(this).data('dealer'));
  });


  var setDealers = function(dealers) {
    $selectDealer.empty();
    $selectDealer.append('<option>Selecciona un Distribuidor</option>');
    $(dealers).each( function(i, dealer) {
      $selectDealer.append(
        $('<option>', {value: dealer.id}).text(dealer.nombre)
      );
    });
  };

  var setMarker = function(dealer) {
    if ( marker != undefined ) {
      marker.setMap(null);
    }

    var location = new google.maps.LatLng( dealer.latitud, dealer.longitud );
    marker = new google.maps.Marker({
      map: distribuidoresMap,
      position: location,
      icon: '/css/img/gmap-marker.png',
      title: dealer.nombre,
      clickable: true,
      animation: google.maps.Animation.DROP
    });
    distribuidoresMap.setCenter(location);
    if ( $(window).width() > 767 ) {
      distribuidoresMap.panBy( -200 , 0 );
    } else {
      distribuidoresMap.panBy( 0 , -250 );
    }


    infoWindow = new google.maps.InfoWindow({
      content: '<div class="distribuidor-info-window">'+ dealer.nombre + '<br/>' + dealer.direccion + '<br/>'+ dealer.codigo_postal + '<br/>Tel. ' + dealer.telefono + '<br/>' + '<a target="_blank" href="'+dealer.website+'">'+dealer.website+'</a></div>'
    });

    google.maps.event.addListener(marker, 'click', function(e){
      infoWindow.open(distribuidoresMap, this);
    });
  };

  var getCpData = function(cp) {
    var theCp = cp;
    $.ajax({ url: baseUrl + '/dealers/searchByCp/index.php?cp='+theCp , type: 'GET', dataType: 'JSON'})
    .done(function(matches){
      $mainContainer.slideUp();
      $resultsContainer.empty();
      if ( matches.length > 0 ) {
        $(matches).each(function(i, dealer){
          var a = $('<a>', {href:'#', 'class':'resultado-busqueda-cp'}).text(dealer.nombre).data('dealer', dealer);
          $resultsContainer.append(a);
        });
        $mainContainer.slideDown();
      } else {
        alert('no encontramos resultados');
      }
    }).always(function(){
       $searchBtn.button('reset');
    });
  };

  // var getCpData = function(cp) {
  //   var theCp = cp;
  //   $.ajax({
  //     url:'//api.geonames.org/findNearbyPostalCodesJSON',
  //     data:{
  //         postalcode: theCp,
  //         country:'MX',
  //         radius: 30,
  //         username:'diego.carrera',
  //         maxRows: 500,
  //         style: 'short'
  //     }
  //   })
  //   .done(function(results) {
  //     $searchBtn.button('reset');
  //     $mainContainer.slideUp();
  //     $resultsContainer.empty();

  //     var matches = [];
  //     if ( results.postalCodes == undefined || results.postalCodes.length == 0 ) {
  //       for ( var j = 0; j < dealers.length ; j++ ) {
  //         var _dealer = dealers[j];
  //         if ( _dealer.codigo_postal == theCp ) {
  //           matches.push(_dealer.id);
  //         }
  //       }
  //     } else {
  //       for ( var i = 0; i < results.postalCodes.length; i++ ) {
  //         var _cp = results.postalCodes[i].postalCode;
  //         for ( var j = 0 ; j < dealers.length ; j++ ) {
  //           var _dealer = dealers[j];
  //           if ( _dealer.codigo_postal == _cp && $.inArray(_dealer.id, matches) < 0 ) {
  //             matches.push(_dealer.id);
  //             break;
  //           }
  //         }
  //       }
  //       matches = $.unique(matches);
  //     }
  //     if ( matches.length > 0 ) {
  //       $(matches).each(function(i, id){
  //         var dealer = $.grep(dealers, function( _dealer){
  //           return _dealer.id == id;
  //         });
  //         dealer = dealer[0];
  //         var a = $('<a>', {href:'#', 'class':'resultado-busqueda-cp'}).text(dealer.nombre).data('dealer', dealer);
  //         $resultsContainer.append(a);
  //       });
  //       $mainContainer.slideDown();
  //     } else {
  //       alert('no encontramos resultados');
  //     }
  //   });
  // };




})(jQuery);



