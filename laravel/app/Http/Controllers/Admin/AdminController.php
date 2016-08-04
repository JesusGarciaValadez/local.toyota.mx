<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\BrandUpdatedRequest;

class AdminController extends Controller
{
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
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create( )
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store( Request $request )
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show( $id )
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id )
  {
    $home = \Highlander\Brands::findOrFail( $id );

    return view( 'admin.edit' )->withHome( $home );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( BrandUpdatedRequest $request, $id )
  {
    $store = $request->all();

    /*
     * Persist the new data into the database.
     */
    $update = \Highlander\Brands::where( 'id', $id )
                         ->update( $store );

    $type     = ( $update ) ? "success" : "danger";
    $message  = ( $update ) ? "Modelo de auto editado" : "Modelo de auto no editado";

    return redirect( '/admin/' )->withType( $type )
                                ->withMessage( $message );
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    return 'destroyed';
  }
}
