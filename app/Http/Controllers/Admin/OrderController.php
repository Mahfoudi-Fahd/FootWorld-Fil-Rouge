<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){

        // $orders = Order::paginate(5);

        $todayDate = Carbon::now()->format('y-m-d');
        
        $orders = Order::whereDate('created_at',$todayDate)->paginate(5);

        return view('admin.orders.index',compact('orders'));
    }

    public function show(int $orderId){

        $order = Order::where('id',$orderId)->first();
        if($order){
    
            return view('admin.orders.view',compact('order'));
        }else{
            return redirect()->back()->with('message','No Order Found');
        }
    
    }
}
