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
  Route::resource( '', 'Admin\AdminController', [ 'only' => [ 'index', 'show' ] ] );

  Route::group( [ 'prefix' => '{id}' ], function ( $id )
  {
    Route::resource( 'brand', 'Admin\Brand\BrandController' );
    Route::resource( 'title-h1', 'Admin\TitleH1\TitleH1Controller' );
    Route::resource( 'slider-features', 'Admin\SliderFeatures\SliderFeaturesController' );
    Route::resource( 'title-slider-features-id', 'Admin\TitleSliderFeatures\TitleSliderFeaturesIDController' );
    Route::resource( 'title-gallery-fancybox', 'Admin\TitleGalleryFancybox\TitleGalleryFancyboxController' );
    Route::resource( 'gallery-fancyboxes', 'Admin\GalleryFancyboxes\GalleryFancyboxesController' );
    Route::resource( 'description-gallery-fancyboxes', 'Admin\DescriptionGalleryFancybox\DescriptionGalleryFancyboxController' );
    Route::resource( 'title-versions', 'Admin\TitleVersion\TitleVersionController' );
    Route::resource( 'car-description-gallery-one', 'Admin\CarDescriptionGalleryOne\CarDescriptionGalleryOneIDController' );
    Route::resource( 'car-description-gallery-two', 'Admin\CarDescriptionGalleryTwo\CarDescriptionGalleryTwoIDController' );
    Route::resource( 'title-driving-animation', 'Admin\TitleDrivingAnimation\TitleDrivingAnimationController' );
    Route::resource( 'title-footer', 'Admin\TitleFooter\TitleFooterController' );
    Route::resource( 'description-footer', 'Admin\DescriptionFooter\DescriptionFooterController' );
  } );
} );

Route::auth( );
