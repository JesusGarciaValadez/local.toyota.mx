<?php

use Illuminate\Database\Seeder;

class GalleryFancyboxesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id' => 1,
      'content'   => '<ul>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-01.jpg" title="Vestiduras cómodas y elegantes, listas para cualquier viaje.">
              <img src="assets/images/thumbs/01.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/01.jpg" title="Cada detalle convive en armonía con todos los interiores. La palanca no es la excepción.">
              <img src="assets/images/thumbs/03.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-02.jpg" title="Toma el control, el volante se volverá tu mejor cómplice.">
              <img src="assets/images/thumbs/02-thumb.jpg" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-03.jpg" title="Ve todo lo que sucede a tus espaldas, todo en su interior tiene una función.">
              <img src="assets/images/thumbs/03-thumb.png" />
            </a>
          </li>
        </ul>'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id' => 1,
      'content'   => '
        <ul>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-05.jpg" title="Disfruta cualquier camino, su techo panorámico será tu mejor compañero.">
              <img src="assets/images/thumbs/05-thumb.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-06.jpg" title="Lleva tu música a todas partes, la equipamos pensando en todos.">
              <img src="assets/images/thumbs/06-thumb.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-07.jpg" title="Siempre buscamos facilitarte la vida y nuestro botón de encendido lo hace muy bien.">
              <img src="assets/images/thumbs/07-thumb.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-08.jpg" title="La seguridad de cada pasajero siempre podrá estar bajo tu control.">
              <img src="assets/images/thumbs/08-thumb.png" />
            </a>
          </li>
        </ul>'
    ] );

     DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id' => 1,
      'content'   => '
        <ul>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-09.jpg" title="Fuerza y dinamismo en cada una de sus líneas.">
              <img src="assets/images/thumbs/09-thumb.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-10.jpg" title="Equipada con rines de 18 o 19 pulgadas, así luce mejor.">
              <img src="assets/images/thumbs/10-thumb.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-11.jpg" title="Date a notar con las luces que vienen en los espejos laterales.">
              <img src="assets/images/thumbs/11-thumb.png" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-12.jpg" title="Con su cámara de reversa evitarás darle un golpecito.">
              <img src="assets/images/thumbs/12-thumb.png" />
            </a>
          </li>
        </ul>'
    ] );
  }
}
