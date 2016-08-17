<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

class CarController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $id )
  {
    $title          = "Galería de modelos";
    $toReturn       = '/admin/' . $id;
    $home           = \Highlander\Car::where( 'brands_id', $id )
                                     ->get( );
    $brand          = $home->first()->brands->name;
    $id             = $id;
    $elements       = $home;
    $controllerName = 'Car';

    return view( 'admin.table', compact( 'title', 'brand', 'toReturn', 'home', 'id', 'elements', 'controllerName' ) );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create( $id )
  {
    $brandName  = \Highlander\Car::where( 'brands_id', $id )
                                 ->get( )
                                 ->first()->brands->name;

    return view( 'admin.newCar', compact( 'id', 'brandName' ) );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    return 'CarController@store';
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show( $id, $element_id )
  {
    return 'CarController@show';
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id, $element_id )
  {
    $model      = \Highlander\Car::findOrFail( $element_id );
    $brandName  = $model->title;

    return view( 'admin.editCar', compact( 'id', 'element_id', 'brandName', 'model' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( Request $request, $id, $element_id )
  {
    return 'CarController@update';
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy( $id, $element_id )
  {
    return 'destroy';
  }
}
