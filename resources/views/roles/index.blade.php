<x-app-layout>
    <div class="table-responsive container">
        <div>
            <h2 class="fs-1 text-start">Roles</h2>
            <hr>
        </div>
        <div class="text-end">
            <a class="btn btn-dark btn-sm mt-3 " href="{{ route('roles.create') }}">ADD</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Rolename</th>
                    <th>Action</th>
                
                </tr>
                
            </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <td>{{ $role->id}}</td>
                        <td>{{ $role->name}}</td>
                        <td><a href="{{route('roles.show',$role->id)}}" class="btn btn-info btn-sm"><i class='bx bx-show'></i></a></td>
                        <td><a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Edit</a></td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No Orders Available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div>
            {{$roles->links()}}
        </div>
    </div>
</x-app-layout>