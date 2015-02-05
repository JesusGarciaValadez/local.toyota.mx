<?php include('header.php'); ?>
<script src="https://www.wtp101.com/pixel?id=23131"></script>
<script>
var new_height = JSON.stringify({"height": "1204px"});
top.postMessage(new_height, "https://www.youtube.com/");
top.postMessage(new_height, "http://www.youtube.com/");
</script>
<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: MX_Highlander-Youtube_highlander14_Prueba_de_Manejo
URL of the webpage where the tag is expected to be placed: https://www.youtube.com/user/ToyotaMex/highlander14
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 09/03/2014
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://4493100.fls.doubleclick.net/activityi;src=4493100;type=Youtu0;cat=MX_Hi007;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://4493100.fls.doubleclick.net/activityi;src=4493100;type=Youtu0;cat=MX_Hi007;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

    <section class="secPrueba container">
        <article>
            <div class="textPrueba">
                <h2>prueba de manejo</h2>
                <p>Ingresa tus datos, selecciona tu sucursal más cercana y un representante se comunicará contigo.</p>
            </div>
            <div class="contPrueba">
                <form action="" method="" id="testDrive">
                    <label>Por favor ingresa tus datos.</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required="true">
                    <input type="text" name="correo" id="correo" placeholder="Correo Electrónico" required="true">
                    <input type="text" name="telefono" id="telefono" placeholder="Número Telefónico (Opcional)">
                    <label>DISTRIBUIDORA</label>
                    <input type="text" name="dealer_search" id="dealer_search" placeholder="Ingresa tu dirección">
                    
                    <div class="selectBox" id="dealer" style="display:none;">
                    <div class="box boxsu" id="box">- Elige una sucursal -</div>
                        <select name="sucursal" id="sucursal" required>
                            <option value="">- Elige una sucursal -</option>
                        </select>
                    </div> 

                    <input type="button" value="Enviar" name="enviar" id="enviar" style="display:none;" />
                </form>
            </div>
        </article>
    </section>
<?php include('footer.php'); ?>
