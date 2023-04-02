<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
{
    $items = Item::latest()->take(4)->get();
    return view('/welcome', compact('items'));
}
}
