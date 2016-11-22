<?php

use Illuminate\Database\Seeder;

class TechnicalSpecificationsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    /** Toyota Highlander */
    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 1,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/highlander/img-motor-1.jpg',
          'UrlAuto'   => 'storage/images/datos/highlander/img-yaris-sedan-detalle-1.jpg'
        ] )
      )
    ] );

    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 2,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/highlander/img-motor-2.jpg',
          'UrlAuto'   => 'storage/images/datos/highlander/img-yaris-sedan-detalle-2.jpg'
        ] )
      )
    ] );

    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 3,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/highlander/img-motor-3.jpg',
          'UrlAuto'   => 'storage/images/datos/highlander/img-yaris-sedan-detalle-3.jpg'
        ] )
      )
    ] );

    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 4,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/highlander/img-motor-4.jpg',
          'UrlAuto'   => 'storage/images/datos/highlander/img-yaris-sedan-detalle-4.jpg'
        ] )
      )
    ] );

    /** Toyota Sienna */
    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 5,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/sienna/img-motor-1.jpg',
          'UrlAuto'   => 'storage/images/datos/sienna/img-yaris-sedan-detalle-1.jpg'
        ] )
      )
    ] );

    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 6,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/sienna/img-motor-2.jpg',
          'UrlAuto'   => 'storage/images/datos/sienna/img-yaris-sedan-detalle-2.jpg'
        ] )
      )
    ] );

    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 7,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/sienna/img-motor-3.jpg',
          'UrlAuto'   => 'storage/images/datos/sienna/img-yaris-sedan-detalle-3.jpg'
        ] )
      )
    ] );

    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 8,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/sienna/img-motor-4.jpg',
          'UrlAuto'   => 'storage/images/datos/sienna/img-yaris-sedan-detalle-4.jpg'
        ] )
      )
    ] );

    DB::table( 'technical_specifications' )->insert( [
      'car_id'      => 9,
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => '1.5 LITROS',
            'Potencia'  => '107 @ 6,000',
            'Cilindros' => '4 en línea',
            'Valvulas'  => '104 @ 4,200'
          ],
          'Frenos'    => [
            0 => 'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            1 => 'Frenos traseros / Tambor (200 mm diámetro)',
            2 => 'Freno de estacionamiento'
          ],
          'Rines'     => [
            0 => 'Rines de acero 15 x 5.5”',
            1 => 'Neumáticos (Incluyendo refacción)',
            2 => 'Juego de tapones'
          ],
          'UrlMotor'  => 'storage/images/datos/sienna/img-motor-4.jpg',
          'UrlAuto'   => 'storage/images/datos/sienna/img-yaris-sedan-detalle-4.jpg'
        ] )
      )
    ] );
  }
}
