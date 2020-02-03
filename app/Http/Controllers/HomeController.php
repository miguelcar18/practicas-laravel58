<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Inventory;
use App\Product;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event = Event::where('start_date', ">=", Carbon::now()->toDateTimeString())->orderBy('start_date', 'ASC')->first();
        $categories = Category::count();
        $events = Event::count();
        $inventories = Inventory::count();
        $products = Product::count();
        $users = User::count();
        return view('home', compact('categories', 'events', 'inventories', 'products', 'users', 'event'));
    }
}
