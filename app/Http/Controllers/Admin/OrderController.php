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

         $todayDate = Carbon::now()->format('Y-m-d');

        $orders = Order::when($request->date != null, function($q) use ($request){
                       
                return $q->whereDate('created_at',$request->date);
                        
                        },function($q) use ($todayDate){
                               
                            return $q->whereDate('created_at',$todayDate);

                        })
                        ->when($request->status != null, function($q) use ($request){
                           
                            return $q->where('status_message',$request->status);
                            
                        })
                        ->paginate(5);

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

    public function update(int $orderId, Request $request){

        $order = Order::where('id',$orderId)->first();
        if($order){
            $order->update([
                'status_message' => $request->order_status
            ]);
            return redirect()->back()->with('message','Order Status Updated');
        }else{
            return redirect()->back()->with('message','No Order Found');
        }
    }
}
