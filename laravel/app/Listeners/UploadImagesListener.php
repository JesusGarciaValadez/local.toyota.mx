<?php

namespace Highlander\Listeners;

use Highlander\Events\UploadImages;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadImagesListener implements ShouldQueue
{
  use InteractsWithQueue;

  public $imageUploaded;

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
    foreach ( $event->images as $image )
    {
      if ( $event->request->hasFile( $image ) )
      {
        try
        {
          $file                 = $event->request->file( $image );
          $destinationPath      = public_path() . $event->path;
          $filename             = strtolower( $file->getClientOriginalName() );
          $uploadSuccess        = $file->move( $destinationPath, $filename );
          array_push( $this->imageUploaded, [ $filename => $uploadSuccess ] );

          return $this->imageUploaded;
        }
        catch ( Exception $error )
        {
          return $error->getError();
        }
      }
    }
  }
}
