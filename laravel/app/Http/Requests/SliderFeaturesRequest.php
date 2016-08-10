<?php

namespace Highlander\Http\Requests;

use Highlander\Http\Requests\Request;

class SliderFeaturesRequest extends Request
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
      'sliderFeatures' => 'required|string'
    ];
  }
}
