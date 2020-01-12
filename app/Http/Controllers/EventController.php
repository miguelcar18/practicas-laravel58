<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventProduct;
use App\Http\Requests\Event\StoreRequest;
use App\Http\Requests\Event\UpdateRequest;
use App\Inventory;
use App\Product;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::orderBy('name', 'asc')->pluck('name', 'name')->toArray();
        return view('event.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $switch = true;
        $availability = $this->availability($request->products, $request->quantities, Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString(), Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString());
        foreach ($request->products as $key => $value) {
            if ($availability[$value]["quantity"] < 0) {
                $switch = false;
            }
        }

        if ($switch) {
            DB::transaction(function () use ($request) {
                $event = new Event($request->only('name', 'address', 'client', 'phone', 'observations'));
                $event->start_date = Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString();
                $event->end_date = Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString();
                $event->save();

                $event->syncEvents($request->products, $request->quantities, Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString(), Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString());
            });
            return redirect()->route('event.index')->withSuccess(__('pages/sections/notifications.event_created'));
        } else {
            return back()->with('error', __('Not enough quantity'))->with('availability', $availability)->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $products = Product::orderBy('name', 'asc')->pluck('name', 'name')->toArray();
        return view('event.show', compact('event', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $products = Product::orderBy('name', 'asc')->pluck('name', 'name')->toArray();
        return view('event.edit', compact('event', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Event $event)
    {
        $switch = true;
        $availability = $this->availability($request->products, $request->quantities, Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString(), Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString(), $event);
        foreach ($request->products as $key => $value) {
            if ($availability[$value]["quantity"] < 0) {
                $switch = false;
            }
        }
        if ($switch) {
            DB::transaction(function () use ($request, $event) {
                $event->update($request->only('name', 'address', 'client', 'phone', 'observations'));
                $event->start_date = Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString();
                $event->end_date = Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString();
                $event->save();
                $event->syncEvents($request->products, $request->quantities, Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString(), Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString());
            });
            return redirect()->route('event.index')->withSuccess(__('pages/sections/notifications.event_updated'));
        } else {
            return back()->with('error', __('Not enough quantity'))->with('availability', $availability)->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back()->withSuccess(__('pages/sections/notifications.event_deleted'));
    }

    public function availability($products, $quantities, $start_date, $end_date, $register = null)
    {
        $array = [];
        foreach ($products as $key => $value) {
            $product = Product::where("name", $value)->first();

            $oldQuantity = (!empty($register)) ? EventProduct::where(["product_id" => $product->id, "event_id" => $register->id])->first()->quantity : 0;

            $amount_used = EventProduct::where(["product_id" => $product->id])->where("start_date", ">=", $start_date)->where("end_date", "<=", $end_date)->sum('quantity');
            $input = Inventory::where(["product_id" => $product->id, "type" => "input"])->sum('quantity');
            $output = Inventory::where(["product_id" => $product->id, "type" => "output"])->sum('quantity');
            $available = $input - $output - $amount_used + $oldQuantity;
            $quantity = $input - $output - $amount_used - $quantities[$key] + $oldQuantity;
            $array[$value] = [
                'id' => $product->id,
                'name' => $value,
                'quantity' => $quantity,
                'available' => $available,
            ];
        }
        return $array;
    }
}
