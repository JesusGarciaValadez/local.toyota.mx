<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'brands' )->insert( [
      'brand'                             => 'Highlander <span> 2016 </span>',
      'slogan'                            => 'Haremos de tus viajes, <br />los mejores momentos',
      'title_h1'                          => '<h2 class="animated">Desde cualquier ángulo te parecerá espectacular.</h2>',
      'title_gallery_fancybox'            => '<h2 class="animated">CADA PARTE DE ELLA TIENE UN PROPÓSITO.</h2>',
      'description_gallery_fancybox'      => '<p>Cada espacio diseñado en <span> Highlander </span> está pensado con un propósito, ya sea comodidad, seguridad o lujo, pero todo tiene una razón de ser.</p>',
      'title_versions_gallery'            => '<h2 class="animated">CADA UNA TIENE DETALLES QUE TE CONQUISTARÁN.</h2>',
      'car_description_gallery_one_id'    => 1,
      'car_description_gallery_two_id'    => 1,
      'title_driving_animation'           => '<h2 class="animated">CONÓCELA A FONDO Y NO BUSQUES MÁS.</span></h2>',

      'title_footer'                      => '<h1>HIGHLANDER LA CAMIONETA QUE TÚ Y TU FAMILIA ESTABAN ESPERANDO.</h1>',
      'description_footer'                => '<p>La solución ideal para los que buscan mejor rendimiento de combustible.</p>'
    ] );
  }
}
