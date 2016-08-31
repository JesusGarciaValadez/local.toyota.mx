<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\BrandRequest;

class BrandController extends Controller
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
    $method       = 'PUT';
    $typeOfField  = 'Marca';
    $fieldName    = 'Marca';
    $url          = 'admin/brand/' . $id;
    $field        = 'name';
    $fieldValue   = $brands->$field;
    $toReturn     = 'admin/' . $id;

    return view( 'admin.text', compact( 'brands', 'method', 'typeOfField', 'fieldName', 'url', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Highlander\Http\Requests\BrandRequest  $request
   * @param  int                                    $id
   * @return \Illuminate\Http\Response
   */
  public function update( BrandRequest $request, $id )
  {
    $brand    = [ 'name' => $request->name ];
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
