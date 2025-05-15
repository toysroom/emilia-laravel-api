<?php

namespace App\Listeners;

use App\Events\NewCategoryCreatedEvent;
use App\Notifications\NewCategoryCreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class NewCategoryCreatedListenerNotification
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
        $users = [$event->user];
        Notification::send($users, new NewCategoryCreatedNotification($event->category));
    }
}
