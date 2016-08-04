<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class GalleryFancyboxes extends Model
{
  public function brands ( )
  {
    return $this->belongsToMany( Brands::class );
  }
}