<?php

namespace Highlander\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryFancyboxImageRequest extends FormRequest
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
      'title'         => 'required|string',
      'thumb_big'     => 'required|image',
      'thumb_small_1' => 'required|image',
      'thumb_small_2' => 'required|image',
      'thumb_small_3' => 'required|image',
      'image_big'     => 'required|image',
      'image_small_1' => 'required|image',
      'image_small_2' => 'required|image',
      'image_small_3' => 'required|image',
      'title_big'     => 'required|string',
      'title_small_1' => 'required|string',
      'title_small_2' => 'required|string',
      'title_small_3' => 'required|string'
    ];
  }
}
