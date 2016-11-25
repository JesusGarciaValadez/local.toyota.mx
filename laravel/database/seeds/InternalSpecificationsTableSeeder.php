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
    /** Toyota Highlander */
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
          'Download'              => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // HIGHLANDER LE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 2,
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
          'Download'            => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // HIGHLANDER XLE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 3,
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
          'Download'              => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // HIGHLANDER CE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 4,
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
          'Download'            => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // HIGHLANDER XCE

    /** Toyota Sienna */
    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 5,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'    => [
            'Control de velocidad crucero. ',
            'Controles al volante de audio y Bluetooth®.',
            'Pantalla multi-información 3.5”.',
            'Cámara de visión trasera.',
            'Aire acondicionado automático de tres zonas con filtro antibacterial. ',
            'Vestiduras de tela.',
            'Vidrios eléctricos, un solo toque para el conductor y pasajero, con bloqueo y sistema contra obstrucción. ',
            'Asientos de la 3a fila, divididos 60/40 y reclinables tipo Tilt down.',
          ],
          'Asientos'              => [
            'Espacio para cabeza 1ª fila: 1,042 mm.',
            'Espacio para cabeza 2ª fila: 1,008 mm.',
            'Espacio para cabeza 3ª fila: 973 mm.',
            'Espacio para hombros 1ª fila: 1,650 mm.',
            'Espacio para hombros 2ª fila: 1,642 mm.',
            'Espacio para hombros 3ª fila:  1,552 mm.',
            'Espacio para cadera 1ª fila: 1,483 mm.',
            'Espacio para cadera 2ª fila: 1,715 mm.',
            'Espacio para cadera 3ª fila: 1,278 mm.',
            'Espacio para piernas 1ª fila: 1,029 mm.',
            'Espacio para piernas 2ª fila: 955 mm.',
            'Espacio para piernas 3ª fila: 922 mm.',
          ],
          'SistemaAudio'          => [
            'Reconocimiento de voz. ',
            'Cuatro bocinas.',
            'Sistema de audio AM/FM/CD con pantalla táctil.',
            'Reproductor para MP3 y WMA, auxiliar, USB, Bluetooth®.',
          ],
          'Confort'               => [ 'N/A' ],
          'CinturonesSeguridad'   => [
            'Cinturones de seguridad de tres puntos en todos los asientos.',
          ],
          'SeguridadInterior'     => [
            'Ocho bolsas de aire distribuidas de la siguiente manera:
              <ul>
                <li>Dos frontales y dos laterales para conductor y pasajero.</li>
                <li>Dos tipo cortina para las tres filas de asientos.</li>
                <li>Una para rodilla de conductor.</li>
                <li>Una antideslizamiento para pasajero.</li>
              </ul>',
            'Alarma e inmovilizador. ',
            'Barras de protección contra impactos laterales.',
            'Desactivación automática de la bolsa de aire del pasajero.',
            'Molduras interiores con absorción de energía. ',
            'Monitor de presión de las llantas.',
            'Seguros eléctricos con cierre centralizado. ',
            'Seguros para niños en puertas traseras. ',
            'Sistemas LATCH e ISO-FIX para sillas de niños. ',
            'Volante y columna de dirección colapsables. ',
            'Zonas de absorción de energía, frontales, laterales y trasera.',
          ],
          'Download'              => 'storage/technical-specifications/sienna/ficha-tecnica-toyota-sienna-2016.pdf'
        ] )
      )
    ] ); // SIENNA CE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 6,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'  => [
            'Aire acondicionado automático de tres zonas con filtro antibacterial. ',
            'Asiento del conductor manual de seis posiciones con soporte lumbar. ',
            'Asientos de la 2a fila, individuales 35/30/35 deslizables, reclinables y abatibles .',
            'Asientos de la 3a fila, divididos 60/40 y reclinables tipo Tilt down.',
            'Vidrios eléctricos, un solo toque para el conductor y pasajero, con bloqueo y sistema contra obstrucción. ',
            'Vestiduras de tela.',
          ],
          'Asientos'            => [
            'Espacio para cabeza 1ª fila: 1,042 mm.',
            'Espacio para cabeza 2ª fila: 1,008 mm.',
            'Espacio para cabeza 3ª fila: 973 mm.',
            'Espacio para hombros 1ª fila: 1,650 mm.',
            'Espacio para hombros 2ª fila: 1,642 mm.',
            'Espacio para hombros 3ª fila:  1,552 mm.',
            'Espacio para cadera 1ª fila: 1,483 mm.',
            'Espacio para cadera 2ª fila: 1,715 mm.',
            'Espacio para cadera 3ª fila: 1,278 mm.',
            'Espacio para piernas 1ª fila: 1,029 mm.',
            'Espacio para piernas 2ª fila: 955 mm.',
            'Espacio para piernas 3ª fila: 922 mm.',
          ],
          'SistemaAudio'        => [
            'Sistema de audio AM/FM/CD con pantalla táctil.',
            'Reproductor para MP3 y WMA, auxiliar, USB, Bluetooth®.',
            'Seis bocinas.',
          ],
          'Confort'             => [
            'Cámara de visión trasera. ',
            'Controles al volante de audio y Bluetooth®.',
            'Pantalla multi-información 3.5”.',
            'Reconocimiento de voz. ',
            'Control de velocidad crucero. ',
          ],
          'CinturonesSeguridad' => [
            'Cinturones de seguridad de tres puntos en todos los asientos.',
          ],
          'SeguridadInterior'   => [
            'Ocho bolsas de aire distribuidas de la siguiente manera:
              <ul>
                <li>Dos frontales y dos laterales para conductor y pasajero.</li>
                <li>Dos tipo cortina para las tres filas de asientos.</li>
                <li>Una para rodilla de conductor.</li>
                <li>Una antideslizamiento para pasajero.</li>
              </ul>',
            'Alarma e inmovilizador. ',
            'Barras de protección contra impactos laterales.',
            'Desactivación automática de la bolsa de aire del pasajero.',
            'Molduras interiores con absorción de energía. ',
            'Monitor de presión de las llantas.',
            'Seguros eléctricos con cierre centralizado. ',
            'Seguros para niños en puertas traseras. ',
            'Sistemas LATCH e ISO-FIX para sillas de niños. ',
            'Volante y columna de dirección colapsables. ',
            'Zonas de absorción de energía, frontales, laterales y trasera.',
          ],
          'Download'            => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // SIENNA LE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 7,
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
          'Download'              => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // SIENNA XLE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 8,
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
          'Download'            => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // SIENNA XLE PIEL

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 9,
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
          'Download'            => 'storage/technical-specifications/highlander/prius-2016.pdf'
        ] )
      )
    ] ); // SIENNA LTD
  }
}
