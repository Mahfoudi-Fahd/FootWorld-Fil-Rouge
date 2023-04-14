<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{url('css/product.css')}}>



{{-- Navbar --}}

@include('components.landing-nav')


<img class="header-img" src="img/header2.jpg" alt="Your Website Logo">

<div class="my-4 py-5 d-flex justify-content-center">
    <h1 class="fs-1">Our <span> Products</span></h3>
</div>
<div class="row m-0">
    @foreach($items as $item)
    <div class="col-md-3 col-sm-6 mb-5">
        <div class="product-grid">
            <div class="product-image">
                <a href="{{route('items.discover', $item)}}" class="image">
                    <img class="pic-1" src="{{ asset('/storage/'.$item->image)}}">
                </a>
                <span class="product-discount-label">-33%</span>
                
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">{{ $item->name }}</a></h3>
                <div class="price">{{ $item->price }} MAD</div>

                {{-- <a class="add-to-cart" href="#">add to cart</a> --}}

                <form action="{{url('addcart',$item->id)}}" method="POST">
                    @csrf
                    <input type="hidden" value="1" min="1" class="form-control product-quantity w-25" name="quantity">
                    <input type="submit" class="btn add-to-cart p-0" value="add to cart">
                </form>
            </div>
        </div>
    </div>

    @endforeach
</div>

