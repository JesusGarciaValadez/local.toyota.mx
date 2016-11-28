<?php

namespace Toyota\Http\Controllers;

use Toyota\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Slug obtained of the current url
   * @var string
   */
  private $_slug   = '';

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( )
  {
    $url          = strtolower( url()->current() );

    $this->_slug  = $this->_obtainSlug( $url );

    if ( $this->_slug == "" )
    {
      abort( 404, 'No encontramos el modelo que buscas.' );
    }

    $brand        = \Toyota\Brands::where( 'slug', $this->_slug )
                            ->get( )
                            ->first( );

    if ( empty( $brand ) || is_null( $brand ) )
    {
      abort( 404, 'No encontramos el modelo que buscas.' );
    }

    $slides     = \Toyota\SliderFeature::where( 'brands_id', $brand->id )
                                       ->get( );
    $galleries  = \Toyota\GalleryFancyboxes::where( 'brands_id', $brand->id )
                                           ->get( );
    $car        = \Toyota\Car::where( 'brands_id', $brand->id )
                             ->get( );

    return view( 'welcome' )->withSlug( $this->_slug )
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
  public function show( $model )
  {
    $url          = url()->current();

    $this->_slug  = $this->_obtainSlug( $url );

    if ( $this->_slug == "" )
    {
      abort( 404, 'No encontramos el modelo que buscas.' );
    }

    $actualBrand  = \Toyota\Brands::where( 'slug', $this->_slug )
                                  ->get()->first();
    $models       = \Toyota\Car::where( 'brands_id', $actualBrand->id )
                               ->get();
    $car          = \Toyota\Car::where( 'slug', $model )
                               ->firstOrFail();

    return view( 'specifications' )->withCar( $car )
                                   ->withBrand( $actualBrand )
                                   ->withModels( $models )
                                   ->withSlug( $this->_slug );
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

  /**
   * Function for obtain the actual domain and convert it to a slug
   * @param  string $url Url Obtained
   * @return string      Slug
   */
  private function _obtainSlug( $url )
  {
    $listOfDomains  = [ 'sienna', 'highlander' ];

    foreach ( $listOfDomains as $slug )
    {
      if ( str_contains( $url, $slug ) )
      {
        return $slug;
      }
      else
      {
        continue;
      }
    }
  }
}
