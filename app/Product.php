<?php

namespace App;

use App\EventProduct;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'code', 'name', 'description', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class)
            ->using(EventProduct::class)
            ->withPivot('quantity', 'start_date', 'end_date');
    }
}
