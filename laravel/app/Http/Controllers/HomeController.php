<?php

namespace Highlander\Http\Controllers;

use Highlander\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $slug )
  {
    $brand      = \Highlander\Brands::where( 'slug', $slug )
                                    ->get( )
                                    ->first( );

    if ( empty( $brand ) || is_null( $brand ) )
    {
      abort( 404, 'No encontramos el modelo que buscas.' );
    }

    $slides     = \Highlander\SliderFeature::where( 'brands_id', $brand->id )
                                           ->get( );
    $galleries  = \Highlander\GalleryFancyboxes::where( 'brands_id', $brand->id )
                                               ->get( );
    $car        = \Highlander\Car::where( 'brands_id', $brand->id )
                                 ->get( );

    return view( 'welcome' )->withSlug( $slug )
                            ->withBrand( $brand )
                            ->withSlides( $slides )
                            ->withGalleries( $galleries )
                            ->withCar( $car );
  }

  /**
   * Show the car model's caracteristics
   * @param  String $slug  The car brand name
   * @param  String $model The car model slug name
   * @return object|string View with parameters
   */
  public function show( $slug, $model )
  {
    $cars = \Highlander\Car::all( );
    $car  = \Highlander\Car::where( 'slug', $model )
                           ->firstOrFail();

    return view( 'specifications' )->withCar( $car )
                                   ->withCars( $cars )
                                   ->withSlug( $slug );
  }

  /**
   * Show retail branches map
   * @param  String $slug  The car brand name
   * @return object|string View with parameters
   */
  public function retail( $slug )
  {
    return view( 'retailers' )->withSlug( $slug );
  }
}
