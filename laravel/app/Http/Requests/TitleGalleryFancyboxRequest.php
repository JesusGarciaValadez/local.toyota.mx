<?php

namespace Toyota\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TitleGalleryFancyboxRequest extends FormRequest
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
      'title_gallery_fancybox' => 'required|string'
    ];
  }
}
