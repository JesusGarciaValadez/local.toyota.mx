<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\TitleVersionGalleryRequest;

class TitleVersionGalleryController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id )
  {
    $brands       = \Highlander\Brands::findOrFail( $id );
    $typeOfField  = 'modelos';
    $fieldName    = 'Título de galería de modelos';
    $url          = 'admin/title_versions_gallery/' . $id;
    $field        = 'title_versions_gallery';
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
  public function update( TitleVersionGalleryRequest $request, $id )
  {
    $brand    = [ 'title_versions_gallery' => $request->title_versions_gallery ];
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
}
