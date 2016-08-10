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
      'content'   => '<li class="activo"><span>Sistema de monitoreo de punto ciego.</span></li>
        <li><span>Techo corredizo panorámico.</span></li>
        <li><span>Sistema de entretenimiento trasero.</span></li>
        <li><span>Una camioneta alternativa para ti.</span></li>'
    ] );
  }
}
