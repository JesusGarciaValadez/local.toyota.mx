<?php include('header.php'); ?>
<script>
var new_height = JSON.stringify({"height": "1360px"});
top.postMessage(new_height, "https://www.youtube.com/");
top.postMessage(new_height, "http://www.youtube.com/");
</script>
	<section class="secVideo container">
		<article>
			<div class="textVideo">
				<h2>Una familia con Actitud Highlander</h2>
				<p>Conoce las historias de la familia Cervera y descubre<br>con ellos tu nueva actitud Highlander ‘14.</p>
			</div>
			<div class="contVideo">
				<iframe class="video" name="videos" src="//www.youtube.com/embed/GuKeJwn7q3s" frameborder="0" allowfullscreen></iframe>
				<div class="contVideos sixteen columns">
					<!--<a href="//www.youtube.com/embed/IIvSXocE6YY" target="videos"><img src="images/video/img01.jpg"></a>-->
				</div>
			</div>
		</article>
	</section>

<?php include('footer.php'); ?>
