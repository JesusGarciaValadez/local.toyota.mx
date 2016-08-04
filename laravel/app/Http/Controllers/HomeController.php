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
  public function index()
  {
    $home   = \Highlander\Brands::first();

    \Debugbar::log( $home->galleryFancyboxes );

    return view( 'welcome' )->withHome( $home );
  }
}
