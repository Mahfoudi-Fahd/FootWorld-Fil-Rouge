<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
//     public $carts , $totalProductAmount = 0;
//     public $fullname, $email , $phone , $zipcode , $adress, $payment_mode = NULL , $payment_id= NULL;

// public function placeOrder(){
    
//     $order = Order::create([
//         'user_id'=> auth()->user()->id,
//         'fullname'=> $this->$fullname,
//         'email'=> $this->$email,
//         'phone'=> $this->$phone,
//         'zipcode'=> $this->$zipcode,
//         'adress'=> $this->$adress,
//         'status_message'=> 'In progress',
//         'payment_mode'=> $this->$payment_mode,
//         'payment_id'=> $this->$payment_id,
//     ]);
//     foreach ($this->carts as $cart){
//          $orderItems = Orderitem::create([
//         'order_id'=>$order->id ,
//         'item_id' =>$cart->item_id,
//         'quantity'=>$cart->quantity,
//         'price'=> $cart->item->price
//     ]);
//     }
   
// }

// public function codOrder(){
//     $this->payment_mode = 'Cash on Delivery';
// }

// public function TotalProductAmount(){
//     $this->carts = Cart::where('user_id',auth()->user()->id)->get();
//     foreach ($this->carts as $cart){
//         $this->totalProductAmount += ($cart->total + ($cart->total * 0.05)  );
//     }
//     $this->totalProductAmount +=50;
//     return $this->totalProductAmount;
// }

public function index(){

    // $this->fullname = auth()->user()->name;
    // $this->email = auth()->user()->email;

    // $this->totalProductAmount = $this->TotalProductAmount();
    return view('checkout');
}
}
