<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ALL Users') }}
        </h2>
    </x-slot>

    <div class="table-responsive container mt-5">
        
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
                @forelse ($data as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td> @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                                <label class="">{{ $v }}</label>
                            @endforeach
                        @endif</td>
                        {{-- <td><a href="{{url('admin-orders/'.$item->id)}}" class="btn btn-info btn-sm"><i class='bx bx-show'></i></a></td> --}}
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-secondary"
                            title="edit"><i class='bx bxs-edit'></i></a></td>
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