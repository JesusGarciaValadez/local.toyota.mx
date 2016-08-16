@extends('layouts.app')

@section( 'title', 'Highlander 2016' )

@section( 'header' )
  @parent
@endsection

@section('content')
  <section class="cover">
    <div id="cover"></div>
    <div class="titulo fadeIn animated">
      <h1>{!! $home->brand !!}</h1>
      <h2>{!! $home->slogan !!}</h2>
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
        {!! $home->sliderFeatures->content !!}
      </ul>
      <div class="menuHigh">
        <span class="fa fa-angle-up"></span>
        <ul>
          {!! $home->titlesSliderFeatures->content !!}
        </ul>
        <span class="fa fa-angle-down"></span>
      </div>
    </div>
  </section>
  <section class="galeria">
    <div id="galeria"></div>
    {!! $home->title_gallery_fancybox !!}
    <div>
      <span></span>
      <div class="container">
        <div class="contGale">
          <div>
            @foreach( $home->galleryFancyboxes as $gallery )
            <ul>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ $gallery->image_big }}" title="{{ $gallery->title_big }}">
                  <img src="{{ $gallery->thumb_big }}" />
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ $gallery->image_small_1 }}" title="{{ $gallery->title_small_1 }}">
                  <img src="{{ $gallery->thumb_small_1 }}" />
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ $gallery->image_small_2 }}" title="{{ $gallery->title_small_2 }}">
                  <img src="{{ $gallery->thumb_small_2 }}" />
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ $gallery->image_small_3 }}" title="{{ $gallery->title_small_3 }}">
                  <img src="{{ $gallery->thumb_small_3 }}" />
                </a>
              </li>
            </ul>
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