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
        <div>
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
        </div>'
    ] );
  }
}
