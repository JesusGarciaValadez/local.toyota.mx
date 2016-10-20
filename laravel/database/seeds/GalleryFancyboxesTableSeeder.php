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
      'brands_id'     => 1,
      'title'         => 'Galería 1',
      'image_big'     => 'storage/images/galeria/img-01.jpg',
      'image_small_1' => 'storage/images/galeria/01.jpg',
      'image_small_2' => 'storage/images/galeria/img-02.jpg',
      'image_small_3' => 'storage/images/galeria/img-03.jpg',
      'thumb_big'     => 'storage/images/thumbs/01.png',
      'thumb_small_1' => 'storage/images/thumbs/03.png',
      'thumb_small_2' => 'storage/images/thumbs/02-thumb.jpg',
      'thumb_small_3' => 'storage/images/thumbs/03-thumb.png',
      'title_big'     => 'Vestiduras cómodas y elegantes, listas para cualquier viaje.',
      'title_small_1' => 'Cada detalle convive en armonía con todos los interiores. La palanca no es la excepción.',
      'title_small_2' => 'Toma el control, el volante se volverá tu mejor cómplice.',
      'title_small_3' => 'Ve todo lo que sucede a tus espaldas, todo en su interior tiene una función.'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 1,
      'title'         => 'Galería 2',
      'image_big'     => 'storage/images/galeria/img-05.jpg',
      'image_small_1' => 'storage/images/galeria/img-06.jpg',
      'image_small_2' => 'storage/images/galeria/img-07.jpg',
      'image_small_3' => 'storage/images/galeria/img-08.jpg',
      'thumb_big'     => 'storage/images/thumbs/05-thumb.png',
      'thumb_small_1' => 'storage/images/thumbs/06-thumb.png',
      'thumb_small_2' => 'storage/images/thumbs/07-thumb.png',
      'thumb_small_3' => 'storage/images/thumbs/08-thumb.png',
      'title_big'     => 'Disfruta cualquier camino, su techo panorámico será tu mejor compañero.',
      'title_small_1' => 'Lleva tu música a todas partes, la equipamos pensando en todos.',
      'title_small_2' => 'Siempre buscamos facilitarte la vida y nuestro botón de encendido lo hace muy bien.',
      'title_small_3' => 'La seguridad de cada pasajero siempre podrá estar bajo tu control.'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 1,
      'title'         => 'Galería 3',
      'image_big'     => 'storage/images/galeria/img-09.jpg',
      'image_small_1' => 'storage/images/galeria/img-10.jpg',
      'image_small_2' => 'storage/images/galeria/img-11.jpg',
      'image_small_3' => 'storage/images/galeria/img-12.jpg',
      'thumb_big'     => 'storage/images/thumbs/09-thumb.png',
      'thumb_small_1' => 'storage/images/thumbs/10-thumb.png',
      'thumb_small_2' => 'storage/images/thumbs/11-thumb.png',
      'thumb_small_3' => 'storage/images/thumbs/12-thumb.png',
      'title_big'     => 'Fuerza y dinamismo en cada una de sus líneas.',
      'title_small_1' => 'Equipada con rines de 18 o 19 pulgadas, así luce mejor.',
      'title_small_2' => 'Date a notar con las luces que vienen en los espejos laterales.',
      'title_small_3' => 'Con su cámara de reversa evitarás darle un golpecito.'
    ] );
  }
}
