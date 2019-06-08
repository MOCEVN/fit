<?php

namespace App\Listeners;

use App\Providers\NewFormIsRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterCustomerToNewsletter
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
     * @param  NewFormIsRegisteredEvent  $event
     * @return void
     */
    public function handle(NewFormIsRegisteredEvent $event)
    {
        // Register to Newsletter
         dump('Registered to newsletter');
    }
}
