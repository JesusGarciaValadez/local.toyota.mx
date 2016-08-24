<?php

use Illuminate\Database\Seeder;

class ExternalSpecificationsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 1,
      'description' => base64_encode(
        serialize( [
          'Faros'             => [
            'Cristales tintados con filtro contra rayos UV',
            'Limpiadores intermitentes / Para parabrisas',
            'Espejos laterales con ajuste eléctrico',
            'Medallón con desempañado eléctrico integrado'
          ],
          'SeguridadExterior' => [
            'Defensa delantera y trasera al color de la carrocería',
            'Manijas en las puertas laterales en el color de la carrocería',
            'Parrilla frontal',
            'Escape'
          ],
          'Visibilidad'       => [
            'Cristales'       => [
              'Altura total / 1,475 mm',
              'Ancho total / 1,700 mm',
              'Largo total / 4,410 mm',
              'Distancia entre ejes / 2,550 mm',
              'Distancia al piso / 145 mm',
              'Diámetro de giro / 10.2',
              'Coeficiente aerodinámico / 0.28'
            ],
            'EspejosLaterales'  => [ 'N/A' ]
          ],
          'Techo'             => [
            'Capacidad del tanque de combustible / 42 Lts',
            'Peso vehicular / 1,020 Kg',
            'Capacidad de carga / 480 Kg',
            'Volumen de carga en cajuela / 506 Lts'
          ],
          'UrlInterior'       => 'img-tablero.jpg'
        ] )
      )
    ] );

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 2,
      'description' => utf8_encode(
        serialize( [
          'Faros'             => [
            'Cristales tintados con filtro contra rayos UV',
            'Limpiadores intermitentes / Para parabrisas',
            'Espejos laterales con ajuste eléctrico',
            'Medallón con desempañado eléctrico integrado'
          ],
          'SeguridadExterior' => [
            'Defensa delantera y trasera al color de la carrocería',
            'Manijas en las puertas laterales en el color de la carrocería',
            'Parrilla frontal cromada',
            'Escape'
          ],
          'Visibilidad'       => [
            'Cristales'         => [
              'Altura total / 1,475 mm',
              'Ancho total / 1,700 mm',
              'Largo total / 4,410 mm',
              'Distancia entre ejes / 2,550 mm',
              'Distancia al piso / 145 mm',
              'Diámetro de giro / 10.2',
              'Coeficiente aerodinámico / 0.28'
            ],
            'EspejosLaterales'  => [ 'N/A' ]
          ],
          'Techo'             =>[
            'Capacidad del tanque de combustible / 42 Lts',
            'Peso vehicular / 1,055 Kg',
            'Capacidad de carga / 445 Kg',
            'Volumen de carga en cajuela / 506 Lts'
          ],
          'UrlInterior'       => 'img-tablero.jpg'
        ] )
      )
    ] );

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 3,
      'description' => base64_encode(
        serialize( [
          'Faros'             => [
            'Cristales tintados con filtro contra rayos UV',
            'Limpiadores intermitentes / Para parabrisas',
            'Espejos laterales con ajuste eléctrico',
            'Medallón con desempañado eléctrico integrado'
          ],
          'SeguridadExterior' => [
            'Defensa delantera y trasera al color de la carrocería',
            'Manijas en las puertas laterales en el color de la carrocería',
            'Parrilla frontal',
            'Escape'
          ],
          'Visibilidad'       => [
            'Cristales'       => [
              'Altura total / 1,475 mm',
              'Ancho total / 1,700 mm',
              'Largo total / 4,410 mm',
              'Distancia entre ejes / 2,550 mm',
              'Distancia al piso / 145 mm',
              'Diámetro de giro / 10.2',
              'Coeficiente aerodinámico / 0.28'
            ],
            'EspejosLaterales'  => [ 'N/A' ]
          ],
          'Techo'             => [
            'Capacidad del tanque de combustible / 42 Lts',
            'Peso vehicular / 1,020 Kg',
            'Capacidad de carga / 480 Kg',
            'Volumen de carga en cajuela / 506 Lts'
          ],
          'UrlInterior'       => 'img-tablero.jpg'
        ] )
      )
    ] );

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 4,
      'description' => utf8_encode(
        serialize( [
          'Faros'             => [
            'Cristales tintados con filtro contra rayos UV',
            'Limpiadores intermitentes / Para parabrisas',
            'Espejos laterales con ajuste eléctrico',
            'Medallón con desempañado eléctrico integrado'
          ],
          'SeguridadExterior' => [
            'Defensa delantera y trasera al color de la carrocería',
            'Manijas en las puertas laterales en el color de la carrocería',
            'Parrilla frontal cromada',
            'Escape'
          ],
          'Visibilidad'       => [
            'Cristales'         => [
              'Altura total / 1,475 mm',
              'Ancho total / 1,700 mm',
              'Largo total / 4,410 mm',
              'Distancia entre ejes / 2,550 mm',
              'Distancia al piso / 145 mm',
              'Diámetro de giro / 10.2',
              'Coeficiente aerodinámico / 0.28'
            ],
            'EspejosLaterales'  => [ 'N/A' ]
          ],
          'Techo'             =>[
            'Capacidad del tanque de combustible / 42 Lts',
            'Peso vehicular / 1,055 Kg',
            'Capacidad de carga / 445 Kg',
            'Volumen de carga en cajuela / 506 Lts'
          ],
          'UrlInterior'       => 'img-tablero.jpg'
        ] )
      )
    ] );
  }
}
