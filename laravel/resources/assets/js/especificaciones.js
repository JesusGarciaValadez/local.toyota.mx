$( function() {
  $( '.jsn-select' ).on( 'change', function( event ) {
    var model   = $( this ).val();

    window.location.href = model;
  } );
} );