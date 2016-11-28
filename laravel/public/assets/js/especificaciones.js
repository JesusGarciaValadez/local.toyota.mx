$( document ).ready(function() {
  var url   = 'http://' + document.location.hostname + '/';

  $( '.jsn-select' ).on( 'change', function( event ) {
    var model = $( event.currentTarget ).val();
    var _url  = url + 'especificaciones/' + model;

    window.location.href = _url;

    return false;
  } );

  //trigger para probar los textos de especificaciones
  $( '.highlights .framesHigh ul li' )
  var calculateHeight;

  function calculateHeight( ) {
    var altoVent = $(window).innerHeight() -150
    var anchoVent = $(window).innerWidth()
    window.altoCont = $('.highlights .framesHigh ul li').height()
    var pos = $('.highlights .menuHigh .activo').index()
    //window.altoText = $('.highlights .framesHigh ul li > div:first-child').eq(pos).height()
    window.altoText = $('.highlights .framesHigh ul li > div:first-child').eq(pos).height()-60
    window.altoimg = altoVent - altoText
    window.anchoimg = altoVent - altoText
    //margen de la altura
    if(anchoVent >= 1271){
      $('.highSeg').css('margin-top', altoText+40)
      $('.highSeg:eq(0)').css('margin-top', altoText-15)
      window.anchoRadio = 1920/1080 * altoimg
      window.altoRadio = 1080/1920 * anchoimg
      $('.highSeg').width(844)
      $('.highSeg').height(475)
      $('.highSeg:eq(0)').width(1035)
      $('.highSeg:eq(0)').height(582)
      //console.log('mas de 1101')
    }
    else if(anchoVent <= 767) {
      var otroAncho = anchoVent - 40
      window.altoRadio = 1080/1920 * otroAncho
      $('.highSeg').css('margin-top', '-20px')
      //$('.highSeg').css('margin-top', '0px')
      //$('.highSeg').width(Math.round(otroAncho))
      //$('.highSeg').height(Math.round(altoRadio))
      $('.highSeg').width(otroAncho)
      $('.highSeg').height(altoRadio)
      //console.log('menos de 767')
    }
    else if((anchoVent >= 768) || (anchoVent <= 1270)){
      window.anchoRadio = 1920/1080 * altoimg
      window.altoRadio = 1080/1920 * anchoimg
      $('.highSeg').css('margin-top', altoText+40)
      //$('.highSeg').width(Math.round(anchoRadio))
      //$('.highSeg').height(Math.round(altoimg))
      $('.highSeg').width(anchoRadio)
      $('.highSeg').height(altoimg)

      //primer cosa
      window.anchoRadioI = 1920/840 * altoimg
      window.altoRadioI = 840/1920 * anchoimg
      $('.highSeg:eq(0)').css('margin-top', altoText-15)
      $('.highSeg:eq(0)').width(anchoRadioI)
      $('.highSeg:eq(0)').height(altoimg)
      //console.log('entre 768 y 1100')
    }
  }

  //- btns highlight seguridad
  // $('.highSeg .seguridad1').on('click',function(){
  //  $('.highSeg .imgSeguridad').toggleClass('red');
  // });
  //- btns highlight Exterior
  $('.highSeg .exterior1').on('mouseenter',function(){
    $('.highSeg .imgExterior').toggleClass('rin');
  });
  $('.highSeg .exterior1').on('mouseleave',function(){
    $('.highSeg .imgExterior').toggleClass('rin');
  });
  $('.highSeg .exterior2').on('mouseenter',function(){
    $('.highSeg .imgExterior').toggleClass('parrilla');
  });
  $('.highSeg .exterior2').on('mouseleave',function(){
    $('.highSeg .imgExterior').toggleClass('parrilla');
  });
  $('.highSeg .exterior3').on('mouseenter',function(){
    $('.highSeg .imgExterior').toggleClass('faros');
  });
  $('.highSeg .exterior3').on('mouseleave',function(){
    $('.highSeg .imgExterior').toggleClass('faros');
  });
  //- btns highlight Interior
  $('.highSeg .interior1').on('click',function(){
    $('.highlights .framesHigh li:eq(2)').toggleClass('encendido');
  });
  /*$('.highSeg .interior1').on('click',function(){
    $('.highSeg .imgInterior').toggleClass('encendido');
  });*/
  //- btns highlight Confort
  $('.highSeg .confort1').on('click',function(){
    $('.highSeg .imgConfort').toggleClass('cajuela');
  });
  $('.highSeg .confort2').on('click',function(){
    $('.highSeg .imgConfort').toggleClass('puerta1');
  });
  $('.highSeg .confort3').on('click',function(){
    $('.highSeg .imgConfort').toggleClass('puerta2');
  });

  calculateHeight();
  $(window).resize(function(){calculateHeight();})
  $(window).on('scroll',calculateHeight);

  // $(window).load(function(){
  //   $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.54});
  // });
} );