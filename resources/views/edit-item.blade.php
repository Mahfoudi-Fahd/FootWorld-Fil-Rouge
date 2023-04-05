<link rel="stylesheet" href={{url('css/style.css')}}>
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



<x-app-layout>
    <form class="container " action="{{ route('items.update', $item->id) }}"  method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="form-group mt-4">
            <label for="name">Name</label>
            <input class="form-control mt-2" name="name" id="name" placeholder="Name" value="{{ $item->name }}" required>
         
        </div>

        <div class="form-group mt-3">
          <label for="day">Category</label>
          <select class="form-control mt-2" name="category_id" id="category" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
          </select>
          <a class="mt-1 me-2 d-flex justify-content-end" href="#"><small><span><i class='bx bxs-plus-circle'></i> Create Category</span></small>  </a>
          
        </div>

        <div class="form-group mt-4">
            <label for="name">Price</label>
            <input  class="form-control mt-2" name="price" id="price"  placeholder="Price" value="{{ $item->price }}" required>
          
          </div>

          <div class="form-group mt-3">
            <label for="status">Status</label>
            <select class="form-control mt-2" name="status" id="status">
              <option selected disabled>Select status</option>
              <option value="available" {{ $item->status == 'available' ? 'selected' : '' }}>Available</option>
              <option value="out of stock" {{ $item->status == 'out of stock' ? 'selected' : '' }}>Out Of stock</option>
            </select>
          </div>

          <div class="form-group mt-3 upload-btn-wrapper">
            <button class="btn"><i class='bx bxs-plus-circle'></i> Upload Image</button>
            <input type="file" name="image" />
            @if($item->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $item->image) }}" alt="Item Image" width="100">
            </div>
        @endif
          </div>
      
        <div class="form-group mt-3">
          <label for="description">Description</label>
          <textarea class="form-control mt-2" name="description" id="description" rows="3" required>{{ $item->description }}</textarea>
          
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="col-md-4 mt-4 btn btn-light">Create</button>
        </div>
      </form>
</x-app-layout>