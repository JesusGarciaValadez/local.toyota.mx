<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GalleryFancyboxesTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Test for create a new Gallery Fancybox with his own title
   * @return void
   */
  public function testCreateNewGalleryFancybox()
  {
    $this->expectsEvents( Highlander\Events\UploadImages::class );
    $this->doesntExpectEvents( Highlander\Events\UploadFiles::class );

    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
         ->click( 'Crear nuevo elemento' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/create' )
         ->type( 'Titulo', 'title' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_big' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_small_1' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_small_2' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_small_3' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_big' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_small_1' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_small_2' )
         ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_small_3' )
         ->type( 'Titulo para imagen grande', 'title_big' )
         ->type( 'Titulo para imagen pequeña 1', 'title_small_1' )
         ->type( 'Titulo para imagen pequeña 2', 'title_small_2' )
         ->type( 'Titulo para imagen pequeña 3', 'title_small_3' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/create' )
         ->seeInDatabase( 'gallery_fancyboxes', [
            'title'         => 'Titulo',
            'thumb_big'     => 'assets/images/thumbs/iPhone-6.jpg',
            'thumb_small_1' => 'assets/images/thumbs/iPhone-6.jpg',
            'thumb_small_2' => 'assets/images/thumbs/iPhone-6.jpg',
            'thumb_small_3' => 'assets/images/thumbs/iPhone-6.jpg',
            'image_big'     => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'image_small_1' => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'image_small_2' => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'image_small_3' => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'title_big'     => 'Titulo para imagen grande',
            'title_small_1' => 'Titulo para imagen pequeña 1',
            'title_small_2' => 'Titulo para imagen pequeña 2',
            'title_small_3' => 'Titulo para imagen pequeña 3'
          ] );
  }

  /**
   * Test for edit the first Gallery Fancybox
   * @return void
   */
  public function testEditFirstGalleryFancybox()
  {
    $this->doesntExpectEvents( Highlander\Events\UploadImages::class )
         ->doesntExpectEvents( Highlander\Events\UploadFiles::class );

    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
         ->click( 'Editar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/1/edit' )
         ->type( 'Titulo', 'title' )
         ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_big' )
         ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_small_1' )
         ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_small_2' )
         ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_small_3' )
         ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_big' )
         ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_small_1' )
         ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_small_2' )
         ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_small_3' )
         ->type( 'Titulo para imagen grande', 'title_big' )
         ->type( 'Titulo para imagen pequeña 1', 'title_small_1' )
         ->type( 'Titulo para imagen pequeña 2', 'title_small_2' )
         ->type( 'Titulo para imagen pequeña 3', 'title_small_3' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/1/edit' )
         ->seeInDatabase( 'gallery_fancyboxes', [
            'title'         => 'Titulo',
            'thumb_big'     => 'assets/images/thumbs/iPhone-6.jpg',
            'thumb_small_1' => 'assets/images/thumbs/iPhone-6.jpg',
            'thumb_small_2' => 'assets/images/thumbs/iPhone-6.jpg',
            'thumb_small_3' => 'assets/images/thumbs/iPhone-6.jpg',
            'image_big'     => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'image_small_1' => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'image_small_2' => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'image_small_3' => 'assets/images/galeria/iPhone-6-Plus.jpg',
            'title_big'     => 'Titulo para imagen grande',
            'title_small_1' => 'Titulo para imagen pequeña 1',
            'title_small_2' => 'Titulo para imagen pequeña 2',
            'title_small_3' => 'Titulo para imagen pequeña 3'
          ] );
  }

  /**
   * Test for delete the first Gallery Fancybox
   * @return void
   */
  public function testDeleteFirstGalleryFancybox()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
         ->press( 'Eliminar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
         ->see( 'Galería eliminada' );
  }

  /**
   * Test for delete various Gallery Fancyboxes
   * @return void
   */
  public function testDeleteVariousGalleryFancybox()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
         ->press( 'Eliminar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
         ->see( 'Galería eliminada' );

    $this->press( 'Eliminar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
         ->see( 'Galería eliminada' );
  }
}
