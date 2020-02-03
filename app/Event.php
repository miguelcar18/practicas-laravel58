<?php

namespace App;

use App\EventProduct;
use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $incrementing = false;

    protected $dates = ['start_date', 'end_date'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'start_date', 'end_date', 'client', 'phone', 'observations', 'identification', 'facture_code', 'email', 'payment_method', 'reference_code'];

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->using(EventProduct::class)
            ->withPivot('quantity', 'start_date', 'end_date');
    }

    public function syncEvents($products = [], $quantities = [], $start_date, $end_date)
    {
        $newArray = [];
        foreach ($products as $key => $value) {
            $product = Product::where('name', $value)->first()->id;
            $newArray[$product] = ['quantity' => $quantities[$key], 'start_date' => $start_date, 'end_date' => $end_date];
        }
        return $this->products()->sync($newArray);
    }

    public function getStartDateFormatAttribute()
    {
        return Carbon::parse($this->start_date)->format('d/m/Y h:i A');
    }

    public function getEndDateFormatAttribute()
    {
        return Carbon::parse($this->end_date)->format('d/m/Y h:i A');
    }

    public function getStartDateNotificationFormatAttribute()
    {
        return Carbon::parse($this->start_date)->format('d/m/Y') . " a las " . Carbon::parse($this->start_date)->format('h:i A');
    }
}
