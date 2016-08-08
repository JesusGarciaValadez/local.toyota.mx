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
        <div>
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
    ] );
  }
}
