<?php

namespace Highlander\Http\Requests;

use Highlander\Http\Requests\Request;

class BrandUpdatedRequest extends Request
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
      'titleH1'                     => 'required|string',
      'sliderFeatures'              => 'required',
      'titleSliderFeatures'         => 'required',
      'titleGalleryFancybox'        => 'required|string',
      'galleryFancybox'             => 'required',
      'descriptionGalleryFancybox'  => 'required|string',
      'titleVersionsGallery'        => 'required|string',
      'carsDescriptionsGalleryOne'  => 'required',
      'carsDescriptionsGalleryTwo'  => 'required',
      'titleDrivingAnimation'       => 'required|string',
      'titleFooter'                 => 'required|string',
      'descriptionFooter'           => 'required|string',
    ];
  }
}
