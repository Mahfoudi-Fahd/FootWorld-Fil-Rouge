<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addcart(Request $request , $id){
        if(Auth::id()){
    
            $user=auth()->user();
            $item=Item::find($id);
            $cart=new Cart();
    
            $cart->user_id = $user->id;
            $cart->item_id = $item->id;
            $cart->quantity = $request->quantity;
            $cart->total = $item->price * $cart->quantity;  
            $cart->save();
    
            return redirect()->back();
    
        }else{
            return redirect('login');
        }
    }

    public function showcart(){
        $user=auth()->user();
        $items = Item::latest()->take(4)->get();

        $carts=$user->carts()->with('item')->get();
        return view('showcart',compact('carts','items'));
    }


    public function updateQuantity(Request $request)
    {
        $cart = Cart::find($request->id);

        $cart->quantity = $request->quantity;
        $cart->total = $cart->item->price * $cart->quantity; 

        $cart->save();

        return response()->json(['updated' => $cart]);
    }

    
    
    public function destroy(Cart $cart)
{
    $cart->delete();

    return redirect()->route('showcart')->with('success', 'Item deleted successfully');
}

}
