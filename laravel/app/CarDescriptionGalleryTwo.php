<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class CarDescriptionGalleryTwo extends Model
{
  public function brands ( )
  {
    return $this->belongsTo( Brands::class );
  }
}
