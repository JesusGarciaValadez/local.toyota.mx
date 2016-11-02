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
        <div class="panel-heading">Crear nuevo modelo de auto @ {!! $brandName !!}</div>
        <div class="panel-body">
          <div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
            {!! Form::open( [
              'url'     => action( 'Admin\CarController@store', [
                'id' => $id
              ] ),
              'method'  => 'POST',
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
                  {!! Form::text( 'title', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title'
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
                  {!! Form::text( 'name', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.name'
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
                  {!! Form::file( 'thumbnail', [
                    'v-model.sync'  => 'newModel.thumbnail'
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
                  {!! Form::text( 'price', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.price'
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
                  {!! Form::textarea( 'description', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.description'
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
                  {!! Form::text( 'Capacidad', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.Capacidad'
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
                  {!! Form::text( 'Potencia', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.Potencia'
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
                  {!! Form::text( 'Cilindros', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.Cilindros'
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
                  {!! Form::text( 'Valvulas', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.Valvulas'
                  ] ) !!}

                  @if ($errors->has( 'Valvulas' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Valvulas' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Valvulas --}}

              <div class="form-group{{ $errors->has( 'Frenos' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Frenos', 'Frenos:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::textarea( 'Frenos', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.Frenos'
                  ] ) !!}

                  @if ($errors->has( 'Frenos' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Frenos' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Frenos --}}

              <div class="form-group{{ $errors->has( 'Rines' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Rines', 'Rines:', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::textarea( 'Rines', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.Rines'
                  ] ) !!}

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
                  {!! Form::file( 'UrlMotor', [
                    'v-model.sync'  => 'newModel.UrlMotor'
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
                  {!! Form::file( 'UrlAuto', [
                    'v-model.sync'  => 'newModel.UrlAuto'
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
                {!! Form::label( 'Faros', 'Faros:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'Faros', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.Faros'
                  ] ) !!}

                  @if ($errors->has( 'Faros' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Faros' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Faros --}}

              <div class="form-group{{ $errors->has( 'SeguridadExterior' ) ? ' has-error' : '' }}">
                {!! Form::label( 'SeguridadExterior', 'Seguridad exterior:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'SeguridadExterior', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.SeguridadExterior'
                  ] ) !!}

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
                {!! Form::label( 'Cristales', 'Cristales:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'Cristales', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.Cristales'
                  ] ) !!}

                  @if ($errors->has( 'Cristales' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Cristales' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Cristales --}}

              <div class="form-group{{ $errors->has( 'EspejosLaterales' ) ? ' has-error' : '' }}">
                {!! Form::label( 'EspejosLaterales', 'Espejos laterales:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'EspejosLaterales', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.EspejosLaterales'
                  ] ) !!}

                  @if ($errors->has( 'EspejosLaterales' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'EspejosLaterales' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- EspejosLaterales --}}

              <div class="form-group{{ $errors->has( 'Techo' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Techo', 'Techo:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'Techo', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.Techo'
                  ] ) !!}

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
                  {!! Form::file( 'UrlInterior', [
                    'v-model.sync'  => 'newModel.UrlInterior'
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
              </div>{{-- Especificaciones técnicas --}}

              <div class="form-group align-right">
                <p class="col-md-10 col-md-offset-1"><strong>Descripción:</strong></p>
              </div>{{-- Descripción --}}

              <div class="form-group{{ $errors->has( 'AcabadosInteriores' ) ? ' has-error' : '' }}">
                {!! Form::label( 'AcabadosInteriores', 'Acabados interiores:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'AcabadosInteriores', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.AcabadosInteriores'
                  ] ) !!}

                  @if ($errors->has( 'AcabadosInteriores' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'AcabadosInteriores' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- AcabadosInteriores --}}

              <div class="form-group{{ $errors->has( 'Asientos' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Asientos', 'Asientos:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'Asientos', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.Asientos'
                  ] ) !!}

                  @if ($errors->has( 'Asientos' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Asientos' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Asientos --}}

              <div class="form-group{{ $errors->has( 'SistemaAudio' ) ? ' has-error' : '' }}">
                {!! Form::label( 'SistemaAudio', 'SistemaAudio:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'SistemaAudio', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.SistemaAudio'
                  ] ) !!}

                  @if ($errors->has( 'SistemaAudio' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'SistemaAudio' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- SistemaAudio --}}

              <div class="form-group{{ $errors->has( 'Confort' ) ? ' has-error' : '' }}">
                {!! Form::label( 'Confort', 'Confort:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'Confort', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.Confort'
                  ] ) !!}

                  @if ($errors->has( 'Confort' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'Confort' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- Confort --}}

              <div class="form-group{{ $errors->has( 'CinturonesSeguridad' ) ? ' has-error' : '' }}">
                {!! Form::label( 'CinturonesSeguridad', 'Cinturones de seguridad:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::textarea( 'CinturonesSeguridad', "", [
                    'class'         => 'form-control',
                    'placeholder'   => '[]',
                    'v-model.sync'  => 'newModel.CinturonesSeguridad'
                  ] ) !!}

                  @if ($errors->has( 'CinturonesSeguridad' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'CinturonesSeguridad' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- CinturonesSeguridad --}}

              <div class="form-group{{ $errors->has( 'SeguridadInterior' ) ? ' has-error' : '' }}">
                {!! Form::label( 'SeguridadInterior', 'Seguridad interior:', [
                  'class' => 'col-md-3 col-md-offset-1 control-label'
                ] ) !!}

                <div class="col-md-8">
                  {!! Form::text( 'SeguridadInterior', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.SeguridadInterior'
                  ] ) !!}

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
                  {!! Form::file( 'Download', [
                    'v-model.sync'  => 'newModel.Download'
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
                  <button type="submit" class="btn btn-success" v-on:click.prevent="submitEdit">
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
@parent
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.1.0.min"><\/script>')</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.3/vue-resource.min.js"></script>
<script>
  contact = new Vue( {
    el      : '#edit__form',
    data    : {
      newModel  : {
        'title'               : '',
        'name'                : '',
        'thumbnail'           : '',
        'price'               : '',
        'description'         : '',
        'Capacidad'           : '',
        'Potencia'            : '',
        'Cilindros'           : '',
        'Valvulas'            : '',
        'Frenos'              : '',
        'Rines'               : '',
        'UrlMotor'            : '',
        'UrlAuto'             : '',
        'Faros'               : '',
        'SeguridadExterior'   : '',
        'Cristales'           : '',
        'EspejosLaterales'    : '',
        'Techo'               : '',
        'UrlInterior'         : '',
        'AcabadosInteriores'  : '',
        'Asientos'            : '',
        'SistemaAudio'        : '',
        'Confort'             : '',
        'CinturonesSeguridad' : '',
        'SeguridadInterior'   : '',
        'Download'            : ''
      }
    },
    methods : {
      /**
       * Submit contact form
       * @param  Event event Event object
       */
      submitEdit : function ( event ) {
        console.log(this.newModel.UrlAuto);
        var data          = {
          'title'               : this.newModel.title,
          'name'                : this.newModel.name,
          'thumbnail'           : this.newModel.thumbnail,
          'price'               : this.newModel.price,
          'description'         : this.newModel.description,
          'Capacidad'           : this.newModel.Capacidad,
          'Potencia'            : this.newModel.Potencia,
          'Cilindros'           : this.newModel.Cilindros,
          'Valvulas'            : this.newModel.Valvulas,
          'Frenos'              : this.newModel.Frenos,
          'Rines'               : this.newModel.Rines,
          'UrlMotor'            : this.newModel.UrlMotor,
          'UrlAuto'             : this.newModel.UrlAuto,
          'Faros'               : this.newModel.Faros,
          'SeguridadExterior'   : this.newModel.SeguridadExterior,
          'Cristales'           : this.newModel.Cristales,
          'EspejosLaterales'    : this.newModel.EspejosLaterales,
          'Techo'               : this.newModel.Techo,
          'UrlInterior'         : this.newModel.UrlInterior,
          'AcabadosInteriores'  : this.newModel.AcabadosInteriores,
          'Asientos'            : this.newModel.Asientos,
          'SistemaAudio'        : this.newModel.SistemaAudio,
          'Confort'             : this.newModel.Confort,
          'CinturonesSeguridad' : this.newModel.CinturonesSeguridad,
          'SeguridadInterior'   : this.newModel.SeguridadInterior,
          'Download'            : this.newModel.Download
        }

        if ( !this.isValid ) {
          this.message  = 'Hay un campo que no esta correctamente lleno. Por favor, revisa de nuevo.';
          alert( this.message );
        } else {
          editForm      = document.getElementById( 'edit__form' ).submit();
        }
      }
    },

    // computed property for form validation state
    computed: {
      validation: function () {
        return {
          'title'               : !!this.newModel.title.trim( ),
          'name'                : !!this.newModel.name.trim( ),
          'thumbnail'           : !!this.newModel.thumbnail.trim( ),
          'price'               : !!this.newModel.price.trim( ),
          'description'         : !!this.newModel.description.trim( ),
          'Capacidad'           : !!this.newModel.Capacidad.trim( ),
          'Potencia'            : !!this.newModel.Potencia.trim( ),
          'Cilindros'           : !!this.newModel.Cilindros.trim( ),
          'Valvulas'            : !!this.newModel.Valvulas.trim( ),
          'Frenos'              : !!this.newModel.Frenos.trim( ),
          'Rines'               : !!this.newModel.Rines.trim( ),
          'UrlMotor'            : !!this.newModel.UrlMotor.trim( ),
          'UrlAuto'             : !!this.newModel.UrlAuto.trim( ),
          'Faros'               : !!this.newModel.Faros.trim( ),
          'SeguridadExterior'   : !!this.newModel.SeguridadExterior.trim( ),
          'Cristales'           : !!this.newModel.Cristales.trim( ),
          'EspejosLaterales'    : !!this.newModel.EspejosLaterales.trim( ),
          'Techo'               : !!this.newModel.Techo.trim( ),
          'UrlInterior'         : !!this.newModel.UrlInterior.trim( ),
          'AcabadosInteriores'  : !!this.newModel.AcabadosInteriores.trim( ),
          'Asientos'            : !!this.newModel.Asientos.trim( ),
          'SistemaAudio'        : !!this.newModel.SistemaAudio.trim( ),
          'Confort'             : !!this.newModel.Confort.trim( ),
          'CinturonesSeguridad' : !!this.newModel.CinturonesSeguridad.trim( ),
          'SeguridadInterior'   : !!this.newModel.SeguridadInterior.trim( ),
          'Download'            : !!this.newModel.Download.trim( )
        }
      },
      isValid: function () {
        var validation = this.validation
        return Object.keys( validation ).every( function ( key ) {
          console.log( key, validation[ key ] );
          return validation[ key ];
        } );
      }
    },
  } );
</script>
@endsection
