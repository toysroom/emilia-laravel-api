<?php

namespace App\Listeners;

use App\Events\NewCategoryCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewCategoryCreatedMail;

class NewCategoryCreatedListenerMail
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
        Mail::to('alessandro.brugioni@gmail.com')->send( new NewCategoryCreatedMail($event->category) );
    }
}
