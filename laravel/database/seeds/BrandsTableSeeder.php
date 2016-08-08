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
      'brand'                             => 'Toyota Highlander',
      'title_h1'                          => '<h2 class="animated">Desde cualquier ángulo te parecerá espectacular.</h2>',
      'slider_features_id'                => 1,
      'title_slider_features_id'          => 1,
      'title_gallery_fancybox'            => '<h2 class="animated">Su nuevo diseño te dejará sin palabras.</h2>',
      'gallery_fancyboxes_id'             => 1,
      'description_gallery_fancybox'      => '<p>Cada espacio diseñado en <span> Highlander </span> está pensado con un propósito, ya sea comodidad, seguridad o lujo, pero todo tiene una razón de ser.</p>',
      'title_versions_gallery'            => '<h2 class="animated"><span>Versiones</span> HIGHLANDER  2016.</h2>',
      'car_description_gallery_one_id'    => 1,
      'car_description_gallery_two_id'    => 1,
      'title_driving_animation'           => '<h2 class="animated">Un subcompacto funcional y sumamente atractivo.</span></h2>',
      'title_footer'                      => '<h1>Eficiente desempeño<br>en cada momento.</h1>',
      'description_footer'                => '<p>La solución ideal para los que buscan mejor rendimiento de combustible.</p>'
    ] );
  }
}
