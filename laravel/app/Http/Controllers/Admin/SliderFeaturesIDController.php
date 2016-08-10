<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\SliderFeaturesRequest;

class SliderFeaturesIDController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return 'SliderFeaturesIDController@index';
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return 'SliderFeaturesIDController@index';
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store( Request $request )
  {
    return 'SliderFeaturesIDController@store';
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show( $id )
  {
    return 'SliderFeaturesIDController@show';
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id )
  {
    $brands       = \Highlander\Brands::findOrFail( $id );
    $typeOfField  = 'Footer';
    $fieldName    = 'Descripción';
    $url          = 'admin/description_footer/' . $id;
    $field        = 'description_footer';
    $fieldValue   = $brands->$field;
    $toReturn     = 'admin/' . $id;

    return view( 'admin.text', compact( 'brands', 'typeOfField', 'fieldName', 'url', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( DescriptionFooterRequest $request, $id )
  {
    $brand    = [ 'description_footer' => $request->description_footer ];
    $result   = \Highlander\Brands::where( 'id', $id )
                                  ->update( $brand );

    /*
     * Create a response for passing it into the view.
     */
    $message        = ( $result ) ? "Campo actualizado" : "Hubo un error al actualizar la información. :/";
    $type           = ( $result ) ? "success" : "danger";

    /*
     * Passing the recipe information, categories and domain url to the view.
     */
    return \Redirect::back( )
                    ->withType( $type )
                    ->withMessage( $message );
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy( $id )
  {
    return 'SliderFeaturesIDController@destroy';
  }
}
