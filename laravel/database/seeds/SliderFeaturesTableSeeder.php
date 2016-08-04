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
            <h1 class="animated">Diseño <span>exterior.</span></h1>
            <p>El frente en forma trapezoidal le confiere una silueta imponente, atlética y dinámica</p>
            <p>El diseño de sus faros y la parrilla central cromada al centro lo hacen ver mucho más lujoso</p>
            <p>Elegante y refinado diseño en luces traseras. Impresionante por donde se vea</p>
            <p>Espejos laterales eléctricos aerodinámicos que reducen el ruido del viento</p>
          </div>
          <div>
            <img src="assets/images/highlight/highlight01.jpg" />
          </div>
        </li>
        <li>
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
        </li>
        <li>
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
        </li>
        <li>
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
        </li>'
    ] );
  }
}
