<?php

namespace App;

use App\Event;
use App\Product;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EventProduct extends Pivot
{
    protected $dates = ['start_date', 'end_date'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'event_id', 'quantity', 'start_date', 'end_date'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
