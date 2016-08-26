<?php

namespace Highlander\Listeners;

use Highlander\Events\UploadFiles;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadFilesListener
{
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
   * @param  UploadFiles  $event
   * @return void
   */
  public function handle( UploadFiles $event )
  {
    foreach ( $event->files as $file )
    {
      if ( $event->request->hasFile( $file ) )
      {
        try
        {
          $file                 = $event->request->file( $file );
          $destinationPath      = public_path() . $event->path;
          $filename             = strtolower( $file->getClientOriginalName() );
          $uploadSuccess        = $file->move( $destinationPath, $filename );
          array_push( $this->imageUploaded, [ $filename => $uploadSuccess ] );

          return $this->fileUploaded;
        }
        catch ( Exception $error )
        {
          return $error->getError();
        }
      }
    }
  }}
}
