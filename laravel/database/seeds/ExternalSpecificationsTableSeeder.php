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
    /** Toyota Highlander */
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
          'UrlInterior'       => 'storage/images/datos/highlander/img-tablero.jpg'
        ] )
      )
    ] ); // HIGHLANDER LE

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 2,
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
          'UrlInterior'       => 'storage/images/datos/highlander/img-tablero.jpg'
        ] )
      )
    ] ); // HIGHLANDER XLE

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
          'UrlInterior'       => 'storage/images/datos/highlander/img-tablero.jpg'
        ] )
      )
    ] ); // HIGHLANDER CE

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 4,
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
          'UrlInterior'       => 'storage/images/datos/highlander/img-tablero.jpg'
        ] )
      )
    ] ); // HIGHLANDER XCE

    /** Toyota Sienna */
    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 5,
      'description' => base64_encode(
        serialize( [
          'Faros'             => [
            'Faros con encendido y apagado automático.',
            'Faros de halógeno multi-reflectores, tipo proyector.',
          ],
          'SeguridadExterior' => [ 'N/A' ],
          'Visibilidad'       => [
            'Cristales'       => [
              'Alto:  1,750 mm.',
              'Alto con canastilla: 1,795 mm.',
              'Ancho:  1,985 mm.',
              'Largo:  5,085 mm.',
              'Entrevía (del./tras.): 1,720 mm.',
              'Distancia al piso: 161 mm.',
            ],
            'EspejosLaterales'  => [
              'Espejos laterales eléctricos en color negro.',
            ]
          ],
          'Techo'             => [
            'Peso vehicular: 1,940  kg.',
            'Capacidad de carga: 775 kg.',
            'Capacidad de carga de rieles de techo: 68 kg. ',
            'Capacidad de equipaje: 1,100 kg.',
            'Capacidad del tanque: 75.7 litros.',
            'Pasajeros: 7',
          ],
          'UrlInterior'       => 'storage/images/datos/sienna/interior-versiones.jpg'
        ] )
      )
    ] ); // SIENNA CE

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 6,
      'description' => base64_encode(
        serialize( [
          'Faros'             => [
            'Faros con encendido y apagado automático.',
            'Faros de halógeno multi-reflectores, tipo proyector.',
          ],
          'SeguridadExterior' => [
            'Manijas del color de la carrocería ',
            'Moldura trasera del color de la carrocería',
          ],
          'Visibilidad'       => [
            'Cristales'         => [
              'Alto: 1,750 mm.',
              'Alto con canastilla: 1,795 mm.',
              'Ancho:  1,985 mm.',
              'Largo:  5,085 mm.',
              'Entrevía (del./tras.): 1,720 mm.',
              'Distancia al piso: 161 mm.',
            ],
            'EspejosLaterales'  => [
              'Espejos laterales eléctricos y abatibles manualmente con desempañador.'
            ]
          ],
          'Techo'             =>[
            'Peso vehicular: 1,965  kg.',
            'Capacidad de carga: 750 kg.',
            'Capacidad de carga de rieles de techo: 68 kg.',
            'Capacidad de equipaje: 1,100 kg.',
            'Capacidad del tanque: 75.7 litros.',
            'Pasajeros: 8',
          ],
          'UrlInterior'       => 'storage/images/datos/sienna/interior-versiones.jpg'
        ] )
      )
    ] ); // SIENNA LE

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 7,
      'description' => base64_encode(
        serialize( [
          'Faros'             => [
            'Faros con encendido y apagado automático.',
            'Faros de halógeno multi-reflectores, tipo proyector.',
            'Faros de niebla.',
          ],
          'SeguridadExterior' => [
            'Puertas laterales y compuerta trasera eléctricas, con sensores de seguridad contra obstrucción.',
            'Cuatro sensores traseros de reversa.',
            'Ventanillas laterales traseras abatibles eléctricamente.',
            'Manijas del color de la carrocería.',
            'Moldura trasera del color de la carrocería.',
          ],
          'Visibilidad'       => [
            'Cristales'       => [
              'Alto: 1,750 mm.',
              'Alto con canastilla: 1,795 mm.',
              'Ancho:  1,985 mm.',
              'Largo:  5,085 mm.',
              'Entrevía (del./tras.): 1,720 mm.',
              'Distancia al piso: 161 mm.',
            ],
            'EspejosLaterales'  => [
              'Espejos laterales eléctricos y abatibles manualmente con desempañador.'
            ]
          ],
          'Techo'             => [
            'Peso vehicular: 2,010  kg.',
            'Capacidad de carga: 705 kg.',
            'Capacidad de carga de rieles de techo: 68 kg. ',
            'Capacidad de equipaje: 1,100 kg.',
            'Capacidad del tanque: 75.7 litros.',
            'Pasajeros: 8',
          ],
          'UrlInterior'       => 'storage/images/datos/sienna/interior-versiones.jpg'
        ] )
      )
    ] ); // SIENNA XLE

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 8,
      'description' => base64_encode(
        serialize( [
          'Faros'             => [
            'Faros con encendido y apagado automático.',
            'Faros de halógeno multi-reflectores, tipo proyector.',
            'Faros de niebla.',
          ],
          'SeguridadExterior' => [
            'Defensa delantera y trasera al color de la carrocería',
            'Manijas en las puertas laterales en el color de la carrocería',
            'Parrilla frontal cromada',
            'Escape'
          ],
          'Visibilidad'       => [
            'Cristales'         => [
              'Alto: 1,750 mm.',
              'Alto con canastilla: 1,795 mm.',
              'Ancho:  1,985 mm.',
              'Largo:  5,085 mm.',
              'Entrevía (del./tras.): 1,720 mm.',
              'Distancia al piso: 161 mm.',
              'Manijas cromadas.',
              'Moldura trasera del color de la carrocería. ',
              'Puertas laterales y compuerta trasera eléctricas, con sensores de seguridad contra obstrucción.',
              'Cuatro sensores traseros de reversa.',
              'Ventanillas laterales traseras abatibles eléctricamente.',
            ],
            'EspejosLaterales'  => [
              'Espejos laterales eléctricos y abatibles manualmente con desempañador.'
            ]
          ],
          'Techo'             =>[
            'Peso vehicular: 2,020  kg.',
            'Capacidad de carga: 695 kg.',
            'Capacidad de carga de rieles de techo: 68 kg.',
            'Capacidad de equipaje: 1,100 kg.',
            'Capacidad del tanque: 75.7 litros.',
            'Pasajeros: 7',
          ],
          'UrlInterior'       => 'storage/images/datos/sienna/interior-versiones.jpg'
        ] )
      )
    ] ); // SIENNA XLE PIEL

    DB::table( 'external_specifications' )->insert( [
      'car_id'      => 9,
      'description' => base64_encode(
        serialize( [
          'Faros'             => [
            'Faros con encendido y apagado automático / cambio automático de luces (Smart Beam).',
            'Faros de niebla.',
            'Faros de xenón con ajuste de altura desde el interior.',
          ],
          'SeguridadExterior' => [
            'Luces diurnas tipo LED. ',
            'Manijas cromadas.',
            'Moldura trasera y parrilla cromada. ',
            'Puertas laterales y compuerta trasera eléctricas, con sensores de seguridad contra obstrucción.',
            'Dos sensores delanteros de estacionamiento.',
            'Cuatro sensores traseros de reversa.',
            'Ventanillas laterales traseras abatibles eléctricamente.',
          ],
          'Visibilidad'       => [
            'Cristales'         => [
              'Alto:  1,750 mm.',
              'Alto con canastilla: 1,795 mm.',
              'Ancho:  1,985 mm.',
              'Largo:  5,085 mm.',
              'Entrevía (del./tras.): 1,720 mm.',
              'Distancia al piso: 161 mm.',
            ],
            'EspejosLaterales'  => [
              'Espejos laterales del color de la carrocería, plegables eléctricamente, electrocromáticos, con luces direccionales y desempañador, ajuste automático de reversa  y memoria.'
            ]
          ],
          'Techo'             =>[
            'Peso vehicular: 2,020  kg.',
            'Capacidad de carga: 695 kg.',
            'Capacidad de carga de rieles de techo: 68 kg.',
            'Capacidad de equipaje: 1,100 kg.',
            'Capacidad del tanque: 75.7 litros.',
            'Pasajeros: 7.',
          ],
          'UrlInterior'       => 'storage/images/datos/sienna/interior-versiones.jpg'
        ] )
      )
    ] ); // SIENNA LTD
  }
}
