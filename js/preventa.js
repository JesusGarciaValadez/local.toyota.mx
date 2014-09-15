var baseUrl = 'http://backend.corollaexperience.com';
var dealers = {};
var datosCliente = {nombre: null, apellidos:null, email:null, telefono:null};
var cupon = null;
var preventaId = null;

$(document).on('change', '#preventa-distribuidores', function(e){
  e.preventDefault();
  $('#preventa-disponible').fadeOut();
  var distribuidor = $(this).val();
  $('#preventa-dealer').val( '' );
  if ( distribuidor == '' ) return false;
  var dealer = $.grep(dealers, function(_dealer){
    return distribuidor == _dealer.id;
  });
  dealer = dealer[0];
  $('#preventa-dealer').val( dealer.id );

  var applicationsLeft = ( dealer.kits - (dealer.applications_confirmed + dealer.applications_registered) );

  if ( applicationsLeft <= 0 ) {
    $('#preventa-header, #preventa-disponible').fadeOut(function(){
      $('#preventa-lista-espera').fadeIn();
    });
    return;
  }


  $('#preventa-lista-espera, #lista-espera-no').fadeOut(function(){
    $('#preventa-disponible, #preventa-header, #lista-espera-default').fadeIn();
  });

});

$(function(){

  $('#distribuidorSearchForm').on('submit', function(e){
    e.preventDefault();
  });

  $('#preventa-ingresar').on('click', function(e){
    e.preventDefault();
    var $form = $('#form-preventa-datos-cliente');
    if ( !$form.valid() ) {
      return;
    }
    if ( Recaptcha.get_response() == '' ) {
      Recaptcha.focus_response_field();
      return;
    }

    datosCliente.nombre    = $('#datos-cliente-nombre').val();
    datosCliente.apellidos = $('#datos-cliente-apellidos').val();
    datosCliente.telefono  = $('#datos-cliente-telefono').val();
    datosCliente.email     = $('#datos-cliente-email').val();

    $('#preventa-error').html('Espera un momento porfavor...');

    //revisar si ya está el correo
    $.ajax({
      url: baseUrl + '/applications/validateEmail',
      dataType: 'json',
      type: 'POST',
      data: {
        data:{
          email:datosCliente.email,
          challenge: Recaptcha.get_challenge(),
          response: Recaptcha.get_response(),
          ip: clientIp
        }
      }
    })
    .done(function(response) {
      if ( response.error != undefined && response.error == 'captcha' ) {
        switch ( response.type ) {
          case 'incorrect-captcha-sol':
            $('#preventa-error').html('<strong style="color:#F00;">CAPTCHA INCORRECTO</strong>');
          break;
          case 'captcha-timeout':
            $('#preventa-error').html('<strong style="color:#F00;">TIENES QUE ACTUALIZAR EL CAPTCHA</strong>');
          break;
          case 'invalid-request-cookie':
            $('#preventa-error').html('<strong style="color:#F00;">TIENES QUE ACTUALIZAR EL CAPTCHA</strong>');
          break;
          case 'empty-response':
            $('#preventa-error').html('<strong style="color:#F00;">CAPTCHA VACÍO</strong>');
          break;
        }
        return false;
        Recaptcha.focus_response_field();
      }
      if ( !response.valid ) {
        $('#preventa-error').html('<strong style="color:#F00;">LO SENTIMOS ESE CORREO YA ESTÁ REGISTRADO</strong>');
        return false;
      }
      $('#preventa-nombre').val(datosCliente.nombre);
      $('#preventa-apellidos').val(datosCliente.apellidos);
      $('#preventa-telefono').val(datosCliente.telefono);
      $('#preventa-email').val(datosCliente.email).attr('disabled', 'disabled');
      $('.preventa-resultado-nombre').text(datosCliente.nombre + ' ' + datosCliente.apellidos );

      $('#popup-inicial').fadeOut(function(){
        $(this).remove();
      });

    });

  });

  //cambiar los dealers
  $('#preventa-estados').on('change', function(e){
    $('#preventa-disponible').fadeOut();
    var _estado = $(this).val();
    if ( _estado == '' ) return;
    $.ajax({
      url : baseUrl + '/dealers/getDealers',
      dataType: 'json',
      type: 'POST',
      data: { data:{ estado:_estado, preventa:1 } }
    })
    .done(function(_dealers){
      dealers = _dealers;
      $select = $('#preventa-distribuidores');
      $select.empty();
      // $select.selectpicker('refresh');
      $select.append($('<option>'));

      $(dealers).each(function(i, el){
        var $option = $('<option>').val(el.id).text(el.nombre);
        $select.append($option);
        // $select.selectpicker('refresh');
      });
    });

  });

  $('#btn-apartar-ahora').on('click', function(e) {
    e.preventDefault();
    if ( $(this).attr('disabled') == 'disabled' ) {
      return false;
    }

    var $form = $('#form-preventa-datos-finales');
    var $emailField = $('#preventa-email');

    if ( $('#preventa-terms').is(':checked') == false ) {
      $('#popup-alerta').find('.popup-body').html('<p style="font-size:12px; line-height:13px;">Por favor acepta los términos y condiciones correspondientes; es necesario que aceptes estos para generar tu número de folio. La aceptación irrevocable e incondicional de los términos y condiciones de la oferta de compraventa del vehículo por parte del usuario, sin reserva de derecho o acción alguna, en el entendimiento expreso de que dicha oferta está sujeta a: (a) la confirmación por escrito de la oferta y del paquete de Toyota Experience; (b) el pago de un anticipo del precio; y (c) la revocación inmediata de la oferta, en caso de no cumplir con lo señalado en los incisos (a) y (b) del presente párrafo y/o cualquier otro término o condición de la promoción Corolla 2014.</p>');
      $('#popup-alerta').fadeIn();
      return;
    }

    if ( !$form.valid() ) {
      return false;
    }
    if ( $emailField.val() != datosCliente.email ) {
      $emailField.val(datosCliente.email);
    }
    $(this).attr('disabled', 'disabled');

    $emailField.removeAttr('disabled');

    var sp = new Spinner({color:'#fff'}).spin($('#preventa')[0])

    $.ajax({url: baseUrl + '/applications/saveApplication', dataType: 'json', type: 'POST', data: $form.serialize() })
    .done(function(json){
      $emailField.attr('disabled', 'disabled');
      if ( json.error && json.msg != undefined ) {
        alert("Error:\n" + json.msg);
        return false;
      }
      $('#preventa-resultado-folio').text(json.application.folio_formatted);
      $('.preventa-nombre-distribuidor').text(json.dealer.nombre);
      $('.preventa-direccion-distribuidor').text(json.dealer.direccion);
      $('.preventa-telefono-distribuidor').text(json.dealer.telefono);
      $('.preventa-fecha-actual').text(json.application.today);
      $('.preventa-fecha-vencimiento').text(json.application.valid_until);

      $('#preventa-estados, #preventa-distribuidores').attr('disabled', 'disabled');
      $('#preventa-disponible, #preventa-header').fadeOut(function(){
        $('#preventa-exito, .ilikeit-container').fadeIn();
      });

      cupon      = json.cupon;
      preventaId = json.application.id;

      var iframe = $('iframe').attr({
        width: 0,
        height: 0,
        marginwidth: 0,
        marginheight: 0,
        hspace: 0,
        vspace: 0,
        frameborder: 0,
        scrolling: 'no',
        bordercolor: '#000000',
        src: 'http://www.wtp101.com/pixel?id=19420'
      });
      $('body').append(iframe);


    }).always(function(){
      sp.stop();
      $('#btn-apartar-ahora').removeAttr('disabled');
    }).fail(function(){ });
  });

  $('#btn-lista-espera-cancelar').on('click', function(e) {
    e.preventDefault();
    $('#lista-espera-default').fadeOut(function(){
      $('#lista-espera-no').fadeIn();
    });
  });

  $('#btn-lista-espera-aceptar').on('click', function(e){
    e.preventDefault();
    if ( $(this).attr('disabled') == 'disabled' ) {
      return false;
    }
    var $form = $('#form-preventa-datos-finales');
    var $emailField = $('#preventa-email');
    if ( !$form.valid() ) {
      return false;
    }
    if ( $emailField.val() != datosCliente.email ) {
      $emailField.val(datosCliente.email);
    }
    $(this).attr('disabled', 'disabled');
    $emailField.removeAttr('disabled');
     $.ajax({url: baseUrl + '/waitinglists/addToWaitinglist', dataType: 'json', type: 'POST', data: $form.serialize() })
    .done(function(json){
      $emailField.attr('disabled', 'disabled');
      if ( json.error && json.msg != undefined ) {
        alert("Error\n:" + json.msg );
        return false;
      }
      $('#lista-espera-resultado-folio').text( json.list.folio );
      $('#lista-espera-default').fadeOut(function(){
        $('#lista-espera-si').fadeIn();
      });
    });

  });

  var scroll = $('#scrollbar').tinyscrollbar();
  $('#btn-terminos').on('click', function(e){
    e.preventDefault();
    $('#popup-terminos').fadeIn(function(){
      scroll.tinyscrollbar_update();
    });
  });

  $('.close-popup').on('click', function(e){
    e.preventDefault();
    $(this).parents('.preventa-popup').fadeOut(function(){
      $(this).find('.popup-body').empty();
    });
  });

  $('#btn-preventa-imprimir').on('click', function(e){
    e.preventDefault();
    var width = 560,
    height    = 680,
    left      = $(window).width() - width >> 1,
    top       = $(window).height() - height >> 1;

    var pop = window.open( '', '', 'width='+width+',height='+height+',left='+left+',top='+top);
    pop.document.write('<img src="'+cupon+'"/>');
    pop.document.close();
    pop.focus();
    pop.print();
  });

  $('#btn-preventa-ver').on('click', function(e){
    e.preventDefault();
    $.getJSON( baseUrl + '/applications/resendMail/'+preventaId)
    .done(function(result){
      if ( result.error ) {
        $('#popup-alerta').find('.popup-body').html('<p class="text-center">'+result.msg+'</p>');
        $('#popup-alerta').fadeIn();
      } else {
        $('#popup-alerta').find('.popup-body').html('<p class="text-center">Tu cupón se envío por correo.</p>');
        $('#popup-alerta').fadeIn();
      }
    });
  });

  if ( $('#recaptcha-div').length ){
    Recaptcha.create('6Ld6KuYSAAAAAALRKiEdeTdN0gRrReBnlUAO7A_z', 'recaptcha-div', {theme:'white', lang:'es'});
  }
  $('#show-youtube').on('click', function(e){
    e.preventDefault();
    $.fancybox({
      'type': 'swf',
      'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
      'swf': {
        'wmode'    : 'transparent',
        'allowfullscreen' : 'true',
      }
    });
  });
});

