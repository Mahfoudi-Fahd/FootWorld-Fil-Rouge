<link rel="stylesheet" href={{url('css/style.css')}}>
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <form class="container " action=""  method="POST">
        @csrf
        <div class="form-group mt-4">
          <label for="title">Title</label>
          <input class="form-control mt-2" name="title" id="title" placeholder="Title">
          @error('title')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group mt-3">
          <label for="day">Day</label>
          <select class="form-control mt-2" name="day" id="day">
            <option selected disabled>Select Day</option>
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thursday</option>
            <option>Friday</option>
          </select>
          @error('day')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group mt-3">
          <label for="description">Description</label>
          <textarea class="form-control mt-2" name="description" id="description" rows="3"></textarea>
          @error('day')
          <small class="text-danger">{{$message}}</small>
          @enderror
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
                  <th scope="col">Title</th>
                  <th scope="col">Day</th>
                  <th scope="col">Description</th>
                  <th scope="col" class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($items as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <th scope="row"><img class="rounded-circle" src="../../img/299999752_392313242960766_7814705602697265711_n.jpg" alt="Img" style="width:50px;height:50px;"></th>
                  <td>{{$item->name}}</td>
                  <td class=" text-truncate" style="max-width: 100px;">{{$item->description}}</td>
                  <td class="text-center">
                    {{-- <a href="{{route('item.edit',$item->id)}}" class="btn btn-outline-secondary"><i class='bx bxs-edit' ></i></a>
                    <a href="{{route('item.delete',$item->id)}}" class="btn btn-outline-danger"><i class='bx bx-trash bx-tada' ></i></a> --}}
                  </td>
                </tr>
              @endforeach
              
          </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
