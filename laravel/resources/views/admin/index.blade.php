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
                  <th class="text-left">Marca</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tfood></tfood>
              <tbody>
                @foreach ( $brands as $brand )
                <tr>
                  <td><p><small><span>{!! $brand->brand !!}</small></p></td>
                  <td>
                    <div class="clearfix form-group col-md-6 col-md-offset-3">
                      <a href="{{ action( 'Admin\AdminController@show', [ 'id' => $brand->id ] ) }}" class="btn btn-primary col-md-5"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                      <div class="col-md-4 col-md-offset-1">
                        {!! Form::open( [ 'url' => 'admin/borrar/' . $brand->id, 'method' => 'DELETE', 'class' => 'form-horizontal', 'files' => false ] ) !!}
                          <button type="submit" class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i> Eliminar
                          </button>
                        {!! Form::close() !!}
                      </div>
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
