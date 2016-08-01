<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'cars' )->insert( [
      'model'                       => 'HIGHLANDER LE',
      'technical_specifications_id' => 1,
      'external_specifications_id'  => 1,
      'internal_specifications_id'  => 1
    ] );

    DB::table( 'cars' )->insert( [
      'model'                       => 'HIGHLANDER XLE',
      'technical_specifications_id' => 2,
      'external_specifications_id'  => 2,
      'internal_specifications_id'  => 2
    ] );
  }
}
