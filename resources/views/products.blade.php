<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{url('css/style.css')}}>



{{-- Navbar --}}

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
                        <a class="nav-link" href="{{ route('items.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('items.show') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
       
            <div class="">
                @if (Route::has('login'))
                    <div class="d-flex m-auto">
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



<img class="header-img" src="img/header2.jpg" alt="Your Website Logo">

<div class="my-4 py-5 d-flex justify-content-center">
    <h1 class="fs-1">Our <span> Products</span></h3>
</div>
<div class="row m-0">
    @foreach($items as $item)
    <div class="col-md-3 col-sm-6 mb-5">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="img/shoes2.png">
                </a>
                <span class="product-discount-label">-33%</span>
                
            </div>
            <div class="product-content">
                <p class="description">{{ $item->description}}</p>
                <h3 class="title"><a href="#">{{ $item->name }}</a></h3>
                <div class="price">{{ $item->price }} MAD</div>
                <a class="add-to-cart" href="#">add to cart</a>

            </div>
        </div>
    </div>

    @endforeach
</div>

