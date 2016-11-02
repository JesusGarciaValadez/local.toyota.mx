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
        <div class="panel-heading">Crear nueva galería: {!! $brandName !!}</div>
        <div class="panel-body">
          <div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
            {!! Form::open( [
              'url'     => action( 'Admin\GalleryFancyboxesController@store', [ 'id' => $id ] ),
              'method'  => 'POST',
              'class'   => 'form-horizontal',
              'files'   => true,
              'id'      => 'edit__form'
            ] ) !!}
              {!! Form::hidden( 'id', $id ) !!}

              <div class="form-group{{ $errors->has( 'title' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title', 'Nombre de la galería', [
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

              <div class="form-group{{ $errors->has( 'image_big' ) ? ' has-error' : '' }}">
                {!! Form::label( 'image_big', 'Primera imagen grande', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'image_big', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.image_big'
                  ] ) !!}
                  <p class="help-block">Primera imagen de la galería. Imagen grande.</p>

                  @if ($errors->has( 'image_big' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'image_big' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- image_big --}}

              <div class="form-group{{ $errors->has( 'image_small_1' ) ? ' has-error' : '' }}">
                {!! Form::label( 'image_small_1', 'Segunda imagen grande', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'image_small_1', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.image_small_1'
                  ] ) !!}
                  <p class="help-block">Segunda imagen grande de la galería. Imagen grande.</p>

                  @if ($errors->has( 'image_small_1' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'image_small_1' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- image_small_1 --}}

              <div class="form-group{{ $errors->has( 'image_small_2' ) ? ' has-error' : '' }}">
                {!! Form::label( 'image_small_2', 'Tercera imagen grande', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'image_small_2', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.image_small_2'
                  ] ) !!}
                  <p class="help-block">Tercera imagen de la galería. Imagen grande.</p>

                  @if ($errors->has( 'image_small_2' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'image_small_2' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- image_small_2 --}}

              <div class="form-group{{ $errors->has( 'image_small_3' ) ? ' has-error' : '' }}">
                {!! Form::label( 'image_small_3', 'Cuarta imagen grande', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'image_small_3', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.image_small_3'
                  ] ) !!}
                  <p class="help-block">Cuarta imagen de la galería. Imagen grande.</p>

                  @if ( $errors->has( 'image_small_3' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'image_small_3' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- image_small_3 --}}

              <div class="form-group{{ $errors->has( 'thumb_big' ) ? ' has-error' : '' }}">
                {!! Form::label( 'thumb_big', 'Thumbnail principal de la galería', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'thumb_big', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.thumb_big'
                  ] ) !!}
                  <p class="help-block">Primer thumbnail. Imagen grande.</p>

                  @if ($errors->has( 'thumb_big' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'thumb_big' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- thumb_big --}}

              <div class="form-group{{ $errors->has( 'thumb_small_1' ) ? ' has-error' : '' }}">
                {!! Form::label( 'thumb_small_1', 'Segundo thumbnail', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'thumb_small_1', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.thumb_small_1'
                  ] ) !!}
                  <p class="help-block">Segundo thumbnail. Imagen pequeña.</p>

                  @if ($errors->has( 'thumb_small_1' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'thumb_small_1' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- thumb_small_1 --}}

              <div class="form-group{{ $errors->has( 'thumb_small_2' ) ? ' has-error' : '' }}">
                {!! Form::label( 'thumb_small_2', 'Tercer thumbnail', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'thumb_small_2', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.thumb_small_2'
                  ] ) !!}
                  <p class="help-block">Tercer thumbnail. Imagen pequeña.</p>

                  @if ($errors->has( 'thumb_small_2' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'thumb_small_2' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- thumb_small_2 --}}

              <div class="form-group{{ $errors->has( 'thumb_small_3' ) ? ' has-error' : '' }}">
                {!! Form::label( 'thumb_small_3', 'Cuarto thumbnail', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::file( 'thumb_small_3', [
                    'class'         => '',
                    'v-model.sync'  => 'newModel.thumb_small_3'
                  ] ) !!}
                  <p class="help-block">Cuarto thumbnail. Imagen pequeña.</p>

                  @if ($errors->has( 'thumb_small_3' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'thumb_small_3' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- thumb_small_3 --}}

              <div class="form-group{{ $errors->has( 'title_big' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title_big', 'Título de la primera imagen', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title_big', '', [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title_big'
                  ] ) !!}
                  <p class="help-block">Título de la primera imagen de la galería.</p>

                  @if ($errors->has( 'title_big' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'title_big' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- title_big --}}

              <div class="form-group{{ $errors->has( 'title_small_1' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title_small_1', 'Título de la segunda imagen', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title_small_1', '', [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title_small_1'
                  ] ) !!}
                  <p class="help-block">Título de la segunda imagen de la galería.</p>

                  @if ($errors->has( 'title_small_1' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'title_small_1' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- title_small_1 --}}

              <div class="form-group{{ $errors->has( 'title_small_2' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title_small_2', 'Título de la tercera imagen', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title_small_2', '', [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title_small_2'
                  ] ) !!}
                  <p class="help-block">Título de la tercera imagen de la galería.</p>

                  @if ($errors->has( 'title_small_2' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'title_small_2' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- title_small_2 --}}

              <div class="form-group{{ $errors->has( 'title_small_3' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title_small_3', 'Título de la tercera imagen', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title_small_3', '', [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title_small_3'
                  ] ) !!}
                  <p class="help-block">Título de la cuarta imagen de la galería.</p>

                  @if ($errors->has( 'title_small_3' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'title_small_3' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>{{-- title_small_3 --}}

              <div class="form-group">
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-6">
                  <a href="{{ env( 'APP_URL' ) }}admin/1/gallery-fancyboxes" title="Regresar" target="_self" class="btn btn-primary">
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.1.0.min"><\/script>')</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.3/vue-resource.min.js"></script>
<script>
  contact = new Vue( {
    el      : '#edit__form',
    data    : {
      newModel  : {
        'title'         : '',
        'image_big'     : '',
        'image_small_1' : '',
        'image_small_2' : '',
        'image_small_3' : '',
        'thumb_big'     : '',
        'thumb_small_1' : '',
        'thumb_small_2' : '',
        'thumb_small_3' : '',
        'title_big'     : '',
        'title_small_1' : '',
        'title_small_2' : '',
        'title_small_3' : ''
      }
    },
    methods : {
      /**
       * Submit contact form
       * @param  Event event Event object
       */
      submitEdit : function ( event ) {
        var data          = {
          'title'         : this.newModel.title,
          'image_big'     : this.newModel.image_big,
          'image_small_1' : this.newModel.image_small_1,
          'image_small_2' : this.newModel.image_small_2,
          'image_small_3' : this.newModel.image_small_3,
          'thumb_big'     : this.newModel.thumb_big,
          'thumb_small_1' : this.newModel.thumb_small_1,
          'thumb_small_2' : this.newModel.thumb_small_2,
          'thumb_small_3' : this.newModel.thumb_small_3,
          'title_big'     : this.newModel.title_big,
          'title_small_1' : this.newModel.title_small_1,
          'title_small_2' : this.newModel.title_small_2,
          'title_small_3' : this.newModel.title_small_3
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
          'title'         : !!this.newModel.title.trim( ),
          'image_big'     : !!this.newModel.image_big.trim( ),
          'image_small_1' : !!this.newModel.image_small_1.trim( ),
          'image_small_2' : !!this.newModel.image_small_2.trim( ),
          'image_small_3' : !!this.newModel.image_small_3.trim( ),
          'thumb_big'     : !!this.newModel.thumb_big.trim( ),
          'thumb_small_1' : !!this.newModel.thumb_small_1.trim( ),
          'thumb_small_2' : !!this.newModel.thumb_small_2.trim( ),
          'thumb_small_3' : !!this.newModel.thumb_small_3.trim( ),
          'title_big'     : !!this.newModel.title_big.trim( ),
          'title_small_1' : !!this.newModel.title_small_1.trim( ),
          'title_small_2' : !!this.newModel.title_small_2.trim( ),
          'title_small_3' : !!this.newModel.title_small_3.trim( )
        }
      },
      isValid: function () {
        var validation = this.validation
        return Object.keys( validation ).every( function ( key ) {
          return validation[ key ];
        } );
      }
    },
  } );
</script>
@endsection
