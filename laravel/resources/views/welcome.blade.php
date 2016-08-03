@extends('layouts.app')

@section( 'title', 'Highlander 2016' )

@section( 'header' )
  @parent
@endsection

@section('content')
  <section class="cover">
    <div id="cover"></div>
    <div class="titulo fadeIn animated">
      <h1><span>Prius</span> 2016.</h1>
      <h2>Un mejor auto<span> para un mejor mundo, para un mejor tú</span></h2>
      <div class="btvideo">
        <span><p>Ve el video y descubre la grandeza de Prius.</p></span>
        <span><a class="fancybox-media" href="https://www.youtube.com/watch?v=a33pze_sSY4"></a></span>
      </div>
    </div>
    <span class="mouse fadeIn animated"><span class="mouse-dot"></span> Explora hacia abajo y descúbrelo.</span>
  </section>
  <section class="colores">
    <div id="colores"></div>
    {!! $home->title_h1 !!}
    <div id="container" class="container">
      {!! Html::image( 'assets/images/reel360/blanco/1.jpg' ) !!}
      <div class="new-Menu360">
        <p>Elige un color</p>
        <div class="contColors"></div>
        <span>Rojo</span>
      </div>
      <div class="threesixty car">
        <div class="spinner">
          <span>0%</span>
        </div>
        <ol class="threesixty_images"></ol>
      </div>
    </div>
  </section>
  <section class="highlights">
    <div id="highlights"></div>
    <div class="container">
      <ul class="highs">
        @foreach( $home->sliderFeatures as $features )
        {!! $features !!}
        @endforeach
      </ul>
      <div class="menuHigh">
        <span class="fa fa-angle-up"></span>
        <ul>
          @foreach( $home->titleSliderFeatures as $titles )
          {!! $titles !!}
          @endforeach
        </ul>
        <span class="fa fa-angle-down"></span>
      </div>
    </div>
  </section>
  <section class="galeria">
    <div id="galeria"></div>
    {!! $home->titleGalleryFancybox !!}
    <div>
      <span></span>
      <div class="container">
        <div class="contGale">
          <div>
            @foreach( $home->galleryFancybox as $gallery )
            {!! $gallery !!}
            @endforeach
          </div>
          <div class="anuncio">
            <span>
              {!! $home->descriptionGalleryFancybox !!}
              
              {!! Html::link( '', 'Conoce Más', [
                'class' => 'boton'
              ] ) !!}
              
            </span>
          </div>
        </div>
      </div>
      <div class="bx-controls-direction">
        <span id="prev"></span>
        <span class="contador"><sup></sup>&frasl;<sub></sub></span>
        <span id="next"></span>
      </div>
    </div>
  </section>
  <!--
  <section class="highlights2">
    <div id="highlights2"></div>
    <div class="container">
      <h2 class="animated">Descúbre <span>RAV4.</span></h2>
      <div id="especial">
        <div class="menu animated">
          <ul>
            <li><span></span>Menú</li>
            <li><span></span>Navegación</li>
            <li><span></span>Teléfono</li>
          </ul>
          <ul>
            <li><span></span>Bluetooth</li>
            <li><span></span>Audio</li>
            <li><span></span>Información de viaje</li>
          </ul>
        </div>
      </div>
      <div class="parrafo">
        <p>Navega y conoce todas las alternativas que te ofrece la pantalla de <span>RAV4.</span></p>
        <p>Con su <span>sistema de navegación</span> no habrá dirección a la que no llegues.</p>
        <p><span>Contesta tu teléfono</span> sin necesidad de quitar las manos del volante.</p>
        <p>Conectividad por completo aprovecha su <span>Bluetooth</span> y diviértete.</p>
        <p>Haz más divertidas tus aventuras y <span>lleva tu música</span> a todas partes.</p>
        <p>Conoce lo necesario de tu viaje para que <span>nada te detenga.</span></p>
      </div>
      <div class="menufle">
        <span class="prev">
          <i class="disabled"></i>
        </span>
        <span class="contador"><sup>1</sup>&frasl;<sub>6</sub></span>
        <span class="next">
          <i></i>
        </span>
      </div>
    </div>
  </section>
  -->
  <section class="versiones">
    <div id="versiones"></div>
    <div class="container">
      {!! $home->titleVersionsGallery !!}
      <div class="modelos">
        <div>
          <div>
            @foreach( $home->carsDescriptionsGalleryOne as $description )
            {!! $description !!}
            @endforeach
          </div>
          <div>
            @foreach( $home->carsDescriptionsGalleryTwo as $description )
            {!! $description !!}
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="manejo">
    <div id="manejo"></div>
    <div class="container">
      <div>
        {!! $home->titleDrivingAnimation !!}
      </div>
    </div>
  </section>
  <section class="descanso">
    <div id="descanso"></div>
    <div class="container">
      <div>
        {!! $home->titleFooter !!}
        <span></span>
        {!! $home->descriptionFooter !!}
        <a href="distribuidores" class="boton">Consíguelo aquí</a>
      </div>
    </div>
  </section>
@endsection

@section( 'footer' )
  @parent
@endsection

@section( 'scripts' )
  @parent
@endsection