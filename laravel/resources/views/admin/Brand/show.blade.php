@extends( 'layouts.admin' )

@section( 'title', 'Editar automóvil' )

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
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
        <div class="panel-heading">Editar marca de automóvil: {{ $home->brand }}</div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-lg-5 col-md-5 text-left">Elemento</th>
                  <th class="col-lg-7 col-md-7 text-center" colspan="7">Acciones</th>
                </tr>
              </thead>
              <tfood></tfood>
              <tbody>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Marca:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\Brand\BrandController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\Brand\BrandController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\Brand\BrandController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\Brand\BrandController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\Brand\BrandController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Título H1:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleH1\TitleH1Controller@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleH1\TitleH1Controller@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleH1\TitleH1Controller@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleH1\TitleH1Controller@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleH1\TitleH1Controller@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Slider de caracteristicas:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\SliderFeatures\SliderFeaturesController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="#" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\SliderFeatures\SliderFeaturesController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Título de slider de características:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleSliderFeatures\TitleSliderFeaturesIDController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleSliderFeatures\TitleSliderFeaturesIDController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleSliderFeatures\TitleSliderFeaturesIDController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleSliderFeatures\TitleSliderFeaturesIDController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleSliderFeatures\TitleSliderFeaturesIDController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Galerias de fotos:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\GalleryFancyboxes\GalleryFancyboxesController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\GalleryFancyboxes\GalleryFancyboxesController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\GalleryFancyboxes\GalleryFancyboxesController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\GalleryFancyboxes\GalleryFancyboxesController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\GalleryFancyboxes\GalleryFancyboxesController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Descripción de galerías de fotos:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionGalleryFancybox\DescriptionGalleryFancyboxController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionGalleryFancybox\DescriptionGalleryFancyboxController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionGalleryFancybox\DescriptionGalleryFancyboxController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionGalleryFancybox\DescriptionGalleryFancyboxController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionGalleryFancybox\DescriptionGalleryFancyboxController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Título de modelos:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleVersion\TitleVersionController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleVersion\TitleVersionController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleVersion\TitleVersionController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleVersion\TitleVersionController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleVersion\TitleVersionController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Galería de descripciones uno:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryOne\CarDescriptionGalleryOneIDController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryOne\CarDescriptionGalleryOneIDController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryOne\CarDescriptionGalleryOneIDController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryOne\CarDescriptionGalleryOneIDController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryOne\CarDescriptionGalleryOneIDController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Galería de descripciones dos:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryTwo\CarDescriptionGalleryTwoIDController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryTwo\CarDescriptionGalleryTwoIDController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryTwo\CarDescriptionGalleryTwoIDController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryTwo\CarDescriptionGalleryTwoIDController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\CarDescriptionGalleryTwo\CarDescriptionGalleryTwoIDController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Título animádo banner "Manejo":</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleDrivingAnimation\TitleDrivingAnimationController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleDrivingAnimation\TitleDrivingAnimationController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleDrivingAnimation\TitleDrivingAnimationController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleDrivingAnimation\TitleDrivingAnimationController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleDrivingAnimation\TitleDrivingAnimationController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Título Footer:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleFooter\TitleFooterController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleFooter\TitleFooterController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleFooter\TitleFooterController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleFooter\TitleFooterController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\TitleFooter\TitleFooterController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-5 col-md-5"><p><small><span>Descripción footer:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-md-offset-2">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionFooter\DescriptionFooterController@index', [ 'id' => $home->id ] ) }}" class="btn btn-default"><i class="glyphicon glyphicon-th-list"></i> Lista</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionFooter\DescriptionFooterController@create', [ 'id' => $home->id ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionFooter\DescriptionFooterController@show', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Mostrar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionFooter\DescriptionFooterController@edit', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\DescriptionFooter\DescriptionFooterController@destroy', [ 'id' => $home->id, 'brand' => '1' ] ) }}" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
