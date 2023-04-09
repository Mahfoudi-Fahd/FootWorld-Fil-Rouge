
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      
<x-app-layout>


  {{-- Statistics Cards --}}
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



  {{-- Success Message --}}
@if (session('success'))
  <div class="d-flex justify-content-center">
    <div id="success-message" class="alert alert-success">{{ session('success') }}</div>

  </div>
@endif
  
{{-- hide Success message  --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    setTimeout(function() {
      $('#success-message').hide();
    }, 5000); // 5000 milliseconds = 5 seconds
  });
</script>

 




 {{-- Item Form  --}}
  <div class="collapse" id="collapseItem">
    <div class="">
      <form class="container " action="{{route('items.store')}}"  method="POST" enctype='multipart/form-data'>
        @csrf
    
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
          <a class="mt-1 me-2 d-flex justify-content-end" href="#"><small><span><i class='bx bxs-plus-circle'></i>       <button class="" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
            Add Category 
          </button>
    </span></small>  </a>
          
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
            <input type="file" name="image" id="image"/>
          </div>
          <div class="preview-image-container mt-3">
            <img id="preview-image" src="#" alt="Preview image" class="w-20">
          </div>

      {{-- Show Image Once uploded JQuery--}}
        <script>
          $(document).ready(function() {
            $('#image').on('change', function() {
              var input = $(this)[0];
              if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $('#preview-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
              }
            });
          });
        </script>
      
        <div class="form-group mt-3">
          <label for="description">Description</label>
          <textarea class="form-control mt-2" name="description" id="description" rows="3"></textarea>
          
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="col-md-4 mt-4 btn btn-light">Create</button>
        </div>
      </form>
        </div>
</div>


{{-- Items Table --}}
<div>
  @livewire('item-table')
</div>

{{-- Category Form --}}
<div class="collapse" id="collapseCategory">
  <form class="container " action="{{route('categories.store')}}"  method="POST" enctype='multipart/form-data'>
    @csrf

    <div class="form-group mt-4">
        <label for="name">Name</label>
        <input class="form-control mt-2" name="name" id="name" placeholder="Name">
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="col-md-4 mt-4 btn btn-light">Create</button>
      </div>
  </form>

  
</div>



{{-- Category edit modal  --}}


<div>
    @livewire('category-table')
  </div>

</x-app-layout>
