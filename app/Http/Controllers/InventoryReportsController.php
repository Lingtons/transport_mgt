<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class InventoryReportsController extends Controller
{
    //
    public function index(){

    	$items = Item::orderBy('id', 'desc')->paginate(10);
    	return view('manage.records.index', compact('items'));
    }
}
