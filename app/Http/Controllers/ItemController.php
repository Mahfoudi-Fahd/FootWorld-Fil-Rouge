<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{

    function __construct()
    {
    
    $this->middleware('permission:show item', ['only' => ['view','discover']]);
    $this->middleware('permission:add item', ['only' => ['store']]);
    $this->middleware('permission:edit item ', ['only' => ['edit']]);
    $this->middleware('permission:delete item ', ['only' => ['destroy']]);
    
    }

    public function discover($id){
        
        $item = Item::findOrFail($id);
        return view('show-product', compact('item'));
}
    public function index()
{
    $items = Item::latest()->take(4)->get();
    $user = auth()->user();

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
    // dd($items);
return view('/dashboard', compact('categories'));
}



public function store(Request $request)
{
    $item = new Item;
    $item->name = $request->name;
    $item->category_id = $request->category_id;
    $item->price = $request->price;
    $item->status = 'available';
    $item->description = $request->description;
    $item->image = $request->file('image')->store('image','public');


    $item->save();


    return redirect()->route('dashboard')->with('success', 'Item created successfully.');
}


public function destroy(Item $item)
{
    $item->delete();

    return redirect()->route('dashboard')->with('success', 'Item deleted successfully');
}


public function edit(Item $item)
{
    $categories = Category::all();
    return view('edit-item', compact('item', 'categories'));
}

public function update(Request $request, Item $item )
{
    
    $item->name = $request->name;
    $item->description = $request->description;
    $item->category_id = $request->category_id;
    $item->price = $request->price;
    $item->status = $request->status;

    $item->image = $request->file('image') ? $request->file('image')->store('image','public') : $item->image;

    // Handle image upload


    $item->save();

    return redirect()->route('dashboard')->with('success', 'Item updated successfully.');
}


}
