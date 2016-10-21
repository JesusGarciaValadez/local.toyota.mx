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
      'image' => 'required_without:name|image:jpeg,jpg,png',
      'path'  => 'required_without:name|string|in:datos,galeria,highlight,technical-specifications,thumbs,versiones',
      'name'  => 'required_without_all:image,path'
    ];
  }
}
