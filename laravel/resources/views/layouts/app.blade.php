<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>@yield( 'title' ) @ Toyota</title>
  {!! Html::favicon( 'favicon.png' ) !!}
  <meta name="description" content="@yield( 'description' )">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  {!! Html::meta( 'robots', 'INDEX,FOLLOW' ) !!}
  {!! Html::style( 'humans.txt', [ 'type' => 'text/plain', 'rel' => 'author' ] ) !!}

  {!! Html::style( 'assets/css/reset-sass.css') !!}
  {!! Html::style( 'http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' ) !!}
  {!! Html::style( 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' ) !!}
  {!! Html::style( 'assets/css/fonts/fonts.css') !!}
  {!! Html::style( 'assets/css/style.css') !!}
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78430002-1', 'auto');
    ga('send', 'pageview');
  </script>
  <iframe style="display: none !important;" src="https://ads.mediade.sk/retargeting/pixel?p=024BADA5-074D-41CD-92D5-3ED824BE6DE2&days=180&adv=2653ab6b-e5dc-4fc4-a1a0-9bebec14b1cd"></iframe>
  {!! Html::image( '//magnetic.t.domdex.com/31495/pix.gif?t=r&for=Toyota', '', [
    'width'   => "1",
    'height'  => "1" ,
    'style'   => "display:none;"
  ] ) !!}
  {!! Html::image( '//magnetic.t.domdex.com/31496/pix.gif?t=c&for=Toyota', '', [
    'width'   => "1",
    'height'  => "1" ,
    'style'   => "display:none;"
  ] ) !!}
</head>
<body class="{{ $slug }}">
@section( 'header' )
  <header>
    <div class="menu1 fadeInDown animated">
      {!! Html::link( action( 'HomeController@index', [
        'slug' => ( !empty( $slug ) ) ? $slug : ''
      ] ), '', [
        'target'  => '_blank',
        'class'   => 'logo'
      ] ) !!}
      <i class="hamburguesa"></i>
      <div class="redes">
        <span>
          <a href="https://twitter.com/ToyotaMex" target='_blank'>
            <i class="fa fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/ToyotaMex" target='_blank'>
            <i class="fa fa-facebook"></i>
          </a>
          <a href="https://www.youtube.com/user/ToyotaMex" target='_blank'>
            <i class="fa fa-youtube"></i>
          </a>
        </span>
      </div>
      <nav>
        <ul>
          <li class="distri">
            {!! Html::link( action( 'HomeController@retail', [
              'slug' => ( !empty( $slug ) ) ? $slug : ''
            ] ), 'Distribuidores', [ ] ) !!}
          </li>
        </ul>
      </nav>
    </div>
    <div class="menu2 fadeInUp animated">
      {!! Html::link( '#cover', '', [
        'class' => 'scroll'
      ] ) !!}
      <nav>
        <ul>
          <li>
            {!! Html::link( '#colores', 'COLORES', [
              'class' => 'scroll'
            ] ) !!}
          </li>
          <li>
            {!! Html::link( '#highlights', 'HIGHLIGHTS', [
              'class' => 'scroll'
            ] ) !!}
          </li>
          <li>
            {!! Html::link( '#galeria', 'GALERÍA', [
              'class' => 'scroll'
            ] ) !!}
          </li>
          <li>
            {!! Html::link( '#versiones', 'VERSIONES', [
              'class' => 'scroll'
            ] ) !!}
          </li>
        </ul>
      </nav>
    </div>
  </header>
@show

@yield( 'content' )

@section( 'footer' )
  <footer>
    {!! Html::link( '#cover', '', [ 'class' => 'scroll' ] ) !!}
    <div class="menu3">
      <nav>
        <ul>
          <li>
            {!! Html::link( 'http://toyota.com.mx/contenidos/aviso-de-privacidad/', 'Política de Privacidad', [
              'target' => '_blank'
            ] ) !!}
          </li>
          <li>
            {!! Html::link( 'http://toyota.com.mx/contenidos/terminos-legales-y-condiciones/', 'Términos Legales', [
              'target' => '_blank'
            ] ) !!}
          </li>
        </ul>
      </nav>
      <span><p>©<?=date('Y');?> Toyota, TOYOTA MÉXICO</p></span>
    </div>
  </footer>
@show

@section( 'scripts' )
  {!! Html::style( 'assets/css/animate.css') !!}
  {!! Html::style( 'assets/plugins/font-awesome/css/font-awesome.min.css') !!}

  <!--
  Threesixty
  ==================================================
  -->
  {!! Html::style( 'assets/plugins/threesixty/threesixty.css') !!}
  <!--[if lt IE 9]>
    {!! Html::script( '//html5shiv.googlecode.com/svn/trunk/html5.js' ) !!}
    <script>window.html5 || document.write('<script src="assets/js/vendor/html5shiv.js"><\/script>')</script>
  <![endif]-->

  {!! Html::script( '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' ) !!}
  {!! Html::script( 'http://thecodeplayer.com/uploads/js/jquery.easing.min.js' ) !!}
  <script>window.jQuery || document.write( '<script src="assets/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  {!! Html::script( "//maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBPOumb2a6uPw5QMcSfgVTzQAubwYJLrDo&libraries=places", [
    "async" => "",
    "defer" => "defer"
  ] ) !!}
  {!! Html::script( 'assets/plugins/bxslider/jquery.bxslider.min.js' ) !!}
  {!! Html::script( 'assets/plugins/threesixty/threesixty.js' ) !!}
  {!! Html::script( 'assets/plugins/fitvids/jquery.fitvids.js') !!}
  {!! Html::script( 'assets/plugins/touch-swipe/jquery.touchSwipe.min.js') !!}
  {!! Html::script( 'assets/plugins/onscreen/jquery.onscreen.min.js') !!}
  <!-- Financiamiento -->
  @if( isset( $financiamiento ) && $financiamiento == true )
  {!! Html::script( 'assets/js/phpjs/number_format.js') !!}
  {!! Html::script( 'assets/js/financiamiento-toyota.min.js') !!}
  @endif
  <!-- Add main JS -->
  {!! Html::script( 'assets/js/main.min.js') !!}
  {!! Html::script( 'assets/js/especificaciones.min.js') !!}
  {!! Html::script( 'assets/js/mapa.min.js' ) !!}
  {!! Html::script( '//cdnjs.cloudflare.com/ajax/libs/picturefill/2.0.0/picturefill.min.js', [ 'async' => "" ] ) !!}

  <!-- Add fancyBox main JS and CSS files -->
  {!! Html::script( 'assets/plugins/fancyBox/jquery.fancybox.js') !!}
  {!! Html::script( 'assets/plugins/fancyBox/helpers/jquery.fancybox-buttons.js') !!}
  {!! Html::script( 'assets/plugins/fancyBox/helpers/jquery.fancybox-media.js') !!}
@show
</body>
</html>
