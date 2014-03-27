<?php include('header.php'); ?>

	<section class="secPrueba container">
		<article>
			<div class="textPrueba sixteen columns">
				<h2>Prueba de manejo</h2>
				<p>Vive la mejor experiencia de manejo con la nueva generación Highlander 14.</p>
			</div>
			<div class="contPrueba sixteen columns">
				<p>Por favor ingresa tus datos  y selecciona tu sucursal más cercana.</p>
				<form action="" method="get">
                	<input type="text" placeholder="*NOMBRE" required="true">
                    <input type="text" placeholder="*CORREO ELECTRÓNICO" required="true">
                    <input type="text" placeholder="*NÚMERO TELEFÓNICO (OPCIONAL)">
                    <label>SELECCIONA SUCURSAL</label>
                    <div class="selectBox">
                        <div class="box" id="box">Estado</div>
                        <select name="mySelectBox" id="mySelectBox" onchange="this.parentNode.getElementsByTagName('div')[0].innerHTML=this.options[this.selectedIndex].text">
                            <option value="1" selected="selected" class="primero">Estado</option>
                            <option value="2">Escribir un libro</option>
                            <option value="3">Ser Padre</option>
                            <option value="4">Hacer un Blog</option>
                            <option value="5" class="ultimo">Un texto largo para ver que efecto produce</option>
                        </select>
                    </div>
                    <div class="selectBox">
                        <div class="box" id="box">Sucursal</div>
                        <select name="mySelectBox" id="mySelectBox" onchange="this.parentNode.getElementsByTagName('div')[0].innerHTML=this.options[this.selectedIndex].text">
                            <option value="1" selected="selected" class="primero">Sucursal</option>
                            <option value="2">Escribir un libro</option>
                            <option value="3">Ser Padre</option>
                            <option value="4">Hacer un Blog</option>
                            <option value="5" class="ultimo">Un texto largo para ver que efecto produce</option>
                        </select>
                    </div>
                    <input type="submit" value="enviar">
                </form>
			</div>
		</article>
	</section>

<?php include('footer.php'); ?>