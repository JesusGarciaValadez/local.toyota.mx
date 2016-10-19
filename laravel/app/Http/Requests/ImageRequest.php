<?php

namespace Highlander\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
      'image' => 'require|image:jpeg,jpg,png',
      'path'  => 'require|string|in_array:[
        "datos",
        "technical-specifications",
        "versiones",
        "galeria",
        "thumbs",
      ]'
    ];
  }
}
