<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class Descriptions extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'titleH1',
    'sliderFeatures',
    'titleSliderFeatures',
    'titleGalleryFancybox',
    'galleryFancybox',
    'descriptionGalleryFancybox',
    'titleVersionsGallery',
    'carsDescriptionsGalleryOne',
    'carsDescriptionsGalleryTwo',
    'titleDrivingAnimation',
    'titleFooter',
    'descriptionFooter',
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $guarded  = [ 'id', 'created_at', 'updated_at' ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden   = [ '' ];

  public function getSliderFeaturesAttribute ( $value )
  {
    return unserialize( base64_decode( $value ) );
  }

  public function getTitleSliderFeaturesAttribute ( $value )
  {
    return unserialize( base64_decode( $value ) );
  }

  public function getGalleryFancyboxAttribute ( $value )
  {
    return unserialize( base64_decode( $value ) );
  }

  public function getCarsDescriptionsGalleryOneAttribute ( $value )
  {
    return unserialize( base64_decode( $value ) );
  }

  public function getCarsDescriptionsGalleryTwoAttribute ( $value )
  {
    return unserialize( base64_decode( $value ) );
  }

  public function setSliderFeaturesAttribute ( $value )
  {
    return base64_encode( serialize( $value ) );
  }

  public function setTitleSliderFeaturesAttribute ( $value )
  {
    return base64_encode( serialize( $value ) );
  }

  public function setGalleryFancyboxAttribute ( $value )
  {
    return base64_encode( serialize( $value ) );
  }

  public function setCarsDescriptionsGalleryOneAttribute ( $value )
  {
    return base64_encode( serialize( $value ) );
  }

  public function setCarsDescriptionsGalleryTwoAttribute ( $value )
  {
    return base64_encode( serialize( $value ) );
  }
}
