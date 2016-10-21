<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\ImageRequest;

use Highlander\Events\UploadImage;

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
    $datos                          = Storage::allFiles( "images/datos/", false );
    $gallery                        = Storage::allFiles( "images/galeria/", false );
    $highlight                      = Storage::allFiles( "images/highlight/", false );
    $technicalSpecifications        = Storage::allFiles( "images/technical-specifications/", false );
    $thumbs                         = Storage::allFiles( "images/thumbs/", false );
    $versions                       = Storage::allFiles( "images/versiones/", false );
    $imagesDatos                    = [];
    $imagesGallery                  = [];
    $imagesHighlight                = [];
    $imagesTechnicalSpecifications  = [];
    $imagesThumbs                   = [];
    $imagesVersions                 = [];

    if( is_array( $datos ) && count( $datos ) > 0 )
    {
      foreach( $datos as $image )
      {
        $imagesDatos[] = Storage::url( $image );
      }
    }

    if( is_array( $gallery ) && count( $gallery ) > 0 )
    {
      foreach( $gallery as $image )
      {
        $imagesGallery[] = Storage::url( $image );
      }
    }

    if( is_array( $highlight ) && count( $highlight ) > 0 )
    {
      foreach( $highlight as $image )
      {
        $imagesHighlight[] = Storage::url( $image );
      }
    }

    if( is_array( $technicalSpecifications ) && count( $technicalSpecifications ) > 0 )
    {
      foreach( $technicalSpecifications as $image )
      {
        $imagesTechnicalSpecifications[] = Storage::url( $image );
      }
    }

    if( is_array( $thumbs ) && count( $thumbs ) > 0 )
    {
      foreach( $thumbs as $image )
      {
        $imagesThumbs[] = Storage::url( $image );
      }
    }

    if( is_array( $versions ) && count( $versions ) > 0 )
    {
      foreach( $versions as $image )
      {
        $imagesVersions[] = Storage::url( $image );
      }
    }

    array_shift( $imagesDatos );
    array_shift( $imagesGallery );
    array_shift( $imagesHighlight );
    array_shift( $imagesTechnicalSpecifications );
    array_shift( $imagesThumbs );
    array_shift( $imagesVersions );

    return view( 'admin.images.index' )->withId( $id )
                                       ->withImageDatos( $imagesDatos )
                                       ->withImageGallery( $imagesGallery )
                                       ->withImageHighlight( $imagesHighlight )
                                       ->withImageTechnicalSpecifications( $imagesTechnicalSpecifications )
                                       ->withImageThumbs( $imagesThumbs )
                                       ->withImageVersions( $imagesVersions );
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
    $path   = "images/" . $request->only( 'path' )[ 'path' ];

    \Event::fire( new UploadImage( $path ) );

    /*
     * Create a response for passing it into the view.
     */
    $type     = "success";
    $message  = "Imagen subida";

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
