<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CarTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Car model's gallery depends of the given parameter.
   *
   * @return void
   */
  public function testOpenCarBrandOption()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . "admin/" )
         ->assertResponseOk( )
         ->seePageIs( env( 'APP_URL' ) . "admin/" )
         ->see( 'Highlander' )
         ->click( 'Editar' )
         ->assertResponseOk();

    $response = $this->call( 'GET', '/receta/slug-de-prueba' );

    $this->assertEquals( 404, $response->status() );
  }

  /**
   * Test for delete car model
   * @return void
   */
  public function testDeleteCarBrandOption()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . "admin/" )
         ->assertResponseOk( )
         ->seePageIs( env( 'APP_URL' ) . "admin/" )
         ->see( 'Highlander' )
         ->press( 'Eliminar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin' );
  }

  /**
   * Test for edit brand title
   * @return void
   */
  public function testEditBrandTitle()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/brand/1/edit' )
         ->type( 'Highlander 2016', 'name' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/brand/1/edit' )
         ->seeInDatabase( 'Brands', [
            'name' => 'Highlander 2016'
          ] );
  }

  /**
   * Test for edit brand title
   * @return void
   */
  public function testEditSlogan()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/slogan/1/edit' )
         ->type( 'Haremos de tus viajes, los mejores momentos', 'slogan' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/slogan/1/edit' )
         ->seeInDatabase( 'Brands', [
            'slogan' => 'Haremos de tus viajes, los mejores momentos'
          ] );
  }

  /**
   * Test for edit title h1
   * @return void
   */
  public function testEditTitleH1()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/title_h1/1/edit' )
         ->type( 'Desde cualquier ángulo te parecerá espectacular.', 'title_h1' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/title_h1/1/edit' )
         ->seeInDatabase( 'Brands', [
            'title_h1' => 'Desde cualquier ángulo te parecerá espectacular.'
          ] );
  }

  /**
   * Test for edit gallery fancybox's title
   * @return void
   */
  public function testEditTitleGalleryFancybox()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/title_gallery_fancybox/1/edit' )
         ->type( 'CADA PARTE DE ELLA TIENE UN PROPÓSITO.', 'title_gallery_fancybox' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/title_gallery_fancybox/1/edit' )
         ->seeInDatabase( 'Brands', [
            'title_gallery_fancybox' => 'CADA PARTE DE ELLA TIENE UN PROPÓSITO.'
          ] );
  }

  /**
   * Test for edit the description of the fancybox gallery
   * @return [type] [description]
   */
  public function testEditDescriptionGalleryFancybox()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/description_gallery_fancybox/1/edit' )
         ->type( 'Cada espacio diseñado en Highlander está pensado con un propósito, ya sea comodidad, seguridad o lujo, pero todo tiene una razón de ser.', 'description_gallery_fancybox' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/description_gallery_fancybox/1/edit' )
         ->seeInDatabase( 'Brands', [
            'description_gallery_fancybox' => 'Cada espacio diseñado en Highlander está pensado con un propósito, ya sea comodidad, seguridad o lujo, pero todo tiene una razón de ser.'
          ] );
  }

  /**
   * Test for edit title versions gallery
   * @return void
   */
  public function testEditTitlteVersionsGallery()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/title_versions_gallery/1/edit' )
         ->type( 'CADA UNA TIENE DETALLES QUE TE CONQUISTARÁN.', 'title_versions_gallery' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/title_versions_gallery/1/edit' )
         ->seeInDatabase( 'Brands', [
            'title_versions_gallery' => 'CADA UNA TIENE DETALLES QUE TE CONQUISTARÁN.'
          ] );
  }

  // /**
  //  * Test for create a new Gallery Fancybox with his own title
  //  * @return void
  //  */
  // public function testCreateNewCarModel()
  // {
  //   $this->expectsEvents( Highlander\Events\UploadImages::class );
  //   $this->doesntExpectEvents( Highlander\Events\UploadFiles::class );

  //   $user = factory( Highlander\User::class )->create();

  //   $this->actingAs( $user )
  //        ->visit( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
  //        ->click( 'Crear nuevo elemento' )
  //        ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/create' )
  //        ->type( 'Titulo', 'title' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_big' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_small_1' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_small_2' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumb_small_3' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_big' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_small_1' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_small_2' )
  //        ->attach( '/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'image_small_3' )
  //        ->type( 'Titulo para imagen grande', 'title_big' )
  //        ->type( 'Titulo para imagen pequeña 1', 'title_small_1' )
  //        ->type( 'Titulo para imagen pequeña 2', 'title_small_2' )
  //        ->type( 'Titulo para imagen pequeña 3', 'title_small_3' )
  //        ->press( 'Actualizar' )
  //        ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/create' )
  //        ->seeInDatabase( 'gallery_fancyboxes', [
  //           'title'         => 'Titulo',
  //           'thumb_big'     => 'assets/images/thumbs/iPhone-6.jpg',
  //           'thumb_small_1' => 'assets/images/thumbs/iPhone-6.jpg',
  //           'thumb_small_2' => 'assets/images/thumbs/iPhone-6.jpg',
  //           'thumb_small_3' => 'assets/images/thumbs/iPhone-6.jpg',
  //           'image_big'     => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'image_small_1' => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'image_small_2' => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'image_small_3' => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'title_big'     => 'Titulo para imagen grande',
  //           'title_small_1' => 'Titulo para imagen pequeña 1',
  //           'title_small_2' => 'Titulo para imagen pequeña 2',
  //           'title_small_3' => 'Titulo para imagen pequeña 3'
  //         ] );
  // }

  // /**
  //  * Test for edit the first Gallery Fancybox
  //  * @return void
  //  */
  // public function testEditFirstCarModel()
  // {
  //   $this->doesntExpectEvents( Highlander\Events\UploadImages::class )
  //        ->doesntExpectEvents( Highlander\Events\UploadFiles::class );

  //   $user = factory( Highlander\User::class )->create();

  //   $this->actingAs( $user )
  //        ->visit( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes' )
  //        ->click( 'Editar' )
  //        ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/1/edit' )
  //        ->type( 'Titulo', 'title' )
  //        ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_big' )
  //        ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_small_1' )
  //        ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_small_2' )
  //        ->type( 'assets/images/thumbs/iPhone-6.jpg', 'thumb_small_3' )
  //        ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_big' )
  //        ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_small_1' )
  //        ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_small_2' )
  //        ->type( 'assets/images/galeria/iPhone-6-Plus.jpg', 'image_small_3' )
  //        ->type( 'Titulo para imagen grande', 'title_big' )
  //        ->type( 'Titulo para imagen pequeña 1', 'title_small_1' )
  //        ->type( 'Titulo para imagen pequeña 2', 'title_small_2' )
  //        ->type( 'Titulo para imagen pequeña 3', 'title_small_3' )
  //        ->press( 'Actualizar' )
  //        ->seePageIs( env( 'APP_URL' ) . 'admin/1/gallery-fancyboxes/1/edit' )
  //        ->seeInDatabase( 'gallery_fancyboxes', [
  //           'title'         => 'Titulo',
  //           'thumb_big'     => 'assets/images/thumbs/iPhone-6.jpg',
  //           'thumb_small_1' => 'assets/images/thumbs/iPhone-6.jpg',
  //           'thumb_small_2' => 'assets/images/thumbs/iPhone-6.jpg',
  //           'thumb_small_3' => 'assets/images/thumbs/iPhone-6.jpg',
  //           'image_big'     => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'image_small_1' => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'image_small_2' => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'image_small_3' => 'assets/images/galeria/iPhone-6-Plus.jpg',
  //           'title_big'     => 'Titulo para imagen grande',
  //           'title_small_1' => 'Titulo para imagen pequeña 1',
  //           'title_small_2' => 'Titulo para imagen pequeña 2',
  //           'title_small_3' => 'Titulo para imagen pequeña 3'
  //         ] );
  // }

  /**
   * Test for delete the first Car model
   * @return void
   */
  public function testDeleteFirstCarModel()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/car' )
         ->press( 'Eliminar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/car' )
         ->see( 'Modelo de auto eliminado' );
  }

  /**
   * Test for delete various Car models
   * @return void
   */
  public function testDeleteVariousCarModels()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/car' )
         ->press( 'Eliminar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/car' )
         ->see( 'Modelo de auto eliminado' );

    $this->press( 'Eliminar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/car' )
         ->see( 'Modelo de auto eliminado' );
  }

  /**
   * Test for edit title driving animation
   * @return void
   */
  public function testEditTitleDrivingAnimation()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/title_driving_animation/1/edit' )
         ->type( 'CONÓCELA A FONDO Y NO BUSQUES MÁS.', 'title_driving_animation' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/title_driving_animation/1/edit' )
         ->seeInDatabase( 'Brands', [
            'title_driving_animation' => 'CONÓCELA A FONDO Y NO BUSQUES MÁS.'
          ] );
  }

  /**
   * Test for edit title of footer
   * @return void
   */
  public function testEditTitleFooter()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/title_footer/1/edit' )
         ->type( 'HIGHLANDER LA CAMIONETA QUE TÚ Y TU FAMILIA ESTABAN ESPERANDO.', 'title_footer' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/title_footer/1/edit' )
         ->seeInDatabase( 'Brands', [
            'title_footer' => 'HIGHLANDER LA CAMIONETA QUE TÚ Y TU FAMILIA ESTABAN ESPERANDO.'
          ] );
  }

  /**
   * Test for edit description in footer
   * @return void
   */
  public function testEditDescriptionFooter()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/description_footer/1/edit' )
         ->type( 'La solución ideal para los que buscan mejor rendimiento de combustible.', 'description_footer' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/description_footer/1/edit' )
         ->seeInDatabase( 'Brands', [
            'description_footer' => 'La solución ideal para los que buscan mejor rendimiento de combustible.'
          ] );
  }
}
