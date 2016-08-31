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
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-lg-8 col-md-8 col-sm-8 text-left">Marca</th>
                  <th class="col-lg-4 col-md-4 col-sm-4 text-center">Acciones</th>
                </tr>
              </thead>
              <tfood></tfood>
              <tbody>
                @foreach ( $brands as $brand )
                <tr>
                  <td class="col-lg-8 col-md-8 col-sm-8"><p><small><span>{!! $brand->name !!}</small></p></td>
                  <td class="col-lg-4 col-md-4 col-sm-4">
                    <div class="clearfix text-center form-group col-lg-6 col-md-6 col-sm-6">
                      <a href="{{ action( 'Admin\AdminController@show', [
                        'id' => $brand->id
                      ] ) }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                    </div>
                    <div class="clearfix text-center col-lg-6 col-md-6 col-sm-6">
                      {!! Form::open( [
                        'url'  => action( 'Admin\AdminController@destroy', [
                          'id' => $brand->id
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
