@extends( 'layouts.admin' )

@section( 'title', 'Editar automóvil' )

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-12 col-lg-offset-0">
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
        <div class="panel-heading">Editar marca de automóvil: {!! $home->name !!}</div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-left">Elemento</th>
                  <th class="col-xs-5 col-sm-5 col-md-7 col-lg-7 text-center" colspan="7">Acciones</th>
                </tr>
              </thead>
              <tfood></tfood>
              <tbody>
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Marca:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\BrandController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\BrandController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Slogan:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\SloganController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\SloganController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Título H1:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\TitleH1Controller@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\TitleH1Controller --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Título de slider de características:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\TitleSliderFeaturesController@index', [ 'id' => $home->id ] ) }}" class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                </tr>{{-- TitleSliderFeaturesIDController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Slider de caracteristicas:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\SliderFeaturesController@index', [ 'id' => $home->id ] ) }}" class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                </tr>{{-- SliderFeaturesController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Título de galerías de fotos:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\TitleGalleryFancyboxController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\TitleGalleryFancyboxController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Galerias de fotos:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\GalleryFancyboxesController@index', [ 'id' => $home->id ] ) }}" class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                </tr>{{-- GalleryFancyboxexController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Descripción de galerías de fotos:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\DescriptionGalleryFancyboxController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\DescriptionGalleryFancyboxController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Título de modelos:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\TitleVersionGalleryController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\TitleVersionGalleryController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Galería de descripción de modelos:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\CarController@index', [ 'id' => $home->id ] ) }}" class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                </tr>{{-- Admin\CarController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Título animádo banner "Manejo":</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\TitleDrivingAnimationController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\TitleDrivingAnimationController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Título Footer:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\TitleFooterController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\TitleFooterController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Descripción footer:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\DescriptionFooterController@edit', [ 'id' => $home->id ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                </tr>{{-- Admin\DescriptionFooterController --}}
                <tr>
                  <td class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><p><small><span>Administrar imágenes:</small></p></td>
                  <td class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="clearfix text-right">
                      <a href="{{ action( 'Admin\ImageController@index', [ 'id' => $home->id ] ) }}" class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                </tr>{{-- Admin\ImageController --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
