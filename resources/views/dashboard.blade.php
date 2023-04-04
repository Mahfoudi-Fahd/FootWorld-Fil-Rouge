<link rel="stylesheet" href={{url('css/style.css')}}>
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<x-app-layout>
    <div class="d-flex my-5 mx-5">
        <div class="mx-4 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
        <div class="mx-4 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
        <div class="mx-4 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </div>



    <form class="container " action="{{route('items.store')}}"  method="POST" enctype='multipart/form-data'>
        @csrf
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="form-group mt-4">
            <label for="name">Name</label>
            <input class="form-control mt-2" name="name" id="name" placeholder="Name">
         
          </div>
        <div class="form-group mt-3">
          <label for="day">Category</label>
          <select class="form-control mt-2" name="category_id" id="category">
            <option selected disabled>Select Category</option>
            @foreach ($categories as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
          </select>
          <a class="mt-1 me-2 d-flex justify-content-end" href="#"><small><span><i class='bx bxs-plus-circle'></i> Create Category</span></small>  </a>
          
        </div>

        <div class="form-group mt-4">
            <label for="name">Price</label>
            <input  class="form-control mt-2" name="price" id="price" required placeholder="Price">
          
          </div>

          <div class="form-group mt-3">
            <label for="status">Status</label>
            <select class="form-control mt-2" name="status" id="status">
              <option selected disabled>Select status</option>
              <option>Available</option>
              <option>Out Of stock</option>
            </select>
          </div>

          <div class="form-group mt-3 upload-btn-wrapper">
            <button class="btn"><i class='bx bxs-plus-circle'></i> Upload Image</button>
            <input type="file" name="image" />
          </div>
      
        <div class="form-group mt-3">
          <label for="description">Description</label>
          <textarea class="form-control mt-2" name="description" id="description" rows="3"></textarea>
          
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="col-md-4 mt-4 btn btn-light">Create</button>
        </div>
      </form>
    



      <div class="py-12">
        <div class="">
          <div class="container" style="overflow-x:auto;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price <span>MAD</span> </th>
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
                    <a href="" class="btn btn-outline-secondary"><i class='bx bxs-edit' ></i></a>
                    <a href="" class="btn btn-outline-danger"><i class='bx bx-trash bx-tada' ></i></a>
                  </td>
                </tr>
              @endforeach
              
          </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
