<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\Event\StoreRequest;
use App\Http\Requests\Event\UpdateRequest;
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
        DB::transaction(function () use ($request) {
            $event = new Event($request->only('name', 'address', 'client', 'phone', 'observations'));
            $event->start_date = Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString();
            $event->end_date = Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString();
            $event->save();

            $event->syncEvents($request->products, $request->quantities, Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString(), Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString());
        });
        return redirect()->route('event.index')->withSuccess(__('pages/sections/notifications.event_created'));
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
        DB::transaction(function () use ($request, $event) {
            $event->update($request->only('name', 'address', 'client', 'phone', 'observations'));
            $event->start_date = Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString();
            $event->end_date = Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString();
            $event->save();
            $event->syncEvents($request->products, $request->quantities, Carbon::createFromFormat("d/m/Y h:i A", $request->start_date)->toDateTimeString(), Carbon::createFromFormat("d/m/Y h:i A", $request->end_date)->toDateTimeString());
        });
        return redirect()->route('event.index')->withSuccess(__('pages/sections/notifications.event_updated'));
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
}
