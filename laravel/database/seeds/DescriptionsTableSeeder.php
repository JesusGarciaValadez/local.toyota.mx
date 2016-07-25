<?php

use Illuminate\Database\Seeder;

class DescriptionsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'descriptions' )->insert( [
      'titleH1'                      => '<h2 class="animated">Un nuevo diseño, atlético y dinámico. <span>Afirmación de belleza y arte.</span></h2>',
      'sliderFeatures'               => base64_encode(
        serialize( [
          '<li>
            <div>
              <h1 class="animated">Diseño <span>exterior.</span></h1>
              <p>El frente en forma trapezoidal le confiere una silueta imponente, atlética y dinámica</p>
              <p>El diseño de sus faros y la parrilla central cromada al centro lo hacen ver mucho más lujoso</p>
              <p>Elegante y refinado diseño en luces traseras. Impresionante por donde se vea</p>
              <p>Espejos laterales eléctricos aerodinámicos que reducen el ruido del viento</p>
            </div>
            <div>
              <img src="assets/images/highlight/highlight01.jpg" />
            </div>
          </li>',
          '<li>
            <div>
              <h1 class="animated">Diseño <span>interior.</span></h1>
              <p>Tablero atractivo, con look deportivo, toda la información que necesitas fácil de leer</p>
              <p>El diseño y posición de sus asientos crean una atmósfera de espacio y confort total</p>
              <p>La cajuela de Yaris Sedán no tiene rival, es la más amplia dentro de su mercado</p>
              <p>Gran tamaño en la tapa de la cajuela, será muy fácil colocar objetos voluminosos</p>
            </div>
            <div>
              <img src="assets/images/highlight/highlight02.jpg" />
            </div>
          </li>',
          '<li>
            <div>
              <h1 class="animated">Driving <span>performance</span></h1>
              <p>Distintivo tipo Catamarán que permite ahorro en combustible hasta del 5%</p>
              <p>Forma aerodinámica que mejora su rendimiento. Coeficiente aerodinámico de 0.28</p>
              <p>Transmisión CVT-iS con siete cambios sensitivos. Única en su segmento</p>
              <p>Mejorada dirección (Electric Power Steering) con asistencia variable sensible a la velocidad</p>
            </div>
            <div>
              <img src="assets/images/highlight/highlight03.jpg" />
            </div>
          </li>',
          '<li>
            <div>
              <h1 class="animated">Seguridad<span></span></h1>
              <p>Refuerzos estratégicos que protegen a todos sus ocupantes ante cualquier eventualidad</p>
              <p>Destacada combinación en el sistema de frenado ABS Y BA</p>
              <p>Alto nivel de seguridad pasiva que incorpora bolsas de aire frontales en todas sus versiones</p>
              <p>Estructura completamente rediseñada que maximiza su fortaleza y rigidez</p>
            </div>
            <div>
              <img src="assets/images/highlight/highlight04.jpg" />
            </div>
          </li>',
        ] )
      ),
      'titleSliderFeatures'         => base64_encode(
        serialize( [
          '<li class="activo">Diseño exterior.</li>
          <li>Diseño interior.</li>
          <li>Driving performance</li>
          <li>Seguridad</li>'
        ] )
      ),
      'titleGalleryFancybox'        => '<h2 class="animated">Su nuevo diseño te dejará sin palabras.</h2>',
      'galleryFancybox'              => base64_encode(
        serialize( [
          '<ul>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-01.jpg" title="Luces traseras integradas a la carrocería que lo hacen ver dinámico.">
                <img src="assets/images/thumbs/01-thumb.jpg" />
              </a>
            </li>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-02.jpg" title="Su rediseño se nota en cualquier parte del automóvil.">
                <img src="assets/images/thumbs/02-thumb.jpg" />
              </a>
            </li>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-03.jpg" title="Suspensión mejorada para tener mayor tracción y sensación de control.">
                <img src="assets/images/thumbs/03-thumb.jpg" />
              </a>
            </li>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-04.jpg" title="Incomparable espacio en cajuela, podrás llevar lo que quieras.">
                <img src="assets/images/thumbs/04-thumb.jpg" />
              </a>
            </li>
          </ul>
          <ul>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-05.jpg" title="Sensación confortable de conducción, las mejores transmisiones manuales son nuestras.">
                <img src="assets/images/thumbs/05-thumb.jpg" />
              </a>
            </li>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-06.jpg" title="Aceleración y fuerza, palabras que describen el motor de Yaris Sedán 2017.">
                <img src="assets/images/thumbs/06-thumb.jpg" />
              </a>
            </li>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-07.jpg" title="Equipado para que todos tus trayectos sean mucho más divertidos.">
                <img src="assets/images/thumbs/07-thumb.jpg" />
              </a>
            </li>
            <li>
              <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-08.jpg" title="Atractivo tablero con look deportivo. Información importante a tu alcance.">
                <img src="assets/images/thumbs/08-thumb.jpg" />
              </a>
            </li>
          </ul>'
        ] )
      ),
      'descriptionGalleryFancybox'  => '<p>El rediseño del <span>Yaris Sedán</span> se perfeccionó, con líneas fuertes y definidas que le dan un “look más robusto” colocándolo a la vanguardia para volverlo referencia para todos los autos de su categoría.</p>',
      'titleVersionsGallery'        => '<h2 class="animated"><span>Versiones</span> HIGHLANDER  2016.</h2>',
      'carsDescriptionsGalleryOne'  => base64_encode(
        serialize( [
          '<div>
            <img src="assets/images/versiones/img_lateral.png" />
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
          </div>',
          '<div>
            <img src="assets/images/versiones/img_lateral.png" />
            <h3>HIGHLANDER XLE</h3>
            <h5>DESDE $565,20000<sup>MN</sup></h5>
            <ul>
              <li>Volante con ajuste de altura y profundidad.</li>
              <li>Control de velocidad crucero.</li>
              <li>Espejos laterales eléctricos.</li>
            </ul>
            <span></span>
            <a href="especificaciones/corectvis" class="link">Ver detalle</a>
          </div>',
        ] )
      ),
      'carsDescriptionsGalleryTwo'  => base64_encode(
        serialize( [
          '<div>
            <img src="assets/images/versiones/img_lateral.png" />
            <h3>HIGHLANDER LIMITED PR</h3>
            <h5>DESDE $634,90000<sup>MN</sup></h5>
            <ul>
              <li>Compuerta trasera tipo hatch con medallón independiente y control remoto.</li>
              <li>Espejos laterales con sistema de monitoreo de punto ciego (BSM).</li>
              <li>Faros de niebla delanteros.</li>
            </ul>
            <span></span>
            <a href="especificaciones/corectvis" class="link">Ver detalle</a>
          </div>',
          '<div>
            <img src="assets/images/versiones/img_lateral.png" />
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
          </div>'
        ] )
      ),
      'titleDrivingAnimation'       => '<h2 class="animated">Un subcompacto funcional y sumamente atractivo.</span></h2>',
      'titleFooter'                 => '<h1>Eficiente desempeño<br>en cada momento.</h1>',
      'descriptionFooter'           => '<p>La solución ideal para los que buscan mejor rendimiento de combustible.</p>'
    ] );
  }
}
