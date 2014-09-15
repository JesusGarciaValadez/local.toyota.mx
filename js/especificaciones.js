$('.horizontal-scroll').on('click', function(){
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');

  if ( this.hash ) {
    triggerScroll = true;
    $.bbq.pushState( '#/' + this.hash.slice(1) );
    return false;
  }
});

$(function(){
  $(window).bind('hashchange', function(event){
    var tgt = location.hash.replace(/^#\/?/,'');

    var el  = document.getElementById(tgt);
    if ( el != undefined ) {
      // $.smoothScroll({scrollTarget: '#' + tgt, speed: 500, easing:'linear'});
      $('.horizontal-wrapper').scrollTo( el, 500, {easing: 'linear'});
      $(el).addClass('current');
      $(el).siblings().removeClass('current');
    }
  });
  $(window).trigger('hashchange');

  $('.especificaciones-imprimir').on('click', function(e){
    e.preventDefault();
    $('.horizontal-wrapper').scrollLeft(0);
    window.print();
  });

  var $horizontalWrappers = $('.horizontal-wrapper');

  $(window).on('resize', function(e){
    $horizontalWrappers.each(function(i, wrapper){
      $wrapper = $(wrapper);
      $current = $wrapper.find('.sub-section.current');
      $wrapper.scrollLeft( $current.position().left );
    });
  });

});
