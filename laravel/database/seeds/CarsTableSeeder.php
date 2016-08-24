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
      'brands_id'                   => 1,
      'technical_specifications_id' => 1,
      'external_specifications_id'  => 1,
      'internal_specifications_id'  => 1,
      'title'                       => 'HIGHLANDER <span>LE</span>',
      'name'                        => 'HIGHLANDER LE',
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$501,200.00',
      'description'                 => '<li>Parrilla negra con acentos cromados.</li>
            <li>Espejos laterales eléctricos.</li>
            <li>Pantalla multi-información táctil de 6.1".</li>
            <li>Alarma e inmovilizador.</li>',
      'slug'                        => 'coremt'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 1,
      'technical_specifications_id' => 2,
      'external_specifications_id'  => 2,
      'internal_specifications_id'  => 2,
      'title'                       => 'HIGHLANDER <span>XLE</span>',
      'name'                        => 'HIGHLANDER XLE',
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$565,200.00',
      'description'                 => '<li>Desempañador eléctrico en espejos laterales.</li>
            <li>Faros de niebla delanteros.</li>
            <li>Pantalla multi-información táctil de 8".</li>
            <li>Smart key</li>',
      'slug'                        => 'corectvis'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 1,
      'technical_specifications_id' => 3,
      'external_specifications_id'  => 3,
      'internal_specifications_id'  => 3,
      'title'                       => 'HIGHLANDER <span>CE</span>',
      'name'                        => 'HIGHLANDER CE',
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$501,200.00',
      'description'                 => '<li>Techo panorámico.</li>
            <li>Luces de cortesía en espejos laterales.</li>
            <li>Asientos delanteros con ventilación.</li>
            <li>Sistema de monitoreo de punto ciego. </li>',
      'slug'                        => 'corectvis'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 1,
      'technical_specifications_id' => 4,
      'external_specifications_id'  => 4,
      'internal_specifications_id'  => 4,
      'title'                       => 'HIGHLANDER <span>XCE</span>',
      'name'                        => 'HIGHLANDER XCE',
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$656,700.00',
      'description'                 => '<li>Luces de cortesía en espejos laterales.</li>
            <li>Quemacocos eléctricos.</li>
            <li>Cámara de visión trasera.</li>
            <li>Vestiduras de piel perforada.</li>
            <li>Sistema de monitoreo de punto ciego.</li>',
      'slug'                        => 'corectxvis'
    ] );
  }
}
