@extends( 'layouts.admin' )

@section('content')
<div class="container">
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
        <div class="panel-heading">Editar {{ $home->brand }}</div>
        <div class="panel-body">
          <div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
            {!! Form::open( [
              'url'     => 'admin/actualizar/' . $home->id,
              'method'  => 'PUT',
              'class'   => 'form-horizontal',
              'files'   => false
            ] ) !!}

              <div class="form-group{{ $errors->has( 'titleH1' ) ? ' has-error' : '' }}">
                {!! Form::label( 'titleH1', 'Título', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'titleH1', $home->titleH1, [
                    'class'     => 'form-control'
                  ] ) !!}

                  @if ($errors->has( 'titleH1' ))
                    <span class="help-block">
                      <strong>{{ $errors->first( 'titleH1' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'sliderFeatures[]' ) ? ' has-error' : '' }}">
                {!! Form::label( 'sliderFeatures', 'Slider de características', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $home->sliderFeatures as $feature )
                  {!! Form::textarea( 'sliderFeatures[]', $feature, [
                    'class' => 'form-control'
                  ] ) !!}
                  @endforeach

                  @if ( $errors->has( 'sliderFeatures[]' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'sliderFeatures[]' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'titleSliderFeatures[]' ) ? ' has-error' : '' }}">
                {!! Form::label( 'titleSliderFeatures[]', 'Markup de los sliders', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $home->titleSliderFeatures as $feature )
                  {!! Form::textarea( 'titleSliderFeatures[]', $feature, [
                    'class' => 'form-control'
                  ] ) !!}
                  @endforeach

                  @if ( $errors->has( 'titleSliderFeatures[]' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'titleSliderFeatures[]' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'titleGalleryFancybox' ) ? ' has-error' : '' }}">
                {!! Form::label( 'titleGalleryFancybox', 'Títulos de galería Fancybox', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'titleGalleryFancybox', $home->titleGalleryFancybox, [
                    'class'     => 'form-control'
                  ] ) !!}

                  @if ( $errors->has( 'titleGalleryFancybox' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'titleGalleryFancybox' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'galleryFancybox[]' ) ? ' has-error' : '' }}">
                {!! Form::label( 'galleryFancybox[]', 'Galería Fancybox', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $home->galleryFancybox as $gallery )
                  {!! Form::textarea( 'galleryFancybox[]', $gallery, [
                    'class' => 'form-control'
                  ] ) !!}
                  @endforeach

                  @if ( $errors->has( 'galleryFancybox[]' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'galleryFancybox[]' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'descriptionGalleryFancybox' ) ? ' has-error' : '' }}">
                {!! Form::label( 'descriptionGalleryFancybox', 'Descripción de galería Fancybox', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'descriptionGalleryFancybox', $home->descriptionGalleryFancybox, [
                    'class' => 'form-control'
                  ] ) !!}

                  @if ( $errors->has( 'descriptionGalleryFancybox' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'descriptionGalleryFancybox' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'titleVersionsGallery' ) ? ' has-error' : '' }}">
                {!! Form::label( 'titleVersionsGallery', 'Título de galería de versiones de auto', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'titleVersionsGallery', $home->titleVersionsGallery, [
                    'class' => 'form-control'
                  ] ) !!}

                  @if ( $errors->has( 'titleVersionsGallery' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'titleVersionsGallery' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'carsDescriptionsGalleryOne[]' ) ? ' has-error' : '' }}">
                {!! Form::label( 'carsDescriptionsGalleryOne[]', 'Descripción de galería de autos', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $home->carsDescriptionsGalleryOne as $one )
                  {!! Form::textarea( 'carsDescriptionsGalleryOne[]', $one, [
                    'class' => 'form-control'
                  ] ) !!}
                  @endforeach

                  @if ( $errors->has( 'carsDescriptionsGalleryOne[]' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'carsDescriptionsGalleryOne[]' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'carsDescriptionsGalleryTwo[]' ) ? ' has-error' : '' }}">
                {!! Form::label( 'carsDescriptionsGalleryTwo[]', 'Descripción de galería de autos', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  @foreach( $home->carsDescriptionsGalleryTwo as $two )
                  {!! Form::textarea( 'carsDescriptionsGalleryTwo[]', $two, [
                    'class' => 'form-control'
                  ] ) !!}
                  @endforeach

                  @if ( $errors->has( 'carsDescriptionsGalleryTwo[]' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'carsDescriptionsGalleryTwo[]' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'titleDrivingAnimation' ) ? ' has-error' : '' }}">
                {!! Form::label( 'titleDrivingAnimation', 'Título de animación de driving', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'titleDrivingAnimation', $home->titleDrivingAnimation, [
                    'class' => 'form-control'
                  ] ) !!}

                  @if ($errors->has( 'titleDrivingAnimation' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'titleDrivingAnimation' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'titleFooter' ) ? ' has-error' : '' }}">
                {!! Form::label( 'titleFooter', 'Título de footer', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'titleFooter', $home->titleFooter, [
                    'class' => 'form-control'
                  ] ) !!}

                  @if ($errors->has( 'titleFooter' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'titleFooter' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has( 'descriptionFooter' ) ? ' has-error' : '' }}">
                {!! Form::label( 'descriptionFooter', 'Descripción del footer', [
                  'class' => 'col-md-3 control-label'
                ] ) !!}

                <div class="col-md-9">
                  {!! Form::text( 'descriptionFooter', $home->descriptionFooter, [
                    'class' => 'form-control'
                  ] ) !!}

                  @if ( $errors->has( 'descriptionFooter' ) )
                    <span class="help-block">
                      <strong>{{ $errors->first( 'descriptionFooter' ) }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-2 col-md-offset-6">
                  <button type="submit" class="btn btn-primary">
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  $( document ).on( 'ready', function ( ) {
    tinymce.init( {
      selector:   'textarea',
      height:     300,
      plugins:    [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code'
      ],
      toolbar:    'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
      preview_styles: false,
      automatic_uploads: true,
      file_browser_callback_types: 'file image media'
    } );
  } );
</script>
@endsection
