<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Test for edit brand title
   * @return void
   */
  public function testEditBrandTitle()
  {
    $user = factory( Highlander\User::class )->create();

    $this->actingAs( $user )
         ->visit( env( 'APP_URL' ) . "admin/" )
         ->assertResponseOk( )
         ->seePageIs( env( 'APP_URL' ) . "admin/" )
         ->see( 'Highlander' )
         ->click( 'Editar' )
         ->assertResponseOk()
         ->seePageIs( env( 'APP_URL' ) . 'admin/1' )
         ->visit( env( 'APP_URL' ) . 'admin/brand/1/edit' )
         ->type( 'Highlander 2016', 'name' )
         ->press( 'Actualizar' )
         ->seePageIs( env( 'APP_URL' ) . 'admin/brand/1/edit' )
         ->seeInDatabase( 'Brands', [
            'name' => 'Highlander 2016'
          ] );
  }
}
