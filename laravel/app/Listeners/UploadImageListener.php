<?php

namespace Highlander\Listeners;

use Highlander\Events\UploadImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadImageListener implements ShouldQueue
{
  use InteractsWithQueue;

  /**
   * Create the event listener.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  /**
   * Handle the event.
   *
   * @param  UploadImage  $event
   * @return void
   */
  public function handle( UploadImage $event )
  {
    $request          = \Request();
    $image            = $request->file( 'image' );
    $nameOfImage      = $image->getClientOriginalName();
    $path             = $event->path;
    $destinationPath  = $path;

    if ( $request->hasFile( 'image' ) &&
         $image->isValid() )
    {
      try
      {
        $file   = $request->file( 'image' )
                          ->storeAs( $destinationPath, $nameOfImage );
      }
      catch ( Exception $error )
      {
        return $error->getError();
      }
    }
    else
    {
      \Log::warning( 'No hay archivo' );
    }
  }
}
