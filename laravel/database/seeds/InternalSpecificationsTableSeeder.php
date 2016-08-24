<?php

use Illuminate\Database\Seeder;

class InternalSpecificationsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 1,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'    => [
            'Volante en uretano',
            'Pomo palanca de velocidades en uretano',
            'Tapicería de los asientos uretano',
            'Alfombra en piso',
            'Tela en vestidura del techo'
          ],
          'Asientos'              => [
            'Asiento del conductor / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento acompañante / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento trasero / Tipo banca con 3 cabeceras ajustables'
          ],
          'SistemaAudio'          => [
            'Audio con radio AM/FM, CD y reproducción de MP3 y WMA',
            'Entradas auxiliares USB + AUX',
            'Sistema de manos libres Bluetooth',
            'Número de bocinas / 4',
            'Ajustes de volante',
            'Toma auxiliar de corriente 12 V DC'
          ],
          'Confort'               => [
            'Iluminación de cortesía',
            'Luces de lectura'
          ],
          'CinturonesSeguridad'   => [
            'Inmovilizador',
            'Alarma',
            'Seguros eléctricos',
            'Seguros para niños en puertas traseras',
            'Gato y herramienta',
            'Kit asistencia vial'
          ],
          'SeguridadInterior'     => [ 'N/A' ],
          'Download'              => 'prius-2016.pdf'
        ] )
      )
    ] );

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 1,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'  => [
            'Volante en uretano',
            'Pomo palanca de velocidades en uretano',
            'Tapicería de los asientos uretano',
            'Alfombra en piso',
            'Tela en vestidura del techo'
          ],
          'Asientos'            => [
            'Asiento del conductor / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento acompañante / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento trasero / Tipo banca con 3 cabeceras ajustables'
          ],
          'SistemaAudio'        => [
            'Audio con radio AM/FM, CD y reproducción de MP3 y WMA',
            'Entradas auxiliares USB + AUX',
            'Sistema de manos libres Bluetooth ',
            'Número de bocinas / 4',
            'Ajustes de volante',
            'Toma auxiliar de corriente 12 V DC'
          ],
          'Confort'             => [
            'Iluminación de cortesía',
            'Luces de lectura'
          ],
          'CinturonesSeguridad' => [
            'Inmovilizador',
            'Alarma',
            'Seguros eléctricos',
            'Seguros para niños en puertas traseras',
            'Gato y herramienta',
            'Kit asistencia vial'
          ],
          'SeguridadInterior'   => [
            'Transmisión CVT-iS con siete cambios sensitivos. única en su segmento.',
            '7 velocidades al frente (simulado)',
            'Palanca al piso tipo escalonada'
          ],
          'Download'            => 'prius-2016.pdf'
        ] )
      )
    ] );

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 1,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'    => [
            'Volante en uretano',
            'Pomo palanca de velocidades en uretano',
            'Tapicería de los asientos uretano',
            'Alfombra en piso',
            'Tela en vestidura del techo'
          ],
          'Asientos'              => [
            'Asiento del conductor / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento acompañante / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento trasero / Tipo banca con 3 cabeceras ajustables'
          ],
          'SistemaAudio'          => [
            'Audio con radio AM/FM, CD y reproducción de MP3 y WMA',
            'Entradas auxiliares USB + AUX',
            'Sistema de manos libres Bluetooth',
            'Número de bocinas / 4',
            'Ajustes de volante',
            'Toma auxiliar de corriente 12 V DC'
          ],
          'Confort'               => [
            'Iluminación de cortesía',
            'Luces de lectura'
          ],
          'CinturonesSeguridad'   => [
            'Inmovilizador',
            'Alarma',
            'Seguros eléctricos',
            'Seguros para niños en puertas traseras',
            'Gato y herramienta',
            'Kit asistencia vial'
          ],
          'SeguridadInterior'     => [ 'N/A' ],
          'Download'              => 'prius-2016.pdf'
        ] )
      )
    ] );

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 1,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'  => [
            'Volante en uretano',
            'Pomo palanca de velocidades en uretano',
            'Tapicería de los asientos uretano',
            'Alfombra en piso',
            'Tela en vestidura del techo'
          ],
          'Asientos'            => [
            'Asiento del conductor / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento acompañante / Tipo cubo con 4 ajustes manuales y cabecera',
            'Asiento trasero / Tipo banca con 3 cabeceras ajustables'
          ],
          'SistemaAudio'        => [
            'Audio con radio AM/FM, CD y reproducción de MP3 y WMA',
            'Entradas auxiliares USB + AUX',
            'Sistema de manos libres Bluetooth ',
            'Número de bocinas / 4',
            'Ajustes de volante',
            'Toma auxiliar de corriente 12 V DC'
          ],
          'Confort'             => [
            'Iluminación de cortesía',
            'Luces de lectura'
          ],
          'CinturonesSeguridad' => [
            'Inmovilizador',
            'Alarma',
            'Seguros eléctricos',
            'Seguros para niños en puertas traseras',
            'Gato y herramienta',
            'Kit asistencia vial'
          ],
          'SeguridadInterior'   => [
            'Transmisión CVT-iS con siete cambios sensitivos. única en su segmento.',
            '7 velocidades al frente (simulado)',
            'Palanca al piso tipo escalonada'
          ],
          'Download'            => 'prius-2016.pdf'
        ] )
      )
    ] );
  }
}
