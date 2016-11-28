@extends('layouts.app')

@section( 'title', $brand->title )

@section( 'description', $brand->description )

@section( 'header' )
  @parent
@endsection

@section('content')
<section class="especificaciones" data-modelo="{{ $car->name }}">
  <div id="especificaciones"></div>
  <div class="scroll-Interno">
    <div class="container">
      <div class="cont-retic">
        <h1>{!! $car->title !!}</h1>
        <fieldset>
          <select class="jsn-select select-otraver">
          @foreach( $models as $model )

            @if( $model->name == $car->name )
              <option value="{{ $model->slug }}" selected>{{ $model->name }}</option>
            @else
              <option value="{{ $model->slug }}">{{ $model->name }}</option>
            @endif

          @endforeach
          </select>
        </fieldset>
      </div>
      <div class="cont-retic">
        <!-- Especificaciones Tecnicas -->
        <div class="eTecnicas">
          <h2>Especificaciones técnicas</h2>
          <div class="espMotor">
            <dl>
              <dd>
                <img src="{{ env( 'APP_URL' ) . '/' . $car->technicalSpecifications->description[ 'UrlMotor' ] }}" class="jsn-UrlMotor" alt="Motor">
              </dd>
              <dd>
                <dl>
                  <dt>
                    <h3>Motor</h3>
                  </dt>
                  <dd class="jsn-Capacidad">
                    <div class="icon-motor">
                      <img src="{{ env( 'APP_URL' ) . '/assets/images/icons/icn-01.jpg' }}">
                    </div>
                    <div class="motor">
                      <p>{{ $car->technicalSpecifications->description[ 'Motor' ][ 'Capacidad' ] }}</p>
                      <small>Cilindrada / capacidad</small>
                    </div>
                  </dd>
                  <dd class="jsn-Potencia">
                    <div class="icon-motor">
                      <img src="{{ env( 'APP_URL' ) . '/assets/images/icons/icn-02.jpg' }}">
                    </div>
                    <div>
                      <p>{{ $car->technicalSpecifications->description[ 'Motor' ][ 'Potencia' ] }}</p>
                      <small>potencia máxima hp @ rpm</small>
                    </div>
                  </dd>
                  <dd class="jsn-Cilindros">
                    <div class="icon-motor">
                      <img src="{{ env( 'APP_URL' ) . '/assets/images/icons/icn-03.jpg' }}">
                    </div>
                    <div>
                      <p>{{ $car->technicalSpecifications->description[ 'Motor' ][ 'Cilindros' ] }}</p>
                      <small>Número de cilindros / configuración</small>
                    </div>
                  </dd>
                  <dd class="jsn-Valvulas">
                    <div class="icon-motor">
                      <img src="{{ env( 'APP_URL' ) . '/assets/images/icons/icn-04.jpg' }}">
                    </div>
                    <div>
                      <p>{{ $car->technicalSpecifications->description[ 'Motor' ][ 'Valvulas' ] }}</p>
                      <small>Torque máximo lb.pie @ rpm</small>
                    </div>
                  </dd>
                </dl>
              </dd>
            </dl>
          </div>
          <div>
            <div class="espFrenos jsn-Frenos">
              <dl>
                <dt>
                  <h3>Frenos</h3>
                </dt>
                @foreach( $car->technicalSpecifications->description[ 'Frenos' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
            <div class="espRines jsn-Rines">
              <dl>
                <dt><h3>Neumáticos / Rines</h3></dt>
                @foreach( $car->technicalSpecifications->description[ 'Rines' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
          </div>
        </div>
        <!-- Fin Especificaciones Tecnicas -->
      </div>
      <!-- Inicio auto -->
      <div class="cont-imgs">

        <img class="jsn-UrlAuto" src="{{ env( 'APP_URL' ) . '/' . $car->technicalSpecifications->description[ 'UrlAuto' ] }}">

      </div>
      <!-- Fin auto -->
      <!-- Inicio exterior -->
      <div class="cont-retic">
        <div class="extCarro">
          <h2>Exterior</h2>
          <div class="cont-border">
            <div class="extFaros jsn-Faros">
              <dl>
                <dt>
                  <h3>Visibilidad</h3>
                </dt>
                @foreach( $car->externalSpecifications->description[ 'Visibilidad' ][ 'Cristales' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
            <div class="extSeguridadExterior jsn-SeguridadExterior">
              <dl>
                <dt>
                  <h3>Apariencia</h3>
                </dt>
                @foreach( $car->externalSpecifications->description[ 'SeguridadExterior' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
          </div>
          <div class="cont-border">
            <div class="extVisibilidad">
              <dl>
                <dt>
                  <h3>Dimensiones</h3>
                </dt>
                <dt class="jsn-VisibilidadCristales">
                  <dl>
                    @foreach( $car->externalSpecifications->description[ 'Visibilidad' ][ 'Cristales' ] as $key => $phrase )

                    <dd>
                      <p>{{ $phrase }}</p>
                    </dd>

                    @endforeach
                  </dl>
                </dt>
                <dt class="jsn-VisibilidadEspejosLaterales">
                  <dl>
                    <dt>
                      <h6>Pesos y capacidades</h6>
                    </dt>
                    @foreach( $car->externalSpecifications->description[ 'Visibilidad' ][ 'EspejosLaterales' ] as $key => $phrase )

                    <dd>
                      <p>{{ $phrase }}</p>
                    </dd>

                    @endforeach
                  </dl>
                </dt>
              </dl>
            </div>
            <div class="extTeco jsn-Techo">
              <dl>
                <dt>
                  <h3>Pesos y capacidades</h3>
                </dt>
                @foreach( $car->externalSpecifications->description[ 'Techo' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
          </div>
        </div>
      </div>
      <!-- fin exterior -->

      <!-- Inicio auto interior-->
      <div class="cont-imgs interna">
        <img class="jsn-UrlInterior" src="{{ env( 'APP_URL' ) . '/' . $car->externalSpecifications->description[ 'UrlInterior' ] }}">
      </div>
      <!-- Fin auto interior-->

      <!-- Inicio interior -->
      <div class="cont-retic">
        <div class="intCarro">
          <h2>Interior</h2>
          <div class="cont-border">
            <div class="extAcabadosInteriores jsn-AcabadosInteriores">
              <dl>
                <dt>
                  <h3>Acabados interiores</h3>
                </dt>

                @foreach( $car->internalSpecifications->description[ 'AcabadosInteriores' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
            <div class="extAsientos jsn-Asientos">
              <dl>
                <dt>
                  <h3>Dimensiones</h3>
                </dt>

                @foreach( $car->internalSpecifications->description[ 'Asientos' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
          </div>
          <div class="cont-border">
            <div class="extSistemaAudio jsn-SistemaAudio">
              <dl>
                <dt>
                  <h3>Equipamiento</h3>
                </dt>

                @foreach( $car->internalSpecifications->description[ 'SistemaAudio' ] as $key => $phrase )
                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
            <div class="extConfort jsn-Confort">
              <dl>
                <dt>
                  <h3>Iluminación</h3>
                </dt>
                @foreach( $car->internalSpecifications->description[ 'Confort' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
          </div>
          <div class="cont-border">
            <div class="extCinturonesSeguridad jsn-CinturonesSeguridad">
              <dl>
                <dt>
                  <h3>Seguridad</h3>
                </dt>
                @foreach( $car->internalSpecifications->description[ 'CinturonesSeguridad' ] as $key => $phrase )

                <dd>
                  <p>{{ $phrase }}</p>
                </dd>

                @endforeach
              </dl>
            </div>
            <div class="extSeguridadInterior jsn-SeguridadInterior">
              <dl>
                <dt>
                  <h3>Transmisión CTVi-S</h3>
                </dt>
                @foreach( $car->internalSpecifications->description[ 'SeguridadInterior' ] as $key => $phrase )

                <dd>
                  <p>{!! $phrase !!}</p>
                </dd>

                @endforeach
              </dl>
            </div>
          </div>
          <a href="{{ env( 'APP_URL' ) . '/' . $car->internalSpecifications->description[ 'Download' ] }}" class="boton jsn-Download" target="_blank">Descargar ficha técnica</a>
        </div>
      </div>
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