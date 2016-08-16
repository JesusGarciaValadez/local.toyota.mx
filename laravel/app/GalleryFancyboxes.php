<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class GalleryFancyboxes extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'brands_id',
    'title',
    'image_big',
    'image_small_1',
    'image_small_2',
    'image_small_3',
    'thumb_big',
    'thumb_small_1',
    'thumb_small_2',
    'thumb_small_3',
    'title_big',
    'title_small_1',
    'title_small_2',
    'title_small_3',
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

  public function brands ( )
  {
    return $this->belongsTo( Brands::class );
  }
}