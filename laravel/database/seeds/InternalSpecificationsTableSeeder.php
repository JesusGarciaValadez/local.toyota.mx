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
          'Download'              => 'storage/images/technical-specifications/highlander/prius-2016.pdf'
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
          'Download'            => 'storage/images/technical-specifications/highlander/prius-2016.pdf'
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
          'Download'              => 'storage/images/technical-specifications/highlander/prius-2016.pdf'
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
            'Transmisión CVT-iS con siete cambios sensitivos. Única en su segmento.',
            '7 velocidades al frente (simulado)',
            'Palanca al piso tipo escalonada'
          ],
          'Download'            => 'storage/images/technical-specifications/highlander/prius-2016.pdf'
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
            'Aire acondicionado automático de tres zonas con filtro antibacterial.',
            'Asientos de la 2a fila, tipo capitán, deslizables, reclinables y abatibles',
            'Asientos de la 3a fila, divididos 60/40 y reclinables tipo Tilt down',
            'Vidrios eléctricos, un solo toque para el conductor y pasajero,  con bloqueo y sistema contra obstrucción.',
            'Vestiduras de tela.',
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
            'Ocho bolsas de aire.',
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
          'Download'              => 'storage/images/technical-specifications/sienna/ficha-tecnica-toyota-sienna-2017.pdf'
        ] )
      )
    ] ); // SIENNA CE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 6,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'  => [
            'Aire acondicionado automático de tres zonas con filtro antibacterial.',
            'Asiento del conductor manual de seis posiciones con soporte lumbar.',
            'Asientos de la 2a fila, individuales 35/30/35 deslizables, reclinables y abatibles.',
            'Asientos de la 3a fila, divididos 60/40 y reclinables tipo Tilt down.',
            'Vidrios eléctricos, un solo toque para el conductor y pasajero,  con bloqueo y sistema contra obstrucción.',
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
            'Cámara de visión trasera. Control de velocidad crucero. Controles al volante de audio y Bluetooth®.',
            'Pantalla multi-información 3.5”.',
            'Reconocimiento de voz.',
          ],
          'CinturonesSeguridad' => [
            'Cinturones de seguridad de tres puntos en todos los asientos.',
          ],
          'SeguridadInterior'   => [
            'Ocho bolsas de aire.',
            'Alarma e inmovilizador. ',
            'Barras de protección contra impactos laterales.',
            'Cinturones de seguridad de tres puntos en todos los asientos.',
            'Desactivación automática de la bolsa de aire del pasajero.',
            'Molduras interiores con absorción de energía. ',
            'Monitor de presión de las llantas.',
            'Seguros eléctricos con cierre centralizado.',
            ' Seguros para niños en puertas traseras.',
            ' Sistemas LATCH e ISO-FIX, para sillas de niños.',
            'Volante y columna de dirección colapsables.',
            'Zonas de absorción de energía, frontales, laterales y trasera.',
          ],
          'Download'            => 'storage/images/technical-specifications/sienna/ficha-tecnica-toyota-sienna-2017.pdf'
        ] )
      )
    ] ); // SIENNA LE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 7,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'  => [
            'Asiento del conductor manual de ocho posiciones con soporte lumbar. ',
            'Asientos de la 2a fila, individuales 35/30/35 deslizables, reclinables y abatibles.',
            'Asientos de la 3a fila, divididos 60/40 y reclinables tipo Tilt down.',
            'Cortinillas solares manuales en la segunda y tercera fila de asientos. ',
            'Cristales con sistema anti ruidos (Acoustic Glass) .',
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
            'Sistema de audio AM/FM/CD con pantalla táctil. ',
            'Reproductor para MP3 y WMA, auxiliar, USB, Bluetooth®. ',
            'Seis bocinas.',
          ],
          'Confort'             => [
            'Aire acondicionado automático de tres zonas con filtro antibacterial. ',
            'Cámara de visión trasera. ',
            'Control de velocidad crucero.',
            ' Controles al volante de audio y Bluetooth®.',
            'Homelink.',
            'Pantalla multi-información 3.5” a color.',
            'Reconocimiento de voz.',
          ],
          'CinturonesSeguridad' => [
            'Cinturones de seguridad de tres puntos en todos los asientos.',
          ],
          'SeguridadInterior'   => [
            'Ocho bolsas de aire.',
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
          'Download'            => 'storage/images/technical-specifications/sienna/ficha-tecnica-toyota-sienna-2017.pdf'
        ] )
      )
    ] ); // SIENNA XLE

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 8,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'  => [
            'Vestiduras de piel.',
            'Quemacocos eléctrico de dos posiciones con deflector de aire sensible a la velocidad.',
            'Aire acondicionado automático de tres zonas con filtro antibacterial.',
            'Asiento del conductor manual de ocho posiciones con soporte lumbar.',
            'Asiento del pasajero de 4 posiciones eléctrico.',
            'Asientos de la 2a fila, tipo Ottoman.',
            'Asientos de la 3a fila, divididos 60/40 y reclinables tipo Tilt down.',
            'Asientos del conductor y pasajero con calefacción Cortinillas solares manuales en la segunda y tercera fila de asientos.',
            'Cristales con sistema anti ruidos (Acoustic Glass).',
            'Vidrios eléctricos, un solo toque para el conductor y pasajero, con bloqueo y sistema contra obstrucción.',
          ],
          'Asientos'            => [
            'Espacio para cabeza con quemacocos 1ª fila: 993 mm.',
            'Espacio para cabeza con quemacocos 2ª fila: 965 mm.',
            'Espacio para cabeza con quemacocos 3ª fila: 973 mm.',
            'Espacio para hombros 1ª fila: 1,650 mm.',
            'Espacio para hombros 2ª fila: 1,642 mm.',
            'Espacio para hombros 3ª fila: 1,552 mm.',
            'Espacio para cadera 1ª fila: 1,483 mm.',
            'Espacio para cadera 2ª fila: 1,715 mm.',
            'Espacio para cadera 3ª fila: 1,278 mm.',
            'Espacio para piernas 1ª fila: 1,029 mm.',
            'Espacio para piernas 2ª fila: 955 mm.',
            'Espacio para piernas 3ª fila: 922 mm.',
          ],
          'SistemaAudio'        => [
            'Controles al volante de audio y Bluetooth®.',
            'Sistema de audio AM/FM/CD con pantalla táctil.',
            'Reproductor para MP3 y WMA, auxiliar, USB, Bluetooth®.',
            'Seis bocinas.',
            'Sistema de navegación (GPS) .',
          ],
          'Confort'             => [
            'Cámara de visión trasera. Control de velocidad crucero.',
            'Homelink.',
            'Pantalla multi-información 3.5” a color.',
            'Reconocimiento de voz.',
          ],
          'CinturonesSeguridad' => [
            'Cinturones de seguridad de tres puntos en todos los asientos. ',
          ],
          'SeguridadInterior'   => [
            'Ocho bolsas de aire.',
            'Alarma e inmovilizador. ',
            'Barras de protección contra impactos laterales. ',
            'Desactivación automática de la bolsa de aire del pasajero.',
            'Molduras interiores con absorción de energía. ',
            'Monitor de presión de las llantas.',
            'Seguros eléctricos con cierre centralizado. ',
            'Seguros para niños en puertas traseras. ',
            'Sistemas LATCH e ISO-FIX para sillas de niños. ',
            'Volante y columna de dirección colapsables. ',
            'Zonas de absorción de energía, frontales, laterales y trasera.',
            'Smart Key. ',
          ],
          'Download'            => 'storage/images/technical-specifications/sienna/ficha-tecnica-toyota-sienna-2017.pdf'
        ] )
      )
    ] ); // SIENNA XLE PIEL

    DB::table( 'internal_specifications' )->insert( [
      'car_id'      => 9,
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'  => [
            'Vestiduras de piel.',
            'Dos audífonos inalámbricos. ',
            'Quemacocos doble, eléctrico, de dos posiciones con deflector de aire sensible a la velocidad.',
            'Aire acondicionado automático de tres zonas con filtro antibacterial.',
            'Asiento del conductor manual de ocho posiciones con soporte lumbar y dos memorias.',
            'Asiento del pasajero de 4 posiciones eléctrico.',
            'Asientos de la 2a fila, tipo Ottoman.',
            'Asientos de la 3a fila, eléctricos, divididos 60/40 y reclinables tipo Tilt down.',
            'Cortinillas solares manuales en la segunda y tercera fila de asientos.',
            'Cristales con sistema anti ruidos (Acoustic Glass).',
            'Vidrios eléctricos, un solo toque para el conductor y pasajero, con bloqueo y sistema contra obstrucción. ',
            'Ventanillas laterales traseras abatibles eléctricamente.',
            'Asientos del conductor y pasajero con calefacción.',
          ],
          'Asientos'            => [
            'Espacio para cabeza con quemacocos 1ª fila: 993 mm.',
            'Espacio para cabeza con quemacocos 2ª fila: 965 mm.',
            'Espacio para cabeza con quemacocos 3ª fila: 912 mm.',
            'Espacio para hombros 1ª fila: 1,650 mm.',
            'Espacio para hombros 2ª fila: 1,642 mm.',
            'Espacio para hombros 3ª fila: 1,552 mm.',
            'Espacio para cadera 1ª fila: 1,483 mm.',
            'Espacio para cadera 2ª fila: 1,715 mm.',
            'Espacio para cadera 3ª fila: 1,278 mm.',
            'Espacio para piernas 1ª fila: 1,029 mm.',
            'Espacio para piernas 2ª fila: 955 mm.',
            'Espacio para piernas 3ª fila: 922 mm.',
          ],
          'SistemaAudio'        => [
            'Reconocimiento de voz.',
            'Sistema de audio JBL® AM/FM/CD con pantalla táctil, reproductor MP3 y WMA, Auxiliar, USB, Bluetooth®.',
            'Diez bocinas.',
            'Sistema de navegación (GPS)',
          ],
          'Confort'             => [
            'Cámara de visión trasera con ángulo de visión aumentado. ',
            'Control de velocidad crucero.',
            'Controles al volante de audio y Bluetooth®.',
            'Entrada para audífonos alámbricos a los lados en la 3a fila de asientos. ',
            'Entradas RCA en la consola central. ',
            'Homelink.',
            'Pantalla dual 16.4” de LED, control remoto y reproductor Blu-rayTM y MP3.',
            'Pantalla multi-información 3.5” a color.',
          ],
          'CinturonesSeguridad' => [
            'Cinturones de seguridad de tres puntos en todos los asientos.',
          ],
          'SeguridadInterior'   => [
            'Ocho bolsas de aire.',
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
            'Smart Key. ',
            'Sistema de monitoreo de punto ciego (Blind Spot Monitor).',
          ],
          'Download'            => 'storage/images/technical-specifications/sienna/ficha-tecnica-toyota-sienna-2017.pdf'
        ] )
      )
    ] ); // SIENNA LTD
  }
}
