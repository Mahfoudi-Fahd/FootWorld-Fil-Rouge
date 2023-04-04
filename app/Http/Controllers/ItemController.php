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



public function store(Request $request)
{
    // dd($request);
    $item = new Item;
    $item->name = $request->name;
    $item->category_id = $request->category_id;
    $item->price = $request->price;
    $item->status = 'available';
    $item->description = $request->description;
    $item->image = $request->file('image')->store('image','public');

    // Handle file upload
    // if ($request->hasFile('image')) {
    //     $image = $request->file('image')->store('image','public');
    //     // $filename = time() . '.' . $image->getClientOriginalExtension();
        // $image->storeAs('public/img', $filename);
        // $item->image = $filename;
    // }

    $item->save();


    return redirect()->route('dashboard')->with('success', 'Item created successfully.');
}


}
