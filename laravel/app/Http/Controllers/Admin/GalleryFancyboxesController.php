<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\GalleryFancyboxRequest;

class GalleryFancyboxesController extends Controller
{
  private $_toReturn  = '';

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $id )
  {
    $title          = "Galería de fotos";
    $toReturn       = '/admin/' . $id;
    $home           = \Highlander\Brands::find( $id );
    $elements       = $home->galleryFancyboxes;
    $controllerName = 'GalleryFancyboxes';

    return view( 'admin.table', compact( 'title', 'toReturn', 'home', 'elements', 'controllerName' ) );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return 'GalleryFancyboxesController@create';
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store( GalleryFancyboxRequest $request )
  {
    return 'GalleryFancyboxesController@store';
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show( $id )
  {
    return 'GalleryFancyboxesController@show';
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id, $element_id )
  {
    $brands       = \Highlander\GalleryFancyboxes::findOrFail( $element_id );
    $typeOfField  = 'galería de fotos';
    $fieldName    = 'Foto';
    $url          = 'admin/' . $id . '/gallery-fancyboxes/' . $id;
    $field        = 'content';
    $fieldValue   = $brands->content;
    $toReturn     = 'admin/' . $id . '/gallery-fancyboxes';

    return view( 'admin.textarea', compact( 'brands', 'typeOfField', 'fieldName', 'url', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( GalleryFancyboxRequest $request, $element_id )
  {
    $brand    = [ 'content' => $request->content ];
    $result   = \Highlander\GalleryFancyboxes::where( 'id', $element_id )
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
  public function destroy( $element_id )
  {
    $result   = \Highlander\GalleryFancyboxes::destroy( $element_id );

    /*
     * Create a response for passing it into the view.
     */
    $message        = ( $result ) ? "Campo actualizado" : "Hubo un error al actualizar la información. :/";
    $type           = ( $result ) ? "success" : "danger";

    return ( $result ) ? "success" : "danger";

    /*
     * Passing the recipe information, categories and domain url to the view.
     */
    // return \Redirect::back( )
    //                 ->withType( $type )
    //                 ->withMessage( $message );
  }
}
