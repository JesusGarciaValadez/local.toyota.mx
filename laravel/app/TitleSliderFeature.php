<?php

namespace Toyota;

use Illuminate\Database\Eloquent\Model;

class TitleSliderFeature extends Model
{
  public function brands ( )
  {
    return $this->belongsTo( Brands::class );
  }
}
