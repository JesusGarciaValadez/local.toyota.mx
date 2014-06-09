<?php
require_once(dirname(__FILE__).'/lib/Ikimea/Browser/Browser.php');
use Ikimea\Browser\Browser;
$browser = new Browser();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Toyota Highlander | Especificaciones</title>
    <?php if ( $browser->isMobile() && $browser->getPlatform() == 'iPhone' ): ?>
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <?php else: ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php endif; ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="js/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="css/toyota.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->
    <style type="text/css">
      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }
      #wrap {
        height: initial;
        background: #000;
      }
      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */
    .boton-descargar-catalogo{
        display:none;
    }
    .boton-imprimir-catalago{
        display:none;
    }
    </style>
  </head>

  <body data-spy="scroll" data-target="#main-navbar">
    <div class="navbar navbar-inverse navbar-fixed-top" id="main-navbar">
      <div class="navbar-inner">

        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="brand hidden-desktop">Toyota</a>
          <p class="navbar-text pull-right visible-desktop">
            <a href="/#home"><img src="css/img/logo-highlander.png" alt="Toyota Corolla"></a>
          </p>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="visible-desktop"><a href="http://toyota.com.mx" id="logo-toyota">Toyota</a></li>
              <li class="hidden"><a href="/#home">Inicio</a></li>
              <li><a href="/#explora">Explora</a></li>
              <li class="active"><a href="/#modelos">Modelos</a></li>
              <li><a href="/#distribuidores">Distribuidores</a></li>
              <!-- <li><a href="/#financiamiento">Financiamiento</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="subnav" id="subnav-espeficicaciones">
      <div class="container">
        <div class="nav">
          <ul class="nav inline">
            <li class="active"><a class="horizontal-scroll" data-target="#especificaciones" href="#especificaciones-exterior">Exterior</a></li>
            <li><a class="horizontal-scroll" data-target="#especificaciones" href="#especificaciones-interior">Interior</a></li>
            <li><a class="horizontal-scroll" data-target="#especificaciones" href="#especificaciones-seguridad">Seguridad</a></li>
            <li><a class="horizontal-scroll" data-target="#especificaciones" href="#especificaciones-tecnicas">Esp. Técnicas</a></li>
            <li><a class="horizontal-scroll" data-target="#especificaciones" href="#especificaciones-dimensiones-exteriores">Dimensiones Ext.</a></li>
            <li><a class="horizontal-scroll" data-target="#especificaciones" href="#especificaciones-dimensiones-interiores">Dimensiones Int.</a></li>
            <li><a class="horizontal-scroll" data-target="#especificaciones" href="#especificaciones-peso">Peso y Capacidad</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="wrap" class="">
      <section id="especificaciones" class="printable">
        <div class="horizontal-wrapper">
          <div class="section-inner">

            <div class="sub-section" id="especificaciones-exterior">
                  <div class="container">
                    <div class="span12 especificaciones">
                      <div class="pull-right menu-especificaciones">
                        <a href="/corolla_specs.pdf" class="boton-descargar-catalogo" title="Descargar Catálogo"></a>
                        <a href="#" class="boton-imprimir-catalago especificaciones-imprimir" title="Imprimir"></a>
                      </div>
                      <h1>Especificaciones</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp</th><th>HIGHLANDER<span class="modelo">LE</span><img src="imgs/modelo-base.png"></th><th>HIGHLANDER<span class="modelo">XLE</span><img src="imgs/modelo-le.png"></th><th>HIGHLANDER<span class="modelo">LIMITED PANORAMIC ROOF</span> <img src="imgs/modelo-s.png"></th><th>HIGHLANDER<span class="modelo">LIMITED</span><img src="imgs/modelo-sp.png"></th>
                          </tr>
                          <tr>
                            <td class="caption">Exterior</td><td class="caption"></td><td class="caption"></td><td class="caption"></td><td class="caption"></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Compuerta trasera tipo hatch</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td>
                          </tr>
                          <tr>
                            <td>Compuerta trasera tipo hatch con medallón independiente y control remoto</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Desempañador eléctrico en espejos laterales</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Espejos laterales con sistema de monitoreo de punto ciego (BSM)</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Espejos laterales eléctricos</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Faros con encendido y apagado automático</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Faros de niebla delanteros</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Faros elipsoidales tipo proyector</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Luces de cortesía en espejos laterales</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Luces diurnas cancelables</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Manijas al color de la carrocería</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Orilla en vidrios laterales cromada</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Parrilla negra con acentos cromados</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr> 
                          <tr>
                            <td>Quemacocos eléctrico</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr> 
                          <tr>
                            <td>Spoiler del color de la carrocería</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr> 
                          <tr>
                            <td>Techo panorámico</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td>
                          </tr>     
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>

            <div class="sub-section" id="especificaciones-interior">
                  <div class="container">
                    <div class="span12 especificaciones">
                      <div class="pull-right menu-especificaciones">
                        <a href="#" class="boton-descargar-catalogo" title="Descargar Catálogo"></a>
                        <a href="#" class="boton-imprimir-catalago especificaciones-imprimir" title="Imprimir"></a>
                      </div>
                      <h1>Especificaciones</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp</th><th>HIGHLANDER<span class="modelo">LE</span><img src="imgs/modelo-base.png"></th><th>HIGHLANDER<span class="modelo">XLE</span><img src="imgs/modelo-le.png"></th><th>HIGHLANDER<span class="modelo">LIMITED PANORAMIC ROOF</span> <img src="imgs/modelo-s.png"></th><th>HIGHLANDER<span class="modelo">LIMITED</span><img src="imgs/modelo-sp.png"></th>
                          </tr>
                          <tr>
                            <td class="caption">INTERIOR</td><td class="caption"></td><td class="caption"></td><td class="caption"></td><td class="caption"></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>3 tomacorrientes de 12V</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Aire acondicionado automático de 3 zonas</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Aire acondicionado manual de 3 zonas</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png">
                          </tr>
                          <tr>
                            <td>Asiento del conductor de 6 posiciones con ajuste manual</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png">
                          </tr>
                          <tr>
                            <td>Asiento del conductor de 8 posiciones con ajustes eléctricos</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png">
                          </tr>
                          <tr>
                            <td>Asiento del conductor de 8 posiciones con ajustes eléctricos y memoria</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Asientos de la 2a fila deslizables, reclinables y abatibles hasta quedar planos</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Asientos de la 3a fila abatibles hasta quedar planos “Tilt Down”</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Asientos delanteros con calefacción</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Computadora de viaje con 6 funciones</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Controles de Bluetooth® montados en el volante</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Control del display de la computadora de viaje al volante</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Control de velocidad crucero</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Driver easy speak (uso de micrófono conductor)</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Espejo retrovisor día/noche</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png">
                          </tr>
                          <tr>
                            <td>Espejo retrovisor electrocromático</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Homelink</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Pantalla touchscreen de 6.1”</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png">
                          </tr>
                          <tr>
                            <td>Pantalla touchscreen de 8”</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Sistema de audio AM/FM/CD con reproductor para MP3 y WMA, y 6 bocinas, entrada USB y Mini Jack</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png">
                          </tr>
                          <tr>
                            <td>Sistema de audio JBL® AM/FM/CD con reproductor para MP3 y MWA, 12 bocinas y amplificador, entrada USB y Mini Jack</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Sistema de entretenimiento con DVD, Blu-ray y control remoto</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Sistema de navegación</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Soporte lumbar eléctrico para el conductor</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Sensores de reversa</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Vestiduras de piel perforada</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Vestiduras de tela</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/no-disponible.png">
                          </tr>
                          <tr>
                            <td>Volante con ajuste de altura y profundidad</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                          <tr>
                            <td>Volante con controles de audio</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png">
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>

            <div class="sub-section" id="especificaciones-seguridad">
                  <div class="container">
                    <div class="span12 especificaciones">
                      <div class="pull-right menu-especificaciones">
                        <a href="#" class="boton-descargar-catalogo" title="Descargar Catálogo"></a>
                        <a href="#" class="boton-imprimir-catalago especificaciones-imprimir" title="Imprimir"></a>
                      </div>
                      <h1>Especificaciones</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp</th><th>HIGHLANDER<span class="modelo">LE</span><img src="imgs/modelo-base.png"></th><th>HIGHLANDER<span class="modelo">XLE</span><img src="imgs/modelo-le.png"></th><th>HIGHLANDER<span class="modelo">LIMITED PANORAMIC ROOF</span> <img src="imgs/modelo-s.png"></th><th>HIGHLANDER<span class="modelo">LIMITED</span><img src="imgs/modelo-sp.png"></th>
                          </tr>
                          <tr>
                            <td class="caption">SEGURIDAD</td><td class="caption"></td><td class="caption"></td><td class="caption"></td><td class="caption"></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Alarma e inmovilizador</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Barras de protección contra impactos laterales</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Bolsa de aire en el cojín del asiento del pasajero</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Bolsa de aire para rodillas en el asiento del conductor</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Bolsas de aire frontales multietapa y laterales para conductor y pasajero</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Bolsas de aire tipo cortina en las 3 filas de asientos</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Cabeceras activas frontales</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Sistemas LATCH e ISO-FIX para sillas de niños</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Sistema de absorción de impactos en el interior de los pilares y techo</td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>
                          <tr>
                            <td>Smart Key</td><td><img src="imgs/no-disponible.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td><td><img src="imgs/estandar.png"></td>
                          </tr>     
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>

            <div class="sub-section" id="especificaciones-tecnicas">
                  <div class="container">
                    <div class="span12 especificaciones">
                      <div class="pull-right menu-especificaciones">
                        <a href="#" class="boton-descargar-catalogo" title="Descargar Catálogo"></a>
                        <a href="#" class="boton-imprimir-catalago especificaciones-imprimir" title="Imprimir"></a>
                      </div>
                      <h1>Especificaciones</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp</th><th>HIGHLANDER<span class="modelo">LE</span><img src="imgs/modelo-base.png"></th><th>HIGHLANDER<span class="modelo">XLE</span><img src="imgs/modelo-le.png"></th><th>HIGHLANDER<span class="modelo">LIMITED PANORAMIC ROOF</span> <img src="imgs/modelo-s.png"></th><th>HIGHLANDER<span class="modelo">LIMITED</span><img src="imgs/modelo-sp.png"></th>
                          </tr>
                          <tr>
                            <td class="caption">ESPECIFICACIONES TÉCNICAS</td><td class="caption"></td><td class="caption"></td><td class="caption"></td><td class="caption"></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Motor</td><td colspan="4" class="text-center">3.5 L, 6 cilindros, 24 válvulas DOHC, VVT-i Dual, ETCS-i, SEFI 270 hp @ 6,200 rpm 248 lb-pie @ 4,700 rpm</td>
                          </tr>
                          <tr>
                            <td>Sistema de ignición</td><td class="text-center" colspan="4">(TDI) Ignición Directa Toyota</td>
                          </tr>
                          <tr>
                            <td>Transmisión</td><td colspan="4" class="text-center">Automática de 6 velocidades con ECT-i</td>
                          </tr>
                          <tr>
                            <td>Sistema de tracción</td><td colspan="4" class="text-center">Tracción delantera con control de estabilidad (VSC mejorada EPS) y control de asistencia (HAC)</td>
                          </tr>
                          <tr>
                            <td>Tren motriz</td><td colspan="4" class="text-center">2WD</td>
                          </tr>
                          <tr>
                            <td>Suspensión delantera</td><td colspan="4" class="text-center">Independiente tipo McPherson con resortes helicoidales y barra estabilizadora</td>
                          </tr>
                          <tr>
                            <td>Suspensión trasera</td><td colspan="4" class="text-center">Independiente, doble horquilla con brazos tirados, resortes helicoidales y barra estabilizadora</td>
                          </tr>
                          <tr>
                            <td>Dirección</td><td colspan="4" class="text-center">Piñón y cremallera con asistencia eléctrica (EPS)</td>
                          </tr>
                          <tr>
                            <td>Diámetro de giro</td><td colspan="4" class="text-center">11.8m</td>
                          </tr>
                          <tr>
                            <td>Frenos</td><td colspan="4" class="text-center">Sistema antibloqueo (ABS) con distribución electrónica de fuerza de frenado y asistencia de frenado (BA)</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>

            <div class="sub-section" id="especificaciones-dimensiones-exteriores">
                  <div class="container">
                    <div class="span12 especificaciones">
                      <div class="pull-right menu-especificaciones">
                        <a href="#" class="boton-descargar-catalogo" title="Descargar Catálogo"></a>
                        <a href="#" class="boton-imprimir-catalago especificaciones-imprimir" title="Imprimir"></a>
                      </div>
                      <h1>Especificaciones</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp</th><th>HIGHLANDER<span class="modelo">LE</span><img src="imgs/modelo-base.png"></th><th>HIGHLANDER<span class="modelo">XLE</span><img src="imgs/modelo-le.png"></th><th>HIGHLANDER<span class="modelo">LIMITED PANORAMIC ROOF</span> <img src="imgs/modelo-s.png"></th><th>HIGHLANDER<span class="modelo">LIMITED</span><img src="imgs/modelo-sp.png"></th>
                          </tr>
                          <tr>
                            <td class="caption">DIMENSIONES EXTERIORES (MM)</td><td class="caption"></td><td class="caption"></td><td class="caption"></td><td class="caption"></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Alto</td><td colspan="4" class="text-center">1,730</td>
                          </tr>
                          <tr>
                            <td>Ancho</td><td class="text-center" colspan="4">1,925</td>
                          </tr>
                          <tr>
                            <td>Largo</td><td colspan="4" class="text-center">4,855</td>
                          </tr>
                          <tr>
                            <td>Distancia entre ejes</td><td colspan="4" class="text-center">2,790</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>

            <div class="sub-section" id="especificaciones-dimensiones-interiores">
                  <div class="container">
                    <div class="span12 especificaciones">
                      <div class="pull-right menu-especificaciones">
                        <a href="#" class="boton-descargar-catalogo" title="Descargar Catálogo"></a>
                        <a href="#" class="boton-imprimir-catalago especificaciones-imprimir" title="Imprimir"></a>
                      </div>
                      <h1>Especificaciones</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp</th><th>HIGHLANDER<span class="modelo">LE</span><img src="imgs/modelo-base.png"></th><th>HIGHLANDER<span class="modelo">XLE</span><img src="imgs/modelo-le.png"></th><th>HIGHLANDER<span class="modelo">LIMITED PANORAMIC ROOF</span> <img src="imgs/modelo-s.png"></th><th>HIGHLANDER<span class="modelo">LIMITED</span><img src="imgs/modelo-sp.png"></th>
                          </tr>
                          <tr>
                            <td class="caption">DIMENSIONES INTERIORES (MM)</td><td class="caption"></td><td class="caption"></td><td class="caption"></td><td class="caption"></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Espacio para cabeza</td><td class="text-center">1,034/1,013/913</td><td colspan="3"></td>
                          </tr>
                          <tr>
                            <td>Espacio para cabeza con quemacocos</td><td></td><td class="text-center">1,003/1,006/913</td><td class="text-center">1,010/960/913</td><td class="text-center">1,003/1,006/913</td>
                          </tr>
                          <tr>
                            <td>Espacio para hombros</td><td class="text-center">1,507/1,513/1,398</td><td class="text-center" colspan="3">1,507/1,499/1,398</td>
                          </tr>
                          <tr>
                            <td>Espacio para piernas</td><td class="text-center" colspan="4">1,123/976/703</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>

            <div class="sub-section" id="especificaciones-peso">
                  <div class="container">
                    <div class="span12 especificaciones">
                      <div class="pull-right menu-especificaciones">
                        <a href="#" class="boton-descargar-catalogo" title="Descargar Catálogo"></a>
                        <a href="#" class="boton-imprimir-catalago especificaciones-imprimir" title="Imprimir"></a>
                      </div>
                      <h1>Especificaciones</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp</th><th>HIGHLANDER<span class="modelo">LE</span><img src="imgs/modelo-base.png"></th><th>HIGHLANDER<span class="modelo">XLE</span><img src="imgs/modelo-le.png"></th><th>HIGHLANDER<span class="modelo">LIMITED PANORAMIC ROOF</span> <img src="imgs/modelo-s.png"></th><th>HIGHLANDER<span class="modelo">LIMITED</span><img src="imgs/modelo-sp.png"></th>
                          </tr>
                          <tr>
                            <td class="caption">PESO Y CAPACIDADES</td><td class="caption"></td><td class="caption"></td><td class="caption"></td><td class="caption"></td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Peso vehicular (kg)</td><td class="text-center">1,925</td><td class="text-center">1,955</td><td class="text-center" colspan="2">1,975</td>
                          </tr>
                          <tr>
                            <td>Capacidad de carga (kg)</td><td class="text-center">720</td><td class="text-center">690</td><td class="text-center" colspan="2">670</td>
                          </tr>
                          <tr>
                            <td>Tanque de combustible (L)</td><td class="text-center" colspan="4">72.5</td>
                          </tr>
                          <tr>
                            <td>Configuracion de asientos</td><td class="text-center" colspan="2">2 : 3 : 3</td><td class="text-center" colspan="2">2 : 3 : 3</td>
                          </tr>
                          <tr>
                            <td>Pasajeros</td><td class="text-center" colspan="2">8</td><td class="text-center" colspan="2">7</td>
                          </tr>
                          <tr>
                            <td>Llantas</td><td class="text-center" colspan="2">P245/60 R18</td><td class="text-center" colspan="2">P245/55 R19</td>
                          </tr>
                          <tr>
                            <td>Rines</td><td class="text-center" colspan="2">Aluminio de 18”</td><td class="text-center" colspan="2">Aluminio de 19”</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </section>
    </div>

      <!--footer-->
      <div id="footer">
        <div class="container">
          <div class="row text-center" id="footer-social-links">
            <a href="https://www.facebook.com/ToyotaMex" target="_blank" class="footer-link" id="facebook">Facebook</a>
            <a href="https://twitter.com/ToyotaMex" target="_blank" class="footer-link" id="twitter">Twitter</a>
            <a href="http://instagram.com/ToyotaMex" target="_blank" class="footer-link" id="pinterest">Instagram</a>
            <a href="http://youtube.com/ToyotaMex" target="_blank" class="footer-link" id="youtube">YouTube</a>
            <img src="../css/img/marca-toyota.png"/>
          </div>
          <div class="row text-center" id="legal-links">
            <a href="http://toyota.com.mx/contenidos/terminos-legales-y-condiciones/" target="_blank">Términos y Condiciones</a> <span class="pipe">|</span> <a href="http://toyota.com.mx/contenidos/terminos-legales-y-condiciones/" target="_blank">Legal</a> <span class="pipe">|</span> <a href="http://toyota.com.mx/contenidos/aviso-de-privacidad/" target="_blank">Aviso de Privacidad</a>
          </div>
          <div class="row text-center terminos" >
            <p>Todos los precios, imágenes, especificaciones y características están sujetas a cambio sin previo aviso. Este sitio es una referencia publicitaria. Las especificaciones de los vehículos pueden variar de acuerdo a las versiones disponibles. Las fotos de los autos son sólo referencia.</p>
            <p><a href="http://toyota.com.mx/contenidos/terminos-legales-y-condiciones/" target="_blank">Términos y condiciones</a></p>
          </div>
          <div class="row text-center" id="copyright">®<?php echo date('Y') ?>, toyota méxico</div>
        </div>
      </div>
      <!--footer-->
    </div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIfZV2DXDcTcIIkGGYZiIJ1n6aMjgLpZc&amp;libraries=geocode&amp;sensor=true"></script>
    <script src="js/compact.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.0/jquery.xdomainrequest.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="js/especificaciones.js"></script>

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MC8TPH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MC8TPH');</script>
    <!-- End Google Tag Manager -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-49566515-1', 'toyotahighlander.com.mx');
    ga('send', 'pageview');

    </script>
    <script type="text/javascript">
    var fb_param = {};
    fb_param.pixel_id = '6008969236077';
    fb_param.value = '0.00';
    fb_param.currency = 'USD';
    (function(){
    var fpw = document.createElement('script');
    fpw.async = true;
    fpw.src = '//connect.facebook.net/en_US/fp.js';
    var ref = document.getElementsByTagName('script')[0];
    ref.parentNode.insertBefore(fpw, ref);
    })();
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6008969236077&amp;value=0&amp;currency=USD" /></noscript>

  </body>
</html>
