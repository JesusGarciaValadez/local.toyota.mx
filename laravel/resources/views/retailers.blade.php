@extends( 'layouts.app' )

@section( 'title', 'Distribuidores @ Highlander 2016' )

@section( 'header' )
  @parent
@endsection

@section('content')
  <section class="distribuidoras" id="modal-distribuidores">
    <div>
      <div class="col1">
        <div class="mapa" id="mapa_ubicacion"></div>
        <form id="search_dealer">
          <input id="q" type="text" placeholder="" class="search_field">
        </form>
      </div>
      <div class="col2">
        <ul>
          <li class="result"></li>
        </ul>
      </div>
    </div>
  </section>
@endsection

@section( 'footer' )
  @parent
@endsection

@section( 'scripts' )
  @parent
@endsection