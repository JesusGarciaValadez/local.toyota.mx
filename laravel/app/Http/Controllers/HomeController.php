<?php

namespace Highlander\Http\Controllers;

use Highlander\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $id )
  {
    $home       = \Highlander\Brands::findOrFail( $id );
    $slides     = \Highlander\SliderFeature::where( 'brands_id', $id );
    $galleries  = \Highlander\GalleryFancyboxes::where( 'brands_id', $id );
    $car        = \Highlander\Car::where( 'brands_id', $id );
    dd( $car );

    return view( 'welcome' )->withHome( $home )
                            ->withSlides( $slides )
                            ->withGalleries( $galleries )
                            ->withCar( $car );
  }
}
