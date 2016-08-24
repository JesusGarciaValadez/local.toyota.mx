<?php

namespace Highlander\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Highlander\Http\Requests;
use Highlander\Http\Controllers\Controller;

use Highlander\Http\Requests\CarRequest;

class CarController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( $id )
  {
    $title          = "Galería de modelos";
    $toReturn       = '/admin/' . $id;
    $home           = \Highlander\Car::where( 'brands_id', $id )
                                     ->get( );
    $brand          = $home->first()->brands->name;
    $id             = $id;
    $elements       = $home;
    $controllerName = 'Car';

    return view( 'admin.table', compact( 'title', 'brand', 'toReturn', 'home', 'id', 'elements', 'controllerName' ) );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create( $id )
  {
    $brandName  = \Highlander\Car::where( 'brands_id', $id )
                                 ->get( )
                                 ->first()->brands->name;

    return view( 'admin.newCar', compact( 'id', 'brandName' ) );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store( CarRequest $request)
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
  public function show( $id, $element_id )
  {
    return 'CarController@show';
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit( $id, $element_id )
  {
    $model      = \Highlander\Car::findOrFail( $element_id );
    dd( $model->name );
    dd( $model->technicalSpecifications );
    $brandName  = $model->title;

    return view( 'admin.editCar', compact( 'id', 'element_id', 'brandName', 'model' ) );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update( CarRequest $request, $id, $element_id )
  {
    $technicalSpecifications  = [
      'description' => base64_encode(
        serialize( [
          'Motor'     => [
            'Capacidad' => $request->Capacidad,
            'Potencia'  => $request->Potencia,
            'Cilindros' => $request->Cilindros,
            'Valvulas'  => $request->Valvulas
          ],
          'Frenos'    => $request->Frenos,
          'Rines'     => $request->Rines,
          'UrlMotor'  => $request->UrlMotor,
          'UrlAuto'   => $request->UrlAuto
        ] )
      )
    ];

    $externalSpecifications   = [
      'description' => base64_encode(
        serialize( [
          'Faros'             => $request->Faros,
          'SeguridadExterior' => $request->SeguridadExterior,
          'Visibilidad'       => [
            'Cristales'         => $request->Cristales,
            'EspejosLaterales'  => $request->EspejosLaterales
          ],
          'Techo'           => $request->Techo,
          'UrlInterior'       => $request->UrlInterior,
        ] )
      )
    ];

    $internalSpecifications   = [
      'description' => base64_encode(
        serialize( [
          'AcabadosInteriores'    => $request->AcabadosInteriores,
          'Asientos'              => $request->Asientos,
          'SistemaAudio'          => $request->SistemaAudio,
          'Confort'               => $request->Confort,
          'CinturonesSeguridad'   => $request->CinturonesSeguridad,
          'SeguridadInterior'     => $request->SeguridadInterior,
          'Download'              => $request->Download
        ] )
      )
    ];

    $saveTechnicalSpecificationsResult  = \Highlander\TechnicalSpecification::where( 'id', $element_id )
                                                                            ->update( $technicalSpecifications );

    $saveExternalSpecificationsResult   = \Highlander\ExternalSpecification::where( 'id', $element_id )
                                                                           ->update( $externalSpecifications );

    $saveInternalSpecificationsResult   = \Highlander\InternalSpecification::where( 'id', $element_id )
                                                                           ->update( $internalSpecifications );

    $car                      = [
      'title'                       => $request->title,
      'name'                        => $request->name,
      'thumbnail'                   => $request->thumbnail,
      'price'                       => $request->price,
      'description'                 => $request->description,
      'slug'                        => $request->slug
    ];

    $saveCarResult                      = \Highlander\Car::where( 'id', $element_id )
                                                         ->update( $car );

    /*
     * Create a response for passing it into the view.
     */
    $type           = ( $saveCarResult ) ? "success" : "danger";
    $message        = ( $saveCarResult ) ? "Campo actualizado" : "Hubo un error al actualizar la información. :/";

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
    return 'CarController@destroy';
  }
}
