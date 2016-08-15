<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class SliderFeature extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [ 'brands_id', 'title', 'content' ];

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
