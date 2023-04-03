<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
{
    $items = Item::latest()->take(4)->get();
    return view('/welcome', compact('items'));
}

    public function show()
{
    $items = Item::get()->all();
    return view('/products', compact('items'));
}

    public function view()
{
    $categories = Category::pluck('name', 'id')->toArray();
    $items = Item::get()->all();
return view('/dashboard', compact('categories','items'));
}
}
