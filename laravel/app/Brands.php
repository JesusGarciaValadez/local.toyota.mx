<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title_h1',
    'slogan',
    'slider_features_id',
    'title_slider_features_id',
    'title_gallery_fancybox',
    'gallery_fancyboxes_id',
    'description_gallery_fancybox',
    'title_versions_gallery',
    'car_descriptions_gallery_one_id',
    'car_descriptions_gallery_two_id',
    'title_driving_animation',
    'title_footer',
    'description_footer',
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
  protected $hidden   = [ ];

  public function sliderFeatures ( )
  {
    return $this->hasOne( SliderFeature::class );
  }

  public function titlesSliderFeatures ( )
  {
    return $this->hasOne( TitleSliderFeature::class );
  }

  public function galleryFancyboxes ( )
  {
    return $this->hasMany( GalleryFancyboxes::class );
  }

  public function carDescriptionsGalleryOne ( )
  {
    return $this->hasOne( CarDescriptionGalleryOne::class );
  }

  public function carDescriptionsGalleryTwo ( )
  {
    return $this->hasOne( CarDescriptionGalleryTwo::class );
  }

}
