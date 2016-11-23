<?php

namespace Toyota\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryFancyboxRequest extends FormRequest
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
      'thumb_big'     => 'required|string',
      'thumb_small_1' => 'required|string',
      'thumb_small_2' => 'required|string',
      'thumb_small_3' => 'required|string',
      'image_big'     => 'required|string',
      'image_small_1' => 'required|string',
      'image_small_2' => 'required|string',
      'image_small_3' => 'required|string',
      'title_big'     => 'required|string',
      'title_small_1' => 'required|string',
      'title_small_2' => 'required|string',
      'title_small_3' => 'required|string'
    ];
  }
}
