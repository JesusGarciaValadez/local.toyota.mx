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
Route::group( [ 'prefix' => 'admin', 'middleware' => 'auth' ], function ( )
{
  Route::get( '', [ 'as' => 'index', 'uses' => 'Admin\AdminController@index' ] );

  Route::group( [ 'prefix' => '{id}' ], function ( $id )
  {
    Route::get( 'show', [ 'as' => 'show', 'used' => 'Admin\AdminController@show' ] );
    Route::get( 'edit', [ 'as' => 'edit', 'uses' => 'Admin\AdminController@edit' ] );
    Route::delete( 'destroy', [ 'as' => 'destroy', 'uses' => 'Admin\AdminController@destroy' ] );
    Route::resource( 'brand', 'BrandController' );
    Route::resource( 'title-h1', 'TitleH1Controller' );
    Route::resource( 'slider-features', 'SliderFeaturesController' );
    Route::resource( 'title-slider-features-id', 'TitleSliderFeaturesIDController' );
    Route::resource( 'title-gallery-fancybox', 'TitleGalleryFancyboxController' );
    Route::resource( 'gallery-fancyboxes', 'GalleryFancyboxesController' );
    Route::resource( 'description-gallery-fancyboxes', 'DescriptionGalleryFancyboxController' );
    Route::resource( 'title-versions', 'TitleVersionsController' );
    Route::resource( 'car-description-gallery-one', 'CarDescriptionGalleryOneIDController' );
    Route::resource( 'car-description-gallery-two', 'CarDescriptionGalleryTwoIDController' );
    Route::resource( 'title-driving-animation', 'TitleDrivingAnimationController' );
    Route::resource( 'title-footer', 'TitleFooterController' );
    Route::resource( 'description-footer', 'DescriptionFooterController' );
  } );
} );

Route::auth( );
