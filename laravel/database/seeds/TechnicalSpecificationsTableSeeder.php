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
            'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            'Frenos traseros / Tambor (200 mm diámetro)',
            'Freno de estacionamiento'
          ],
          'Rines'     => [
            'Rines de acero 15 x 5.5”',
            'Neumáticos (Incluyendo refacción)',
            'Juego de tapones'
          ],
          'UrlMotor'  => 'img-motor.jpg',
          'UrlAuto'   => 'img-yaris-sedan-detalle.jpg'
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
            'Frenos delanteros / Disco ventilado (255 mm de diámetro)',
            'Frenos traseros / Tambor (200 mm diámetro)',
            'Freno de estacionamiento'
          ],
          'Rines'     => [
            'Rines de acero 15 x 5.5”',
            'Neumáticos (Incluyendo refacción)',
            'Juego de tapones'
          ],
          'UrlMotor'  => 'img-motor.jpg',
          'UrlAuto'   => 'img-yaris-sedan-detalle.jpg'
        ] )
      )
    ] );
  }
}
