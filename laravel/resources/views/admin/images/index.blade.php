@extends( 'layouts.admin' )

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if ( Session::has( 'message' ) )
      <div class="alert alert-{{ Session::get( 'type' ) }}">
        {{ Session::get( 'message' ) }}
      </div>
      @endif
      @foreach( $errors->all( ) as $error )
      <div class="alert alert-success">
        {{ $error }}
      </div>
      @endforeach

      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Administrar imágenes</h1>
          <div class="clearfix text-left">
            <a href="{{ action('Admin\AdminController@show', [
              'id' => $id
            ] ) }}" class="btn btn-link">
              <i class="glyphicon glyphicon-chevron-left"></i> Regresar
            </a>
            {!! Form::open( [
              'url'     => action( 'Admin\ImageController@store', [
                'id'  => $id
              ] ),
              'method'  => 'POST',
              'class'   => 'form-horizontal',
              'files'   => true,
              'id'      => 'upload__form'
            ] ) !!}
              <p class="col-lg-12 col-md-12 col-sm-12">
                {!! Form::label( "image", "Subir una nueva imagen:", [
                  'class' => 'col-lg-6 col-md-6 col-sm-12'
                ], true ) !!}
                {!! Form::file( "image", [
                  'class' => 'col-lg-6 col-md-6 col-sm-12'
                ] ) !!}
              </p>
              <p class="col-lg-12 col-md-12 col-sm-12">
                {!! Form::label( "path", "Carpeta:", [
                  'class' => 'col-lg-6 col-md-6 col-sm-12'
                ], true ) !!}
                {!! Form::select( "path", [
                  ""                          => "Escoge una carpeta",
                  "datos"                     => "Datos",
                  "galeria"                   => "Galería",
                  "highlight"                 => "Highlight",
                  "technical-specifications"  => "Especificaciones técnicas",
                  "thumbs"                    => "Thumbnails",
                  "versiones"                 => "Versiones"
                ], "", [
                  "accept"  => ".jpg,.jpeg,.png",
                  "class"   => "col-lg-6 col-md-6 col-sm-12"
                ] ) !!}
              </p>
              <p class="col-lg-12 col-md-12 col-sm-12 text-right">
                {!! Form::submit( "Subir imagen", [
                  'class' => 'text-right'
                ] ) !!}
              </p>
            {!! Form::close() !!}
          </div>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @if ( count( $image_datos ) > 0 )
            <div class="container-fluid">
              <h2>Imágenes de especificación de autos</h2>
              <div class="image--manager flex-items-xs-middle row">
                @foreach ( $image_datos as $image )
                <figure class="text-xs-center col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  {!! Html::image( $image, null, [
                    'class' => 'img-responsive img-thumbnail'
                  ] ) !!}
                  {!! Form::open( [
                    'url'     => action( 'Admin\ImageController@destroy', [
                      'id'    => $id,
                    ] ),
                    'method'  => 'DELETE',
                    'class'   => 'form--horizontal delete--form',
                    'files'   => false
                  ] ) !!}
                    {!! Form::hidden( 'name', $image ) !!}
                    {!! Form::image( public_path() . 'assets/images/icons/close.png', 'close', [
                      'class' => 'delete--form__deleteBtn'
                    ] ) !!}
                  {!! Form::close() !!}
                </figure>
                @endforeach
              </div>
            </div>{{-- Archivos de auto --}}
            @endif

            @if ( count( $image_technical_specifications ) > 0 )
            <div class="container-fluid">
              <h3>Imágenes de especificación de autos</h3>
              <div class="image--manager flex-items-xs-middle row">
                @foreach ( $image_technical_specifications as $image )
                <figure class="text-xs-center col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  {!! Html::image( $image, null, [
                    'class' => 'img-responsive img-thumbnail'
                  ] ) !!}
                  {!! Form::open( [
                    'url'     => action( 'Admin\ImageController@destroy', [
                      'id'    => $id,
                    ] ),
                    'method'  => 'DELETE',
                    'class'   => 'form--horizontal delete--form',
                    'files'   => false
                  ] ) !!}
                    {!! Form::hidden( 'name', $image ) !!}
                    {!! Form::image( public_path() . 'assets/images/icons/close.png', 'close', [
                      'class' => 'delete--form__deleteBtn'
                    ] ) !!}
                  {!! Form::close() !!}
                </figure>
                @endforeach
              </div>
            </div>{{-- Especificaciones técnicas --}}
            @endif

            @if ( count( $image_thumbs ) > 0 )
            <div class="container-fluid">
              <h3>Imágenes de especificación de autos</h3>
              <div class="image--manager flex-items-xs-middle row">
                @foreach ( $image_thumbs as $image )
                <figure class="text-xs-center col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  {!! Html::image( $image, null, [
                    'class' => 'img-responsive img-thumbnail'
                  ] ) !!}
                  {!! Form::open( [
                    'url'     => action( 'Admin\ImageController@destroy', [
                      'id'    => $id,
                    ] ),
                    'method'  => 'DELETE',
                    'class'   => 'form--horizontal delete--form',
                    'files'   => false
                  ] ) !!}
                    {!! Form::hidden( 'name', $image ) !!}
                    {!! Form::image( public_path() . 'assets/images/icons/close.png', 'close', [
                      'class' => 'delete--form__deleteBtn'
                    ] ) !!}
                  {!! Form::close() !!}
                </figure>
                @endforeach
              </div>
            </div>{{-- Thumbnails de galería --}}
            @endif

            @if ( count( $image_gallery ) > 0 )
            <div class="container-fluid">
              <h3>Imágenes de especificación de autos</h3>
              <div class="image--manager flex-items-xs-middle row">
                @foreach ( $image_gallery as $image )
                <figure class="text-xs-center col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  {!! Html::image( $image, null, [
                    'class' => 'img-responsive img-thumbnail'
                  ] ) !!}
                  {!! Form::open( [
                    'url'     => action( 'Admin\ImageController@destroy', [
                      'id'    => $id,
                    ] ),
                    'method'  => 'DELETE',
                    'class'   => 'form--horizontal delete--form',
                    'files'   => false
                  ] ) !!}
                    {!! Form::hidden( 'name', $image ) !!}
                    {!! Form::image( public_path() . 'assets/images/icons/close.png', 'close', [
                      'class' => 'delete--form__deleteBtn'
                    ] ) !!}
                  {!! Form::close() !!}
                </figure>
                @endforeach
              </div>
            </div>{{-- Galería --}}
            @endif

            @if ( count( $image_highlight ) > 0 )
            <div class="container-fluid">
              <h3>Imágenes de especificación de autos</h3>
              <div class="image--manager flex-items-xs-middle row">
                @foreach ( $image_highlight as $image )
                <figure class="text-xs-center col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  {!! Html::image( $image, null, [
                    'class' => 'img-responsive img-thumbnail'
                  ] ) !!}
                  {!! Form::open( [
                    'url'     => action( 'Admin\ImageController@destroy', [
                      'id'    => $id,
                    ] ),
                    'method'  => 'DELETE',
                    'class'   => 'form--horizontal delete--form',
                    'files'   => false
                  ] ) !!}
                    {!! Form::hidden( 'name', $image ) !!}
                    {!! Form::image( public_path() . 'assets/images/icons/close.png', 'close', [
                      'class' => 'delete--form__deleteBtn'
                    ] ) !!}
                  {!! Form::close() !!}
                </figure>
                @endforeach
              </div>
            </div>{{-- Características/Highlights --}}
            @endif

            @if ( count( $image_versions ) > 0 )
            <div class="container-fluid">
              <h3>Imágenes de especificación de autos</h3>
              <div class="image--manager flex-items-xs-middle row">
                @foreach ( $image_versions as $image )
                <figure class="text-xs-center col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  {!! Html::image( $image, null, [
                    'class' => 'img-responsive img-thumbnail'
                  ] ) !!}
                  {!! Form::open( [
                    'url'     => action( 'Admin\ImageController@destroy', [
                      'id'    => $id,
                    ] ),
                    'method'  => 'DELETE',
                    'class'   => 'form--horizontal delete--form',
                    'files'   => false
                  ] ) !!}
                    {!! Form::hidden( 'name', $image ) !!}
                    {!! Form::image( public_path() . 'assets/images/icons/close.png', 'close', [
                      'class' => 'delete--form__deleteBtn'
                    ] ) !!}
                  {!! Form::close() !!}
                </figure>
                @endforeach
              </div>
            </div>{{-- Modelos de auto --}}
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
