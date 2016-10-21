@extends( 'layouts.admin' )

@section('content')
<div class="container edit">
  <div class="row">
    <div class="col-md-12">
      @if ( Session::has( 'message' ) )
      <div class="alert alert-{{ Session::get( 'type' ) }}">
        {{ Session::get( 'message' ) }}
      </div>
      @endif
      @foreach( $errors->all( ) as $error )
      <div class="alert alert-warning">
        {{ $error }}
      </div>
      @endforeach
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1>Crear nuevo modelo de auto @ {!! $brandName !!}</h1>
        </div>
        <div class="panel-body">
          <div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
            {!! Form::open( [
              'url'     => action( 'Admin\CarController@update', [
                'id'          => $id,
                'element_id'  => $element_id
              ] ),
              'method'  => 'PUT',
              'class'   => 'form-horizontal',
              'files'   => true,
              'id'      => 'edit__form'
            ] ) !!}
              {!! Form::hidden( 'brands_id', $id ) !!}

              <div class="form-group">
                <p class="col-md-12"><strong>General:</strong></p>
              </div>{{-- General --}}

              <div class="form-group{{ $errors->has( 'title' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title', 'Modelo', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title', $model->title, [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'title' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'title' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- title --}}

              <div class="form-group{{ $errors->has( 'name' ) ? ' has-error' : '' }}">
                {!! Form::label( 'name', 'Nombre', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'name', $model->name, [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'name' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'name' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- name --}}

              <div class="form-group{{ $errors->has( 'thumbnail' ) ? ' has-error' : '' }}">
                {!! Form::label( 'thumbnail', 'Thumbnail', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'thumbnail', $model->thumbnail, [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'thumbnail' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'thumbnail' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- thumbnail --}}

              <div class="form-group{{ $errors->has( 'price' ) ? ' has-error' : '' }}">
                {!! Form::label( 'price', 'Precio', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'price', $model->price, [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'price' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'price' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- price --}}

              <div class="form-group{{ $errors->has( 'description' ) ? ' has-error' : '' }}">
                {!! Form::label( 'description', 'Descripción', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::textarea( 'description', $model->description, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}

                  <p class="help-block">Descripción del modelo de auto que se muestra en el Home</p>

                  @if ($errors->has( 'description' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'description' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- description --}}

              <div class="form-group">
                <p class="col-md-10"><strong>Especificaciones técnicas:</strong></p>
              </div>{{-- Especificaciones técnicas --}}

              <div class="form-group align-right">
                <p class="col-md-10 col-md-offset-1"><strong>Descripción:</strong></p>
              </div>{{-- Descripción --}}

              <div class="form-group align-right">
                <p class="col-md-10 col-md-offset-2"><strong>Motor:</strong></p>
              </div>{{-- Motor --}}

              <div class="form-group{{ $errors->has( 'Capacidad' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Capacidad', 'Capacidad:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::text( 'Capacidad', $model->technicalSpecifications->description[ 'Motor' ][ 'Capacidad' ], [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'Capacidad' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Capacidad' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Capacidad --}}

              <div class="form-group{{ $errors->has( 'Potencia' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Potencia', 'Potencia:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::text( 'Potencia', $model->technicalSpecifications->description[ 'Motor' ][ 'Potencia' ], [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'Potencia' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Potencia' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Potencia --}}

              <div class="form-group{{ $errors->has( 'Cilindros' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Cilindros', 'Cilindros:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::text( 'Cilindros', $model->technicalSpecifications->description[ 'Motor' ][ 'Cilindros' ], [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'Cilindros' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Cilindros' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Cilindros --}}

              <div class="form-group{{ $errors->has( 'Valvulas' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Valvulas', 'Válvulas:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::text( 'Valvulas', $model->technicalSpecifications->description[ 'Motor' ][ 'Valvulas' ], [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'Valvulas' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Valvulas' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Valvulas --}}

              <div class="form-group{{ $errors->has( 'Frenos' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Frenos[]', 'Frenos:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $model->technicalSpecifications->description[ 'Frenos' ] as $brakes )
                  {!! Form::text( 'Frenos[]', $brakes, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'Frenos' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Frenos' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Frenos --}}

              <div class="form-group{{ $errors->has( 'Rines' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Rines[]', 'Rines:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $model->technicalSpecifications->description[ 'Rines' ] as $rin )
                  {!! Form::text( 'Rines[]', $rin, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'Rines' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Rines' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Rines --}}

              <div class="form-group{{ $errors->has( 'UrlMotor' ) ? ' has-error' : '' }}">
                {!! Form::label( 'UrlMotor', 'Imagen del motor:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'UrlMotor', $model->technicalSpecifications->description[ 'UrlMotor' ], [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'UrlMotor' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'UrlMotor' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- UrlMotor --}}

              <div class="form-group{{ $errors->has( 'UrlAuto' ) ? ' has-error' : '' }}">
                {!! Form::label( 'UrlAuto', 'Imagen del auto:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'UrlAuto', $model->technicalSpecifications->description[ 'UrlAuto' ], [
                    'class'         => 'form-control',
                  ] ) !!}

                  @if ($errors->has( 'UrlAuto' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'UrlAuto' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- UrlAuto --}}

              <div class="form-group">
                <p class="col-md-12"><strong>Especificaciones externas:</strong></p>
              </div>{{-- Especificaciones externas --}}

              <div class="form-group align-right">
                <p class="col-md-10 col-md-offset-1"><strong>Descripción:</strong></p>
              </div>{{-- Descripción --}}

              <div class="form-group{{ $errors->has( 'Faros' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Faros[]', 'Faros:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $model->externalSpecifications->description[ 'Faros' ] as $faros )
                  {!! Form::text( 'Faros[]', $faros, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'Faros' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Faros' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Faros --}}

              <div class="form-group{{ $errors->has( 'SeguridadExterior' ) ? ' has-error' : '' }}">
                {!! Form::label( 'SeguridadExterior[]', 'Seguridad exterior:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $model->externalSpecifications->description[ 'SeguridadExterior' ] as $security )
                  {!! Form::text( 'SeguridadExterior[]', $security, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'SeguridadExterior' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'SeguridadExterior' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- SeguridadExterior --}}

              <div class="form-group align-right">
                <p class="col-md-10 col-md-offset-2"><strong>Visibilidad:</strong></p>
              </div>{{-- Visibilidad --}}

              <div class="form-group{{ $errors->has( 'Cristales' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Cristales[]', 'Cristales:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->externalSpecifications->description[ 'Visibilidad' ][ 'Cristales' ] as $cristals )
                  {!! Form::text( 'Cristales[]', $cristals, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'Cristales' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Cristales' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Cristales --}}

              <div class="form-group{{ $errors->has( 'EspejosLaterales' ) ? ' has-error' : '' }}">
                {!! Form::label( 'EspejosLaterales[]', 'Espejos laterales:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->externalSpecifications->description[ 'Visibilidad' ][ 'EspejosLaterales' ] as $mirrors )
                  {!! Form::text( 'EspejosLaterales[]', $mirrors, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'EspejosLaterales' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'EspejosLaterales' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- EspejosLaterales --}}

              <div class="form-group{{ $errors->has( 'Techo' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Techo[]', 'Techo:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->externalSpecifications->description[ 'Techo' ] as $ceil )
                  {!! Form::text( 'Techo[]', $ceil, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'Techo' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Techo' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Techo --}}

              <div class="form-group{{ $errors->has( 'UrlInterior' ) ? ' has-error' : '' }}">
                {!! Form::label( 'UrlInterior', 'Imagen de los interiores:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'UrlInterior', $model->externalSpecifications->description[ 'UrlInterior' ], [
                    'class'         => '',
                  ] ) !!}

                  @if ($errors->has( 'UrlInterior' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'UrlInterior' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- UrlInterior --}}

              <div class="form-group">
                <p class="col-md-12"><strong>Especificaciones internas:</strong></p>
              </div>{{-- Especificaciones internas --}}

              <div class="form-group align-right">
                <p class="col-md-10 col-md-offset-1"><strong>Descripción:</strong></p>
              </div>{{-- Descripción --}}

              <div class="form-group{{ $errors->has( 'AcabadosInteriores' ) ? ' has-error' : '' }}">
                {!! Form::label( 'AcabadosInteriores[]', 'Acabados interiores:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->internalSpecifications->description[ 'AcabadosInteriores' ] as $acabados )
                  {!! Form::text( 'AcabadosInteriores[]', $acabados, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'AcabadosInteriores' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'AcabadosInteriores' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- AcabadosInteriores --}}

              <div class="form-group{{ $errors->has( 'Asientos' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Asientos[]', 'Asientos:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->internalSpecifications->description[ 'Asientos' ] as $seats )
                  {!! Form::text( 'Asientos[]', $seats, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'Asientos' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Asientos' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Asientos --}}

              <div class="form-group{{ $errors->has( 'SistemaAudio' ) ? ' has-error' : '' }}">
                {!! Form::label( 'SistemaAudio[]', 'SistemaAudio:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->internalSpecifications->description[ 'SistemaAudio' ] as $audio )
                  {!! Form::text( 'SistemaAudio[]', $audio, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'SistemaAudio' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'SistemaAudio' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- SistemaAudio --}}

              <div class="form-group{{ $errors->has( 'Confort' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Confort[]', 'Confort:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->internalSpecifications->description[ 'Confort' ] as $confort )
                  {!! Form::text( 'Confort[]', $confort, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'Confort' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Confort' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Confort --}}

              <div class="form-group{{ $errors->has( 'CinturonesSeguridad' ) ? ' has-error' : '' }}">
                {!! Form::label( 'CinturonesSeguridad[]', 'Cinturones de seguridad:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->internalSpecifications->description[ 'CinturonesSeguridad' ] as $seatbelt )
                  {!! Form::text( 'CinturonesSeguridad[]', $seatbelt, [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'CinturonesSeguridad' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'CinturonesSeguridad' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- CinturonesSeguridad --}}

              <div class="form-group{{ $errors->has( 'SeguridadInterior' ) ? ' has-error' : '' }}">
                {!! Form::label( 'SeguridadInterior[]', 'Seguridad interior:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  @foreach( $model->internalSpecifications->description[ 'SeguridadInterior' ] as $security )
                  {!! Form::text( 'SeguridadInterior[]', $security, [
                    'class'         => 'form-control',
                  ] ) !!}
                  @endforeach

                  @if ($errors->has( 'SeguridadInterior' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'SeguridadInterior' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- SeguridadInterior --}}

              <div class="form-group{{ $errors->has( 'Download' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Download', 'Descarga:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'Download', $model->internalSpecifications->description[ 'Download' ], [
                    'class'         => '',
                  ] ) !!}

                  @if ($errors->has( 'Download' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Download' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Download --}}

              <div class="form-group">
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-6">
                  <a href="{{ env( 'APP_URL' ) }}/admin/{{ $id }}/car" title="Regresar" target="_self" class="btn btn-primary">
                    <i class="glyphicon glyphicon-home"></i> Regresar
                  </a>
                </div>
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-6">
                  <button type="submit" class="btn btn-success">
                    <i class="glyphicon glyphicon-ok"></i> Actualizar
                  </button>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section( 'scripts' )

@endsection
