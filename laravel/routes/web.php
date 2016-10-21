<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

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

Route::auth( );

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

Route::resource( 'admin', 'Admin\AdminController', [
  'only'        => [ 'index', 'show', 'destroy' ],
  'parameters'  => [ 'admin' => 'id' ]
] );

Route::group( [ 'prefix' => 'admin', 'middleware' => 'auth' ], function ( )
{
  Route::resource( 'brand', 'Admin\BrandController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'brand' => 'id' ]
  ] );

  Route::resource( 'slogan', 'Admin\SloganController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'slogan' => 'id' ]
  ] );

  Route::resource( 'title_h1', 'Admin\TitleH1Controller', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'title_h1' => 'id' ]
  ] );

  Route::resource( 'title_gallery_fancybox', 'Admin\TitleGalleryFancyboxController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'title_gallery_fancybox' => 'id' ]
  ] );

  Route::resource( 'description_gallery_fancybox', 'Admin\DescriptionGalleryFancyboxController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'description_gallery_fancybox' => 'id' ]
  ] );

  Route::resource( 'title_versions_gallery', 'Admin\TitleVersionGalleryController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'title_versions_gallery' => 'id' ]
  ] );

  Route::resource( 'title_driving_animation', 'Admin\TitleDrivingAnimationController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'title_driving_animation' => 'id' ]
  ] );

  Route::resource( 'title_footer', 'Admin\TitleFooterController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'title_footer' => 'id' ]
  ] );

  Route::resource( 'description_footer', 'Admin\DescriptionFooterController', [
    'only'        => [ 'edit', 'update' ],
    'parameters'  => [ 'description_footer' => 'id' ]
  ] );

  Route::group( [ 'prefix' => '{id}' ], function ( $id )
  {
    Route::resource( 'slider-features', 'Admin\SliderFeaturesController' );
    Route::resource( 'title-slider-features', 'Admin\TitleSliderFeaturesController' );
    Route::resource( 'gallery-fancyboxes', 'Admin\GalleryFancyboxesController' );
    Route::resource( 'car', 'Admin\CarController' );
    Route::resource( 'images', 'Admin\ImageController', [
      'only'  => [ 'index', 'store', 'destroy' ]
    ] );
  } );
} );

Route::get( '/{slug}', [ 'as' => 'home', 'uses' => 'HomeController@index' ] );

Route::get( '/{slug}/distribuidores', [ 'as' => 'retail', 'uses' => 'HomeController@retail' ] );

Route::get( '/{slug}/especificaciones/{model}', [ 'as' => 'specifications', 'uses' => 'HomeController@show' ] );
