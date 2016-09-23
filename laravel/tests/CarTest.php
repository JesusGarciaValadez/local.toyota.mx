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
   * @return void
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

  /**
   * Test for create a new Gallery Fancybox with his own title
   * @return void
   */
  public function testCreateNewCarModel()
  {
    // $this->expectsEvents( Highlander\Events\UploadImages::class );
    // $this->expectsEvents( Highlander\Events\UploadFiles::class );

    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/car' )
         ->click( 'Crear nuevo elemento' );

    $this->visit( env( 'APP_URL' ) . '/admin/1/car/create');
    $this->type('Modelo', 'title');
    $this->type('Nombre', 'name');
    $this->attach('/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'thumbnail');
    $this->type('300000', 'price');
    $this->type('[ \'Descripción\' ]', 'description');
    $this->type('Capacidad', 'Capacidad');
    $this->type('Potencia', 'Potencia');
    $this->type('Cilindros', 'Cilindros');
    $this->type('Válvulas', 'Valvulas');
    $this->type('[ \'Frenos\' ]', 'Frenos');
    $this->type('[ \'Rines\' ]', 'Rines');
    $this->attach('/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'UrlMotor');
    $this->attach('/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'UrlAuto');
    $this->type('[ \'Faros\' ]', 'Faros');
    $this->type('[ \'Seguridad\', \'Exterior\' ]', 'SeguridadExterior');
    $this->type('[ \'Cristales\' ]', 'Cristales');
    $this->type('[ \'Espejos\', \'Laterales\' ]', 'EspejosLaterales');
    $this->attach('/Users/jesusgarcia/Downloads/iPhone-6-Plus.jpg', 'UrlInterior');
    $this->type('[ \'Techos\' ]', 'Techo');
    $this->type('[ \'Acabados\', \'Interiores\' ]', 'AcabadosInteriores');
    $this->type('[ \'Asientos\' ]', 'Asientos');
    $this->type('[ \'Sistema\', \'Audio\' ]', 'SistemaAudio');
    $this->type('[ \'Confort\' ]', 'Confort');
    $this->type('[ \'Cinturones\', \'de\', \'Seguridad\' ]', 'CinturonesSeguridad');
    $this->type('[ \'Seguridad\', \'interior\' ]', 'SeguridadInterior');
    $this->attach('/Users/jesusgarcia/Downloads/iPhone-6.jpg', 'Download');
    $this->press('Actualizar');
    $this->seePageIs('/admin/1/car');
    $this->visit('/admin/1/car');

    $this->seePageIs( env( 'APP_URL' ) . 'admin/1/car/create' );
    $this->see( 'Auto creado' );
  }

  /**
   * Test for edit the first Gallery Fancybox
   * @return void
   */
  public function testEditFirstCarModel()
  {
    // $user = factory( Highlander\User::class )->create();

    // $this->actingAs( $user )
    //      ->visit( env( 'APP_URL' ) . 'admin/1/car' )
    //      ->click( 'Editar' )
    //      ->seePageIs( env( 'APP_URL' ) . 'admin/1/car/1/edit' )
    //      ->type( '1', 'brands_id' )
    //      ->type( 'Título 1', 'title' )
    //      ->type( 'Nombre', 'name' )
    //      ->type( 'Thumbnail', 'thumbnail' )
    //      ->type( 'Precio', 'price' )
    //      ->type( 'Descripción', 'description' )
    //      ->type( 'Capacidad', 'Capacidad' )
    //      ->type( 'Potencia', 'Potencia' )
    //      ->type( 'Cilindros', 'Cilindros' )
    //      ->type( 'Válvulas', 'Valvulas' )
    //      ->type( 'Frenos 1', 'Frenos[]' )
    //      ->type( 'Frenos 2', 'Frenos[]' )
    //      ->type( 'Frenos 3', 'Frenos[]' )
    //      ->type( 'Rines 1', 'Rines[]' )
    //      ->type( 'Rines 2', 'Rines[]' )
    //      ->type( 'Rines 3', 'Rines[]' )
    //      ->type( 'UrlMotor', 'UrlMotor' )
    //      ->type( 'UrlAuto', 'UrlAuto' )
    //      ->type( 'Faros 1', 'Faros[]' )
    //      ->type( 'Faros 2', 'Faros[]' )
    //      ->type( 'Faros 3', 'Faros[]' )
    //      ->type( 'Faros 4', 'Faros[]' )
    //      ->type( 'Seguridad Exterior 1', 'SeguridadExterior[]' )
    //      ->type( 'Seguridad Exterior 2', 'SeguridadExterior[]' )
    //      ->type( 'Seguridad Exterior 3', 'SeguridadExterior[]' )
    //      ->type( 'Seguridad Exterior 4', 'SeguridadExterior[]' )
    //      ->type( 'Cristales 1', 'Cristales[]' )
    //      ->type( 'Cristales 2', 'Cristales[]' )
    //      ->type( 'Cristales 3', 'Cristales[]' )
    //      ->type( 'Cristales 4', 'Cristales[]' )
    //      ->type( 'Cristales 5', 'Cristales[]' )
    //      ->type( 'Cristales 6', 'Cristales[]' )
    //      ->type( 'Cristales 7', 'Cristales[]' )
    //      ->type( 'Espejos laterales', 'EspejosLaterales[]' )
    //      ->type( 'Techo 1', 'Techo[]' )
    //      ->type( 'Techo 2', 'Techo[]' )
    //      ->type( 'Techo 3', 'Techo[]' )
    //      ->type( 'Techo 4', 'Techo[]' )
    //      ->type( 'UrlInterior', 'UrlInterior' )
    //      ->type( 'Acabados Interiores 1', 'AcabadosInteriores[]' )
    //      ->type( 'Acabados Interiores 2', 'AcabadosInteriores[]' )
    //      ->type( 'Acabados Interiores 3', 'AcabadosInteriores[]' )
    //      ->type( 'Acabados Interiores 4', 'AcabadosInteriores[]' )
    //      ->type( 'Acabados Interiores 5', 'AcabadosInteriores[]' )
    //      ->type( 'Asientos 1', 'Asientos[]' )
    //      ->type( 'Asientos 2', 'Asientos[]' )
    //      ->type( 'Asientos 3', 'Asientos[]' )
    //      ->type( 'Sistema Audio 1', 'SistemaAudio[]' )
    //      ->type( 'Sistema Audio 2', 'SistemaAudio[]' )
    //      ->type( 'Sistema Audio 3', 'SistemaAudio[]' )
    //      ->type( 'Sistema Audio 4', 'SistemaAudio[]' )
    //      ->type( 'Sistema Audio 5', 'SistemaAudio[]' )
    //      ->type( 'Sistema Audio 6', 'SistemaAudio[]' )
    //      ->type( 'Comfort 1', 'Confort[]' )
    //      ->type( 'Comfort 2', 'Confort[]' )
    //      ->type( 'Cinturones de Seguridad 1', 'CinturonesSeguridad[]' )
    //      ->type( 'Cinturones de Seguridad 2', 'CinturonesSeguridad[]' )
    //      ->type( 'Cinturones de Seguridad 3', 'CinturonesSeguridad[]' )
    //      ->type( 'Cinturones de Seguridad 4', 'CinturonesSeguridad[]' )
    //      ->type( 'Cinturones de Seguridad 5', 'CinturonesSeguridad[]' )
    //      ->type( 'Cinturones de Seguridad 6', 'CinturonesSeguridad[]' )
    //      ->type( 'Seguridad interior 1', 'SeguridadInterior[]' )
    //      ->type( 'Seguridad interior 2', 'SeguridadInterior[]' )
    //      ->type( 'Seguridad interior 3', 'SeguridadInterior[]' )
    //      ->type( 'Download', 'Download' );

    // $this->press( "Actualizar" );
         // ->seePageIs( env( 'APP_URL' ) . 'admin/1/car/1/edit' );;
  }

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
   * Test for delete many Car models
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
