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
      'brands_id'                   => 1,
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$501,200.00',
      'description'                 => '<li>Parrilla negra con acentos cromados.</li>
            <li>Espejos laterales eléctricos.</li>
            <li>Pantalla multi-información táctil de 6.1".</li>
            <li>Alarma e inmovilizador.</li>',
      'technical_specifications_id' => 1,
      'external_specifications_id'  => 1,
      'internal_specifications_id'  => 1,
      'slug'                        => 'coremt'
    ] );

    DB::table( 'cars' )->insert( [
      'model'                       => 'HIGHLANDER XLE',
      'brands_id'                   => 1,
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$565,200.00',
      'description'                 => '<li>Desempañador eléctrico en espejos laterales.</li>
            <li>Faros de niebla delanteros.</li>
            <li>Pantalla multi-información táctil de 8".</li>
            <li>Smart key</li>',
      'technical_specifications_id' => 2,
      'external_specifications_id'  => 2,
      'internal_specifications_id'  => 2,
      'slug'                        => 'corectvis'
    ] );

    DB::table( 'cars' )->insert( [
      'model'                       => 'HIGHLANDER LE',
      'brands_id'                   => 1,
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$501,200.00',
      'description'                 => '<li>Techo panorámico.</li>
            <li>Luces de cortesía en espejos laterales.</li>
            <li>Asientos delanteros con ventilación.</li>
            <li>Sistema de monitoreo de punto ciego. </li>',
      'technical_specifications_id' => 1,
      'external_specifications_id'  => 1,
      'internal_specifications_id'  => 1,
      'slug'                        => 'corectvis'
    ] );

    DB::table( 'cars' )->insert( [
      'model'                       => 'HIGHLANDER XLE',
      'brands_id'                   => 1,
      'thumbnail'                   => 'assets/images/versiones/img_lateral.png',
      'price'                       => '$656,700.00',
      'description'                 => '<li>Luces de cortesía en espejos laterales.</li>
            <li>Quemacocos eléctricos.</li>
            <li>Cámara de visión trasera.</li>
            <li>Vestiduras de piel perforada.</li>
            <li>Sistema de monitoreo de punto ciego.</li>',
      'technical_specifications_id' => 2,
      'external_specifications_id'  => 2,
      'internal_specifications_id'  => 2,
      'slug'                        => 'corectxvis'
    ] );
  }
}
