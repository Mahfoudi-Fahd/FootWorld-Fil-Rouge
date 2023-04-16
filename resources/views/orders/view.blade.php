@include('components.landing-nav')

<div class="py-3 py-md-5">
    <div class="m-4">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow  p-3">
                    <h4 class="text-primary align-items-center">
                        <i class="fa fa-shopping-cart text-dark">Order Details</i> 
                        <a href="{{url('orders')}}" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Order Details</h5>
                            <hr>
                            <h6>Order Id:{{$order->id}}</h6>
                            <h6>OrderCreated Date:{{$order->created_at}}</h6>
                            <h6>Payment Mode:{{$order->payment_mode}}</h6>
                            <h6 class="border p-2 text-success">
                                Order Status Message: <span class="text-uppercase">{{$order->status_message}}</span>
                            </h6>
                        </div>
                        <div class="col-md-6">
                            <h5>User Details</h5>
                            <hr>
                            <h6>Full Name: {{$order->fullname}}</h6>
                            <h6>Email Id: {{$order->email}}</h6>
                            <h6>Phone: {{$order->phone}}</h6>
                            <h6>Address: {{$order->address}}</h6>
                        </div>
                    </div>
                    <br/>
                    <h5>Order Items</h5>
                    <hr>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Product</th>
                                <th>Image</th>
                                <th>Price </th>
                                <th> Quantity</th>
                                <th>Total</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @php
                                $totalPrice = 0
                            @endphp
                           @foreach ($order->orderItems as $orderItem)
                               <tr>
                                    <td width="10%" >{{$orderItem->item->id}}</td>
                                    <td width="10%" >{{$orderItem->item->name}}</td>
                                    <td width="10%"><img class="pic-1 w-50" src="{{ asset('/storage/'.$orderItem->item->image)}}">
                                    </td>
                                    <td width="10%" >{{$orderItem->item->price ." $"}}</td>
                                    <td width="10%" >{{$orderItem->quantity}}</td>
                                    <td width="10%" class="fw-bold" >{{$orderItem->quantity * $orderItem->price ." $"}}</td>
                                    @php
                                    
                                    $totalPrice += $orderItem->quantity * $orderItem->price
                                    @endphp
                                </tr>
                           @endforeach
                           <tr>
                            <td colspan="5" class="fw-bold">Total Amount</td>
                            <td colspan="1" class="fw-bold">${{$totalPrice}}</td>
                           </tr>
                        </tbody>
                    </table>


                </div>
            </div>

        </div>

    </div>
</div>