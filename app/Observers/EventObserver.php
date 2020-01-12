<?php

namespace App\Observers;

use App\Event;
use Uuid;

class EventObserver
{
    public function creating(Event $event)
    {
        $event->id = (string) Uuid::generate(4);
    }

    /**
     * Handle the event "created" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function created(Event $event)
    {
        //
    }

    public function updating(Event $event)
    {
        //
    }

    /**
     * Handle the event "updated" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function updated(Event $event)
    {
        //
    }

    public function saving(Event $event)
    {

    }

    public function saved(Event $event)
    {

    }

    public function deleting(Event $event)
    {
        //
    }

    /**
     * Handle the event "deleted" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function deleted(Event $event)
    {
        //
    }

    public function restoring(Event $event)
    {

    }

    /**
     * Handle the event "restored" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the event "force deleted" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
