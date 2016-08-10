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
      <div class="alert alert-success">
        {{ $error }}
      </div>
      @endforeach
      <div class="panel panel-default">
        <div class="panel-heading">Editar H1: {!! $brands->brand !!}</div>
        <div class="panel-body">
          <div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
            {!! Form::open( [
              'url'     => 'admin/brand/update',
              'method'  => 'PUT',
              'class'   => 'form-horizontal',
              'files'   => false,
              'id'      => 'edit__form'
            ] ) !!}

              <div class="form-group{{ $errors->has( 'title_h1' ) ? ' has-error' : '' }}">
                {!! Form::label( 'title_h1', 'Título H1', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                {!! Form::hidden( 'id', $brands->id ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'title_h1', $brands->title_h1, [
                    'class'         => 'form-control',
                    'v-model.sync'  => 'newModel.title_h1'
                  ] ) !!}

                  @if ($errors->has( 'title_h1' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'title_h1' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" v-on:click.prevent="submitEdit">
                    <i class="fa fa-btn fa-user"></i>Actualizar
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
<script src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.3/vue-resource.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-3.1.0.min"><\/script>')</script>
<script>
  contact = new Vue( {
    el      : '#edit__form',
    data    : {
      send      : false,
      newModel  : {
        titleH1 : '',
      }
    },
    methods : {
      /**
       * Submit contact form
       * @param  Event event Event object
       */
      submitContact : function ( event ) {
        this.send         = true;

        var data          = {
              '_token'  : $( 'input[type="hidden"]' ).val(),
              'titleH1' : this.newModel.titleH1
            },
            contactAction = document.getElementById( 'contact' )
                                    .getAttribute( 'action' );

        if ( this.isValid ) {
          /**
           * Ajax call to back-end and promise handlers
           */

          this.$http.post( contactAction, data )
                    .then( function( response ) {
                      response = response.data;
                      if ( response.response_message === 'success' ) {
                        this.newModel.titleH1   = '';
                      }
                    } )
                    .catch( function( error ) {
                      this.message = 'No se pudo enviar la información.';
                    } );
        } else {
          this.message = 'Hay un campo que no esta correctamente lleno. Por favor, revisa de nuevo.';
        }
      }
    },

    // computed property for form validation state
    computed: {
      validation: function () {
        return {
          titleH1   : !!this.newModel.titleH1.trim( ),
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
  */
</script>
@endsection
