<?php

namespace App\Observers;

use App\Product;
use Uuid;

class ProductObserver
{
    public function retrieved(Product $product)
    {
        //
    }

    public function creating(Product $product)
    {
        $product->id = (string) Uuid::generate(4);
    }

    /**
     * Handle the product "created" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    public function updating(Product $product)
    {
        //
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    public function saving(Product $product)
    {

    }

    public function saved(Product $product)
    {

    }

    public function deleting(Product $product)
    {
        //
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    public function restoring(Product $product)
    {

    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
