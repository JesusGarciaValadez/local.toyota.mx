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
    /** Toyota Highlander */
    DB::table( 'cars' )->insert( [
      'brands_id'                   => 1,
      'technical_specifications_id' => 1,
      'external_specifications_id'  => 1,
      'internal_specifications_id'  => 1,
      'title'                       => 'HIGHLANDER <span>LE</span>',
      'description'                 => '',
      'name'                        => 'HIGHLANDER LE',
      'thumbnail'                   => 'storage/images/versiones/highlander/img_lateral.png',
      'price'                       => '$501,200.00',
      'inner_description'           => '<li>Parrilla negra con acentos cromados.</li>
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
      'description'                 => '',
      'name'                        => 'HIGHLANDER XLE',
      'thumbnail'                   => 'storage/images/versiones/highlander/img_lateral.png',
      'price'                       => '$565,200.00',
      'inner_description'           => '<li>Desempañador eléctrico en espejos laterales.</li>
            <li>Faros de niebla delanteros.</li>
            <li>Pantalla multi-información táctil de 8".</li>
            <li>Smart key</li>',
      'slug'                        => 'corecvis'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 1,
      'technical_specifications_id' => 3,
      'external_specifications_id'  => 3,
      'internal_specifications_id'  => 3,
      'title'                       => 'HIGHLANDER <span>CE</span>',
      'description'                 => '',
      'name'                        => 'HIGHLANDER CE',
      'thumbnail'                   => 'storage/images/versiones/highlander/img_lateral.png',
      'price'                       => '$501,200.00',
      'inner_description'           => '<li>Techo panorámico.</li>
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
      'description'                 => '',
      'name'                        => 'HIGHLANDER XCE',
      'thumbnail'                   => 'storage/images/versiones/highlander/img_lateral.png',
      'price'                       => '$656,700.00',
      'inner_description'           => '<li>Luces de cortesía en espejos laterales.</li>
            <li>Quemacocos eléctricos.</li>
            <li>Cámara de visión trasera.</li>
            <li>Vestiduras de piel perforada.</li>
            <li>Sistema de monitoreo de punto ciego.</li>',
      'slug'                        => 'corectxvis'
    ] );

    /** Toyota Sienna */
    DB::table( 'cars' )->insert( [
      'brands_id'                   => 2,
      'technical_specifications_id' => 5,
      'external_specifications_id'  => 5,
      'internal_specifications_id'  => 5,
      'title'                       => 'SIENNA <span>CE</span>',
      'description'                 => '',
      'name'                        => 'SIENNA CE',
      'thumbnail'                   => 'storage/images/versiones/sienna/img_lateral.png',
      'price'                       => '$502,000.00',
      'inner_description'           => '<li>Espejos laterales eléctricos color negro.</li>
            <li>Aire acondicionado automático de 3 zonas con filtro antibacterial.</li>
            <li>Pantalla multi-información.</li>
            <li>8 bolsas de aire / Conductor y pasajeros.</li>
            <li>Sistema de frenos ABS antibloqueo.',
      'slug'                        => 'sienna-ce'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 2,
      'technical_specifications_id' => 6,
      'external_specifications_id'  => 6,
      'internal_specifications_id'  => 6,
      'title'                       => 'SIENNA <span>LE</span>',
      'description'                 => '',
      'name'                        => 'SIENNA LE',
      'thumbnail'                   => 'storage/images/versiones/sienna/img_lateral.png',
      'price'                       => '$530,800.00',
      'inner_description'           => '<li>Espejos laterales eléctricos del color de la carrocería, abatibles manualmente con desempañador.</li>
            <li>Aire acondicionado automático de 3 zonas con filtro antibacterial.</li>
            <li>Sistema de audio AM/FM/CD con pantalla táctil, reproductor para MP3 y WMA.</li>
            <li>8 bolsas de aire / Conductor y pasajeros.</li>
            <li>Sistema de frenos ABS antibloqueo.</li>',
      'slug'                        => 'sienna-le'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 2,
      'technical_specifications_id' => 7,
      'external_specifications_id'  => 7,
      'internal_specifications_id'  => 7,
      'title'                       => 'SIENNA <span>XLE</span>',
      'description'                 => '',
      'name'                        => 'SIENNA XLE',
      'thumbnail'                   => 'storage/images/versiones/sienna/img_lateral.png',
      'price'                       => '$580,300.00',
      'inner_description'           => '<li>Puertas laterales y compuerta trasera eléctricas, con sensores de seguridad contra obstrucción.</li>
            <li>Sensores de estacionamiento (2 delanteros).</li>
            <li>Aire acondicionado automático de 3 zonas con filtro antibacterial.</li>
            <li>8 bolsas de aire / Conductor y pasajeros.</li>
            <li>Sistema de frenos ABS antibloqueo.</li>',
      'slug'                        => 'sienna-xle'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 2,
      'technical_specifications_id' => 8,
      'external_specifications_id'  => 8,
      'internal_specifications_id'  => 8,
      'title'                       => 'SIENNA <span>XLE PIEL</span>',
      'description'                 => '',
      'name'                        => 'SIENNA XLE PIEL',
      'thumbnail'                   => 'storage/images/versiones/sienna/img_lateral.png',
      'price'                       => '$643,400.00',
      'inner_description'           => '<li>Manijas cromadas.</li>
            <li>Asiento del pasajero de 4 posiciones eléctrico.</li>
            <li>Vestiduras de piel.</li>
            <li>Sistema de navegación GPS.</li>
            <li>8 bolsas de aire / Conductor y pasajeros.</li>',
      'slug'                        => 'sienna-xle-piel'
    ] );

    DB::table( 'cars' )->insert( [
      'brands_id'                   => 2,
      'technical_specifications_id' => 9,
      'external_specifications_id'  => 9,
      'internal_specifications_id'  => 9,
      'title'                       => 'SIENNA <span>LTD</span>',
      'description'                 => '',
      'name'                        => 'SIENNA LTD',
      'thumbnail'                   => 'storage/images/versiones/sienna/img_lateral.png',
      'price'                       => '$779,700.00',
      'inner_description'           => '<li>2 audífonos inalámbricos.</li>
            <li>Cristales con sistema anti ruido (Acoustic Glass).</li>
            <li>Vestiduras de piel.</li>
            <li>Smart Key.</li>
            <li>8 bolsas de aire / Conductor y pasajeros.</li>',
      'slug'                        => 'sienna-ltd'
    ] );
  }
}
