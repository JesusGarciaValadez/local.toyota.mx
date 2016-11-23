<?php

namespace Toyota\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Toyota\Http\Requests;
use Toyota\Http\Controllers\Controller;

use Toyota\Http\Requests\DescriptionGalleryFancyboxRequest;

class DescriptionGalleryFancyboxController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id )
  {
    $brands       = \Toyota\Brands::findOrFail( $id );
    $method       = 'PUT';
    $typeOfField  = 'galerías de fotos';
    $fieldName    = 'Descripción';
    $url          = 'admin/description_gallery_fancybox/' . $id;
    $field        = 'description_gallery_fancybox';
    $fieldValue   = $brands->$field;
    $toReturn     = 'admin/' . $id;

    return view( 'admin.text', compact( 'brands', 'method', 'typeOfField', 'fieldName', 'url', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Toyota\Http\Requests\DescriptionGalleryFancyboxRequest $request
   * @param  int                                                        $id
   * @return \Illuminate\Http\Response
   */
  public function update( DescriptionGalleryFancyboxRequest $request, $id )
  {
    $brand    = [ 'description_gallery_fancybox' => $request->description_gallery_fancybox ];
    $result   = \Toyota\Brands::where( 'id', $id )
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
