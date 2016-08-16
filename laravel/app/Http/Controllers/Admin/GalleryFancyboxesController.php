<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\GalleryFancyboxImageRequest;
use Highlander\Http\Requests\GalleryFancyboxRequest;

class GalleryFancyboxesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $id )
  {
    $title          = 'Galería de fotos';
    $brand          = 'Highlander 2016';
    $id             = $id;
    $toReturn       = '/admin/' . $id;
    $home           = \Highlander\GalleryFancyboxes::all( );
    $elements       = $home;
    $controllerName = 'GalleryFancyboxes';

    return view( 'admin.table', compact( 'title', 'brand', 'id', 'toReturn', 'home', 'elements', 'controllerName' ) );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create( $id )
  {
    $brandName = 'Highlander 2016';
    return view( 'admin.newGallery', compact( 'brandName', 'id' ) );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store( GalleryFancyboxImageRequest $request, $id )
  {
    $gallery = [
      'title'         => $request->title,
      'image_big'     => $request->image_big,
      'image_small_1' => $request->image_small_1,
      'image_small_2' => $request->image_small_2,
      'image_small_3' => $request->image_small_3,
      'thumb_big'     => $request->thumb_big,
      'thumb_small_1' => $request->thumb_small_1,
      'thumb_small_2' => $request->thumb_small_2,
      'thumb_small_3' => $request->thumb_small_3,
      'title_big'     => $request->title_big,
      'title_small_1' => $request->title_small_1,
      'title_small_2' => $request->title_small_2,
      'title_small_3' => $request->title_small_3,
    ];

    $gallery = new \Highlander\GalleryFancyboxes( $gallery );
    $gallery->save();

    /*
     * Create a response for passing it into the view.
     */
    $type           = ( $gallery ) ? "success" : "danger";
    $message        = ( $gallery ) ? "Campo actualizado" : "Hubo un error al actualizar la información. :/";

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
    return view( 'admin.editGallery' );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id, $gallery_fancyboxes )
  {
    $brandName  = 'Highlander 2016';
    $gallery    = \Highlander\GalleryFancyboxes::findOrFail( $gallery_fancyboxes );

    return view( 'admin.editGallery', compact( 'brandName', 'gallery', 'id', 'gallery_fancyboxes' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( GalleryFancyboxRequest $request, $id, $gallery_fancyboxes )
  {
    $gallery = [
      'title'         => $request->title,
      'image_big'     => $request->image_big,
      'image_small_1' => $request->image_small_1,
      'image_small_2' => $request->image_small_2,
      'image_small_3' => $request->image_small_3,
      'thumb_big'     => $request->thumb_big,
      'thumb_small_1' => $request->thumb_small_1,
      'thumb_small_2' => $request->thumb_small_2,
      'thumb_small_3' => $request->thumb_small_3,
      'title_big'     => $request->title_big,
      'title_small_1' => $request->title_small_1,
      'title_small_2' => $request->title_small_2,
      'title_small_3' => $request->title_small_3,
    ];

    $result   = \Highlander\GalleryFancyboxes::where( 'id', $gallery_fancyboxes )
                                             ->update( $gallery );

    /*
     * Create a response for passing it into the view.
     */
    $message  = ( $result ) ? "Campo actualizado" : "Hubo un error al actualizar la información. :/";
    $type     = ( $result ) ? "success" : "danger";

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
  public function destroy( $id, $element_id )
  {
    $result   = \Highlander\GalleryFancyboxes::destroy( $element_id );

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
