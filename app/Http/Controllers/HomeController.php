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
        $categoriess = Category::count();
        $events = Event::count();
        $inventories = Inventory::count();
        $productss = Product::count();
        $users = User::count();
        return view('home', compact('categoriess', 'events', 'inventories', 'productss', 'users', 'event'));
    }
}
