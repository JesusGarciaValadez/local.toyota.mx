<?php

namespace Highlander\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
  /**
   * The event listener mappings for the application.
   *
   * @var array
   */
  protected $listen = [
    'Highlander\Events\UploadImage' => [
      'Highlander\Listeners\UploadImageListener',
    ],
    'Highlander\Events\UploadImages' => [
      'Highlander\Listeners\UploadImagesListener',
    ],
    'Highlander\Events\UploadFiles' => [
      'Highlander\Listeners\UploadFilesListener',
    ]
  ];

  /**
   * Register any events for your application.
   *
   * @return void
   */
  public function boot()
  {
    parent::boot();

    //
  }
}
