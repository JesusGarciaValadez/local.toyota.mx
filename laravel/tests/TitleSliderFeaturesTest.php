<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TitleSliderFeaturesTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Test for create a new Slider Feature with his title
   * @return void
   */
  public function testCreateNewTitleSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->click( 'Crear nuevo elemento' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features/create' )
         ->type( '1', 'id' )
         ->type( 'Titulo nuevo', 'title' )
         ->type( 'Slider nuevo', 'content' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features/create' )
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
  public function testEditTitleSliderFeatures()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . 'admin/1/title-slider-features' )
         ->click( 'Editar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features/1/edit' )
         ->see( 'Editar galería de características:' )
         ->type( 'Título actualizado', 'titlesSliderFeatures' )
         ->press( 'Actualizar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1/title-slider-features/1/edit' )
         ->see( 'Título actualizado' );
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
