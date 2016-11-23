<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\TitleSliderFeaturesRequest;
use Highlander\Http\Requests\SliderFeaturesRequest;

class SliderFeaturesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $id )
  {
    $title          = "Slider de fotos";
    $brand          = \Highlander\Brands::findOrFail( $id )->title;
    $toReturn       = '/admin/' . $id;
    $home           = \Highlander\SliderFeature::where( 'brands_id', $id )
                                               ->get( );
    $id             = $id;
    $elements       = $home;
    $controllerName = 'SliderFeatures';

    return view( 'admin.table', compact( 'title', 'brand', 'toReturn', 'home', 'id', 'elements', 'controllerName' ) );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @param  int  $id ID of the SliderFeature gallery to show the information of a new gallery
   * @return \Illuminate\Http\Response
   */
  public function create( $id )
  {
    $brands       = \Highlander\SliderFeature::findOrFail( $id );
    $typeOfField  = 'Slide';
    $fieldName    = 'Slide';
    $url          = 'admin/' . $id . '/slider-features';
    $method       = 'POST';
    $field        = 'title';
    $fieldValue   = "";
    $toReturn     = $url;

    return view( 'admin.newSlide', compact( 'brands', 'typeOfField', 'fieldName', 'url', 'method', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Highlander\Http\Requests\SliderFeaturesRequest  $request
   * @param  int  $id ID of the SliderFeature to edit
   * @return \Illuminate\Http\Response
   */
  public function store( TitleSliderFeaturesRequest $request, $id )
  {
    $newSlide = [
      'brands_id'   => $id,
      'title'       => $request->title,
      'content'     => $request->content
    ];
    $result   = new \Highlander\SliderFeature( $newSlide );
    $result->save();

    /*
     * Create a response for passing it into the view.
     */
    $message        = ( $result ) ? "Galería añadida" : "Hubo un error al actualizar la información. :/";
    $type           = ( $result ) ? "success" : "danger";

    /*
     * Passing the recipe information, categories and domain url to the view.
     */
    return \Redirect::back( )
                    ->withType( $type )
                    ->withMessage( $message );
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show( $id )
  {
    return 'SliderFeaturesController@show';
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id ID of the car
   * @param  int  $slider_features ID of the SliderFeatures for edit it
   * @return \Illuminate\Http\Response
   */
  public function edit( $id, $slider_features )
  {
    $brands       = \Highlander\SliderFeature::findOrFail( $slider_features );
    $typeOfField  = 'galería de características';
    $fieldName    = 'Galería de características';
    $url          = 'admin/' . $id . '/slider-features/' . $id;
    $field        = 'content';
    $fieldValue   = $brands->content;
    $toReturn     = 'admin/' . $id . '/slider-features/';

    return view( 'admin.textarea', compact( 'brands', 'typeOfField', 'fieldName', 'url', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Highlander\Http\Requests\SliderFeaturesRequest $request Request with the data from the form
   * @param  int  $id ID of the car
   * @return \Illuminate\Http\Response
   */
  public function update( SliderFeaturesRequest $request, $id )
  {
    $brand    = [ 'content' => $request->content ];
    $result   = \Highlander\SliderFeature::where( 'id', $id )
                                         ->update( $brand );

    /*
     * Create a response for passing it into the view.
     */
    $message        = ( $result ) ? "Galería actualizada" : "Hubo un error al actualizar la información. :/";
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
   * @param  int  $id ID of the car
   * @param  int  $element_id ID of the SliderFeature for destroying it
   * @return \Illuminate\Http\Response
   */
  public function destroy( $id, $element_id )
  {
    $result   = \Highlander\SliderFeature::destroy( $element_id );

    /*
     * Create a response for passing it into the view.
     */
    $message        = ( $result ) ? "Galería eliminada" : "Hubo un error al actualizar la información. :/";
    $type           = ( $result ) ? "success" : "danger";

    /*
     * Passing the recipe information, categories and domain url to the view.
     */
    return \Redirect::back( )
                    ->withType( $type )
                    ->withMessage( $message );
  }
}
