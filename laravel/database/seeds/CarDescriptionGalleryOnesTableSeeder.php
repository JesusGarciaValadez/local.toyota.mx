<?php

use Illuminate\Database\Seeder;

class CarDescriptionGalleryOnesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'car_description_gallery_ones' )->insert( [
      'brands_id' => 1,
      'content'   => '<div>
          <img src="assets/images/versiones/img_lateral.png" />
          <h3>Highlander LE</h3>
          <h5> DESDE $501,200.00<sup>MN</sup></h5>
          <ul>
            <li>Parrilla negra con acentos cromados.</li>
            <li>Espejos laterales eléctricos.</li>
            <li>Pantalla multi-información táctil de 6.1".</li>
            <li>Alarma e inmovilizador.</li>
          </ul>
          <span></span>
          <a href="especificaciones/coremt" class="link">Ver detalle</a>
        </div>
        <div>
          <img src="assets/images/versiones/img_lateral.png" />
          <h3>Highlander XLE</h3>
          <h5>DESDE $565,200.00<sup>MN</sup></h5>
          <ul>
            <li>Desempañador eléctrico en espejos laterales.</li>
            <li>Faros de niebla delanteros.</li>
            <li>Pantalla multi-información táctil de 8".</li>
            <li>Smart key</li>
          </ul>
          <span></span>
          <a href="especificaciones/corectvis" class="link">Ver detalle</a>
        </div>'
    ] );
  }
}
