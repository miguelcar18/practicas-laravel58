<?php

namespace App\Observers;

use App\User;
use Uuid;

class UserObserver
{
    public function retrieved(User $user)
    {
        //
    }

    public function creating(User $user)
    {
        $user->id = (string) Uuid::generate(4);
    }

    /**
     * Handle the user "created" event.
     *
     * @param  App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    public function saving(User $user)
    {

    }

    public function saved(User $user)
    {

    }

    public function deleting(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    public function restoring(User $user)
    {

    }

    /**
     * Handle the user "restored" event.
     *
     * @param  App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
