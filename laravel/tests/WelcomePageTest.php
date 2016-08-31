<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomePageTest extends TestCase
{
    /**
     * Test if homepage is visible and contains default data.
     *
     * @return void
     */
    public function testHomePage()
    {
      $this->visit( env( 'APP_URL' ) . 'highlander' )
           ->assertResponseOk()
           ->seePageIs( env( 'APP_URL' ) . 'highlander' )
           ->see( 'Highlander 2016' )
           ->see( 'Desde cualquier ángulo te parecerá espectacular.' )
           ->see( 'Sistema de monitoreo de punto ciego.' )
           ->see( 'CADA PARTE DE ELLA TIENE UN PROPÓSITO.' )
           ->see( 'HIGHLANDER LE' )
           ->see( 'CONÓCELA A FONDO Y NO BUSQUES MÁS.' )
           ->see( 'HIGHLANDER LA CAMIONETA QUE TÚ Y TU FAMILIA ESTABAN ESPERANDO.' )
           ->see( 'La solución ideal para los que buscan mejor rendimiento de combustible.' );
    }

    /**
     * Test for trying to access to the first existing car model
     * @return void
     */
    public function testCarModel()
    {
      $this->visit( env( 'APP_URL' ) . 'highlander' )
           ->assertResponseOk()
           ->seePageIs( env( 'APP_URL' ) . 'highlander' )
           ->see( 'Ver detalle' )
           ->click( 'Ver detalle' )
           ->assertResponseOk()
           ->seePageIs( env( 'APP_URL' ) . 'highlander/especificaciones/coremt' )
           ->see( 'HIGHLANDER LE' );
    }

    /**
     * Test to check if a page of an invented car model exists
     * @return void
     */
    public function testPageNotExist()
    {
      $response = $this->call( 'GET', '/especificaciones/modelo' );

      $this->assertEquals( 404, $response->status() );
    }
}
