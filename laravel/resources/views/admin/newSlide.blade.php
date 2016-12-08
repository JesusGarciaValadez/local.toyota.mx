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
        <div class="panel-heading">Editar {{ $typeOfField }}: {!! $brands->brand !!}</div>
        <div class="panel-body">
          <div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
            {!! Form::open( [
              'url'     => $url,
              'method'  => $method,
              'class'   => 'form-horizontal',
              'files'   => false,
              'id'      => 'edit__form'
            ] ) !!}

              <div class="form-group{{ $errors->has( 'title' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title', 'Título', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                {!! Form::hidden( 'id', $brands->id ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title'
                  ] ) !!}

                  @if ($errors->has( 'title' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( $title ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'title_list' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title_list', 'Título', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                {!! Form::hidden( 'id', $brands->id ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title_list', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title_list'
                  ] ) !!}

                  @if ($errors->has( 'title_list' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( $title_list ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'content' ) ? ' has-error' : '' }}">
                {!! Form::label( 'content', 'Slide', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::textarea( 'content', "", [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.content'
                  ] ) !!}

                  @if ($errors->has( 'content' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( $content ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-6">
                  <a href="/{{ $toReturn }}" title="Regresar" target="_self" class="btn btn-primary">
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
        'title'       : '',
        'title_list'  : '',
        'content'     : '',
      }
    },
    methods : {
      /**
       * Submit contact form
       * @param  Event event Event object
       */
      submitEdit : function ( event ) {
        var data          = {
          'title'       : this.newModel.title,
          'title_list'  : this.newModel.title_list,
          'content'     : this.newModel.content
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
          'title'       : !!this.newModel.title.trim( ),
          'title_list'  : !!this.newModel.title_list.trim( ),
          'content'     : !!this.newModel.content.trim( ),
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
