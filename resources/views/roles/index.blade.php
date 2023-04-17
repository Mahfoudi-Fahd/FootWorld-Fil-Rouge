<x-app-layout>
    <div class="table-responsive container">
        <div>
            <h2 class="fs-1 text-start">Users</h2>
            <hr>
        </div>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Rolename</th>
                
                </tr>
                
            </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <td>{{ $role->id}}</td>
                        <td>{{ $role->name}}</td>
                 
                        {{-- <td><a href="{{url('admin-orders/'.$item->id)}}" class="btn btn-info btn-sm"><i class='bx bx-show'></i></a></td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No Orders Available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div>
            {{$data->links()}}
        </div>
    </div>
</x-app-layout>