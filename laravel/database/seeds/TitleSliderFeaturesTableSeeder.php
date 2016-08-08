<?php

use Illuminate\Database\Seeder;

class TitleSliderFeaturesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'title_slider_features' )->insert( [
      'brands_id' => 1,
      'content'   => '<li class="activo">Diseño exterior.</li>
        <li>Diseño interior.</li>
        <li>Driving performance</li>
        <li>Seguridad</li>'
    ] );
  }
}
