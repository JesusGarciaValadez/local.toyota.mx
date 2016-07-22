@extends('layouts.app')

@section( 'title', 'Highlander 2016' )

@section( 'header' )
  @parent
@endsection

@section('content')
  <section class="cover">
    <div id="cover"></div>
    <div class="titulo fadeIn animated">
      <h1><span>Prius</span> 2016.</h1>
      <h2>Un mejor auto<span> para un mejor mundo, para un mejor tú</span></h2>
      <div class="btvideo">
        <span><p>Ve el video y descubre la grandeza de Prius.</p></span>
        <span><a class="fancybox-media" href="https://www.youtube.com/watch?v=a33pze_sSY4"></a></span>
      </div>
    </div>
    <span class="mouse fadeIn animated"><span class="mouse-dot"></span> Explora hacia abajo y descúbrelo.</span>
  </section>
  <section class="colores">
    <div id="colores"></div>
    <!-- Cambiar -->
    <h2 class="animated">Un nuevo diseño, atlético y dinámico. <span>Afirmación de belleza y arte.</span></h2>
    <!-- Cambiar -->
    <div id="container" class="container">
      {!! Html::image( 'assets/images/reel360/blanco/1.jpg' ) !!}
      <div class="new-Menu360">
        <p>Elige un color</p>
        <div class="contColors"></div>
        <span>Rojo</span>
      </div>
      <div class="threesixty car">
        <div class="spinner">
          <span>0%</span>
        </div>
        <ol class="threesixty_images"></ol>
      </div>
    </div>
  </section>
  <section class="highlights">
    <div id="highlights"></div>
    <div class="container">
      <ul class="highs">
        <li>
          <div>
            <!-- Cambiar -->
            <h1 class="animated">Diseño <span>exterior.</span></h1>
            <p>El frente en forma trapezoidal le confiere una silueta imponente, atlética y dinámica</p>
            <p>El diseño de sus faros y la parrilla central cromada al centro lo hacen ver mucho más lujoso</p>
            <p>Elegante y refinado diseño en luces traseras. Impresionante por donde se vea</p>
            <p>Espejos laterales eléctricos aerodinámicos que reducen el ruido del viento</p>
            <!-- Cambiar -->
          </div>
          <div>
            {!! Html::image( 'assets/images/highlight/highlight01.jpg' ) !!}
          </div>
        </li>
        <li>
          <div>
            <!-- Cambiar -->
            <h1 class="animated">Diseño <span>interior.</span></h1>
            <p>Tablero atractivo, con look deportivo, toda la información que necesitas fácil de leer</p>
            <p>El diseño y posición de sus asientos crean una atmósfera de espacio y confort total</p>
            <p>La cajuela de Yaris Sedán no tiene rival, es la más amplia dentro de su mercado</p>
            <p>Gran tamaño en la tapa de la cajuela, será muy fácil colocar objetos voluminosos</p>
            <!-- Cambiar -->
          </div>
          <div>
            {!! Html::image( 'assets/images/highlight/highlight02.jpg' ) !!}
          </div>
        </li>
        <li>
          <div>
            <!-- Cambiar -->
            <h1 class="animated">Driving <span>performance</span></h1>
            <p>Distintivo tipo Catamarán que permite ahorro en combustible hasta del 5%</p>
            <p>Forma aerodinámica que mejora su rendimiento. Coeficiente aerodinámico de 0.28</p>
            <p>Transmisión CVT-iS con siete cambios sensitivos. Única en su segmento</p>
            <p>Mejorada dirección (Electric Power Steering) con asistencia variable sensible a la velocidad</p>
            <!-- Cambiar -->
          </div>
          <div>
            {!! Html::image( 'assets/images/highlight/highlight03.jpg' ) !!}
          </div>
        </li>
        <li>
          <div>
            <!-- Cambiar -->
            <h1 class="animated">Seguridad<span></span></h1>
            <p>Refuerzos estratégicos que protegen a todos sus ocupantes ante cualquier eventualidad</p>
            <p>Destacada combinación en el sistema de frenado ABS Y BA</p>
            <p>Alto nivel de seguridad pasiva que incorpora bolsas de aire frontales en todas sus versiones</p>
            <p>Estructura completamente rediseñada que maximiza su fortaleza y rigidez</p>
            <!-- Cambiar -->
          </div>
          <div>
            {!! Html::image( 'assets/images/highlight/highlight04.jpg' ) !!}
          </div>
        </li>
      </ul>
      <div class="menuHigh">
        <span class="fa fa-angle-up"></span>
        <ul>
          <!-- Cambiar -->
          <li class="activo">Diseño exterior.</li>
          <li>Diseño interior.</li>
          <li>Driving performance</li>
          <li>Seguridad</li>
          <!-- Cambiar -->
        </ul>
        <span class="fa fa-angle-down"></span>
      </div>
    </div>
  </section>
  <section class="galeria">
    <div id="galeria"></div>
    <!-- Cambiar -->
    <h2 class="animated">Su nuevo diseño te dejará sin palabras.</h2>
    <!-- Cambiar -->
    <div>
      <span></span>
      <div class="container">
        <div class="contGale">
          <div>
            <!-- Cambiar -->
            <ul>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-01.jpg" title="Luces traseras integradas a la carrocería que lo hacen ver dinámico.">
                  {!! Html::image( 'assets/images/thumbs/01-thumb.jpg' ) !!}
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-02.jpg" title="Su rediseño se nota en cualquier parte del automóvil.">
                  {!! Html::image( 'assets/images/thumbs/02-thumb.jpg' ) !!}
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-03.jpg" title="Suspensión mejorada para tener mayor tracción y sensación de control.">
                  {!! Html::image( 'assets/images/thumbs/03-thumb.jpg' ) !!}
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-04.jpg" title="Incomparable espacio en cajuela, podrás llevar lo que quieras.">
                  {!! Html::image( 'assets/images/thumbs/04-thumb.jpg' ) !!}
                </a>
              </li>
            </ul>
            <ul>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-05.jpg" title="Sensación confortable de conducción, las mejores transmisiones manuales son nuestras.">
                  {!! Html::image( 'assets/images/thumbs/05-thumb.jpg') !!}
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-06.jpg" title="Aceleración y fuerza, palabras que describen el motor de Yaris Sedán 2017.">
                  {!! Html::image( 'assets/images/thumbs/06-thumb.jpg') !!}
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-07.jpg" title="Equipado para que todos tus trayectos sean mucho más divertidos.">
                  {!! Html::image( 'assets/images/thumbs/07-thumb.jpg') !!}
                </a>
              </li>
              <li>
                <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-08.jpg" title="Atractivo tablero con look deportivo. Información importante a tu alcance.">
                  {!! Html::image( 'assets/images/thumbs/08-thumb.jpg') !!}
                </a>
              </li>
            </ul>
            <!-- Cambiar -->
          </div>
          <div class="anuncio">
            <span>
              <!-- Cambiar -->
              <p>El rediseño del <span>Yaris Sedán</span> se perfeccionó, con líneas fuertes y definidas que le dan un “look más robusto” colocándolo a la vanguardia para volverlo referencia para todos los autos de su categoría.</p>
              <!-- Cambiar -->
              <!--
              {!! Html::link( '', 'Conoce Más', [
                'class' => 'boton'
              ] ) !!}
              -->
            </span>
          </div>
        </div>
      </div>
      <div class="bx-controls-direction">
        <span id="prev"></span>
        <span class="contador"><sup></sup>&frasl;<sub></sub></span>
        <span id="next"></span>
      </div>
    </div>
  </section>
  <!--
  <section class="highlights2">
    <div id="highlights2"></div>
    <div class="container">
      <h2 class="animated">Descúbre <span>RAV4.</span></h2>
      <div id="especial">
        <div class="menu animated">
          <ul>
            <li><span></span>Menú</li>
            <li><span></span>Navegación</li>
            <li><span></span>Teléfono</li>
          </ul>
          <ul>
            <li><span></span>Bluetooth</li>
            <li><span></span>Audio</li>
            <li><span></span>Información de viaje</li>
          </ul>
        </div>
      </div>
      <div class="parrafo">
        <p>Navega y conoce todas las alternativas que te ofrece la pantalla de <span>RAV4.</span></p>
        <p>Con su <span>sistema de navegación</span> no habrá dirección a la que no llegues.</p>
        <p><span>Contesta tu teléfono</span> sin necesidad de quitar las manos del volante.</p>
        <p>Conectividad por completo aprovecha su <span>Bluetooth</span> y diviértete.</p>
        <p>Haz más divertidas tus aventuras y <span>lleva tu música</span> a todas partes.</p>
        <p>Conoce lo necesario de tu viaje para que <span>nada te detenga.</span></p>
      </div>
      <div class="menufle">
        <span class="prev">
          <i class="disabled"></i>
        </span>
        <span class="contador"><sup>1</sup>&frasl;<sub>6</sub></span>
        <span class="next">
          <i></i>
        </span>
      </div>
    </div>
  </section>
  -->
  <section class="versiones">
    <div id="versiones"></div>
    <div class="container">
      <!-- Cambiar -->
      <h2 class="animated"><span>Versiones</span> HIGHLANDER  2016.</h2>
      <!-- Cambiar -->
      <div class="modelos">
        <div>
          <div>
            <!-- Cambiar -->
            <div>
              {!! Html::image( 'assets/images/versiones/img_lateral.png') !!}
              <h3>HIGHLANDER LE</h3>
              <h5> DESDE $501,20000<sup>MN</sup></h5>
              <ul>
                <li>Faros elipsoidales tipo proyector.</li>
                <li>Manijas al color de la carrocería.</li>
                <li>Parrilla negra con acentos cromados.</li>
                <li>Aire acondicionado manual de 3 zonas.</li>
              </ul>
              <span></span>
              <a href="especificaciones/coremt" class="link">Ver detalle</a>
            </div>
            <!-- Cambiar -->
            <!-- Cambiar -->
            <div>
              {!! Html::image( 'assets/images/versiones/img_lateral.png') !!}
              <h3>HIGHLANDER XLE</h3>
              <h5>DESDE $565,20000<sup>MN</sup></h5>
              <ul>
                <li>Volante con ajuste de altura y profundidad.</li>
                <li>Control de velocidad crucero.</li>
                <li>Espejos laterales eléctricos.</li>
              </ul>
              <span></span>
              <a href="especificaciones/corectvis" class="link">Ver detalle</a>
            </div>
            <!-- Cambiar -->
          </div>
          <div>
            <!-- Cambiar -->
            <div>
              {!! Html::image( 'assets/images/versiones/img_lateral.png') !!}
              <h3>HIGHLANDER LIMITED PR</h3>
              <h5>DESDE $634,90000<sup>MN</sup></h5>
              <ul>
                <li>Compuerta trasera tipo hatch con medallón independiente y control remoto.</li>
                <li>Espejos laterales con sistema de monitoreo de punto ciego (BSM).</li>
                <li>Faros de niebla delanteros.</li>
              </ul>
              <span></span>
              <a href="especificaciones/corectvis" class="link">Ver detalle</a>
            </div>
            <!-- Cambiar -->
            <!-- Cambiar -->
            <div>
              {!! Html::image( 'assets/images/versiones/img_lateral.png') !!}
              <h3>HIGHLANDER LIMITED</h3>
              <h5>DESDE $656,70000<sup>MN</sup></h5>
              <ul>
                <li>Quemacocos eléctrico.</li>
                <li>Asiento del conductor de 8 posiciones con ajustes eléctricos y memoria.</li>
                <li>Cámara de visión trasera.</li>
                <li>Pantalla touchscreen de 8"</li>
                <li>2 audífonos inalámbricos</li>
              </ul>
              <span></span>
              <a href="especificaciones/corectvis" class="link">Ver detalle</a>
            </div>
            <!-- Cambiar -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="manejo">
    <div id="manejo"></div>
    <div class="container">
      <div>
        <!-- Cambiar -->
        <h2 class="animated">Un subcompacto funcional y sumamente atractivo.</span></h2>
        <!-- Cambiar -->
      </div>
    </div>
  </section>
  <section class="descanso">
    <div id="descanso"></div>
    <div class="container">
      <div>
        <!-- Cambiar -->
        <h1>Eficiente desempeño<br>en cada momento.</h1>
        <!-- Cambiar -->
        <span></span>
        <!-- Cambiar -->
        <p>La solución ideal para los que buscan mejor rendimiento de combustible.</p>
        <!-- Cambiar -->
        <a href="distribuidores" class="boton">Consíguelo aquí</a>
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