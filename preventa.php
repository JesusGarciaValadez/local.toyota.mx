<?php
header('location: /');
exit;


require_once(dirname(__FILE__).'/lib/util.php');
require_once(dirname(__FILE__).'/lib/Ikimea/Browser/Browser.php');
use Ikimea\Browser\Browser;
$browser  = new Browser();
$clientIp = util::get_client_ip();
$step     = util::array_get($_GET['step'], 1);
?>
<!DOCTYPE html>
<!--
             _             _
            | |           | |
    __ _ ___| |_ _ __ __ _| |_  __ _   _ __ ___ __  __
   / _` / __| __| '__/ _` | __|/ _` | | '_ ` _ \\ \/ /
  | (_| \__ \ |_| | | (_| | |_| (_| |_| | | | | |>  <
   \__,_|___/\__|_|  \__,_|\__|\__,_(_)_| |_| |_/_/\_\

  http://astrata.mx

-->
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Preventa - Toyota Corolla</title>
    <?php if ( $browser->isMobile() && $browser->getPlatform() == 'iPhone' ): ?>
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <?php else: ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php endif; ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      html, body { height: 100%; }
      iframe { display: none; }
      .preventa-block:first-child label.error {
        font-weight: bold;
        color: #f00;
        font-size: small;
        margin: 0;
      }
      .preventa-block:first-child input.error {
        margin-bottom: 0;
      }
    </style>
    <!-- <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="js/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="css/toyota.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" id="main-navbar">
      <div class="navbar-inner">

        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#home" class="brand hidden-desktop">Toyota</a>
          <p class="navbar-text pull-right visible-desktop">
            <a href="http://www.corollaexperience.com/"><img src="css/img/logo-corolla.png" alt="Toyota Corolla"></a>
          </p>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="visible-desktop"><a href="http://toyota.com.mx/" id="logo-toyota">Toyota</a></li>
              <li><a href="index.php#explora">Explora</a></li>
              <li><a href="index.php#modelos">Modelos</a></li>
              <li><a href="index.php#distribuidores">Distribuidores</a></li>
              <li class="active"><a href="#">Preventa</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <section id="preventa">
      <?php
      switch ( $step ) {
        case 1:
          include(dirname(__FILE__).'/preventa-step-01.php');
        break;
        case 2:
          include(dirname(__FILE__).'/preventa-step-02.php');
        break;
      }
      ?>
    </section>
    <script type="text/javascript">
    var clientIp = '<?= $clientIp; ?>';
    </script>
    <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
    <script src="js/compact.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.0/jquery.xdomainrequest.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/2.1.0/placeholders.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="js/phpjs/urlencode.js"></script>
    <script src="js/phpjs/number_format.js"></script>
    <script src="js/phpjs/http_build_query.js"></script>
    <script src="js/phpjs/sprintf.js"></script>
    <script src="js/jquery.tinyscrollbar.min.js"></script>
    <script src="js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="js/spin.min.js"></script>
    <script src="js/preventa.js"></script>


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

     ga('create', 'UA-43443825-1', 'corollaexperience.com');
     ga('send', 'pageview');

    </script>

    <script type="text/javascript">
      var fb_param = {};
      fb_param.pixel_id = '6009222401030';
      fb_param.value = '0.00';
      fb_param.currency = 'MXN';
      (function(){
       var fpw = document.createElement('script');
       fpw.async = true;
       fpw.src = '//connect.facebook.net/en_US/fp.js';
       var ref = document.getElementsByTagName('script')[0];
       ref.parentNode.insertBefore(fpw, ref);
      })();
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6009222401030&amp;value=0&amp;currency=MXN" /></noscript>
    <script>
      function ebConversionTracker(conv){
        var ebConversionImg = new Image();
        var ebConversionURL = "HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?"
        ebConversionURL += "cn=as&ActivityID="+conv+"&ns=1";
        ebConversionImg.src = ebConversionURL;
      }
    </script>
  </body>
</html>
