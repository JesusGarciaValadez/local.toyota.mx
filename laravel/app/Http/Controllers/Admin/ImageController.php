<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Requests\ImageRequest;

use Highlander\Events\UploadImages;

use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $id )
  {
    $datos                      = Storage::allFiles( "images/datos/", false );
    $gallery                    = Storage::allFiles( "images/galeria/", false );
    $highlight                  = Storage::allFiles( "images/highlight/", false );
    $technicalSpecifications    = Storage::allFiles( "images/technical-specifications/", false );
    $thumbs                     = Storage::allFiles( "images/thumbs/", false );
    $versions                   = Storage::allFiles( "images/versiones/", false );
    $urlDatos                   = [];
    $urlGallery                 = [];
    $urlHighlight               = [];
    $urlTechnicalSpecifications = [];
    $urlThumbs                  = [];
    $urlVersions                = [];

    foreach( $datos as $image )
    {
      $urlImagesDatos[] = Storage::url( $image );
    }

    foreach( $gallery as $image )
    {
      $urlImagesGallery[] = Storage::url( $image );
    }

    foreach( $highlight as $image )
    {
      $urlImagesHighlight[] = Storage::url( $image );
    }

    foreach( $technicalSpecifications as $image )
    {
      $urlImagesTechnicalSpecifications[] = Storage::url( $image );
    }

    foreach( $thumbs as $image )
    {
      $urlImagesThumbs[] = Storage::url( $image );
    }

    foreach( $versions as $image )
    {
      $urlImagesVersions[] = Storage::url( $image );
    }

    return view( 'admin.images.index', compact( 'urlImagesDatos', 'urlImagesGallery', 'urlImagesHighlight', 'urlImagesTechnicalSpecifications', 'urlImagesThumbs', 'urlImagesVersions' ) );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create( )
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store( ImageRequest $request )
  {
    $image  = $request->only( 'image' );
    $path   = "assets/images/" . $request->only( 'path' ) . "/";

    \Event::fire( new UploadImages( $image, $path ) );
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show( )
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( )
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( Request $request )
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy( )
  {
    //
  }
}
