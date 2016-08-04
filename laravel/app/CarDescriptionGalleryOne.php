<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class CarDescriptionGalleryOne extends Model
{
  public function brands ( )
  {
    return $this->belongsTo( Brands::class );
  }
}
