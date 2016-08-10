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
        <div class="panel-heading">Editar {{ strtolower( $title ) }} @ marca de automóvil: {!! $home->brand !!}</div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-lg-5 col-md-5 text-left" colspan="5">Elemento</th>
                  <th class="col-lg-7 col-md-7 text-center" colspan="7">Acciones</th>
                </tr>
              </thead>
              <tfood></tfood>
              <tbody>
                <tr>
                  <td class="col-lg-1 col-md-1 col-sm-1">
                    <div class="clearfix text-left">
                      <a href="{{ $toReturn }}" class="btn btn-link"><i class="glyphicon glyphicon-chevron-left"></i> Regresar</a>
                    </div>
                  </td>
                  <td class="col-lg-11 col-md-11 col-sm-11" colspan="11">
                    <div class="clearfix text-left">
                      <a href="#" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Crear nuevo elemento</a>
                    </div>
                  </td>
                </tr>
                @foreach ( $elements as $element )
                <tr>
                  <td class="col-lg-10 col-md-10" colspan="10"><p><small><span>Marca:</small></p></td>
                  <td class="col-lg-1 col-md-1 col-sm-1">
                    <div class="clearfix">
                      <a href="{{ action( 'Admin\\' . $controllerName . 'Controller@edit', [
                        'id'              => $home->id,
                        'slider-features' => $element->id
                      ] ) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                  </td>
                  <td class="col-lg-1 col-md-1 col-sm-1">
                    <div class="clearfix">
                      {!! Form::open( [
                        'url'     => url()->current() . 'destroy',
                        'method'  => 'DELETE',
                        'class'   => 'form-horizontal',
                        'files'   => false
                      ] ) !!}
                        <button type="submit" class="btn btn-danger">
                          <i class="glyphicon glyphicon-trash"></i> Eliminar
                        </button>
                      {!! Form::close() !!}
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
