<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
public function index(){
    $orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
    return view('orders.index',compact('orders'));
}
public function show($orderId){

    $order = Order::where('user_id', Auth::user()->id)->where('id',$orderId)->first();
    if($order){

        return view('orders.view',compact('order'));
    }else{
        return redirect()->back()->with('message','No Order Found');
    }

}
}
