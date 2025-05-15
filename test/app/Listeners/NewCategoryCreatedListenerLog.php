<?php

namespace App\Listeners;

use App\Events\NewCategoryCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewCategoryCreatedListenerLog
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewCategoryCreatedEvent $event): void
    {
        
    }
}
