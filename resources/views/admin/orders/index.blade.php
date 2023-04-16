<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 

<x-app-layout>

    <form action="" method="GET">
        <div class="row">
        <div class="col-md-3">
        <hr>
        <label>Filter by Date</label>
        <input type="date" name="date" value="{{ date('Y-m-d') }}" class="form-control" />
        </div>
        <div class="col-md-3">
        </div>
        <label>Filter by Status</label>
        <select name="status" class="form-select">
            <option value="">Select Status</option>
            <option value="in progress">In Progress</option>
            <option value="completed">Completed</option>
            <option value="pending">Pending</option>
            <option value="cancelled">Cancelled</option>
            <option value="out-for-delivery">Out for delivery</option>
        </select>
        </div>
        <div class="col-md-6">
        <br/>
        <button type="submit" class="btn btn-primary">Filter</button>
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

</x-app-layout>