<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', [ 'as' => 'home', 'uses' => 'HomeController@index' ] );

Route::get( '/home', [ 'as' => 'home', 'uses' => 'HomeController@index' ] );


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group( [ 'prefix' => 'admin' ], function ( )
{
  Route::get( '', [ 'as' => 'index', 'uses' => 'Admin\AdminController@index' ] );
  Route::get( 'editar/{id}', [ 'as' => 'edit', 'uses' => 'Admin\AdminController@edit' ] );
  Route::put( 'actualizar/{id}', [ 'as' => 'update', 'uses' => 'Admin\AdminController@update' ] );
  Route::delete( 'borrar/{id}', [ 'as' => 'destroy', 'uses' => 'Admin\AdminController@destroy' ] );
} );

Route::auth( );
