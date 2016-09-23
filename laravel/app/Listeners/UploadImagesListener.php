<?php

namespace Highlander\Listeners;

use Highlander\Events\UploadImages;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadImagesListener implements ShouldQueue
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
   * @param  UploadImages  $event
   * @return void
   */
  public function handle( UploadImages $event )
  {
    $request          = \Request();
    $listOfImages     = $event->listOfImages;
    $images           = $request->files;
    $path             = $event->path;
    $destinationPath  = public_path() . '/' . $path;

    foreach( $listOfImages as $image )
    {
      if ( $request->hasFile( $image ) )
      {
        try
        {
          $file           = $request->file( $image )
                                    ->store( $destinationPath );
        }
        catch ( Exception $error )
        {
          return $error->getError();
        }
      }
    }
  }
}
