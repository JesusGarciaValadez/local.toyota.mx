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
    /** Toyota Highlander */
    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 1,
      'title'         => 'Galería Highlander 1',
      'image_big'     => 'storage/images/galeria/highlander/01.jpg',
      'image_small_1' => 'storage/images/galeria/highlander/02.jpg',
      'image_small_2' => 'storage/images/galeria/highlander/03.jpg',
      'image_small_3' => 'storage/images/galeria/highlander/04.jpg',
      'thumb_big'     => 'storage/images/thumbs/highlander/01.png',
      'thumb_small_1' => 'storage/images/thumbs/highlander/02-thumb.png',
      'thumb_small_2' => 'storage/images/thumbs/highlander/03-thumb.png',
      'thumb_small_3' => 'storage/images/thumbs/highlander/04-thumb.jpg',
      'title_big'     => 'Vestiduras cómodas y elegantes, listas para cualquier viaje.',
      'title_small_1' => 'Cada detalle convive en armonía con todos los interiores. La palanca no es la excepción.',
      'title_small_2' => 'Toma el control, el volante se volverá tu mejor cómplice.',
      'title_small_3' => 'Ve todo lo que sucede a tus espaldas, todo en su interior tiene una función.'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 1,
      'title'         => 'Galería Highlander 2',
      'image_big'     => 'storage/images/galeria/highlander/05.jpg',
      'image_small_1' => 'storage/images/galeria/highlander/06.jpg',
      'image_small_2' => 'storage/images/galeria/highlander/07.jpg',
      'image_small_3' => 'storage/images/galeria/highlander/08.jpg',
      'thumb_big'     => 'storage/images/thumbs/highlander/05.png',
      'thumb_small_1' => 'storage/images/thumbs/highlander/06-thumb.png',
      'thumb_small_2' => 'storage/images/thumbs/highlander/07-thumb.png',
      'thumb_small_3' => 'storage/images/thumbs/highlander/08-thumb.png',
      'title_big'     => 'Disfruta cualquier camino, su techo panorámico será tu mejor compañero.',
      'title_small_1' => 'Lleva tu música a todas partes, la equipamos pensando en todos.',
      'title_small_2' => 'Siempre buscamos facilitarte la vida y nuestro botón de encendido lo hace muy bien.',
      'title_small_3' => 'La seguridad de cada pasajero siempre podrá estar bajo tu control.'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 1,
      'title'         => 'Galería Higlander 3',
      'image_big'     => 'storage/images/galeria/highlander/09.jpg',
      'image_small_1' => 'storage/images/galeria/highlander/10.jpg',
      'image_small_2' => 'storage/images/galeria/highlander/11.jpg',
      'image_small_3' => 'storage/images/galeria/highlander/12.jpg',
      'thumb_big'     => 'storage/images/thumbs/highlander/09.png',
      'thumb_small_1' => 'storage/images/thumbs/highlander/10-thumb.png',
      'thumb_small_2' => 'storage/images/thumbs/highlander/11-thumb.png',
      'thumb_small_3' => 'storage/images/thumbs/highlander/12-thumb.png',
      'title_big'     => 'Fuerza y dinamismo en cada una de sus líneas.',
      'title_small_1' => 'Equipada con rines de 18 o 19 pulgadas, así luce mejor.',
      'title_small_2' => 'Date a notar con las luces que vienen en los espejos laterales.',
      'title_small_3' => 'Con su cámara de reversa evitarás darle un golpecito.'
    ] );

    /** Toyota Sienna */
    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 2,
      'title'         => 'Galería Sienna 1',
      'image_big'     => 'storage/images/galeria/sienna/01.jpg',
      'image_small_1' => 'storage/images/galeria/sienna/02.jpg',
      'image_small_2' => 'storage/images/galeria/sienna/03.jpg',
      'image_small_3' => 'storage/images/galeria/sienna/04.jpg',
      'thumb_big'     => 'storage/images/thumbs/sienna/01.jpg',
      'thumb_small_1' => 'storage/images/thumbs/sienna/02-thumb.jpg',
      'thumb_small_2' => 'storage/images/thumbs/sienna/03-thumb.jpg',
      'thumb_small_3' => 'storage/images/thumbs/sienna/04-thumb.jpg',
      'title_big'     => 'Vestiduras cómodas y elegantes, listas para cualquier viaje.',
      'title_small_1' => 'Cada detalle convive en armonía con todos los interiores. La palanca no es la excepción.',
      'title_small_2' => 'Toma el control, el volante se volverá tu mejor cómplice.',
      'title_small_3' => 'Ve todo lo que sucede a tus espaldas, todo en su interior tiene una función.'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 2,
      'title'         => 'Galería Sienna 2',
      'image_big'     => 'storage/images/galeria/sienna/05.jpg',
      'image_small_1' => 'storage/images/galeria/sienna/06.jpg',
      'image_small_2' => 'storage/images/galeria/sienna/07.jpg',
      'image_small_3' => 'storage/images/galeria/sienna/08.jpg',
      'thumb_big'     => 'storage/images/thumbs/sienna/05.jpg',
      'thumb_small_1' => 'storage/images/thumbs/sienna/06-thumb.jpg',
      'thumb_small_2' => 'storage/images/thumbs/sienna/07-thumb.jpg',
      'thumb_small_3' => 'storage/images/thumbs/sienna/08-thumb.jpg',
      'title_big'     => 'Disfruta cualquier camino, su techo panorámico será tu mejor compañero.',
      'title_small_1' => 'Lleva tu música a todas partes, la equipamos pensando en todos.',
      'title_small_2' => 'Siempre buscamos facilitarte la vida y nuestro botón de encendido lo hace muy bien.',
      'title_small_3' => 'La seguridad de cada pasajero siempre podrá estar bajo tu control.'
    ] );

    DB::table( 'gallery_fancyboxes' )->insert( [
      'brands_id'     => 2,
      'title'         => 'Galería Sienna 3',
      'image_big'     => 'storage/images/galeria/sienna/09.jpg',
      'image_small_1' => 'storage/images/galeria/sienna/10.jpg',
      'image_small_2' => 'storage/images/galeria/sienna/11.jpg',
      'image_small_3' => 'storage/images/galeria/sienna/12.jpg',
      'thumb_big'     => 'storage/images/thumbs/sienna/09.jpg',
      'thumb_small_1' => 'storage/images/thumbs/sienna/10-thumb.jpg',
      'thumb_small_2' => 'storage/images/thumbs/sienna/11-thumb.jpg',
      'thumb_small_3' => 'storage/images/thumbs/sienna/12-thumb.jpg',
      'title_big'     => 'Fuerza y dinamismo en cada una de sus líneas.',
      'title_small_1' => 'Equipada con rines de 18 o 19 pulgadas, así luce mejor.',
      'title_small_2' => 'Date a notar con las luces que vienen en los espejos laterales.',
      'title_small_3' => 'Con su cámara de reversa evitarás darle un golpecito.'
    ] );
  }
}
