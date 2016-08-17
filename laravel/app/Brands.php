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
    'name',
    'slogan',
    'title_h1',
    'title_gallery_fancybox',
    'description_gallery_fancybox',
    'title_versions_gallery',
    'title_driving_animation',
    'title_footer',
    'description_footer',
    'slug',
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
}
