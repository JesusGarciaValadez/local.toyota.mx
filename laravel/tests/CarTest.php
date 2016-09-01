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
}
