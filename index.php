<?php
require_once(dirname(__FILE__).'/lib/Ikimea/Browser/Browser.php');
use Ikimea\Browser\Browser;
$browser = new Browser();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Toyota Highlander</title>
    <?php if ( $browser->isMobile() && $browser->getPlatform() == 'iPhone' ): ?>
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <?php else: ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php endif; ?>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:description" content="Cuando manejas una Highlander, el mundo se vuelve más divertido y seguro. Atrévete a descubrir Tu Nueva Actitud Highlander."/>

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }
      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */
    </style>
    <!-- <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->

    <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="css/bootstrap-slider/bootstrap-slider.css">
    <link href="js/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="css/toyota.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->
<script type='text/javascript'>
var ebRand = Math.random()+'';
ebRand = ebRand * 1000000;
document.write('<scr'+'ipt src=""HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=503032&amp;rnd=' + ebRand + '""></scr' + 'ipt>');
</script>
<noscript>
<img width=""1"" height=""1"" style=""border:0"" src=""HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=503032&amp;ns=1""/>
</noscript>

<!--FB Code Stuff -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
          var fbds = document.createElement('script');
              fbds.async = true;
              fbds.src = '//connect.facebook.net/en_US/fbds.js';
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(fbds, s);
                      _fbq.loaded = true;
                    }
    _fbq.push(['addPixelId', '306593512832230']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=306593512832230&amp;ev=NoScript" /></noscript>
<script src="https://www.wtp101.com/pixel?id=23420"></script>
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
            <a href="#home"><img src="css/img/logo-highlander.png" alt="Toyota Corolla"></a>
          </p>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="visible-desktop"><a href="http://toyota.com.mx" id="logo-toyota">Toyota</a></li>
              <li class="hidden"><a href="#home">Inicio</a></li>
              <li data-subnav="#subnav-explora"><a href="#explora">Explora</a></li>
              <li data-subnav="#subnav-modelos"><a href="#modelos">Modelos</a></li>
              <li data-subnav="#subnav-financiamiento"><a href="#financiamiento">Financiamiento</a></li>
              <li><a href="#distribuidores">Distribuidores</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="subnav hidden" id="subnav-explora">
      <div class="container">
        <div class="nav">
          <ul class="nav inline">
            <li class="active"><a class="horizontal-scroll" data-target="#explora" href="#explora-exterior">Exterior</a></li>
            <li><a class="horizontal-scroll" data-target="#explora" href="#explora-interior">Interior</a></li>
            <!--<li><a class="horizontal-scroll" data-target="#explora" href="#explora-rendimiento">Rendimiento</a></li>-->
            <li><a class="horizontal-scroll" data-target="#explora" href="#explora-seguridad">Seguridad</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="subnav hidden" id="subnav-modelos">
      <div class="container">
        <div class="nav">
          <ul class="nav inline">
            <li class="active"><a class="horizontal-scroll" data-target="#modelos" href="#modelo-l">LE</a></li>
            <li><a class="horizontal-scroll" data-target="#modelos" href="#modelo-ls">XLE</a></li>
            <li><a class="horizontal-scroll" data-target="#modelos" href="#modelo-s">LIMITED PR</a></li>
            <li><a class="horizontal-scroll" data-target="#modelos" href="#modelo-sp">LIMITED</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="wrap">
      <section class="deck" id="home">
        <div class="carrusel" id="carrusel-home">
          <div class="slide" id="home-jay">
              <div class="text-center" id="parent-teaser">
                <p>Una familia con Actitud Highlander.<br><br>Conoce las <span>historias</span> de la familia Cervera y<br>descubre con ellos <span>tu nueva actitud Highlander ‘14.</span></p>
                <?php if ( $browser->isMobile() && $browser->isBrowser('iPhone')): ?>
                  <div id="contenedor-teaser">
                    <a href="https://www.youtube.com/watch?v=FHwQr9QUn5I"><img src="imgs/corolla-presenta.jpg"></a>
                  </div>
                <?php elseif ($browser->isMobile() && !$browser->isBrowser('iPhone')): ?>
                  <div id="contenedor-teaser">
                    <a href="https://www.youtube.com/watch?v=FHwQr9QUn5I" target="_blank"><img src="imgs/corolla-presenta.jpg"></a>
                  </div>
                <?php else: ?>
                  <div id="contenedor-teaser">
                    <!-- <iframe width="530" height="298" src="//www.youtube.com/embed/FHwQr9QUn5I" frameborder="0" allowfullscreen></iframe> -->
                    <video id="video-teaser" preload="metadata" width="530" height="298">
                      <source src="video/videohighlander.mp4" type="video/mp4"/>
                      <source src="video/videohighlander.webm" type="video/webm"/>
                      <source src="video/videohighlander.ogv" type="video/ogv"/>
                    </video>
                    <a href="https://www.youtube.com/user/ToyotaMex" target="_blank" id="ver-corto">Corto</a>
                    <!--<div class="text-center" id="teaser-copy">¡Sé parte de la historia!</div>-->
                  </div>
                <?php endif; ?>
              </div>
              <?php //if ( $browser->isMobile() ): ?>
                <!--<img src="imgs/jay2.png" id="new-jay-mobile"/>
              <?php //else: ?>
                <img src="imgs/jay.png" id="new-jay"/>-->
              <?php //endif; ?>
          </div>
          <!-- <div class="slide" id="home-start">
            <div class="container">
              <div class="bucket span4 offset8" id="bucket-1">
	        <a href="preventa.php" target="_blank"><img src="imgs/bucket-03.png" alt="financiamiento"></a>
	      </div>
            </div>
          </div>
          <div class="slide" id="home-dos">
            <div class="container">
              <div class="bucket span4 offset8" id="bucket-1"><a href="preventa.php" target="_blank"><img src="imgs/bucket-03.png" alt="financiamiento"></a></div>
            </div>
          </div>
        </div>-->

        <div id="pager-home">
          <div class="row clearfix text-center" id="slide-pager-home">
          </div>
          <div class="row clearfix text-center">
            <a href="#explora" id="btn-explora">EXPLORA TU HIGHLANDER</a>
          </div>
        </div>
        <!-- <div class="row" id="trailer-container">
          <div class="container">
            <a href="http://www.youtube.com/watch?v=CUbHYrqUczk" class="various" id="show-youtube">Ver Trailer</a>
          </div>
        </div> -->
      </section>

      <section class="deck" id="explora">
        <script src="https://www.wtp101.com/pixel?id=23421"></script>
        <div class="horizontal-wrapper">
          <div class="section-inner">

            <div class="sub-section current" id="explora-exterior">
              <div class="carrusel" id="carrusel-exterior">
                <div class="slide" id="slide-exterior-01">

                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Parrilla más robusta.</a>
                    <div class="hotspot-detail detail-exterior-01">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Parrilla más robusta.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->

                </div>
                <div class="slide" id="slide-exterior-02">

                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Mejoras en diseño exterior.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Mejoras en diseño exterior.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->

                </div>
                <div class="slide" id="slide-exterior-03">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Fuerza y dinamismo en cada una de sus líneas.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Fuerza y dinamismo en cada una de sus líneas.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->

                </div>
                <div class="slide" id="slide-exterior-04">

                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Rines de aluminio de 18”  o 19”.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Rines de aluminio de 18”  o 19”.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->

                </div>
                <div class="slide" id="slide-exterior-05">
                  <div class="container" style="height: 100%">
                    <div class="display-table">
                      <div class="display-cell">
                        <div class="threesixty" id="threesixty-exterior">
                            <div class="spinner">
                                <span>0%</span>
                            </div>
                            <ol class="threesixty_images"></ol>
                        </div>
                        <div class="clearfix text-center" id="threesixty-color-picker">
                          <div class="text-center">
                            <span id="color-name">Arena</span>
                          </div>
                          <a href="#" class="current" id="arena" data-color="arena" data-text="Arena"><span>Arena</span></a>
                          <a href="#" id="azul" data-color="azul" data-text="Azul"><span>Azul</span></a>
                          <a href="#" id="azulosc" data-color="azulosc" data-text="Azul Oscuro"><span>Azul Oscuro</span></a>
                          <a href="#" id="blanco" data-color="blanco" data-text="Blanco"><span>Blanco</span></a>
                          <a href="#" id="gris" data-color="gris" data-text="Gris"><span>Gris</span></a>
                          <a href="#" id="jade" data-color="jade" data-text="Jade"><span>Jade</span></a>
                          <a href="#" id="negro" data-color="negro" data-text="Negro"><span>Negro</span></a>
                          <a href="#" id="plata" data-color="plata" data-text="Plata"><span>Plata</span></a>
                          <a href="#" id="rojo" data-color="rojo" data-text="Rojo"><span>Rojo</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <a href="#" class="slide-control slide-control-prev" id="slide-exterior-prev">Anterior</a>
              <a href="#" class="slide-control slide-control-next" id="slide-exterior-next">Siguiente</a>

              <div class="subsection-footer">
                <div class="left">
                  <div class="copy-container pull-right">
                    <div class="top">Equipada para compartir</div>
                    <div class="bottom">tus mejores momentos</div>
                  </div>
                  <div class="social-container">
                    <div class="social-copy">Comparte En</div>
                    <a href="#" class="social-link social-twitter">Twitter</a>
                    <a href="#" class="social-link social-facebook">Facebook</a>
                  </div>
                </div>
                <div class="right">
                  <div class="slide-pager" id="slide-pager-exterior">
                    <a href="#slide-exterior-01" class="pager-item"><img src="imgs/btn-exterior-01.png" alt="Exterior 01"></a>
                    <a href="#slide-exterior-02" class="pager-item"><img src="imgs/btn-exterior-02.png" alt="Exterior 02"></a>
                    <a href="#slide-exterior-03" class="pager-item"><img src="imgs/btn-exterior-03.png" alt="Exterior 03"></a>
                    <a href="#slide-exterior-04" class="pager-item"><img src="imgs/btn-exterior-04.png" alt="Exterior 04"></a>
                    <a href="#slide-exterior-05" class="pager-item"><img src="imgs/btn-exterior-05.png" alt="Exterior 05"></a>
                  </div>
                </div>
              </div>

            </div>

            <div class="sub-section" id="explora-interior">
              <div class="carrusel" id="carrusel-interior">
                <div class="slide" id="slide-interior-01">
                  <!--hotspot-->
                  <div class="hotspot-container hotspot-left">
                    <a href="#" class="hotspot">Suavidad y elegancia en sus texturas.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Suavidad y elegancia en sus texturas.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-interior-02">
                  <!--hotspot-->
                  <div class="hotspot-container hotspot-right">
                    <a href="#" class="hotspot">Asientos de la 3a fila abatibles estilo “Tilt Down”.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Asientos de la 3a fila abatibles estilo “Tilt Down”.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-interior-03">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Increíble techo panorámico en versión Highlander Limited PR.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Increíble techo panorámico en versión Highlander Limited PR.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-interior-04">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Sistema de entretenimiento con DVD, Blu-ray y control remoto.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Sistema de entretenimiento con DVD, Blu-ray y control remoto.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-interior-05">
                   <!--hotspot-->
                  <div class="hotspot-container hotspot-left">
                    <a href="#" class="hotspot">Control total al volante.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Control total al volante.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
              </div>
              <a href="#" class="slide-control slide-control-prev" id="slide-interior-prev">Anterior</a>
              <a href="#" class="slide-control slide-control-next" id="slide-interior-next">Siguiente</a>
              <div class="subsection-footer">
                <div class="left">
                  <div class="copy-container pull-right">
                    <div class="top">Máximo confort</div>
                    <div class="bottom"></div>
                  </div>
                  <div class="social-container">
                    <div class="social-copy">Comparte En</div>
                    <a href="#" class="social-link social-twitter">Twitter</a>
                    <a href="#" class="social-link social-facebook">Facebook</a>
                  </div>
                </div>
                <div class="right">
                  <div class="slide-pager" id="slide-pager-interior">
                    <a href="#slide-interior-01" class="pager-item"><img src="imgs/btn-interior-01.png" alt="Interior 01"></a>
                    <a href="#slide-interior-02" class="pager-item"><img src="imgs/btn-interior-02.png" alt="Interior 02"></a>
                    <a href="#slide-interior-03" class="pager-item"><img src="imgs/btn-interior-03.png" alt="Interior 03"></a>
                    <a href="#slide-interior-04" class="pager-item"><img src="imgs/btn-interior-04.png" alt="Interior 04"></a>
                    <a href="#slide-interior-05" class="pager-item"><img src="imgs/btn-interior-05.png" alt="Interior 05"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub-section" id="explora-seguridad">
              <div class="carrusel" id="carrusel-seguridad">
                <div class="slide" id="slide-seguridad-01">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Smart Key. Sistema de apertura y encendido de un solo toque.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Smart Key. Sistema de apertura y encendido de un solo toque.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-seguridad-02">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Sistema de monitoreo de punto ciego.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Sistema de monitoreo de punto ciego.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-seguridad-03">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Indicador de seguridad en el tablero.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Indicador de seguridad en el tablero.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-seguridad-04">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Bolsa de aire en el cojín del asiento del pasajero.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Bolsa de aire en el cojín del asiento del pasajero.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
                <div class="slide" id="slide-seguridad-05">
                  <!--hotspot-->
                  <div class="hotspot-container">
                    <a href="#" class="hotspot">Seguros automáticos para una mayor comodidad.</a>
                    <div class="hotspot-detail">
                      <a href="#" class="hotspot-close">cerrar</a>
                      <div>
                        <p class="hotspot-title">Seguros automáticos para una mayor comodidad.</p>
                      </div>
                    </div>
                  </div>
                  <!--//hotspot-->
                </div>
              </div>
              <a href="#" class="slide-control slide-control-prev" id="slide-seguridad-prev">Anterior</a>
              <a href="#" class="slide-control slide-control-next" id="slide-seguridad-next">Siguiente</a>
              <div class="subsection-footer">
                <div class="left">
                  <div class="copy-container pull-right">
                    <div class="top">Tranquilidad absoluta</div>
                    <div class="bottom"></div>
                  </div>
                  <div class="social-container">
                    <div class="social-copy">Comparte En</div>
                    <a href="#" class="social-link social-twitter">Twitter</a>
                    <a href="#" class="social-link social-facebook">Facebook</a>
                  </div>
                </div>
                <div class="right">
                  <div class="slide-pager" id="slide-pager-seguridad">
                    <a href="#slide-rendimineto-01" class="pager-item"><img src="imgs/btn-seguridad-01.png" alt="Seguridad 01"></a>
                    <a href="#slide-rendimineto-02" class="pager-item"><img src="imgs/btn-seguridad-02.png" alt="Seguridad 02"></a>
                    <a href="#slide-rendimineto-03" class="pager-item"><img src="imgs/btn-seguridad-03.png" alt="Seguridad 03"></a>
                    <a href="#slide-rendimineto-04" class="pager-item"><img src="imgs/btn-seguridad-04.png" alt="Seguridad 02"></a>
                    <a href="#slide-rendimineto-05" class="pager-item"><img src="imgs/btn-seguridad-05.png" alt="Seguridad 02"></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="deck" id="modelos">
      <script src="https://www.wtp101.com/pixel?id=23422"></script>
        <div class="horizontal-wrapper">
          <div class="section-inner">
            <div class="sub-section current" id="modelo-l">
              <div class="container">
                <div class="display-table">
                  <div class="display-cell">
                    <div class="row modelo">
                      <div class="span8 imagen-modelo">
                        <img src="imgs/modelo-base.png" alt="Toyota Corolla Base"/>
                      </div>
                      <div class="span4 detalles-modelo">
                        <h1>Highlander LE</h1>
                        <div class="precio">
                          <span class="desde">Desde</span>
                          <small>$</small>473,900<sup>00</sup>
                        </div>

                        <ul class="especificaciones">
                          <li>Faros elipsoidales tipo proyector.</li>
                          <li>Manijas al color de la carrocería.</li>
                          <li>Parilla negra con acentos cromados.</li>
                          <li>Aire acondicionado manual de 3 zonas.</li>
                        </ul>
                        <a href="especificaciones.php" target="_blank" class="modelo-btn-small"><strong>+</strong> Especificaciones</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sub-section" id="modelo-ls">
              <div class="container">
                <div class="display-table">
                  <div class="display-cell">
                    <div class="row modelo">
                      <div class="span8 imagen-modelo">
                        <img src="imgs/modelo-le.png" alt="Toyota Corolla LE"/>
                      </div>
                      <div class="span4 detalles-modelo">
                        <h1>Highlander XLE</h1>
                        <div class="precio">
                          <span class="desde">Desde</span>
                          <small>$</small>534,400<sup>00</sup>
                        </div>
                        <ul class="especificaciones">
                          <li>Volante con ajuste de altura y profundidad.</li>
                          <li>Sensores de reversa.</li>
                          <li>Control de velocidad crucero.</li>
                          <li>Espejos laterales eléctricos.</li>
                        </ul>
                        <a href="especificaciones.php" target="_blank" class="modelo-btn-small"><strong>+</strong> Especificaciones</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sub-section" id="modelo-s">
              <div class="container">
                <div class="display-table">
                  <div class="display-cell">

                    <div class="row modelo">
                      <div class="span8 imagen-modelo">
                        <img src="imgs/modelo-s.png" alt="Toyota Corolla S"/>
                      </div>
                      <div class="span4 detalles-modelo">
                        <h1>Highlander Limited PR</h1>
                        <div class="precio">
                          <span class="desde">Desde</span>
                          <small>$</small>600,400<sup>00</sup>
                        </div>
                        <ul class="especificaciones">
                          <li>Compuerta trasera tipo hatch con medallón independiente y control remoto.</li>
                          <li>Espejos laterales con sistema de monitoreo de punto ciego (BSM).</li>
                          <li>Faros de niebla delanteros.</li>
                        </ul>
                        <a href="especificaciones.php" targe="_blank" class="modelo-btn-small"><strong>+</strong> Especificaciones</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sub-section" id="modelo-sp">
              <div class="container">
                <div class="display-table">
                  <div class="display-cell">

                    <div class="row modelo">
                      <div class="span8 imagen-modelo">
                        <img src="imgs/modelo-sp.png" alt="Toyota Corolla S Plus"/>
                      </div>
                      <div class="span4 detalles-modelo">
                        <h1>Highlander Limited</h1>
                        <div class="precio">
                          <span class="desde">Desde</span>
                          <small>$</small>619,900<sup>00</sup>
                        </div>
                        <ul class="especificaciones">
                          <li>Quemacocos eléctrico.</li>
                          <li>Asiento del conductor de 8 posiciones con ajustes eléctricos y memoria.</li>
                          <li>Cámara de visión trasera.</li>
                          <li>Pantalla touchscreen de 8".</li>
                        </ul>
                        <a href="especificaciones.php" targe="_blank" class="modelo-btn-small"><strong>+</strong> Especificaciones</a>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="subsection-footer">
          <div class="left">
            <div class="copy-container pull-right">
              <div class="top">Equipada para compartir</div>
              <div class="bottom">tus mejores momentos</div>
            </div>
            <div class="social-container">
              <div class="social-copy">Comparte En</div>
              <a href="#" class="social-link social-twitter">Twitter</a>
              <a href="#" class="social-link social-facebook">Facebook</a>
            </div>
          </div>
          <div class="right">
            <div class="modelos-pager">
              <a href="#modelo-l"  class="horizontal-scroll active" id="btn-modelo-l"  data-target="#modelos">L</a>
              <a href="#modelo-ls" class="horizontal-scroll" id="btn-modelo-ls" data-target="#modelos">LS</a>
              <a href="#modelo-s"  class="horizontal-scroll" id="btn-modelo-s"  data-target="#modelos">S</a>
              <a href="#modelo-sp"  class="horizontal-scroll" id="btn-modelo-sp"  data-target="#modelos">S Plus</a>
            </div>
          </div>
        </div>
      </section>

      <section class="printable deck" id="financiamiento">

        <div class="container">
          <a href="#" class="financiamiento-control hidden" data-direction="prev" id="financiamiento-anterior">Anterior</a>
          <div class="row hidden-tablet hidden-phone" id="financiamiento-car-container">
          </div>

          <div class="row financiamiento-step skip-print" id="financiamiento-step-1">
            <div class="span6 financiamiento-column">
              <h3>Tu Crédito</h3>
              <dl class="dl-horizontal">
                <dt>Auto:</dt>
                <dd><span class="financiamiento-auto"></span> MX</dd>
                <dt>Precio:</dt>
                <dd>$<span class="financiamiento-precio"></span> MX</dd>
                <dt>Enganche:</dt>
                <dd>$<span class="financiamiento-enganche"></span> MX</dd>
                <dt>Tasa especial de:</dt>
                <dd><span class="financiamiento-tasa-especial"></span>%</dd>
                <dt>Comisión por Apertura:</dt>
                <dd>$<span class="financiamiento-comision-apertura"></span> MX</dd>
                <dt>Pago Mensual</dt>
                <dd class="financiamiento-red">$<span class="financiamiento-pago-mensual"></span> MX</dd>
                <dt class="pago-final-toggle">Pago final extra</dt>
                <dd class="pago-final-toggle financiamiento-red">$<span class="financiamiento-pago-final-extra"></span> MX</dd>
              </dl>
              <div class="text-center">
                <small>*El precio final puede variar de acuerdo al distribuidor</small>
              </div>
            </div>

            <div class="span6 financiamiento-column financiamiento-form" id="financiamiento-personaliza-first">
              <h3>Personaliza tu cotización</h3>
              <form class="form-horizontal">
                <div class="control-group">
                  <label for="financiamiento-modelo" class="control-label">Auto</label>
                  <div class="controls">
                    <select id="financiamiento-modelo" class="span3 selectpicker">
                       <option value="LE">LE</option>
                      <option value="XLE">XLE</option>
                      <option value="Limited Blu-Ray">Limited Blu-Ray</option>
                      <option value="LTD Panorama Roof">LTD Panorama Roof</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label for="financiamiento-tipo-credito" class="control-label">Tipo de Crédito</label>
                  <div class="controls">
                    <select id="financiamiento-tipo-credito" class="span3 selectpicker">
                      <option value="estandar">Estándar</option>
                      <option value="balloon">Balloon 35</option>
                    </select>
                  </div>
                </div>
                <span class="help-block"><small>Con el crédito estándar, tus pagos son iguales durante toda la vida del crédito. Tendrás la tranquilidad de que tus pagos serán siempre igual.</small></span>
              </form>
            </div>

            <div class="span6 financiamiento-column financiamiento-form" style="margin-top: 7px;">
              <form class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Enganche <span class="financiamiento-enganche-per">10</span>%</label>
                  <div class="controls">
                    <input type="text" id="financiamiento-enganche" class="slider span3" value="10" data-slider-min="10" data-slider-max="60" data-slider-step="1" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="" data-slider-tooltip="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Plazo de Crédito</label>
                  <div class="controls">
                    <div class="input-append">
                      <select id="financiamiento-plazo-credito" class="selectpicker span2">
                        <option value="24">24</option>
                        <option value="30">30</option>
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="60">60</option>
                      </select>
                      <span class="add-on">Meses</span>
                    </div>
                  </div>
                  CAT sin iva <span class="financiamiento-cat-sin-iva"></span>%
                </div>
              </form>
            </div>
          </div>

          <div class="row financiamiento-step hide" id="financiamiento-step-2">
            <p class="span12">El crédito también contempla un seguro para tu auto, la mensualidad ya incluye la mejor<br/> póliza (Diamante), pero puedes elegir una póliza con menores coberturas.</p>
            <div class="span6 financiamiento-column">
              <h3>Tu Crédito</h3>
              <dl class="dl-horizontal">
                <dt>Auto:</dt>
                <dd><span class="financiamiento-auto"></span> MX</dd>
                <dt>Precio:</dt>
                <dd>$<span class="financiamiento-precio"></span> MX</dd>
                <dt>Eganche:</dt>
                <dd>$<span class="financiamiento-enganche"></span> MX</dd>
                <dt>Tasa especial de:</dt>
                <dd><span class="financiamiento-tasa-especial"></span>%</dd>
                <dt>Comisión por Apertura:</dt>
                <dd>$<span class="financiamiento-comision-apertura"></span></dd>
                <dt>Plazo:</dt>
                <dd><span class="financiamiento-plazo">24</span> Meses</dd>
                <dt>Pago Mensual Base:</dt>
                <dd>$<span class="financiamiento-pago-mensual-base"></span> MX</dd>
                <dt>Póliza Diamante:</dt>
                <dd>$<span class="financiamiento-poliza-diamante">0.00</span> MX</dd>
                <dt>Pago Mensual</dt>
                <dd class="financiamiento-red">$<span class="financiamiento-pago-mensual"></span> MX</dd>
                <dt class="pago-final-toggle">Pago final extra</dt>
                <dd class="pago-final-toggle financiamiento-red">$<span class="financiamiento-pago-final-extra"></span> MX</dd>
              </dl>
              <div class="text-center">
                <small>*El precio final puede variar de acuerdo al distribuidor</small>
              </div>
            </div>

            <div class="span6 financiamiento-column financiamiento-form" id="personaliza-cotizacion">
              <h3>Tipo de Póliza</h3>
              <form class="form-horizontal">
                <div class="control-group">
                  <label for="" class="control-label">Selecciona tu tipo de póliza</label>
                  <div class="controls">
                    <select id="financiamiento-tipo-seguro">
                      <option value="diamante">Diamante</option>
                      <option value="oro">Oro</option>
                      <option value="amplia">Amplia</option>
                    </select>
                  </div>
                </div>
                <div>
                  Reducción costo mensual: $<span class="financiamiento-reduccion-costo-mensual">0.00</span> MX
                </div>
              </form>
            </div>
            <div class="span6 financiamiento-column" id="beneficios-poliza">
              <h3>Beneficios póliza diamante</h3>
              <p>Deducibles: <span id="beneficios_deducibles"></span><br/>
                  Responsabilidad Civil: $<span id="beneficios_responsabilidad"></span> MX<br/>
                  Extrensión de Responsabilidad Civil: AMPARADA<br/>
                  Auto sustituto: <span id="beneficios_auto_sustituto"></span><br/>
                  Reparación del Vehículo en Agencia Toyota<br/>
                  Pago a Valor Factura los primeros dos años<br/>
                  Exención de deducible: <span id="beneficios_excencion_deducible"></span></p>
            </div>
          </div>

          <div class="page-break"></div>

          <div class="row financiamiento-step hide" id="financiamiento-step-3">
            <div class="span12 financiamiento-column">
              <h2>Tu Crédito</h2>
              <table>
                <tr>
                  <th>Auto:</th>
                  <td><span class="financiamiento-auto">$auto</span></td>
                  <th>Seguro:</th>
                  <td><span class="financiamiento-tipo-poliza"></span></td>
                </tr>
                <tr>
                  <th>Enganche: <span class="financiamiento-enganche-per"></span>%</th>
                  <td>$<span class="financiamiento-enganche"></span> MX</td>
                  <th>Amortización:</th>
                  <td><span class="amortizacion"></span></td>
                </tr>
                <tr>
                  <th>Plazo:</th>
                  <td><span class="financiamiento-plazo"></span> meses</td>
                  <th>Pago Mensual:</th>
                  <td class="financiamiento-red"><strong>$<span class="financiamiento-pago-mensual"></span></strong></td>
                </tr>
                <tr class="pago-final-toggle">
                  <th colspan="2">&nbsp;</th>
                  <th>Pago Final extra:</th>
                  <td class="financiamiento-red"><strong>$<span class="financiamiento-pago-final-extra"></span></strong></td>
                </tr>
                <tr>
                  <th>Comisión por apertura:</th>
                  <td>$<span class="financiamiento-comision-apertura"></span> MX</td>
                  <th class="big">Cat sin IVA:</th>
                  <td class="big"><span class="financiamiento-cat-sin-iva">$cat</span>%</td>
                </tr>
              </table>

              <div class="text-center">
                <a href="#" class="boton boton-187" id="financiamiento-imprimir" target="_new">Imprimir</a>
                <a href="#" class="boton boton-187" id="financiamiento-email">Enviar por Correo</a>
              </div>
              <div class="text-center">
                <small>*El precio final puede variar de acuerdo al distribuidor</small>
              </div>
            </div>
          </div>

          <div class="row financiamiento-steps-container">
            <div class="span8 offset2">
              <div id="financiamiento-steps">
                <a href="#" data-target="#financiamiento-step-1" data-step-number="1" class="span2 active">
                  <span class="step-bullet">1</span>
                  <span class="step-top">paso 1</span>
                  <span class="step-bottom">Cotiza</span>
                </a>
                <a href="#" data-target="#financiamiento-step-2" data-step-number="2" class="span2">
                  <span class="step-bullet">2</span>
                  <span class="step-top">paso 2</span>
                  <span class="step-bottom">Elige Seguro</span>
                </a>
                <a href="#" data-target="#financiamiento-step-3" data-step-number="3" class="span3">
                  <span class="step-bullet">3</span>
                  <span class="step-top">paso 3</span>
                  <span class="step-bottom">Obtén tu Mensualidad</span>
                </a>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="span12">
              <p class="disclaimer">Programa de financiamiento en pesos, válido del 1 al 31 de Agosto de 2013 en los distribuidores Toyota en la República Mexicana; sujeto a aprobación de crédito y disponibilidad de producto, aplican restricciones, cambios sin previo aviso. Precios mostrados en Moneda Nacional. Tasa de interés anual fija, bruta. Este cotizador es sólo una referencia aproximada del crédito a contratar el cual puede variar, entre otras cosas, con motivo de su situación crediticia y prima de seguro derivado de su lugar de residencia. La cotización que se muestra en esta página no constituye una promesa de venta ni establece un compromiso para Toyota Financial Services México. Cuide su capacidad de pago, generalmente no debe exceder del 35% de sus ingresos periódicos, los costos por mora son muy elevados.</p>
            </div>
          </div>
          <a href="#" class="financiamiento-control" data-direction="next" id="financiamiento-siguiente">Siguiente</a>
        </div>
<!--         <div class="contenedor-ver-trailer">
          <a href="http://www.youtube.com/watch?v=EIStpMaNF-4" class="show-youtube" class="vert-trailer-all">Trailer</a>
        </div> -->
      </section>

      <section class="deck" id="distribuidores">
        <div id="map-container"></div>
        <div class="container distribuidor-container">
          <div class="span4 distribuidor-row">
            <div class="distribuidor-column top">
              <h2>Siempre estamos cerca de ti</h2>
              <p>Selecciona un estado y un distribuidor. Introduce tu código postal para localizar el distribuidor más cercano y mostrarlo en el mapa.</p>
            </div>
            <div class="distribuidor-column bottom">
              <select class="selectpicker span3" title="Selecciona un Estado" id="distribuidores-select-estado" disabled="disabled">
                <option>Selecciona un Estado</option>
                <option>Aguascalientes</option>
                <option>Baja California</option>
                <option>Baja California Sur</option>
                <option>Campeche</option>
                <option>Chiapas</option>
                <option>Chihuahua</option>
                <option>Coahuila</option>
                <option>Colima</option>
                <option>Distrito Federal</option>
                <option>Durango</option>
                <option>Estado de México</option>
                <option>Guanajuato</option>
                <option>Guerrero</option>
                <option>Hidalgo</option>
                <option>Jalisco</option>
                <option>Michoacán</option>
                <option>Morelos</option>
                <option>Nayarit</option>
                <option>Nuevo León</option>
                <option>Oaxaca</option>
                <option>Puebla</option>
                <option>Querétaro</option>
                <option>Quintana Roo</option>
                <option>San Luis Potosí</option>
                <option>Sinaloa</option>
                <option>Sonora</option>
                <option>Tabasco</option>
                <option>Tamaulipas</option>
                <option>Tlaxcala</option>
                <option>Veracruz</option>
                <option>Yucatán</option>
                <option>Zacatecas</option>
              </select>
              <select class="selectpicker span3" title="Selecciona un Distribuidor" id="distribuidores-select-distribuidor" disabled="disabled">
                <option>Selecciona un Distribuidor</option>
              </select>
              <!--<form id="distribuidores-search-form" class="form-inline">
                <input  class="input-small" type="text" placeholder="Código Postal" value="" id="distribuidores-input-codigo-postal" disabled="disabled" required="true"/>
                <button class="btn" id="distribuidores-search-btn" data-loading-text="Buscando...">Buscar</button>
              </form>-->

              <div id="cp-results-container" style="display:none;">
                <p class="text-center">DISTRIBUIDORES MÁS CERCANOS</p>
                <div id="distribuidores-cp-search-results"></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>


        </div>
        <div class="row pull-right" id="back-to-home">
          <a href="#home" class="btn-back-home pull-right">Corolla</a>
        </div>
      </section>

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

    <div class="preventa-popup" id="popup-enviar-correo">
      <div class="popup">
        <a href="#" class="close-popup pull-right">Cerrar</a>
        <h3 class="text-center">Envíar Cotización</h3>
        <div class="content">
          <form id="form-enviar-cotizacion">
            <div class="control-group">
              <label class="control-label" for="cotizacion-email">Email: </label>
              <div class="controls">
                <input type="email" name="cotizacion-email" id="cotizacion-email" placeholder="Correo Electrónico" required>
                <input type="text" name="honeypot" class="honeypot" id="cotizacion-honeypot" value="">
              </div>
              <textarea name="cotizacion-data" id="cotizacion-data" class="hidden"></textarea>

            </div>

            <div class="text-center">
              <a href="#" class="boton boton-187">Enviar</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="preventa-popup" id="popup-terminos">
        <div class="popup">
          <a href="#" class="close-popup pull-right">Cerrar</a>
          <h3 class="text-center">Términos y condiciones</h3>
          <div class="nano" id="scrollbar">
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">
              <div class="overview">
                <p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Términos y Condiciones de PREVENTA DIGITAL COROLLA</b></span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Vigencia:</b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> del día 23 de agosto de 2013 al 12 de Septiembre ó hasta agotar existencias de 1,000 (mil) vehículos Toyota Corolla 2014.</span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Cobertura:</b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Promoción válida sólo en la República Mexicana.</span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Alcance:</b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> nacional, a través de los 64 (sesenta y cuatro) distribuidores autorizados TOYOTA.</span></span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Objetivo:</b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b> </b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Apartar y comprar, ya sea de contado o a crédito, por propio derecho, cualquier vehículo nuevo Toyota Corolla 2014 en cualquiera de los distribuidores participantes, autorizados por Toyota Motor Sales de México, ubicados en la República Mexicana (los “Distribuidores Participantes”) y recibirá un regalo al momento de la entrega del vehículo (1,000 regalos).</span></span></p><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Llamado de acción:</b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Adquiere</span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> en </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">preventa</span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> uno de los primeros 1,000 </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">(mil) Toyota </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Corolla </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">2014 </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">y obtén un Kit de Toyota Experience que contiene un iPad® mini y hot spot deja que tus acompañantes se conecten para descargar el </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">programa </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">APP Toyota Experience.</span></span></p><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Proceso:</b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Adquirir en preventa 1 (un) solo vehículo nuevo Toyota Corolla 2014 por persona en cualquiera de los distribuidores participantes, autorizados por Toyota Motor Sales de México, ubicados en la República Mexicana y adquirir en forma gratuita un </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>kit</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Toyota </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>Experience</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> al momento de la entrega de dicho vehículo.</span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Exclusiones: </b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Limitado a un kit por cliente registrado y confirmado por el sistema digital de  Flotillas, personas morales o autos demo no participan.</span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Mecánica general de la promoción: </b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">podrá participar cualquier persona que</span></span></p><ol><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Sea mayor de edad antes de la fecha de inicio de la promoción; cuente con una identificación oficial vigente (credencial para votar, pasaporte, cartilla militar o documento migratorio FM-3 o FM-2); ingrese a la página de internet <a href="http://www.toyota.com.mx/corolla14">www.toyota.com.mx/corolla14</a></span></span> <span color="#00000a" style="color: #00000a;">y </span><span color="#00000a" style="color: #00000a;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">acepte los términos de uso</span></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> de la misma; y registre sus datos en dicha página;</span></span></p></li><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Obtenga su código de preventa (limitado a 1,000 códigos);</span></span></p></li><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Presente dicho código en el distribuidor autorizado Toyota que haya elegido mediante la página de internet antes mencionada, o bien, hacer su registro de manera presencial presentándose en el distribuidor autorizado Toyota en que haya un Toyota Corolla 2014 y kit Toyota Experience disponible y que determine el sistema de Toyota, junto con su identificación oficial; y</span></span></p></li><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Adquiera en preventa 1 (un) solo Toyota Corolla 2014, al aceptar los términos y condiciones de compraventa correspondientes; celebre el contrato y firme los documentos correspondientes, incluyendo la carta del cliente respectiva; y efectúe un pago del precio del Toyota Corolla 2014 por la cantidad de $10,000 (diez mil pesos, M.N.) en dicho distribuidor autorizado Toyota.</span></span></p></li></ol><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Validación</b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">: una vez realizados todos los actos señalados en la mecánica general de la promoción y en los términos y condicionales adicionales, únicamente la persona participante en la promoción adquirirá en forma gratuita y podrá solicitar un </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>kit</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Toyota </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>Experience</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">, al momento de la entrega del Toyota Corolla 2014 [en las instalaciones del distribuidor autorizado Toyota correspondiente.</span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Regalo (kit Toyota Experience): </b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">1 (un) solo </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>kit</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Toyota Experience por cada Toyota Corolla 2014 que incluye limitativamente lo siguiente y por ningún motivo podrá ser canjeado por dinero en efectivo o cualquier otro bien o servicio:</span></span></p><ol><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Un (1)Apple iPad® mini WiFi 16GB;</span></span></p></li><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Una (1) funda;</span></span></p></li><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Un (1) </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>hot</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i> spot</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> (</span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>router</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">) Alcatel Y580 con Plan Amigo Telcel de 2GB por 12 (doce) meses; </span></span></p></li><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Una (1) descarga del programa APP Toyota Experience; y</span></span></p></li><li><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Una (1) membresía de acceso a Spotify en los términos señalados a continuación por 3 (tres) meses.</span></span></p></li></ol><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Restricciones adicionales:</b></span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">1. Los vehículos Toyota Corolla 2014 participantes en la presente promoción no incluyen cualquier vehículo muestra o “demo” o cualquier vehículo Toyota Corolla 2014 que se venda bajo cualquier esquema o términos de descuento, flotilla o cuentas corporativas.</span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">2. Las personas participantes en la presente promoción no incluyen a cualquier empleado o asociado de Toyota </span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>Motor Sales</i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> de México, S. de R.L. de C.V., sus distribuidores autorizados, socios de negocios, proveedores y/o familiares.</span></span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Criterio de pérdida del regalo y apartado de vehículo:</b></span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">El apartado del vehículo y el regalo de la promoción se perderán bajo la exclusiva responsabilidad del participante que no lleve a cabo la adquisición en preventa del vehículo participante en los términos de la presente promoción o que no cumpla con cualquiera de los demás términos de la misma.</span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Validación del ganador:</b></span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Una vez concluida la compra y firmados los documentos correspondientes, se procederá de la siguiente manera:</span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">1. Se le pedirá al comprador que firme una carta de conformidad por el regalo, así como la recepción del mismo.</span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">2. Se le solicitará al comprador una copia de la identificación oficial vigente (IFE o pasaporte vigente, cartilla militar o documento migratorio FM-3 o FM-2) así como licencia para conducir vigente o permanente.</span></span></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">3. Se le pedirá al comprador firme una carta Telcel, para hacerle saber que el sistema del Hotspot es Telcel.</span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Condiciones del </b></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i><b>Hot Spot</b></i></span></span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b> Alcatel con línea TELCEL Plan Amigo:</b></span></span></p><p align="JUSTIFY"><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">El servicio de datos vía el </span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>hot spot</i></span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> o </span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>router</i></span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Alcatel es por un periodo de 12 (doce) meses; al finalizar este periodo se puede recargar el saldo del equipo por medio de una ficha amigo de Telcel por parte y a costa del usuario. El número celular al que se hace la recarga viene en la caja del dispositivo.</span></span></span></p><p>&nbsp;</p><p align="JUSTIFY"><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">La línea de datos del </span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>router</i></span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Alcatel funciona solamente a nivel nacional, Estados Unidos de América y Canadá. En caso de que sea utilizado en Estados Unidos de América y Canadá, el consumo de </span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>Roaming</i></span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Internacional de datos será descontado del saldo precargado mensual de la línea. No hay </span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><i>Roaming</i></span></span></span><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"> Nacional de datos a diferencia de las líneas de voz, por lo que no hay un descuento adicional a los 2 (dos) GB incluidos por mes.</span></span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span color="#000000" style="color: #000000;"> </span><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Condiciones de membresía de Spotify:</b></span></span></p><p align="JUSTIFY"><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">El servicio de transmisión de música vía internet gratuito será por tres meses, al finalizar el período del usuario puede mantener su cuenta pero por costo personal. Dentro del Kit Toyota Experience vendrán las instrucciones de como activar la cuenta.</span></span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span color="#000000" style="color: #000000;"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;">Los regalos que se ofrecen en esta promoción han sido autorizados por Toyota Motors Sales de México, S. de R.L. de C.V., en el entendimiento expreso de que: (i) la agencia responsable de la promoción, Lunave Multimedios S.A. de C.V., Radio Móvil Dipsa S.A. de C.V. (TELCEL) y TCT Mobile, S.A. DE C.V. asumen cualquier responsabilidad relacionada con los equipos proporcionados para el Kit, y dichas empresas y todos los participantes liberan incondicional e irrevocablemente a Toyota Motors Sales de México, S. de R.L. de C.V. de cualquier responsabilidad con respecto al funcionamiento y a la promoción, incluyendo enunciativa mas no limitativamente cualquier responsabilidad relacionada con el tratamiento de datos personales, cualesquier derechos en materia de propiedad industrial y de autor, cualquier autorización, permiso, licencia u otro acto requerido para llevar a cabo la promoción y cualquier contribución o derecho aplicable directa o indirectamente a la misma, sin reservarse acción o derecho alguno; (ii) el ganador en términos de la presente promoción será el único que podrá exigir el regalo correspondiente; y (iii) al participar en la presente promoción, todos los participantes aceptarán tácitamente todas las bases, términos y condiciones de esta promoción, incluyendo enunciativa mas no limitativamente al ganador.</span></span></span></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"></p><p align="JUSTIFY"><span face="Verdana, serif" style="font-family: Verdana, serif;"><span size="2" style="font-size: small;"><b>Proceso de Preventa:</b></span></span></p><p align="JUSTIFY"></p><ol><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Se dividen los 1000 paquetes de Toyota </span><span face="Verdana, serif" style="font-family: Verdana, serif;"><i>Experience</i></span><span face="Verdana, serif" style="font-family: Verdana, serif;"> (“Paquetes”), según el desempeño de venta en los últimos 18 meses de cada distribuidor autorizado Toyota.</span></p></li></ol><p>&nbsp;</p><ol start="2"><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Existen dos caminos para llevar a cabo la Pre-Venta, en los términos siguientes:</span></p><ol><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El primero es vía electrónica donde el cliente entra a la página http:www.toyota.com.mx/corolla/preventa y acepta irrevocable e incondicionalmente los términos y condiciones de la misma, sin reserva de derecho o acción alguna.</span></p><ol><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El cliente llena sus datos: </span></p><ol><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Nombre y apellido</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Teléfono</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Correo electrónico</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Distribuidor autorizado Toyota donde desea llevar a cabo la preventa</span></p></li></ol></li></ol></li></ol></li></ol><p>&nbsp;</p><ol><ol><ol start="2"><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El sistema revisa en la base de datos de acuerdo a los Paquetes asignados, asegurándose que el distribuidor autorizado Toyota que el cliente escogió tenga disponibilidad o no y dependiendo de la base de datos podrá contestar tres opciones:</span></p><ol><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Si todos los Paquetes fueron asignados en ese distribuidor autorizado Toyota, el sistema dará opción de seleccionar algún otro distribuidor autorizado Toyota donde sí exista disponibilidad, como opción más próxima.</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Si todos los Paquetes fueron asignados también en la proximidad, el sistema arrojará una opción de lista de espera (“Lista de Espera”), la cual estará sujeta a los términos y condiciones señalados en el presente y aquéllos adicionales que Toyota Motor Sales de México comunique en su caso al cliente.</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Cuando el sistema confirme que existe disponibilidad, ya sea en el distribuidor autorizado Toyota escogido o en uno en proximidad, solicitará la aceptación irrevocable e incondicional de los términos y condiciones de la policitación u oferta de compraventa del vehículo por parte del cliente, sin reserva de derecho o acción alguna, y la confirmación de datos del mismo, en el entendimiento expreso de que dicha policitación u oferta está sujeta a: (</span><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>a</b></span><span face="Verdana, serif" style="font-family: Verdana, serif;">) la confirmación por escrito de la policitación u oferta y del Paquete; (</span><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>b</b></span><span face="Verdana, serif" style="font-family: Verdana, serif;">) el pago de un anticipo del precio; y (</span><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>c</b></span><span face="Verdana, serif" style="font-family: Verdana, serif;">) la revocación inmediata de la policitación u oferta, en caso de no cumplir con lo señalado en los incisos (a) y (b) del presente párrafo; todo lo anterior en los términos señalados en el inciso iii) siguiente.</span></p></li></ol></li></ol></ol></ol><p>&nbsp;</p><ol><ol><ol start="3"><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Una vez que el cliente acepte mediante la página de internet antes mencionada de manera irrevocable e incondicional los términos y condiciones de la policitación u oferta de compraventa del vehículo, sin reserva de derecho o acción alguna, el sistema generará una orden de apartado con número de Folio con el logotipo de “I Like it”, donde le recordará al cliente que tiene [3] tres días naturales a partir de ese momento para dirigirse al distribuidor autorizado Toyota que determinó el sistema, con la impresión de su apartado con número de Folio, para confirmar por escrito su aceptación de dicha policitación u oferta, en los términos de la misma, efectuar el pago de un anticipo del precio correspondiente equivalente a MXN $10,000 pesos del mismo y confirmar el Paquete.</span></p></li></ol></ol></ol><p>&nbsp;</p><ol><ol><ol start="4"><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El sistema abrirá una orden de seguimiento marcando los datos del cliente solicitante y estatus de la aplicación en este caso de Pre-Venta; además, enviará una notificación con los datos de dicha orden de seguimiento a diversas instancias entre las que se encuentran: un directorio escogido; el DM de TMEX encargado de la zona; el Centro de Atención a Clientes Toyota (CAC); y el encargado de la preventa designado por parte de cada distribuidor autorizado Toyota.</span></p></li></ol></ol></ol><p>&nbsp;</p><ol><ol><ol start="5"><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El cliente cuenta con 3 días naturales a partir del momento de la aceptación señalada en el inciso iii) anterior (la “Aceptación”) para acudir personalmente al distribuidor autorizado Toyota que determinó en el sistema con la impresión de su apartado con número de Folio y llevar a cabo lo señalado en dicho inciso.</span></p><ol><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Si el Cliente registrado no acude en las primeras 24 horas naturales siguientes a la Aceptación, el sistema arrojará una orden de “primeras 24 horas”, donde el CAC estará a cargo de emitir una llamada como un aviso de recordatorio que el cliente tiene [2] días naturales más para acudir al distribuidor autorizado Toyota que determinó el sistema y llevar a cabo lo señalado en el inciso iii) anterior; el estatus de orden de apartado deberá de leerse “notificado”.</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Si el Cliente aun así no acude dentro de los dichos 3 días naturales, la policitación u oferta correspondiente se revocará inmediatamente y el número de apartado se liberará en sistema y se podrá volver a asignar vía electrónica, cambiando el estatus de la orden de apartado a “ausente y revocada”.</span></p><ol><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">En dado caso de haber Lista de Espera, el sistema asignará por orden de llegada el Folio correspondiente y enviará un aviso al solicitante, informando al cliente lo anterior, así como de la ausencia de cualquier aceptación por parte de Toyota Motor Sales de México y/o sus distribuidores autorizados, y comenzando su cuenta regresiva de vuelta al punto 2, inciso a del presente.</span></p></li></ol></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Cuando el cliente acuda personalmente con su impresión de apartado al distribuidor autorizado Toyota que determinó el sistema y lleve a cabo lo señalado en el inciso iii) anterior, dicho distribuidor entrará por su cuenta y riesgo exclusivo al sistema, donde deberá tener una sección de confirmación a la que accederá para confirmar la recepción de anticipo del precio y listado de asignación, tanto del Paquete como el número de VIN del Corolla prevendido. Dando una fecha tentativa de entrega.</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El estatus de la orden de seguimiento cambiará a “confirmado y prevendido” y arrojará una nueva hoja con la confirmación por escrita y datos.</span></p></li></ol></li></ol></ol></ol><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">b. La segunda vía de preventa consiste en que el cliente vaya en persona al distribuidor autorizado Toyota que éste seleccione, donde el personal de dicho distribuidor deberá de guiar por cuenta y riesgo exclusivo del mismo a través del registro en internet desde el distribuidor, a efecto de que el cliente acepte por escrito, irrevocable e incondicionalmente los términos y condiciones de la policitación u oferta de compraventa del vehículo por parte del cliente, sin reserva de derecho o acción alguna, en el entendimiento expreso de que dicha policitación u oferta estará sujeta a: (</span><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>a</b></span><span face="Verdana, serif" style="font-family: Verdana, serif;">) la confirmación del sistema por escrito del Paquete por parte del cliente; (</span><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>b</b></span><span face="Verdana, serif" style="font-family: Verdana, serif;">) el pago por parte del cliente de un anticipo del precio equivalente a MXN $10,000 pesos del mismo; y (</span><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>c</b></span><span face="Verdana, serif" style="font-family: Verdana, serif;">) la revocación inmediata de la policitación u oferta, en caso de no cumplir con lo señalado en los incisos (a) y (b) del presente párrafo.</span></p><ol start="3"><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Una vez que inicie la pre-venta, el distribuidor deberá de enviar diariamente comprobante de anticipo y copia de identificación para cada confirmación de apartado. Diariamente el CAC dará seguimiento con los distribuidores autorizados Toyota de las preventas no confirmadas.</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Al comenzar la entrega de pre-venta es importante que el distribuidor dé seguimiento a cualquier revocación para que el sistema indique de inmediato a la Lista de Espera quién o quiénes serán los nuevos asignados en el proceso de Paquetes.</span></p></li><li><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Una vez que termine la Preventa, los anotados en la Lista de Espera serán notificados que no hubo disponibilidad del Paquete.</span></p></li></ol><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>BASES Y CONDICIONES GENERALES DE PARTICIPACIÓN:</b></span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Del 23 de agosto de 2013 al 12 de septiembre de 2013 o hasta agotar existencias. Promoción válida para la República Mexicana. Podrán participar cualesquiera personas que sean mayores de 18 años antes de la fecha de inicio de la promoción y que cuenten con una identificación oficial vigente (IFE, pasaporte vigente, cartilla militar o documento migratorio FM-3 o FM-2), así como licencia para conducir vigente o permanente y que durante de la vigencia de la promoción hayan realizado por su propio derecho la compra de un vehículo (nuevo) Toyota Corolla 2014 en cualquier Distribuidor Participante de la República Mexicana.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">La promoción se llevará a cabo en el interior de los Distribuidores Toyota participantes ubicados en la República Mexicana.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Participarán todos los compradores sin importar que su compra haya sido de contado o a crédito.</span></p><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>TÉRMINOS Y CONDICIONES ADICIONALES:</b></span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Ningún comprador podrá, solicitar el regalo previo a la entrega del vehículo y la firma de papeles correspondientes.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Los participantes deberán seguir las instrucciones previamente mencionadas, entregar los documentos solicitados y firmar la carta de notificación y aceptación del premio durante la vigencia antes mencionada.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Para la reclamación del regalo será indispensable haber cumplido con todos los términos y condiciones de la promoción; de lo contrario perderá el regalo.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El regalo deberá ser entregado el mismo día que reciba el vehículo comprado.</span></p><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>RESTRICCIONES DEL PREMIO Y LIBERACIONES DE RESPONSABILIDAD:</b></span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">1. Por ningún motivo el premio puede ser canjeado por dinero en efectivo o cualquier otro bien o servicio.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">2. Ni la agencia responsable de la promoción ni Toyota Motors Sales de México, S. de R.L. de C.V. se harán responsables, en caso de pérdida, ni de cualquier daño o perjuicio relacionado directa o indirectamente con el regalo.</span></p><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>AVISO DE PRIVACIDAD:</b></span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Aceptación de manera personal cuando los Datos Personales se obtengan personalmente del titular pondrá a tu disposición el siguiente Aviso de Privacidad en el momento en que sean recabados tus Datos Personales. Además, a través de dicho aviso, Toyota recabará el otorgamiento o la negación del consentimiento del titular para someter dichos datos a las Finalidades del Tratamiento establecidas en el siguiente Aviso de Privacidad.</span></p><p>&nbsp;</p><p><span face="Verdana, serif" style="font-family: Verdana, serif;"><b>AVISO DE PRIVACIDAD.</b></span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">De conformidad con lo establecido por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (la Ley) se le comunica que el Responsable del manejo de la información que nos ha proporcionado es Toyota Motors Sales de México, S. de R.L. de C.V., con domicilio en Paseo de Tamarindos 400-B, piso 3, Col. Bosques de las Lomas, Del. Cuajimalpa de Morelos, C.P. 05120, México, D.F. y que se ha designado al representante legal para cualquier asunto relacionado a dicha información y que la finalidad de la misma es para:</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Contactar a nuestros clientes para llevar a cabo la entrega de productos, así como cumplir con las obligaciones con nuestros clientes, en caso que te hagas acreedor a algún premio derivado de las promociones, trivias o sorteos o para cumplir con las obligaciones que en su caso tengamos o llegaremos a tener contigo. </span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Los Datos serán tratados de conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento. La confidencialidad de los Datos está garantizada y los mismos están protegidos por medidas de seguridad administrativas, técnicas y físicas, para evitar su daño, pérdida, alteración, destrucción, uso, acceso o divulgación indebida. Únicamente las personas autorizadas tendrán acceso a sus Datos.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">En caso de existir alguna modificación al presente Aviso de Privacidad se hará de su conocimiento en www.toyota.com.mx</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">Usted puede en cualquier momento limitar el uso, divulgación y/o transmisión de los datos que ha proporcionado y ejercer los derechos que le otorga la Ley con relación a los mismos comunicándose por cualquier medio con nosotros. A fin de que estemos en posibilidad de atenderle conforme lo establecido en la Ley, agradeceremos nos proporcione su domicilio y/o correo electrónico.</span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">El que suscribe, hago constar que recibí el Aviso de Privacidad a que se refiere la Ley y otorgo mi consentimiento para que los datos que he proporcionado y que constan en la presente sean utilizados, tratados y/o transmitidos por Toyota Motors Sales de México, S. de R.L. de C.V. en los términos de dicho aviso. Asimismo, les manifiesto que cualquier aviso y/o notificación que deba realizarse en los términos del ordenamiento antes mencionado deberá hacerse en la dirección y/o en el correo electrónico que se indica al calce de tal forma que al proporcionar mi dirección y/o correo electrónico se haga constar mi consentimiento antes mencionado. </span></p><p><span face="Verdana, serif" style="font-family: Verdana, serif;">En caso de existir alguna modificación al presente Aviso de Privacidad se hará de su conocimiento en www.toyota.com.mx</span></p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIfZV2DXDcTcIIkGGYZiIJ1n6aMjgLpZc&amp;libraries=geocode&amp;sensor=true"></script>
    <script src="js/compact.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.0/jquery.xdomainrequest.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="js/threesixty.js"></script>
    <script src="js/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="js/bootstrap-slider/bootstrap-slider.js"></script>
    <script src="js/phpjs/urlencode.js"></script>
    <script src="js/phpjs/number_format.js"></script>
    <script src="js/phpjs/http_build_query.js"></script>
    <script src="js/phpjs/sprintf.js"></script>
    <script src="js/distribuidores.js"></script>
    <script src="js/jquery.cyclotron.js"></script>
    <script src="js/jquery.tinyscrollbar.min.js"></script>
    <script src="js/scrolldeck/jquery.scrollorama.js"></script>
    <script src="js/scrolldeck/jquery.scrolldeck.js"></script>
    <script src="js/preloadjs-0.3.1.min.js"></script>
    <script src="js/fancybox/source/jquery.fancybox.js"></script>
    <script src="js/spin.min.js"></script>
    <script src="js/toyota.js"></script>
    <script src="js/financiamiento-toyota.js"></script>

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

