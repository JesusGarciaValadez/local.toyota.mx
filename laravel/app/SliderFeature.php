<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class SliderFeature extends Model
{
  public function brands ( )
  {
    return $this->belongsTo( Brands::class );
  }
}
