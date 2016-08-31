<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminPageTest extends TestCase
{
    /**
     * Test if admin manager page url exists.
     *
     * @return void
     */
    public function testShowManager()
    {
      $this->visit( env( 'APP_URL' ) . 'admin' )
           ->assertResponseOk();
    }

    /**
     * Check if we are a guest user, send to login page
     * @return void
     */
    public function testCheckIfUserIsRegistered()
    {
      $this->visit( env( 'APP_URL' ) . 'admin' )
           ->assertResponseOk()
           ->seePageIs( env( 'APP_URL' ) . 'login' );
    }

    /**
     * Test if user registration works fine
     * @return void
     */
    public function testRegisterANewUser()
    {
      $this->visit( env( 'APP_URL' ) . 'admin' )
           ->assertResponseOk()
           ->seePageIs( env( 'APP_URL' ) . 'login' )
           ->click( 'Register' )
           ->type( 'Jesús García', 'name' )
           ->type( 'jesus.garcia@lunave.com', 'email' )
           ->type( 'highlander', 'password' )
           ->type( 'highlander', 'password_confirmation' )
           ->press( 'Register' )
           ->seePageIs( env( 'APP_URL' ) . 'register' )
           ->assertResponseOk()
           ->seeInDatabase( 'users', [
              'name'  => 'Jesús García',
              'email' => 'jesus.garcia@lunave.com'
            ] );
    }

    /**
     * Test if user is logged
     * @return void
     */
    public function editCheckIfUserIsLogged()
    {
      $user = factory( Highlander\User::class )->create();

      $this->actingAs( $user )
           ->visit( env( 'APP_URL' ) . "admin/" )
           ->assertResponseOk( )
           ->seePageIs( env( 'APP_URL' ) . "admin/" );
    }

    public function editCheckIfUserIsLogout()
    {
      $user = factory( Highlander\User::class )->create();

      $this->actingAs( $user )
           ->visit( env( 'APP_URL' ) . "admin/" )
           ->assertResponseOk( )
           ->seePageIs( env( 'APP_URL' ) . "admin/" )
           ->see( 'Highlander' )
           ->click( 'Logout' );
    }
}
