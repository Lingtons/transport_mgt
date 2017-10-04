<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $items = Item::orderBy('id', 'desc')->paginate(10);
      return view('manage.items.list', ['items' => $items]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manage.items.create');
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
            'name' => 'required|unique:items,name',
            'quantity' => 'required|numeric',
        ]);

        $item = Item::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('items.index')->with('success', "The item <strong>$item->name</strong> has successfully been created.");
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
        $item = Item::findOrFail($id);

        return view('manage.items.edit', compact('item'));
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
        $item = Item::findOrFail($id);

        if (!$item)
        {
            return redirect()
                ->route('items.index')
                ->with('warning', 'The item you are looking for has not been found.');
        }

        $this->validate($request, [
            'name' => 'required|unique:items,name,'.$id,
            'quantity' => 'required|numeric',
        ]);

        $item->name = $request->input('name');
        $item->quantity = $request->input('quantity');

        $item->save();

        return redirect()->route('items.index')->with('success', "The <strong>Item</strong> has successfully been updated.");
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
