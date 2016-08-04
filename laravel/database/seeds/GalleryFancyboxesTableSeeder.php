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
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-01.jpg" title="Luces traseras integradas a la carrocería que lo hacen ver dinámico.">
              <img src="assets/images/thumbs/01-thumb.jpg" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-02.jpg" title="Su rediseño se nota en cualquier parte del automóvil.">
              <img src="assets/images/thumbs/02-thumb.jpg" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-03.jpg" title="Suspensión mejorada para tener mayor tracción y sensación de control.">
              <img src="assets/images/thumbs/03-thumb.jpg" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-04.jpg" title="Incomparable espacio en cajuela, podrás llevar lo que quieras.">
              <img src="assets/images/thumbs/04-thumb.jpg" />
            </a>
          </li>
        </ul>'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id' => 1,
      'content'   => '
        <ul>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-05.jpg" title="Sensación confortable de conducción, las mejores transmisiones manuales son nuestras.">
              <img src="assets/images/thumbs/05-thumb.jpg" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-06.jpg" title="Aceleración y fuerza, palabras que describen el motor de Yaris Sedán 2017.">
              <img src="assets/images/thumbs/06-thumb.jpg" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-07.jpg" title="Equipado para que todos tus trayectos sean mucho más divertidos.">
              <img src="assets/images/thumbs/07-thumb.jpg" />
            </a>
          </li>
          <li>
            <a class="fancybox" rel="gallery1" href="assets/images/galeria/img-08.jpg" title="Atractivo tablero con look deportivo. Información importante a tu alcance.">
              <img src="assets/images/thumbs/08-thumb.jpg" />
            </a>
          </li>
        </ul>'
    ] );
  }
}
