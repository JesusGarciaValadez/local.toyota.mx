<?php

namespace Toyota\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Toyota\Http\Requests;
use Toyota\Http\Controllers\Controller;

use Toyota\Http\Requests\ImageRequest;

use Toyota\Events\UploadImage;

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
        $arrayImage   = explode( '/', $image );
        $arrayReverse = array_reverse( $arrayImage );

        if ( $arrayReverse[ 0 ] !== '.DS_Store')
        {
          $imagesDatos[] = Storage::url( $image );
        }
      }
    }

    if( is_array( $gallery ) && count( $gallery ) > 0 )
    {
      foreach( $gallery as $image )
      {
        $arrayImage   = explode( '/', $image );
        $arrayReverse = array_reverse( $arrayImage );

        if ( $arrayReverse[ 0 ] !== '.DS_Store')
        {
          $imagesGallery[] = Storage::url( $image );
        }
      }
    }

    if( is_array( $highlight ) && count( $highlight ) > 0 )
    {
      foreach( $highlight as $image )
      {
        $arrayImage   = explode( '/', $image );
        $arrayReverse = array_reverse( $arrayImage );

        if ( $arrayReverse[ 0 ] !== '.DS_Store')
        {
          $imagesHighlight[] = Storage::url( $image );
        }
      }
    }

    if( is_array( $technicalSpecifications ) && count( $technicalSpecifications ) > 0 )
    {
      foreach( $technicalSpecifications as $image )
      {
        $arrayImage   = explode( '/', $image );
        $arrayReverse = array_reverse( $arrayImage );

        if ( $arrayReverse[ 0 ] !== '.DS_Store')
        {
          $imagesTechnicalSpecifications[] = Storage::url( $image );
        }
      }
    }

    if( is_array( $thumbs ) && count( $thumbs ) > 0 )
    {
      foreach( $thumbs as $image )
      {
        $arrayImage   = explode( '/', $image );
        $arrayReverse = array_reverse( $arrayImage );

        if ( $arrayReverse[ 0 ] !== '.DS_Store')
        {
          $imagesThumbs[] = Storage::url( $image );
        }
      }
    }

    if( is_array( $versions ) && count( $versions ) > 0 )
    {
      foreach( $versions as $image )
      {
        $arrayImage   = explode( '/', $image );
        $arrayReverse = array_reverse( $arrayImage );

        if ( $arrayReverse[ 0 ] !== '.DS_Store')
        {
          $imagesVersions[] = Storage::url( $image );
        }
      }
    }

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
  public function destroy( ImageRequest $request )
  {
    $image      = $request->only( 'name' )[ 'name' ];
    $arrayPath  = array_reverse( explode( '/', $image ) );
    $imagePath  = $arrayPath[ 2 ] . '/' . $arrayPath[ 1 ] . '/' . $arrayPath[ 0 ];
    $response   = false;

    try
    {
      $response = Storage::delete( $imagePath );
    }
    catch ( Exception $error )
    {
      dd( $error->getMessage() );
    }

    /*
     * Create a response for passing it into the view.
     */
    $type     = ( $response ) ? "success" : "danger";
    $message  = ( $response ) ? "Imagen borrada" : "No se pudo encontrár la imagen";

    return \Redirect::back( )
                    ->withType( $type )
                    ->withMessage( $message );
  }

  private function _validate_images( $image )
  {

  }
}
