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

  public function setSliderFeaturesAttribute ( $sliderFeatures )
  {
    $this->attributes[ 'sliderFeatures' ]             = base64_encode( serialize( $sliderFeatures ) );
  }

  public function setTitleSliderFeaturesAttribute ( $titleSliderFeatures )
  {
    $this->attributes[ 'titleSliderFeatures' ]        = base64_encode( serialize( $titleSliderFeatures ) );
  }

  public function setGalleryFancyboxAttribute ( $galleryFancyboxAttribute )
  {
    $this->attributes[ 'galleryFancyboxAttribute' ]   = base64_encode( serialize( $galleryFancyboxAttribute ) );
  }

  public function setCarsDescriptionsGalleryOneAttribute ( $carsDescriptionGalleryOne )
  {
    $this->attributes[ 'carsDescriptionGalleryOne' ]  = base64_encode( serialize( $carsDescriptionGalleryOne ) );
  }

  public function setCarsDescriptionsGalleryTwoAttribute ( $carsDescriptionsGalleryTwo )
  {
    $this->attributes[ 'carsDescriptionsGalleryTwo' ] = base64_encode( serialize( $carsDescriptionsGalleryTwo ) );
  }
}
