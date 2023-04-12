<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public $carts , $totalProductAmount;

public function TotalProductAmount(){
    $this->carts = Cart::where('user_id',auth()->user()->id)->get();
    foreach ($this->carts as $cart){
        $this->totalProductAmount += ($cart->total + ($cart->total * 0.05)  );
    }
    $this->totalProductAmount +=50;
    return $this->totalProductAmount;
}

public function index(){
    $this->totalProductAmount = $this->TotalProductAmount();
    return view('checkout',['totalProductAmount'=> $this->totalProductAmount]);
}
}
