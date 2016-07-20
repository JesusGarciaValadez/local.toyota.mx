        <footer>
            <a href="#cover" class="scroll"></a>
            <div class="menu3">
                <nav>
                    <ul>
                        <li><a href="http://toyota.com.mx/contenidos/aviso-de-privacidad/" target="_blank">Política de Privacidad</a></li>
                        <li><a href="http://toyota.com.mx/contenidos/terminos-legales-y-condiciones/" target="_blank">Términos Legales</a></li>
                        <!-- <li><a href="">Aviso de Privacidad</a></li> -->
                    </ul>
                </nav>   
                <span>
                    <p>©<?=date('Y');?> Toyota, TOYOTA MÉXICO</p>
                </span>
            </div>
        </footer>
        
        <link rel="stylesheet" href="<?=base_url('assets/css/animate.css');?>">
        <link href="<?=base_url('assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />

        <!-- Threesixty
================================================== -->
        <link href="<?=base_url('assets/plugins/threesixty/threesixty.css');?>" rel="stylesheet" />

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="<?=base_url('assets/js/vendor/html5shiv.js');?>"><\/script>')</script>
        <![endif]-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?=base_url('assets/js/vendor/jquery-1.11.0.min.js');?>"><\/script>')</script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCuosyGWyggBFw6Fzv6T3TquJGqUz76DGQ&libraries=places"></script>
        <script src="<?=base_url('assets/plugins/bxslider/jquery.bxslider.min.js');?>"></script>
        <script src="<?=base_url('assets/plugins/threesixty/threesixty.js');?>"></script>
        <script src="<?=base_url('assets/plugins/fitvids/jquery.fitvids.js');?>"></script>
        <script src="<?=base_url('assets/plugins/touch-swipe/jquery.touchSwipe.min.js');?>"></script>
        <script src="<?=base_url('assets/plugins/onscreen/jquery.onscreen.min.js');?>"></script>
        <!-- Financiamiento -->
        <?php if(isset($financiamiento) && $financiamiento == true){ ?>
            <script src="<?=base_url('assets/js/phpjs/number_format.js');?>"></script>
            <script src="<?=base_url('assets/js/financiamiento-toyota.js');?>"></script>
        <?php } ?>
        <!-- Add main JS -->
        <script src="<?=base_url('assets/js/main.js');?>"></script>
        <script src="<?=base_url('assets/js/especificaciones.js');?>"></script>
        <script src="<?=base_url('assets/js/mapa.js');?>?<?=mt_rand(1111,9999)?>"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/picturefill/2.0.0/picturefill.min.js" async=""></script>
        
        <!-- Add fancyBox main JS and CSS files -->
        <script src="<?=base_url('assets/plugins/fancyBox/jquery.fancybox.js');?>"></script>
        <script src="<?=base_url('assets/plugins/fancyBox/helpers/jquery.fancybox-buttons.js');?>"></script>
        <script src="<?=base_url('assets/plugins/fancyBox/helpers/jquery.fancybox-media.js');?>"></script>
    </body>
</html>
