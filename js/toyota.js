jQuery.support.cors = true;
var triggerScroll = true;
var sliderOptions = {
    circular: false,
    infinite: false,
    width: "100%",
    height: "100%",
    items: {
      visible: 1,
      width: "100%",
      height: "100%"
    },
    scroll: { easing: "swing", pauseOnHover: true, onAfter:function(data){
      data.items.old.removeClass('current');
      data['items']['new'].addClass('current');
    }},
    auto: false
};
var dealers = {};
$(document).on('click', 'a[href*="#"]', function(){
  if ( $(this).is('.horizontal-scroll, .pager-item, .social-link') ) { return false; }
  if ( this.hash ) {
    triggerScroll = true;
    $.bbq.pushState( '#/' + this.hash.slice(1) );
    return false;
  }
});

var datosCliente = {nombre: null, apellidos:null, email:null, telefono:null};
var threesixty = null;
var financiamientoStep = 1;

var manifest = [
'/imgs/exterior/rojo/1.png',
'/imgs/exterior/rojo/2.png',
'/imgs/exterior/rojo/3.png',
'/imgs/exterior/rojo/4.png',
'/imgs/exterior/rojo/5.png',
'/imgs/exterior/rojo/6.png',
'/imgs/exterior/rojo/7.png',
'/imgs/exterior/rojo/8.png',
'/imgs/exterior/rojo/9.png',
'/imgs/exterior/rojo/10.png',
'/imgs/exterior/rojo/11.png',
'/imgs/exterior/rojo/12.png',
'/imgs/exterior/rojo/13.png',
'/imgs/exterior/rojo/14.png',
'/imgs/exterior/rojo/15.png',
'/imgs/exterior/rojo/16.png',
'/imgs/exterior/rojo/17.png',
'/imgs/exterior/rojo/18.png',
'/imgs/exterior/rojo/19.png',
'/imgs/exterior/rojo/20.png',
'/imgs/exterior/rojo/21.png',
'/imgs/exterior/rojo/22.png',
'/imgs/exterior/rojo/23.png',
'/imgs/exterior/rojo/24.png',
'/imgs/exterior/rojo/25.png',
'/imgs/exterior/rojo/26.png',
'/imgs/exterior/rojo/27.png',
'/imgs/exterior/rojo/28.png',
'/imgs/exterior/rojo/29.png',
'/imgs/exterior/rojo/30.png',
'/imgs/exterior/rojo/31.png',
'/imgs/exterior/rojo/32.png',
'/imgs/exterior/rojo/33.png',
'/imgs/exterior/rojo/34.png',
'/imgs/exterior/rojo/35.png',
'/imgs/exterior/rojo/36.png',
'/imgs/exterior/plata/1.png',
'/imgs/exterior/plata/2.png',
'/imgs/exterior/plata/3.png',
'/imgs/exterior/plata/4.png',
'/imgs/exterior/plata/5.png',
'/imgs/exterior/plata/6.png',
'/imgs/exterior/plata/7.png',
'/imgs/exterior/plata/8.png',
'/imgs/exterior/plata/9.png',
'/imgs/exterior/plata/10.png',
'/imgs/exterior/plata/11.png',
'/imgs/exterior/plata/12.png',
'/imgs/exterior/plata/13.png',
'/imgs/exterior/plata/14.png',
'/imgs/exterior/plata/15.png',
'/imgs/exterior/plata/16.png',
'/imgs/exterior/plata/17.png',
'/imgs/exterior/plata/18.png',
'/imgs/exterior/plata/19.png',
'/imgs/exterior/plata/20.png',
'/imgs/exterior/plata/21.png',
'/imgs/exterior/plata/22.png',
'/imgs/exterior/plata/23.png',
'/imgs/exterior/plata/24.png',
'/imgs/exterior/plata/25.png',
'/imgs/exterior/plata/26.png',
'/imgs/exterior/plata/27.png',
'/imgs/exterior/plata/28.png',
'/imgs/exterior/plata/29.png',
'/imgs/exterior/plata/30.png',
'/imgs/exterior/plata/31.png',
'/imgs/exterior/plata/32.png',
'/imgs/exterior/plata/33.png',
'/imgs/exterior/plata/34.png',
'/imgs/exterior/plata/35.png',
'/imgs/exterior/plata/36.png',
'/imgs/exterior/azulosc/1.png',
'/imgs/exterior/azulosc/2.png',
'/imgs/exterior/azulosc/3.png',
'/imgs/exterior/azulosc/4.png',
'/imgs/exterior/azulosc/5.png',
'/imgs/exterior/azulosc/6.png',
'/imgs/exterior/azulosc/7.png',
'/imgs/exterior/azulosc/8.png',
'/imgs/exterior/azulosc/9.png',
'/imgs/exterior/azulosc/10.png',
'/imgs/exterior/azulosc/11.png',
'/imgs/exterior/azulosc/12.png',
'/imgs/exterior/azulosc/13.png',
'/imgs/exterior/azulosc/14.png',
'/imgs/exterior/azulosc/15.png',
'/imgs/exterior/azulosc/16.png',
'/imgs/exterior/azulosc/17.png',
'/imgs/exterior/azulosc/18.png',
'/imgs/exterior/azulosc/19.png',
'/imgs/exterior/azulosc/20.png',
'/imgs/exterior/azulosc/21.png',
'/imgs/exterior/azulosc/22.png',
'/imgs/exterior/azulosc/23.png',
'/imgs/exterior/azulosc/24.png',
'/imgs/exterior/azulosc/25.png',
'/imgs/exterior/azulosc/26.png',
'/imgs/exterior/azulosc/27.png',
'/imgs/exterior/azulosc/28.png',
'/imgs/exterior/azulosc/29.png',
'/imgs/exterior/azulosc/30.png',
'/imgs/exterior/azulosc/31.png',
'/imgs/exterior/azulosc/32.png',
'/imgs/exterior/azulosc/33.png',
'/imgs/exterior/azulosc/34.png',
'/imgs/exterior/azulosc/35.png',
'/imgs/exterior/azulosc/36.png',
'/imgs/exterior/jade/1.png',
'/imgs/exterior/jade/2.png',
'/imgs/exterior/jade/3.png',
'/imgs/exterior/jade/4.png',
'/imgs/exterior/jade/5.png',
'/imgs/exterior/jade/6.png',
'/imgs/exterior/jade/7.png',
'/imgs/exterior/jade/8.png',
'/imgs/exterior/jade/9.png',
'/imgs/exterior/jade/10.png',
'/imgs/exterior/jade/11.png',
'/imgs/exterior/jade/12.png',
'/imgs/exterior/jade/13.png',
'/imgs/exterior/jade/14.png',
'/imgs/exterior/jade/15.png',
'/imgs/exterior/jade/16.png',
'/imgs/exterior/jade/17.png',
'/imgs/exterior/jade/18.png',
'/imgs/exterior/jade/19.png',
'/imgs/exterior/jade/20.png',
'/imgs/exterior/jade/21.png',
'/imgs/exterior/jade/22.png',
'/imgs/exterior/jade/23.png',
'/imgs/exterior/jade/24.png',
'/imgs/exterior/jade/25.png',
'/imgs/exterior/jade/26.png',
'/imgs/exterior/jade/27.png',
'/imgs/exterior/jade/28.png',
'/imgs/exterior/jade/29.png',
'/imgs/exterior/jade/30.png',
'/imgs/exterior/jade/31.png',
'/imgs/exterior/jade/32.png',
'/imgs/exterior/jade/33.png',
'/imgs/exterior/jade/34.png',
'/imgs/exterior/jade/35.png',
'/imgs/exterior/jade/36.png',
'/imgs/exterior/gris/1.png',
'/imgs/exterior/gris/2.png',
'/imgs/exterior/gris/3.png',
'/imgs/exterior/gris/4.png',
'/imgs/exterior/gris/5.png',
'/imgs/exterior/gris/6.png',
'/imgs/exterior/gris/7.png',
'/imgs/exterior/gris/8.png',
'/imgs/exterior/gris/9.png',
'/imgs/exterior/gris/10.png',
'/imgs/exterior/gris/11.png',
'/imgs/exterior/gris/12.png',
'/imgs/exterior/gris/13.png',
'/imgs/exterior/gris/14.png',
'/imgs/exterior/gris/15.png',
'/imgs/exterior/gris/16.png',
'/imgs/exterior/gris/17.png',
'/imgs/exterior/gris/18.png',
'/imgs/exterior/gris/19.png',
'/imgs/exterior/gris/20.png',
'/imgs/exterior/gris/21.png',
'/imgs/exterior/gris/22.png',
'/imgs/exterior/gris/23.png',
'/imgs/exterior/gris/24.png',
'/imgs/exterior/gris/25.png',
'/imgs/exterior/gris/26.png',
'/imgs/exterior/gris/27.png',
'/imgs/exterior/gris/28.png',
'/imgs/exterior/gris/29.png',
'/imgs/exterior/gris/30.png',
'/imgs/exterior/gris/31.png',
'/imgs/exterior/gris/32.png',
'/imgs/exterior/gris/33.png',
'/imgs/exterior/gris/34.png',
'/imgs/exterior/gris/35.png',
'/imgs/exterior/gris/36.png',
'/imgs/exterior/blanco/1.png',
'/imgs/exterior/blanco/2.png',
'/imgs/exterior/blanco/3.png',
'/imgs/exterior/blanco/4.png',
'/imgs/exterior/blanco/5.png',
'/imgs/exterior/blanco/6.png',
'/imgs/exterior/blanco/7.png',
'/imgs/exterior/blanco/8.png',
'/imgs/exterior/blanco/9.png',
'/imgs/exterior/blanco/10.png',
'/imgs/exterior/blanco/11.png',
'/imgs/exterior/blanco/12.png',
'/imgs/exterior/blanco/13.png',
'/imgs/exterior/blanco/14.png',
'/imgs/exterior/blanco/15.png',
'/imgs/exterior/blanco/16.png',
'/imgs/exterior/blanco/17.png',
'/imgs/exterior/blanco/18.png',
'/imgs/exterior/blanco/19.png',
'/imgs/exterior/blanco/20.png',
'/imgs/exterior/blanco/21.png',
'/imgs/exterior/blanco/22.png',
'/imgs/exterior/blanco/23.png',
'/imgs/exterior/blanco/24.png',
'/imgs/exterior/blanco/25.png',
'/imgs/exterior/blanco/26.png',
'/imgs/exterior/blanco/27.png',
'/imgs/exterior/blanco/28.png',
'/imgs/exterior/blanco/29.png',
'/imgs/exterior/blanco/30.png',
'/imgs/exterior/blanco/31.png',
'/imgs/exterior/blanco/32.png',
'/imgs/exterior/blanco/33.png',
'/imgs/exterior/blanco/34.png',
'/imgs/exterior/blanco/35.png',
'/imgs/exterior/blanco/36.png',
'/imgs/exterior/azul/1.png',
'/imgs/exterior/azul/2.png',
'/imgs/exterior/azul/3.png',
'/imgs/exterior/azul/4.png',
'/imgs/exterior/azul/5.png',
'/imgs/exterior/azul/6.png',
'/imgs/exterior/azul/7.png',
'/imgs/exterior/azul/8.png',
'/imgs/exterior/azul/9.png',
'/imgs/exterior/azul/10.png',
'/imgs/exterior/azul/11.png',
'/imgs/exterior/azul/12.png',
'/imgs/exterior/azul/13.png',
'/imgs/exterior/azul/14.png',
'/imgs/exterior/azul/15.png',
'/imgs/exterior/azul/16.png',
'/imgs/exterior/azul/17.png',
'/imgs/exterior/azul/18.png',
'/imgs/exterior/azul/19.png',
'/imgs/exterior/azul/20.png',
'/imgs/exterior/azul/21.png',
'/imgs/exterior/azul/22.png',
'/imgs/exterior/azul/23.png',
'/imgs/exterior/azul/24.png',
'/imgs/exterior/azul/25.png',
'/imgs/exterior/azul/26.png',
'/imgs/exterior/azul/27.png',
'/imgs/exterior/azul/28.png',
'/imgs/exterior/azul/29.png',
'/imgs/exterior/azul/30.png',
'/imgs/exterior/azul/31.png',
'/imgs/exterior/azul/32.png',
'/imgs/exterior/azul/33.png',
'/imgs/exterior/azul/34.png',
'/imgs/exterior/azul/35.png',
'/imgs/exterior/azul/36.png',
'/imgs/exterior/negro/1.png',
'/imgs/exterior/negro/2.png',
'/imgs/exterior/negro/3.png',
'/imgs/exterior/negro/4.png',
'/imgs/exterior/negro/5.png',
'/imgs/exterior/negro/6.png',
'/imgs/exterior/negro/7.png',
'/imgs/exterior/negro/8.png',
'/imgs/exterior/negro/9.png',
'/imgs/exterior/negro/10.png',
'/imgs/exterior/negro/11.png',
'/imgs/exterior/negro/12.png',
'/imgs/exterior/negro/13.png',
'/imgs/exterior/negro/14.png',
'/imgs/exterior/negro/15.png',
'/imgs/exterior/negro/16.png',
'/imgs/exterior/negro/17.png',
'/imgs/exterior/negro/18.png',
'/imgs/exterior/negro/19.png',
'/imgs/exterior/negro/20.png',
'/imgs/exterior/negro/21.png',
'/imgs/exterior/negro/22.png',
'/imgs/exterior/negro/23.png',
'/imgs/exterior/negro/24.png',
'/imgs/exterior/negro/25.png',
'/imgs/exterior/negro/26.png',
'/imgs/exterior/negro/27.png',
'/imgs/exterior/negro/28.png',
'/imgs/exterior/negro/29.png',
'/imgs/exterior/negro/30.png',
'/imgs/exterior/negro/31.png',
'/imgs/exterior/negro/32.png',
'/imgs/exterior/negro/33.png',
'/imgs/exterior/negro/34.png',
'/imgs/exterior/negro/35.png',
'/imgs/exterior/negro/36.png',
'/imgs/exterior/arena/1.png',
'/imgs/exterior/arena/2.png',
'/imgs/exterior/arena/3.png',
'/imgs/exterior/arena/4.png',
'/imgs/exterior/arena/5.png',
'/imgs/exterior/arena/6.png',
'/imgs/exterior/arena/7.png',
'/imgs/exterior/arena/8.png',
'/imgs/exterior/arena/9.png',
'/imgs/exterior/arena/10.png',
'/imgs/exterior/arena/11.png',
'/imgs/exterior/arena/12.png',
'/imgs/exterior/arena/13.png',
'/imgs/exterior/arena/14.png',
'/imgs/exterior/arena/15.png',
'/imgs/exterior/arena/16.png',
'/imgs/exterior/arena/17.png',
'/imgs/exterior/arena/18.png',
'/imgs/exterior/arena/19.png',
'/imgs/exterior/arena/20.png',
'/imgs/exterior/arena/21.png',
'/imgs/exterior/arena/22.png',
'/imgs/exterior/arena/23.png',
'/imgs/exterior/arena/24.png',
'/imgs/exterior/arena/25.png',
'/imgs/exterior/arena/26.png',
'/imgs/exterior/arena/27.png',
'/imgs/exterior/arena/28.png',
'/imgs/exterior/arena/29.png',
'/imgs/exterior/arena/30.png',
'/imgs/exterior/arena/31.png',
'/imgs/exterior/arena/32.png',
'/imgs/exterior/arena/33.png',
'/imgs/exterior/arena/34.png',
'/imgs/exterior/arena/35.png',
'/imgs/exterior/arena/36.png'
];

$(document).on('click', '.social-twitter', function(e) {
  e.preventDefault();
  var url  = urlencode(location.toString());
  var text = urlencode('Cuando manejas una Highlander, el mundo se vuelve más divertido y seguro. Descubre #TuNuevaActitudHighlander.');
  window.open('https://twitter.com/intent/tweet?text='+text+'&url='+url, 'intent', 'scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=260,top=0,left=0');
});

$(document).on('click', '.social-facebook', function(e){
  e.preventDefault();
  var query = http_build_query({s: 100, p:{ url: location.toString(), title: 'Toyota Highlander', summary: 'Cuando manejas una Highlander, el mundo se vuelve más divertido y seguro. Atrévete a descubrir Tu Nueva Actitud Highlander.', images: ['http://toyota.lunave.com.mx/imgs/modelo-base.png']}});
  window.open('https://www.facebook.com/sharer/sharer.php?'+query, 'share', 'width=626,height=436');
});

$(document).on('keydown', function(e) {
  if ( e.target.nodeName != 'BODY' ) return;
  var current  = location.hash.replace(/^#\/?/,'');
  if ( current == "" ) return ;
  var $current = $('section#'+current);
  if ( $current.length == 0 ) return;

  if ( e.keyCode == 38 ) { //up
    var prev = $current.prev();
    if ( prev.length )
      $(document).scrollTo(prev, '500');
  }
  if ( e.keyCode == 40 || e.keyCode == 32 ) { //down
    var next = $current.next();
    if ( next.length )
      $(document).scrollTo(next, '500');
  }
});

$(function(){
  var scroll = $('#scrollbar').tinyscrollbar();
  /*$('.modelo-terminos a').on('click', function(e){
    e.preventDefault();
    $('#popup-terminos').fadeIn(function(){
      scroll.tinyscrollbar_update();
    });
  });*/

  $('#financiamiento-email').on('click', function(e){
    e.preventDefault();
    $('#popup-enviar-correo').find('p.text-error, p.text-success').remove();
    $('#popup-enviar-correo').fadeIn();
  });

  $('#form-enviar-cotizacion a').on('click', function(e){
    e.preventDefault();
    if ( $(this).hasClass('disabled') ) { return; }
    $(this).addClass('disabled');
    $(this).parents('#form-enviar-cotizacion').trigger('submit');
  });

  $('#form-enviar-cotizacion').on('submit', function(e){
    e.preventDefault();
    var sp = new Spinner({color:'#000'}).spin($('#financiamiento')[0])
    $('#popup-enviar-correo').find('p.text-error, p.text-success').fadeOut('fast', function(){
      $(this).remove();
    });

    $.post('/email.php', $(this).serialize(), 'json')
    .done(function(result){
      if ( result.error != undefined && result.error == true ) {
        $('#popup-enviar-correo').find('.content').append(
          '<p class="text-center text-error"><strong>'+result.msg+'</strong></p>'
        );
        return false;
      } else {
        $('#popup-enviar-correo').find('.content').append(
          '<p class="text-center text-success"><strong>Tu correo va en camino!</strong></p>'
        );
      }

    })
    .always(function(){
      sp.stop();
      $('#form-enviar-cotizacion a').removeClass('disabled');
    });
    return false;
  });

  $('.close-popup').on('click', function(e){
    e.preventDefault();
    $(this).parents('.preventa-popup').fadeOut(function(){
      $(this).find('.popup-body').empty();
    });
  });

  //cerrar con click en mobile
  $('#main-navbar a').on('click', function(){
    if ( $('#main-navbar .nav-collapse').hasClass('in') ){
      $(".btn-navbar").trigger('click');
    }
  });

  // $('#carrusel-home').carouFredSel({
  //   circular: true,
  //   infinite: true,
  //   width: "100%",
  //   height: "100%",
  //   items: {
  //     visible: 1,
  //     width: "100%",
  //     height: "100%"
  //   },
  //   scroll: { easing: "swing", pauseOnHover: true, onAfter:function(data){
  //     data.items.old.removeClass('current');
  //     data['items']['new'].addClass('current');
  //   }},
  //   auto: {
  //     play: true,
  //     timeoutDuration: 10000
  //   },
  //   pagination: { container: '#slide-pager-home'}
  // });

  var sliderExteriorOptions = $.extend(true, sliderOptions, {prev: "#slide-exterior-prev", next: "#slide-exterior-next", pagination: { container: "#slide-pager-exterior", anchorBuilder: false}});
  $("#carrusel-exterior").carouFredSel(sliderExteriorOptions);
  var sliderInteriorOptions = $.extend(true, sliderOptions, {prev: "#slide-interior-prev", next: "#slide-interior-next", pagination: { container: "#slide-pager-interior", anchorBuilder: false}});
  $("#carrusel-interior").carouFredSel(sliderInteriorOptions);
  var sliderRendimientoOptions = $.extend(true, sliderOptions, {prev: "#slide-rendimiento-prev", next: "#slide-rendimiento-next", pagination: { container: "#slide-pager-rendimiento", anchorBuilder: false}});
  $("#carrusel-rendimiento").carouFredSel(sliderInteriorOptions);
  var sliderSeguridadOptions = $.extend(true, sliderOptions, {prev: "#slide-seguridad-prev", next: "#slide-seguridad-next", pagination: { container: "#slide-pager-seguridad", anchorBuilder: false}});
  $("#carrusel-seguridad").carouFredSel(sliderInteriorOptions);

  threesixty = $('#threesixty-exterior').ThreeSixty({
    totalFrames: 36, // Total no. of image you have for 360 slider
    endFrame: 36, // end frame for the auto spin animation
    currentFrame: 1, // This the start frame for auto spin
    imgList: '.threesixty_images', // selector for image list
    progress: '.spinner', // selector to show the loading progress
    imagePath:'imgs/exterior/arena/', // path of the image assets
    filePrefix: '', // file prefix if any
    ext: '.png', // extention for the assets
    width: 940,
    height: 480,
    navigation: false,
    responsive: true
  });

  $('.cycle').cyclotron({autorotation:1, continuous: 0});

  $('#switch-panorama').on('click', function(e){
    e.preventDefault();
    $('.cycle.current').fadeOut(function(){
      $(this).removeClass('current');
    });
    $('.cycle:not(.current)').fadeIn(function(){
      $(this).addClass('current');
    });
  });


  $('#main-navbar li').on('activate', function(){
    var $this = $(this);
    if ( $.browser.msie == undefined ) {
      var href = $this.find('a').attr('href');
      if ( href.charAt(0) == '#' ) {
        triggerScroll = false;
        $.bbq.pushState( '#/' + href.slice(1) );
      }
    }
    var target = $this.data('subnav');
    $('.subnav:not(.hidden)').slideUp('fast', function(){ $(this).addClass('hidden'); });
    if ( target == undefined ) return;
    $(target).slideDown('fast').removeClass('hidden');
  });

  $('.subsection-next').on('click', function(e){
    e.preventDefault();
    var $wrapper = $(this).closest('.horizontal-wrapper');
    $wrapper.scrollTo( $(this).parent().next(), 500, {easing:'linear'});
  });
  $('.subsection-prev').on('click', function(e){
    e.preventDefault();
    var $wrapper = $(this).closest('.horizontal-wrapper');
    $wrapper.scrollTo( $(this).parent().prev(), 500, {easing:'linear'});
  });



  //hotspot interactions
  // TweenMax.fromTo( $('.hotspot'), 1, {css:{scale:1}}, {css:{scale:.8}, repeat:-1, yoyo: true});

  $('.hotspot').on('click', function(e){

    TweenLite.to($('.hotspot-container.current .hotspot-detail'), .5, {css:{scale:0}});

    e.preventDefault();
    var $this = $(this);
    var $detail = $this.next('.hotspot-detail');
    $this.parent().addClass('current');

    var transform = '0 247px';
    // if ( $this.parent().hasClass('hotspot-right') ) {
    //   // transform = '289px 262px';
    //   transform = '100% 100%';
    // }

    TweenLite.to($detail, .5 , {css:{scale:1, transformOrigin: transform}});
  });
  $('.hotspot-link').on('click', function(e){
    var $this = $(this);
    $this.parents('.hotspot-container').removeClass('current');
    TweenLite.to( $this.parent(), .5, {css:{scale:0}, onComplete:function(){
      return true;
    }});
  });
  $('.hotspot-close').on('click', function(e){
    e.preventDefault();
    var $this = $(this);
    $this.parents('.hotspot-container').removeClass('current');
    TweenLite.to( $this.parent(), .5, {css:{scale:0}, onComplete:function(){
      return true;
    }});
  });

  $('.slider').slider()

  $('.financiamiento-steps-container a').on('click', function(e){
    e.preventDefault();

    var target = $(this).data('target');
    financiamientoStep   = $(this).data('step-number');

    $(this).siblings('a').removeClass('active');
    $(this).addClass('active');
    if ( $(target).length == 0 ) {
      return;
    }
    if ( target == '#financiamiento-step-2' ) {
      $('#financiamiento-car-container').fadeOut();
    } else {
      $('#financiamiento-car-container').fadeIn();
    }

    $('.financiamiento-step:not(.hide)').fadeOut(function(){
      $(this).addClass('hide');
      $(target).fadeIn(function(){
        $(this).removeClass('hide');
      });
    });

    if ( financiamientoStep > 1 ) {
      $('#financiamiento-anterior').removeClass('hidden');
    }
    if ( financiamientoStep == 1 ) {
      $('#financiamiento-anterior').addClass('hidden');
    }

    if ( financiamientoStep < 3 ) {
      $('#financiamiento-siguiente').removeClass('hidden');
    }
    if ( financiamientoStep == 3 ) {
      $('#financiamiento-siguiente').addClass('hidden');
    }
  });

  $('.financiamiento-control').on('click', function(e){
    e.preventDefault();
    var direction = $(this).data('direction');

    if ( direction == 'next' ) {
      financiamientoStep++;
    }
    if ( direction == 'prev') {
      financiamientoStep--;
    }

    var target = $('#financiamiento-step-'+financiamientoStep);
    if ( target.length == 0 ) return;

    if ( financiamientoStep == 2 ) {
      $('#financiamiento-car-container').fadeOut();
    } else {
      $('#financiamiento-car-container').fadeIn();
    }

    $('.financiamiento-step:not(.hide)').fadeOut(function(){
      $(this).addClass('hide');
      $(target).fadeIn(function(){
        $(this).removeClass('hide');
      });
    });
    $('.financiamiento-steps-container a').eq(financiamientoStep-1).addClass('active').siblings('a').removeClass('active');

    if ( financiamientoStep > 1 ) {
      $('#financiamiento-anterior').removeClass('hidden');
    }
    if ( financiamientoStep == 1 ) {
      $('#financiamiento-anterior').addClass('hidden');
    }

    if ( financiamientoStep < 3 ) {
      $('#financiamiento-siguiente').removeClass('hidden');
    }
    if ( financiamientoStep == 3 ) {
      $('#financiamiento-siguiente').addClass('hidden');
    }


  });

  $('#financiamiento-imprimir').on('click', function(e){
    e.preventDefault();
    $('#finaciamiento').addClass('printable');
    window.print();
    $(window).scrollTo('#finaciamiento');
  });

  $('a.horizontal-scroll').on('click', function(e){
    e.preventDefault();
    var $this     = $(this);
    var $section  = $($this.data('target'));
    var link      = $(this).attr('href');
    if ( $section.length <= 0 ) {
      return false;
    }
    var sectionTop = $section.position().top;
    if( sectionTop < $(window).scrollTop() || sectionTop > $(window).scrollTop() ) {
      $(window).scrollTo(sectionTop, 500, {easing:'linear'});
    }
    $section.find('.horizontal-wrapper').scrollTo( $(link), 500 , {easing:'linear'});
    $(link).siblings().removeClass('current');
    $(link).addClass('current');

    if ( $this.parent().is('li') ) {
      $this.parent().addClass('active');
      $this.parent().siblings().removeClass('active');
    } else {
      $this.addClass('active');
      $this.siblings().removeClass('active');
    }


  });

  $(window).bind('hashchange', function(event){
    var tgt = location.hash.replace(/^#\/?/,'');
    if ( document.getElementById(tgt) && triggerScroll ) {
      $.smoothScroll({scrollTarget: '#' + tgt, speed: 500, easing:'linear'});
    }
  });

  $(window).trigger('hashchange');
  $('.slide, #video').css({width: $(window).width(), height: window.innerHeight });

  var $window             = $(window);
  var $carruselWrapper    = $('.caroufredsel_wrapper');
  var $carruseles         = $('.carrusel');
  var $horizontalWrappers = $('.horizontal-wrapper');
  $(window).on('resize', function(){
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this).scrollspy('refresh')
    });
    var hslider = $('.slider-horizontal');
    hslider.width( hslider.parent().width() );

    $('.slide, #video').css({width: $window.width(), height: window.innerHeight });
    $carruselWrapper.css({height: window.innerHeight});
    $carruseles.each(function(i, _carrusel){
      var $c = $(_carrusel);
      $c.width({width: $window.width() * $c.children('.slide').length});
    });
    $carruseles.css('left', 0);
    $horizontalWrappers.each(function(i, wrapper){
      $wrapper = $(wrapper);
      $current = $wrapper.find('.sub-section.current');
      $wrapper.scrollLeft( $current.position().left );
    });

    var tgt = location.hash.replace(/^#\/?/,'');
    if ( tgt != '' && !Modernizr.touch ) {
      $('body').scrollTop($('#'+tgt).position().top);
    }
  });

  $(window).on('orientationchange', function(){
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this).scrollspy('refresh')
    })

    $('.slide').css({width: $window.width(), height: window.innerHeight });
    $carruselWrapper.css({height: window.innerHeight});
    $carruseles.each(function(i, _carrusel){
      var $c = $(_carrusel);
      $c.width({width: $window.width() * $c.children('.slide').length});
    });
    $carruseles.css('left', 0);
    $horizontalWrappers.each(function(i, wrapper){
      $wrapper = $(wrapper);
      $current = $wrapper.find('.sub-section.current');
      $wrapper.scrollLeft( $current.position().left );
    });

    var tgt = location.hash.replace(/^#\/?/,'');
    if ( tgt != '' ) {
      $('body').scrollTop($('#'+tgt).position().top);
    }
  });


  var loaded = 0;
  $('#threesixty-color-picker a').on('click', function(e){

    e.preventDefault();
    var color = $(this).data('color');
    var text  = $(this).data('text');
    $(this).addClass('current').siblings('a').removeClass('current');

    $('#color-name').text(text);

    var $imgs = $('#threesixty-exterior img');
    $imgs.each(function(i, img) {
      var $img = $(img);
      if ( img.className == 'current-image' ) {
        var _img = $img.clone(true);
        _img.addClass('cloned');
        $img.parent('li:first').append(_img);
        $img.attr('src', 'imgs/exterior/'+color+'/'+(i+1)+'.png').on('load', function(){
          $(this).fadeIn('slow');
          _img.fadeOut('slow', function(){
            $(this).remove();
          });
        });
      } else {
        $img.attr('src','imgs/exterior/'+color+'/'+ (i+1) +'.png');
      }
    });

  });

  // $('.show-youtube').on('click', function(e){
  //   e.preventDefault();
  //   $.fancybox({
  //     'type': 'swf',
  //     'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
  //     'swf': {
  //       'wmode'    : 'transparent',
  //       'allowfullscreen' : 'true',
  //     },
  //     helpers:{
  //       overlay: { locked: false }
  //     }
  //   });
  //   return false;
  // });

  var v = document.getElementById('video-teaser');
  $('#ver-corto').on('click', function(e){
    try {
      v.pause();
    } catch(e) {}
  });

  try {
    v.volume = 0;
    v.play();
  }catch(e) { }

  setTimeout(function() {
    var queue = new createjs.LoadQueue(true);
    queue.setMaxConnections(1)
    queue.loadManifest(manifest);
  }, 10000);


});
