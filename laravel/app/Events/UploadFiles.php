<?php

namespace Highlander\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UploadFiles
{
  use InteractsWithSockets, SerializesModels;

  private $request;
  private $files;
  private $path;

  /**
   * Create a new event instance.
   *
   * @return void
   */
  public function __construct( $request, Array $files, String $path )
  {
    $this->request  = $request;
    $this->files    = $files;
    $this->path     = $path;
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