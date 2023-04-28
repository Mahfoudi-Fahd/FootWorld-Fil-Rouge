<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order;
use Livewire\Component;
use App\Models\Orderitem;
use Spatie\DiscordAlerts\Facades\DiscordAlert;

class CheckoutShow extends Component
{
    public $carts , $totalProductAmount = 0 ;
    public $fullname, $email , $phone , $zipcode , $address, $payment_mode = NULL , $payment_id= NULL;

    public function rules(){
        return[
        'fullname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'zipcode' => 'required',
        'address' => 'required',
        ];
       
        }

        public function placeOrder(){
            $validatedData = $this->validate();
            $order = Order::create([
                'user_id'=> auth()->user()->id,
                'fullname'=> $this->fullname,
                'email'=> $this->email,
                'phone'=> $this->phone,
                'zipcode'=> $this->zipcode,
                'address'=> $this->address,
                'status_message'=> 'In progress',
                'payment_mode'=> $this->payment_mode,
                'payment_id'=> $this->payment_id,
            ]);
            foreach ($this->carts as $cart){
                $orderItems = Orderitem::create([
                    'order_id'=>$order->id ,
                    'item_id' =>$cart->item_id,
                    'quantity'=>$cart->quantity,
                    'price'=> $cart->item->price,
                ]);
            }
            return $order;
        }

        public function codOrder()
        {
            
            $this->payment_mode= 'Cash On Delivery';
            $codOrder = $this->placeOrder();
            if($codOrder){

                Cart::where('user_id',auth()->user()->id)->delete();

                DiscordAlert::message("New Order Has Been Placed  $codOrder");

               return redirect()->route('showcart')->with('success', 'Your Order Placed successfully!');
                
            }else{
                return redirect()->back()->with('message', 'Something went wrong');
            }
        }

    public function TotalProductAmount(){
        $this->totalProductAmount = 0;
        $this->carts = Cart::where('user_id',auth()->user()->id)->get();
        foreach ($this->carts as $cart){
            $this->totalProductAmount += (($cart->total + ($cart->total * 0.05)) );
            
        }
        
        return $this->totalProductAmount;
    }
    

    
    public function render()
    {    
         $this->fullname = auth()->user()->name;
        $this->email = auth()->user()->email;
    
        $this->totalProductAmount = $this->TotalProductAmount();
   
        return view('livewire.checkout-show',['totalProductAmount'=> $this->totalProductAmount]);
    }
}