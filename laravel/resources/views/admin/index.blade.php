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
        <div class="panel-heading">Recetas</div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
              <thead>
                <tr class="row">
                  <th class="col-lg-8 col-md-6 col-sm-6  col-xs-6 text-left">Marca</th>
                  <th class="col-lg-4 col-md-6 col-sm-6  col-xs-6 text-center">Acciones</th>
                </tr>
              </thead>
              <tfoot></tfoot>
              <tbody>
                @foreach ( $brands as $brand )
                <tr class="row">
                  <td class="col-lg-8 col-md-6 col-sm-6 col-xs-6">{!! $brand->name !!}</td>
                  <td class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="text-center col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                      <a href="{{ action( 'Admin\AdminController@show', [
                        'id' => $brand->id
                      ] ) }}" class="btn btn-primary col-xs-12"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                    <div class="text-center col-lg-6 col-md-6 col-sm-6 col-xs-12 visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                      {!! Form::open( [
                        'url'  => action( 'Admin\AdminController@destroy', [
                          'id' => $brand->id
                        ] ),
                        'method'  => 'DELETE',
                        'class'   => 'form-horizontal',
                        'files'   => false
                      ] ) !!}
                        <button type="submit" class="btn btn-danger col-xs-12">
                          <i class="glyphicon glyphicon-trash"></i> Eliminar
                        </button>
                      {!! Form::close() !!}
                    </div>
                  </td>
                </tr>
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
