@extends( 'layouts.app' )

@section( 'title', $brand->title )

@section( 'header' )
  @parent
@endsection

@section('content')
  <section class="cover">
    <div id="cover"></div>
    <div class="titulo fadeIn animated">
      <h1>{!! $brand->name !!}</h1>
      <h2>{!! $brand->slogan !!}</h2>
    </div>
    <span class="mouse fadeIn animated"><span class="mouse-dot"></span> Explora hacia abajo y descúbrelo.</span>
  </section>
  <section class="colores">
    <div id="colores"></div>
    {!! $brand->title_h1 !!}
    <div id="container" class="container">
      {!! Html::image( 'assets/images/reel-' . $brand->slug . '/rojo/1.jpg' ) !!}
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
        @foreach( $slides as $slide )
        {!! $slide->content !!}
        @endforeach
      </ul>
      <div class="menuHigh">
        <span class="fa fa-angle-up"></span>
        <ul>
          @foreach( $slides as $slide )
          {!! $slide->title !!}
          @endforeach
        </ul>
        <span class="fa fa-angle-down"></span>
      </div>
    </div>
  </section>
  <section class="galeria">
    <div id="galeria"></div>
    {!! $brand->title_gallery_fancybox !!}
    <div>
      <span></span>
      <div class="container">
        <div class="contGale">
          <div>
            @foreach( $galleries as $gallery )
            <ul>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ env( 'APP_URL' ) . $gallery->image_big }}" title="{{ $gallery->title_big }}">
                  <img src="{{ env( 'APP_URL' ) . '/' . $gallery->thumb_big }}" />
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ env( 'APP_URL' ) . $gallery->image_small_1 }}" title="{{ $gallery->title_small_1 }}">
                  <img src="{{ env( 'APP_URL' ) . '/' . $gallery->thumb_small_1 }}" />
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ env( 'APP_URL' ) . $gallery->image_small_2 }}" title="{{ $gallery->title_small_2 }}">
                  <img src="{{ env( 'APP_URL' ) . '/' . $gallery->thumb_small_2 }}" />
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="{{ env( 'APP_URL' ) . $gallery->image_small_3 }}" title="{{ $gallery->title_small_3 }}">
                  <img src="{{ env( 'APP_URL' ) . '/' . $gallery->thumb_small_3 }}" />
                </a>
              </li>
            </ul>
            @endforeach
          </div>
          <div class="anuncio">
            <span>
              {!! $brand->description_gallery_fancybox !!}
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
      {!! $brand->title_versions_gallery !!}
      <div class="modelos">
        <div>
          <div>
            @foreach( $car as $auto )
            <div>
              <img src="{{ env( 'APP_URL' ) . '/' . $auto->thumbnail }}" />
              <h3>{!! $auto->name !!}</h3>
              <h5> DESDE {{ $auto->price }}<sup>MN</sup></h5>
              <ul>
                {!! $auto->description !!}
              </ul>
              <span></span>
              <a href="/especificaciones/{{ $auto->slug }}" class="link">Ver detalle</a>
            </div>
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
        {!! $brand->title_driving_animation !!}
      </div>
    </div>
  </section>
  <section class="descanso">
    <div id="descanso"></div>
    <div class="container">
      <div>
        {!! $brand->title_footer !!}
        <span></span>
        {!! $brand->description_footer !!}
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