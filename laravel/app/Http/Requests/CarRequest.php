<?php

namespace Highlander\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'brands_id'             => 'required|string',
      'title'                 => 'required|string',
      'name'                  => 'required|string',
      'thumbnail'             => 'required|image:png,jpg,jpeg',
      'price'                 => 'required|string',
      'description'           => 'required|string',
      'Capacidad'             => 'required|string',
      'Potencia'              => 'required|string',
      'Cilindros'             => 'required|string',
      'Valvulas'              => 'required|string',
      'Frenos[]'              => 'string',
      'Rines[]'               => 'string',
      'UrlMotor'              => 'required|image:png,jpg,jpeg',
      'UrlAuto'               => 'required|image:png,jpg,jpeg',
      'Faros[]'               => 'string',
      'SeguridadExterior[]'   => 'string',
      'Cristales[]'           => 'string',
      'EspejosLaterales[]'    => 'string',
      'Techo[]'               => 'string',
      'UrlInterior'           => 'required|image:png,jpg,jpeg',
      'AcabadosInteriores[]'  => 'string',
      'Asientos[]'            => 'string',
      'SistemaAudio[]'        => 'string',
      'Confort[]'             => 'string',
      'CinturonesSeguridad[]' => 'string',
      'SeguridadInterior[]'   => 'string',
      'Download'              => 'required|file'
    ];
  }
}
