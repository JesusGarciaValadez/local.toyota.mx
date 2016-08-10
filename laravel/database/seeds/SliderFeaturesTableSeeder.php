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
    DB::table( 'slider_features' )->insert( [
      'brands_id' => 1,
      'content'   => '<li>
          <div>
            <h1 class="animated"><span>Sistema de monitoreo de punto ciego.</span></h1>
            <p>Seguridad total cuando más lo necesitas, cambia de carril sin ninguna preocupación.</p>
          </div>
          <div>
            <img src="assets/images/highlight/sistema-de-monitoreo.png" />
          </div>
        </li>
        <li>
          <div>
            <h1 class="animated"><span>Techo corredizo panorámico.</span></h1>
            <p>¡Gran vista para todos! Los viajes se disfrutan más cuando admiras el paisaje.</p>
          </div>
          <div>
            <img src="assets/images/highlight/techo-corredizo.png" />
          </div>
        </li>
        <li>
          <div>
            <h1 class="animated"><span>Sistema de entretenimiento trasero.</span></h1>
            <p>Pantalla de 9” y Blu-ray disc para que todos se diviertan sin importar lo largo del viaje.</p>
          </div>
          <div>
            <img src="assets/images/highlight/sistema-de-entretenimiento.png" />
          </div>
        </li>
        <li>
          <div>
            <h1 class="animated"><span>Una camioneta alternativa para ti.</span></h1>
            <p>Sal a donde quieras, se adapta a cualquier Terreno, clima y caminos, ideal para la ciudad o carretera.</p>
          </div>
          <div>
            <img src="assets/images/highlight/palanca.png" />
          </div>
        </li>'
    ] );
  }
}
