<?php

namespace Highlander\Events;

use Highlander\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UploadImages extends Event
{
  use SerializesModels;

  private $request;
  private $images;
  private $path;

  /**
   * Create a new event instance.
   *
   * @return void
   */
  public function __construct( $request, Array $images, String $path )
  {
    $this->request  = $request;
    $this->images   = $images;
    $this->path     = $path;
  }

  /**
   * Get the channels the event should be broadcast on.
   *
   * @return array
   */
  public function broadcastOn()
  {
      return [];
  }
}
