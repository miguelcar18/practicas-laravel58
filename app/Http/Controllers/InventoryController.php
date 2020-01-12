<?php

namespace App\Http\Controllers;

use App\Http\Requests\Inventory\StoreRequest;
use App\Http\Requests\Inventory\UpdateRequest;
use App\Inventory;
use App\Product;
use DB;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventory.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $types = ["input" => "Entrada", "output" => "Salida"];
        return view('inventory.create', compact("products", "types"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if ($this->balance($request->type, $request->product_id, $request->quantity) < 0) {
            return back()->with('error', __('Not enough quantity'))->withInput();
        } else {
            DB::transaction(function () use ($request) {

                $inventory = new Inventory($request->only('product_id', 'quantity', 'type', 'observations'));
                $inventory->user_id = auth()->user()->id;
                $inventory->save();
            });
            return redirect()->route('inventory.index')->withSuccess(__('pages/sections/notifications.inventory_created'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        $products = Product::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $types = ["input" => "Entrada", "output" => "Salida"];
        return view('inventory.show', compact('inventory', 'products', 'types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        $products = Product::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $types = ["input" => "Entrada", "output" => "Salida"];
        return view('inventory.edit', compact('inventory', 'products', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Inventory $inventory)
    {
        if ($this->balance($request->type, $request->product_id, $request->quantity, $inventory) < 0) {
            return back()->with('error', __('Not enough quantity'))->withInput();
        } else {
            DB::transaction(function () use ($request, $inventory) {
                $inventory->update($request->only('product_id', 'quantity', 'type', 'observations'));
                $inventory->user_id = auth()->user()->id;
                $inventory->save();
            });
            return redirect()->route('inventory.index')->withSuccess(__('pages/sections/notifications.inventory_updated'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return back()->withSuccess(__('pages/sections/notifications.inventory_deleted'));
    }

    public function balance($type, $product_id, $quantity, $register = null)
    {
        $input = Inventory::where(["product_id" => $product_id, "type" => "input"])->sum('quantity');
        $output = Inventory::where(["product_id" => $product_id, "type" => "output"])->sum('quantity');
        $quantity = ($type == "output") ? -$quantity : $quantity;
        $oldQuantity = (!empty($register)) ? $register->quantity : 0;
        $oldQuantity = (!empty($register) && $register->type == "input") ? -$oldQuantity : $oldQuantity;
        $balance = $input - $output + $quantity + $oldQuantity;
        return $balance;
    }
}
