{{-- @include('components.landing-nav') --}}
<x-app-layout>
    
    
    <div class="py-3 py-md-5">
    <div class="m-4">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <h4 class="mb-4">My Orders</h4>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Username</th>
                                    <th>Payment Mode</th>
                                    <th>Ordered Date</th>
                                    <th>Status Message</th>
                                    <th>Action</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @forelse ($orders as $item)
                                <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->fullname}}</td>
                                        <td>{{ $item->payment_mode}}</td>
                                        <td>{{ $item->created_at}}</td>
                                        <td>{{ $item->status_message}}</td>
                                        <td><a href="{{url('orders/'.$item->id)}}" class="btn btn-info btn-sm"><i class='bx bx-show'></i></a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No Orders Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{$orders->links()}}
                        </div>
                    </div>
                    

                    
                    
                </div>
            </div>

        </div>

    </div>
</div>

                </x-app-layout>