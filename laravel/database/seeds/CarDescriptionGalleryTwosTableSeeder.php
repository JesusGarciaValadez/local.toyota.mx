<?php

use Illuminate\Database\Seeder;

class CarDescriptionGalleryTwosTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'car_description_gallery_twos' )->insert( [
      'brands_id' => 1,
      'content'   => '<div>
          <img src="assets/images/versiones/img_lateral.png" />
          <h3>Highlander Limited PR</h3>
          <h5>DESDE $634,900.00<sup>MN</sup></h5>
          <ul>
            <li>Techo panorámico.</li>
            <li>Luces de cortesía en espejos laterales.</li>
            <li>Asientos delanteros con ventilación.</li>
            <li>Sistema de monitoreo de punto ciego. </li>
          </ul>
          <span></span>
          <a href="especificaciones/corectvis" class="link">Ver detalle</a>
        </div>
        <div>
          <img src="assets/images/versiones/img_lateral.png" />
          <h3>Highlander Limited</h3>
          <h5>DESDE $656,700.00<sup>MN</sup></h5>
          <ul>
            <li>Luces de cortesía en espejos laterales.</li>
            <li>Quemacocos eléctricos.</li>
            <li>Cámara de visión trasera.</li>
            <li>Vestiduras de piel perforada.</li>
            <li>Sistema de monitoreo de punto ciego.</li>
          </ul>
          <span></span>
          <a href="especificaciones/corectvis" class="link">Ver detalle</a>
        </div>'
    ] );
  }
}
