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
}
