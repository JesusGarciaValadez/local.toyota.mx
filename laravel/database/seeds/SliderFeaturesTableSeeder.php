<?php

use Illuminate\Database\Seeder;

class SliderFeaturesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    /** Toyota Highlander */
    DB::table( 'slider_features' )->insert( [
      'brands_id' => 1,
      'title'     => '<li class="activo"><span>Sistema de monitoreo de punto ciego</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Sistema de monitoreo de punto ciego</span></h1>
            <p>Seguridad total cuando más lo necesitas, cambia de carril sin ninguna preocupación.</p>
          </div>
          <div>
            <img src="storage/images/highlight/highlander/sistema-de-monitoreo.png" />
          </div>
        </li>'
    ] );

    DB::table( 'slider_features' )->insert( [
      'brands_id' => 1,
      'title'     => '<li><span>Techo corredizo panorámico</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Techo corredizo panorámico</span></h1>
            <p>¡Gran vista para todos! Los viajes se disfrutan más cuando admiras el paisaje.</p>
          </div>
          <div>
            <img src="storage/images/highlight/highlander/techo-corredizo.png" />
          </div>
        </li>'
    ] );

    DB::table( 'slider_features' )->insert( [
      'brands_id' => 1,
      'title'     => '<li><span>Sistema de entretenimiento trasero</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Sistema de entretenimiento trasero</span></h1>
            <p>Pantalla de 9” y Blu-ray disc para que todos se diviertan sin importar lo largo del viaje.</p>
          </div>
          <div>
            <img src="storage/images/highlight/highlander/sistema-de-entretenimiento.png" />
          </div>
        </li>'
    ] );

    DB::table( 'slider_features' )->insert( [
      'brands_id' => 1,
      'title'     => '<li><span>Una camioneta alternativa para ti</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Una camioneta alternativa para ti</span></h1>
            <p>Sal a donde quieras, se adapta a cualquier Terreno, clima y caminos, ideal para la ciudad o carretera.</p>
          </div>
          <div>
            <img src="storage/images/highlight/highlander/palanca.png" />
          </div>
        </li>'
    ] );

    /** Toyota Sienna */
    DB::table( 'slider_features' )->insert( [
      'brands_id' => 2,
      'title'     => '<li class="activo"><span>Elegancia interior</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Elegancia interior</span></h1>
            <p>Espacio hasta para 8 personas, asientos reclinables tipo capitán tapizados en piel.</p>
            <p>Volante tapizado en piel con calefacción y controles de audio.</p>
            <p>Tres zonas para controlar el clima y controles fáciles de usar.</p>
            <p>Asientos plegables en la tercera fila, mayor espacio para carga abordo.</p>
          </div>
          <div>
            <img src="storage/images/highlight/sienna/asiento.jpg" />
          </div>
        </li>'
    ] );

    DB::table( 'slider_features' )->insert( [
      'brands_id' => 2,
      'title'     => '<li><span>Tecnología de vanguardia</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Tecnología de vanguardia</span></h1>
            <p>Pantalla táctil de 7” y alta resolución, la navegación GPS será muy sencilla.</p>
            <p>Rediseño en el panel de instrumento.</p>
            <p>Opciones para personalizar la información más importante en la pantalla.</p>
          </div>
          <div>
            <img src="storage/images/highlight/sienna/pantalla.jpg" />
          </div>
        </li>'
    ] );

    DB::table( 'slider_features' )->insert( [
      'brands_id' => 2,
      'title'     => '<li><span>Altos estándares de seguridad</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Altos estándares de seguridad</span></h1>
            <p>Monitor de Punto Ciego (BSM) con indicador de luz en el espejo para cambiar de carril.</p>
            <p>Cámara de reversa panorámica.</p>
            <p>Sistema avanzado de bolsas de aire, protección a todos sus pasajeros.</p>
            <p>Sistema de frenos anti bloqueo.</p>
          </div>
          <div>
            <img src="storage/images/highlight/sienna/seguridad.jpg" />
          </div>
        </li>'
    ] );

    DB::table( 'slider_features' )->insert( [
      'brands_id' => 2,
      'title'     => '<li><span>Potencia para ir a donde quieras</span></li>',
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Potencia para ir a donde quieras</span></h1>
            <p>40 puntos de soldado en el chasis ayudan a estabilizar la carrocería y suavizar el manejo.</p>
            <p>Motor 3.5 litros, 6 cilindros, 24 válvulas y 296 hp, ideal para ciudad o carretera.</p>
            <p>Conductos estabilizadores, suavizan el flujo de aire, reducen el ruido del viento y mejoran la eficiencia.</p>
          </div>
          <div>
            <img src="storage/images/highlight/sienna/temperatura.jpg" />
          </div>
        </li>'
    ] );
  }
}
