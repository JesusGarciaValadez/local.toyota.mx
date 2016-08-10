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


Route::resource( 'admin', 'Admin\AdminController', [
  'middleware'  => 'auth',
  'only'        => [ 'index', 'show' ],
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
    Route::resource( 'slider-features', 'Admin\SliderFeaturesIDController' );
    Route::resource( 'title-slider-features-id', 'Admin\TitleSliderFeaturesIDController' );
    Route::resource( 'gallery-fancyboxes', 'Admin\GalleryFancyboxesController' );
    Route::resource( 'car-description-gallery-one', 'Admin\CarDescriptionGalleryOneController' );
    Route::resource( 'car-description-gallery-two', 'Admin\CarDescriptionGalleryTwoController' );
  } );
} );

Route::auth( );
