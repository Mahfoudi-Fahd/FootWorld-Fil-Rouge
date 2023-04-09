<div>
  <div class="py-12">
    <div class="container  d-flex justify-content-between">
        <input type="text" wire:model="search"  class="search" placeholder="Search"  />
        <div class="button-container text-center mt-5 mb-5">
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory"><i class='bx bxs-plus-circle'></i>
              Add Category
            </button>
          </div>
    </div>
    <div class="">
      <div class="container" style="overflow-x:auto;">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th>Name</th>
              <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
                <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td>{{$category->name}}</td>
                    <td class="text-center">
                        {{-- <a href="" class="btn btn-outline-secondary"><i class='bx bxs-edit' ></i></a> --}}
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"><i class='bx bx-trash bx-tada' ></i></button>
                        </form>

                        {{-- <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $category->id }}" data-name="{{ $category->name }}">
                          <i class='bx bxs-edit'></i>
                        </button> --}}
                        <a href="{{route('categories.edit',$category)}}" class="edit-category" ><i class='bx bxs-edit'></i>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
      
        </table>
          <div>
            {{ $categories->links()}}
      </div>
        </div>
    </div>
  </div>  

</div>
