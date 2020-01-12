<?php

namespace App\Observers;

use App\Inventory;
use Uuid;

class InventoryObserver
{
    public function retrieved(Inventory $inventory)
    {
        //
    }

    public function creating(Inventory $inventory)
    {
        $inventory->id = (string) Uuid::generate(4);
    }

    /**
     * Handle the inventory "created" event.
     *
     * @param  \App\Inventory  $inventory
     * @return void
     */
    public function created(Inventory $inventory)
    {
        //
    }

    public function updating(Inventory $inventory)
    {
        //
    }

    /**
     * Handle the inventory "updated" event.
     *
     * @param  \App\Inventory  $inventory
     * @return void
     */
    public function updated(Inventory $inventory)
    {
        //
    }

    public function saving(Inventory $inventory)
    {

    }

    public function saved(Inventory $inventory)
    {

    }

    public function deleting(Inventory $inventory)
    {
        //
    }

    /**
     * Handle the inventory "deleted" event.
     *
     * @param  \App\Inventory  $inventory
     * @return void
     */
    public function deleted(Inventory $inventory)
    {
        //
    }

    public function restoring(Inventory $inventory)
    {

    }

    /**
     * Handle the inventory "restored" event.
     *
     * @param  \App\Inventory  $inventory
     * @return void
     */
    public function restored(Inventory $inventory)
    {
        //
    }

    /**
     * Handle the inventory "force deleted" event.
     *
     * @param  \App\Inventory  $inventory
     * @return void
     */
    public function forceDeleted(Inventory $inventory)
    {
        //
    }
}
