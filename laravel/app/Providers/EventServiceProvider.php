<?php

namespace Highlander\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Highlander\Events\SomeEvent' => [
            'Highlander\Listeners\EventListener',
        ],
        'Highlander\Events\UploadImages' => [
            'Highlander\Listeners\UploadImagesListener',
            'Highlander\Listeners\UploadThumbnailsListener',
        ],
        'Highlander\Events\UploadFiles' => [
            'Highlander\Listeners\UploadFilesListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
