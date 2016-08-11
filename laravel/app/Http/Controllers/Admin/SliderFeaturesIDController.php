<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\SliderFeaturesRequest;

class SliderFeaturesIDController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id, $slider_features )
  {
    $brands       = \Highlander\Brands::findOrFail( $id );
    $typeOfField  = 'galería de características';
    $fieldName    = 'Galería de características';
    $url          = 'admin/' . $id . '/slider-features/' . $id;
    $field        = 'sliderFeatures';
    $fieldValue   = $brands->$field->content;
    $toReturn     = 'admin/' . $id;

    return view( 'admin.textarea', compact( 'brands', 'typeOfField', 'fieldName', 'url', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( SliderFeaturesRequest $request, $id )
  {
    $brand    = [ 'content' => $request->sliderFeatures ];
    $result   = \Highlander\SliderFeature::where( 'id', $id )
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
}
