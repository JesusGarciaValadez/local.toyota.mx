<?php

namespace Highlander\Listeners;

use Highlander\Events\UploadImages;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadThumbnailsListener
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
     * @param  UploadImages  $event
     * @return void
     */
    public function handle(UploadImages $event)
    {
        //
    }
}
