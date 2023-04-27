<link rel="stylesheet" href={{url('css/cart.css')}}> 
<link rel="stylesheet" href={{url('css/style.css')}}> 
<link rel="stylesheet" href={{url('css/product.css')}}> 
<link rel="stylesheet" href={{url('css/topselling.css')}}> 
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
@include('components.landing-nav')


<div class="d-flex m-5  border-bottom flex-wrap">
  <div class="col-md-5 col-sm-12 me-4">
    <img src="https://cdn.shopify.com/s/files/1/0601/0362/2840/files/Jordan4s.jpg?v=1676649779" alt="" style="width: 100%; height: 100%; ">
  </div>
  <div class="col-md-6 col-sm-12  text-center ">
    <hr>
    <h4>TRADING SINCE 2011</h4>
    <p>We will ship on the same working day if the order is placed by 2pm.</p> 
    <button class="btn btn-dark rounded-1 py-2 ">SHOP NOW</button>
    <hr>
  </div>
</div>



{{-- <div class="cart-title text-center mb-5 bg-white py-3">

  <h1 class="fs-1 ">Shopping Cart</h1>
</div> --}}
{{-- <div class="pt-3 pt-md-4">
  <div class="container">
    <h4>Shopping Cart</h4>
    <hr>
  </div>    
</div> --}}

@if (session('success'))
<div class="d-flex justify-content-center">
  <div id="success-message" class="alert alert-success alert-dismissible fade show w-50 " role="alert">
    <strong >{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
</div>
@endif



<div class="d-flex justify-content-center flex-wrap shopping-cart" >

  <div class=" cart-body col-8" style="overflow-x:auto;">
    <div class="column-labels  ">
      <label class="product-image">Image</label>
      <label class="product-details">Product</label>
      <label class="product-price">Price</label>
      <label class="product-quantity">Quantity</label>
      <label class="product-line-price">Total</label>
      <label class="product-removal">Remove</label>
    </div>

    @php
        $subtotal = 0;
        $taxRate = 0.05;
        $total = 0;
        $tax = 0; 
    @endphp

  @foreach($carts as $cart)
    @php
        $subtotal += $cart->item->price*$cart->quantity;
        $tax = $subtotal* $taxRate;
        $total =  ($subtotal + $tax)+50 ;
    @endphp
    <div class="product border-bottom pb-4 d-flex card-body bg-transparent">
      <div class="product-image">
        <img src="{{ asset('/storage/'.$cart->item->image)}}">
      </div>
      <div class="product-details">
        <div class="product-title">{{$cart->item->name}}</div>
      </div>
      <div class="product-price">{{$cart->item->price}} MAD</div>
      <div class="product-quantity">
        <input id="quantity" onchange="changeQuantity(event,{{ $cart->id }})" type="number" name="quantity" value="{{ $cart->quantity }}" 
        class="w-6 text-center border " style="--bs-border-opacity: .5;" min="1"/>
      </div>
      <div class="product-line-price">{{ $cart->item->price*$cart->quantity." MAD" }}</div>
      <div class="product-removal">
      
        <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn fs-4 text-danger ms-4" >
            <i class='bx bxs-tag-x ' ></i>
          </button>    
        </form>
      </div>
    </div>
  @endforeach

  </div>

  <div class="totals card card-body rounded-1 bg-white shadow-sm">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">{{ $subtotal." MAD" }}</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">{{$tax." MAD"}}</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">50 MAD</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">{{$total." MAD"}}</div>
    </div>
    <a href="{{route('checkout.index')}}" class="checkout">CHECKOUT ({{$total." MAD"}})</a>
  </div>
      

</div>





<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script type="text/javascript">

  function changeQuantity(e,id){
    $.ajax({
        url: '{{ route('update.quantity') }}',
        method: "put",
        data: {
            id: id,
            quantity: e.target.value
        },
        success: function (response) {
           console.log(response)
        }
    });
  }
</script>
@include('components.footer')
