<?php

namespace Toyota\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Toyota\Http\Requests;
use Toyota\Http\Controllers\Controller;

use Toyota\Http\Requests\TitleFooterRequest;

class TitleFooterController extends Controller
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
    $typeOfField  = 'Footer';
    $fieldName    = 'Título';
    $url          = 'admin/title_footer/' . $id;
    $field        = 'title_footer';
    $fieldValue   = $brands->$field;
    $toReturn     = 'admin/' . $id;

    return view( 'admin.text', compact( 'brands', 'method', 'typeOfField', 'fieldName', 'url', 'field', 'fieldValue', 'toReturn' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( TitleFooterRequest $request, $id )
  {
    $brand    = [ 'title_footer' => $request->title_footer ];
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
