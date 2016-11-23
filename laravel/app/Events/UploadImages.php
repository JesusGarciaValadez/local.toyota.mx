<?php

namespace Toyota\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UploadImages
{
  use InteractsWithSockets, SerializesModels;

  public $listOfImages;
  public $path;

  /**
   * Create a new event instance.
   *
   * @return void
   */
  public function __construct( $listOfImages, $path )
  {
    $this->listOfImages = $listOfImages;
    $this->path         = $path;
  }

  /**
   * Get the channels the event should broadcast on.
   *
   * @return Channel|array
   */
  public function broadcastOn()
  {
    return new PrivateChannel('channel-name');
  }
}