<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 

<x-app-layout>
    <div class="container">
    <div>
        <h2 class="ps-0 fs-2 text-start ">Today's Orders</h2>
           <small> <i> Use fiter to show more</i></small>
            <hr class="mb-5 mt-2">
    </div>
    
    <form action="" method="GET">
        <div class="row">
        <div class="col-md-3">
        <label>Filter by Date</label>
        <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}" class="form-control rounded border-light" />
        </div>
        <div class="col-md-3">
            <label>Filter by Status</label>
            <select name="status" class="form-select border-light">
                <option value="">Select Status</option>
                <option value="in progress" {{Request::get('status') == 'in progress'? 'selected' : ''}} >In Progress</option>
                <option value="completed" {{Request::get('status') == 'completed'? 'selected' : ''}} >Completed</option>
                <option value="pending" {{Request::get('status') == 'pending'? 'selected' : ''}} >Pending</option>
                <option value="cancelled" {{Request::get('status') == 'cancelled'? 'selected' : ''}} >Cancelled</option>
                <option value="out-for-delivery" {{Request::get('status') == 'out-for-delivery'? 'selected' : ''}} >Out for delivery</option>
            </select>
        </div>
        </div>
        <div class="col-md-6">
        <br/>
        <button type="submit" class="btn btn-outline-info">Filter</button>
        </div>
    </form>
    
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
                        <td><a href="{{url('admin-orders/'.$item->id)}}" class="btn btn-info btn-sm"><i class='bx bx-show'></i></a></td>
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

</x-app-layout>