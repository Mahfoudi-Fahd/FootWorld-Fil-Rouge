<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href={{url('css/product.css')}}>
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


@include('components.landing-nav')



<div class="row mt-5">
    <div class="col-md-7 col-sm-12">
        <img class="w-100" src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->name }}">
    </div>

    <div class="item-info container col-md-4 cols-sm-12 mt-4">
        <h4 class="m-2 text-center">{{ $item->name }}</h4>
        
        <div class="ms-4 text-secondary  border-1 text-center my-3 col-11">
            <h6 class="price fs-6">{{ $item->price }} MAD</h6>
            <small>Tax not included. Shipping calculated at checkout.</small>
        </div>
       

        <div class="text-center">
            <form action="{{url('addcart',$item->id)}}" method="POST">
                @csrf
                <div class="col-2">

                    <input type="number" value="1" min="1" class="w-50 product-quantity m-3 bg-transparent border-secondary border-1 mb-4 ms-3 p-1" style="--bs-border-opacity: .5;" name="quantity" id="quantity">
                </div>
                <input type="submit" class="btn border-secondary rounded-1 col-11 py-3" style="--bs-border-opacity: .5;" value="ADD TO CART">
            </form>
            <button class="btn  rounded-0 border-secondary col-11 py-3" style="--bs-border-opacity: .5;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Description
                <div class="collapse " id="collapseExample">
                  <div class="card card-body  bg-transparent mt-1 border-0 rounded-0">
                    <p>{{ $item->description }}</p>
                  </div>
                </div>
              </button>
        </div>
    </div>
</div>
@include('components.footer')