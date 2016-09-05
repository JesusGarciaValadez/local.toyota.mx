<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SliderFeaturesTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Test for create a new Slider Feature with his title
   * @return void
   */
  public function testCreateNewSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/slider-features' )
         ->click( 'Crear nuevo elemento' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/slider-features/create' )
         ->type( '1', 'id' )
         ->type( 'Titulo nuevo', 'title' )
         ->type( 'Slider nuevo', 'content' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/slider-features/create' )
         ->seeInDatabase( 'slider_features', [
            'brands_id' => '1',
            'title'     => 'Titulo nuevo',
            'content'   => 'Slider nuevo'
          ] );
  }

  /**
   * Test for delete various slider features
   * @return void
   */
  public function testEditSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/slider-features' )
         ->click( 'Editar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/slider-features/1/edit' )
         ->see( 'Editar galería de características:' )
         ->type( 'Nuevo markup', 'content' )
         ->press( 'Actualizar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/slider-features/1/edit' )
         ->see( 'Galería actualizada' );
  }

  /**
   * Test for delete the first slider feature
   * @return void
   */
  public function testDeleteFirstSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/slider-features' )
         ->press( 'Eliminar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/slider-features' )
         ->see( 'Galería eliminada' );
  }

  /**
   * Test for delete various slider features
   * @return void
   */
  public function testDeleteVariousSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/slider-features' )
         ->press( 'Eliminar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/slider-features' )
         ->see( 'Galería eliminada' );

    $this->press( 'Eliminar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/slider-features' )
         ->see( 'Galería eliminada' );
  }
}
