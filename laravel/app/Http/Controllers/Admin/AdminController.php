<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

class AdminController extends Controller
{

  public function __construct ( )
  {
    $this->middleware( 'auth' );
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( )
  {
    $brands = \Highlander\Brands::all( );

    return view( 'admin.index' )->withBrands( $brands );
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show( $id )
  {
    $home = \Highlander\Brands::findOrFail( $id );

    return view( 'admin.show' )->withHome( $home );
  }
}
