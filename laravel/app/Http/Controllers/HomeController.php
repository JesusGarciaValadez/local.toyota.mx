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
    $home   = \Highlander\Descriptions::first();

    return view( 'welcome' )->withHome( $home );
  }
}
