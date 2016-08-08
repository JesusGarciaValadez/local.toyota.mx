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
  Route::get( '{id}/editar', [ 'as' => 'edit', 'uses' => 'Admin\AdminController@edit' ] );
  Route::delete( '{id}/borrar', [ 'as' => 'destroy', 'uses' => 'Admin\AdminController@destroy' ] );

  Route::group( [ 'prefix' => '{id}' ], function ( ) {
    Route::group( [ 'prefix' => 'brand' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'BrandController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'BrandController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'BrandController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'title_h1' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'TitleH1Controller@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'TitleH1Controller@update' ] );
      Route::delete( 'borrar', [ 'user' => 'TitleH1Controller@delete' ] );
    } );
    Route::group( [ 'prefix' => 'slider_features_id' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'SliderFeaturesIDController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'SliderFeaturesIDController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'SliderFeaturesIDController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'title_slider_features_id' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'TitleSliderFeaturesIDController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'TitleSliderFeaturesIDController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'TitleSliderFeaturesIDController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'title_gallery_fancybox' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'TitleGalleryFancyboxController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'TitleGalleryFancyboxController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'TitleGalleryFancyboxController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'gallery_fancyboxes_id' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'GalleryFancyboxesController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'GalleryFancyboxesController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'GalleryFancyboxesController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'description_gallery_fancybox' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'DescriptionGalleryFancyboxController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'DescriptionGalleryFancyboxController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'DescriptionGalleryFancyboxController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'title_versions_gallery' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'TitleVersionsController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'TitleVersionsController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'TitleVersionsController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'car_description_gallery_one_id' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'CarDescriptionGalleryOneIDController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'CarDescriptionGalleryOneIDController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'CarDescriptionGalleryOneIDController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'car_description_gallery_two_id' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'CarDescriptionGalleryTwoIDController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'CarDescriptionGalleryTwoIDController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'CarDescriptionGalleryTwoIDController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'title_driving_animation' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'TitleDrivingAnimationController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'TitleDrivingAnimationController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'TitleDrivingAnimationController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'title_footer' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'TitleFooterController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'TitleFooterController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'TitleFooterController@delete' ] );
    } );
    Route::group( [ 'prefix' => 'description_footer' ], function ( ) {
      Route::get( 'editar', [ 'user' => 'DescriptionFooterController@edit' ] );
      Route::put( 'actualiza', [ 'user' => 'DescriptionFooterController@update' ] );
      Route::delete( 'borrar', [ 'user' => 'DescriptionFooterController@delete' ] );
    } );
  } );
} );

Route::auth( );
