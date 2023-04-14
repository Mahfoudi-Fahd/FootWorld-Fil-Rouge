<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href={{url('css/product.css')}}>
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



<nav class="ms-lg-5 navbar navbar-expand-lg">
    <div class="container-fluid d-flex justify-content-between">
        <div class="d-flex mx-5">
             <a class="ms-lg-5 navbar-brand" href="#">Foot Woorld</a>
        </div>
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <div class="d-flex m-auto">
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('items.show') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact-us.view')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('showcart')}}"><i class='bx bxs-cart'></i> Cart </a>
                    </li>
                </ul>
            </div>



            <div class="">
                @if (Route::has('login'))
                    <div class="d-flex m-auto ">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-dark">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn signin-button">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn signup-button">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>

</nav> 


<div class="d-flex flex-wrap">
    <div class="col-6">
        <img class="discover-img w-75" src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->name }}">
    </div>

    <div class="item-info container col-6 ">
        <h1>{{ $item->name }}</h1>
        <p>{{ $item->description }}</p>
        <p class="price">Price: {{ $item->price }}</p>
        <div class="text-center">
            <form action="{{url('addcart',$item->id)}}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control product-quantity w-25" name="quantity">
                <input type="submit" class="btn btn-outline-light col-11" value="add to cart">
            </form>
        </div>
    </div>
</div>