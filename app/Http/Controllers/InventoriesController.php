<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Item;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventories = Inventory::orderBy('id', 'desc')->paginate(10);
        return view('manage.inventories.list', ['inventories' => $inventories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $items  = Item::pluck('name', 'id');
        return view('manage.inventories.create', compact('items'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'status' => 'required',
            'quantity' => 'required|numeric',
            'item' => 'required|numeric',
            'description' => 'required',
        ]);

        $item_id = $request->input('item');
        $status = $request->input('status');
        $quantity = $request->input('quantity');
        $item = Item::findOrFail($item_id);
        
        if($item->quantity < $quantity && $status == 'out'){
            return redirect()->back()->with('warning', 'The quantity is greater than that in stock');
        }

        if($status == 'in'){
            Item::increment('quantity', $quantity);
        }else{
            Item::decrement('quantity', $quantity);
        }

        $inventory = Inventory::create([
            'status' => $request->input('status'),
            'item_id' => $request->input('item'),
            'quantity' => $request->input('quantity'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('inventories.index')->with('success', "The Inventory has successfully been created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $inventory = inventory::findOrFail($id);
        $items  = Item::pluck('name', 'id');
        return view('manage.inventories.edit', compact('items', 'inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $inventory = Inventory::findOrFail($id);

        if (!$inventory)
        {
            return redirect()
                ->route('inventories.index')
                ->with('warning', 'The inventory you are looking for has not been found.');
        }

        $this->validate($request, [
            'status' => 'required',
            'quantity' => 'required|numeric',
            'item' => 'required|numeric',
            'description' => 'required',
        ]);

        $item_id = $request->input('item');
        $status = $request->input('status');
        $quantity = $request->input('quantity');
        $item = Item::findOrFail($item_id);
        
        if($item->quantity < $quantity && $status == 'out'){
            return redirect()->back()->with('warning', 'The quantity is greater than that in stock');
        }

        if($status == 'in'){
            Item::increment('quantity', $quantity);
        }else{
            Item::decrement('quantity', $quantity);
        }

        $inventory->status = $request->input('status');
        $inventory->quantity = $request->input('quantity');
        $inventory->item_id = $request->input('item');
        $inventory->description = $request->input('description');

        $inventory->save();

        return redirect()->route('inventories.index')->with('success', "The <strong>Inventory</strong> has successfully been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
