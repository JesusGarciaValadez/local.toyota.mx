@extends( 'layouts.admin' )

@section( 'title', $title )

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
        <div class="panel-heading">Editar {{ strtolower( $title ) }} @ marca de automóvil:
          @if ( $brand )
          {!! $brand !!}
          @else
          {!! $home->brand !!}
          @endif
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
              <thead>
                <tr class="row">
                  <th class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-8 col-md-8 col-sm-4 col-xs-4 text-left">Elemento</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">Acciones</div>
                  </th>
                </tr>
              </thead>
              <tfoot></tfoot>
              <tbody>
                <tr class="row">
                  <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-8 col-md-8 col-sm-4 col-xs-4 text-left">
                      <a href="{{ $toReturn }}" class="btn btn-link">
                        <i class="glyphicon glyphicon-chevron-left"></i> Regresar
                      </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 center-block">
                      <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-sm-offset-4 text-left">
                        <a href="{{ action( 'Admin\\' . $controllerName . 'Controller@create', [
                          'id' => ( $id ) ? $id : $home->id
                        ] ) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Nuevo</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @foreach ( $elements as $element )
                <tr class="row">
                  <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12">
                      <p class="visible-lg-block visible-md-block visible-sm-block visible-xs-inline-block text-left">
                        <small>{!! $element->title !!}:</small>
                      </p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                      <div class="pull-right">
                        <a href="{{ action( 'Admin\\' . $controllerName . 'Controller@edit', [
                          'id'          => $id,
                          'element_id'  => $element->id
                        ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                      <div class="pull-right">
                        {!! Form::open( [
                          'url'     => action( 'Admin\\' . $controllerName . 'Controller@destroy', [
                            'id'          => $id,
                            'element_id'  => $element->id
                          ] ),
                          'method'  => 'DELETE',
                          'class'   => 'form-horizontal',
                          'files'   => false
                        ] ) !!}
                          <button type="submit" class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i> Eliminar
                          </button>
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </td>
                </tr>{{-- Admin\BrandController --}}
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
