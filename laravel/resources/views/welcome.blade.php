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
        {!! $home->sliderFeature->content !!}
      </ul>
      <div class="menuHigh">
        <span class="fa fa-angle-up"></span>
        <ul>
          {!! $home->titleSliderFeature->content !!}
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
            @foreach( $home->galleryFancyboxes as $gallery )
            {!! $gallery->content !!}
            @endforeach
          </div>
          <div class="anuncio">
            <span>
              {!! $home->description_gallery_fancybox !!}
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
  <section class="versiones">
    <div id="versiones"></div>
    <div class="container">
      {!! $home->title_versions_gallery !!}
      <div class="modelos">
        <div>
          <div>
            {!! $home->carDescriptionGalleryOne->content !!}
          </div>
          <div>
            {!! $home->carDescriptionGalleryTwo->content !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="manejo">
    <div id="manejo"></div>
    <div class="container">
      <div>
        {!! $home->title_driving_animation !!}
      </div>
    </div>
  </section>
  <section class="descanso">
    <div id="descanso"></div>
    <div class="container">
      <div>
        {!! $home->title_footer !!}
        <span></span>
        {!! $home->description_footer !!}
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