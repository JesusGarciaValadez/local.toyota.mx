<?php

namespace Toyota\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Toyota\Http\Requests;
use Toyota\Http\Controllers\Controller;

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
    $brands = \Toyota\Brands::all( );

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
    $home = \Toyota\Brands::findOrFail( $id );

    return view( 'admin.show' )->withHome( $home );
  }

  /**
   * Destroy reference database of the specified car
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy( $id )
  {
    \Toyota\Brands::destroy( $id );

    return \Redirect::back( );
  }
}
