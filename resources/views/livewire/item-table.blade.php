
<div class="py-12">
    <div class="container text-end">
        <input type="text" wire:model="search"  class="search" placeholder="Search"  />
     
      </div>
    <div class="">
      <div class="container" style="overflow-x:auto;">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th wire:click="sortBy('name')">Name</th>
              <th wire:click="sortBy('price')">Price</th>
              <th scope="col">Description</th>
              <th scope="col">Status</th>
              <th scope="col" class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($items as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <th scope="row"><img class="rounded-circle" src="{{ asset('/storage/'.$item->image)}}" alt="Img" style="width:50px;height:50px;"></th>
              <td>{{$item->name}}</td>
              <td>{{$item->price}}</td>
              <td class=" text-truncate" style="max-width: 100px;">{{$item->description}}</td>
              <td class=" @if ($item->status == 'available') available @else out-of-stock @endif"><span>{{ $item->status }}</span></td>
              
              <td class="text-center">
                {{-- <a href="" class="btn btn-outline-secondary"><i class='bx bxs-edit' ></i></a> --}}
                <form action="{{ route('items.destroy', $item) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger"><i class='bx bx-trash bx-tada' ></i> </button>
                </form>
                <a href="{{route('items.edit',$item)}}" class="btn btn-outline-secondary"><i class='bx bxs-edit' ></i></a>

                
              </td>
            </tr>
          @endforeach
        </tbody>
      
        </table>
          <div>
            {{ $items->links()}}
          
        
      </div>
        </div>
    </div>
</div>