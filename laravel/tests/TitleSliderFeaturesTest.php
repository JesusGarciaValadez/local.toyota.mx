<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TitleSliderFeaturesTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Test for edit title of footer
   * @return void
   */
  public function testCreateNewTitleSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->click( 'Crear nuevo elemento' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features/create' )
         ->type( 'Título nuevo', 'title' )
         ->type( 'Slider nuevo', 'content' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features/create' )
         ->seeInDatabase( 'slider_features', [
            'title'   => 'Título nuevo',
            'content' => 'Slider nuevo'
          ] );
  }

  /**
   * Test for delete the first slider feature
   * @return void
   */
  public function testDeleteFirstTitleSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->press( 'Eliminar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->see( 'Título eliminado' );
  }

  /**
   * Test for delete various slider features
   * @return void
   */
  public function testDeleteVariousTitleSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->press( 'Eliminar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->see( 'Título eliminado' );

    $this->press( 'Eliminar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->see( 'Título eliminado' );
  }
}
