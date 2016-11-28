$( function() {
  $( '.jsn-select' ).on( 'change', function( event ) {
    var model = $( event.currentTarget ).val();
    var url   = location.hostname;

    window.location.href = url + '/especificaciones/' + model;
  } );
} );