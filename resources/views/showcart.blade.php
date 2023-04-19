<link rel="stylesheet" href={{url('css/cart.css')}}> 
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@include('components.landing-nav')



{{-- <div class="cart-title text-center mb-5 bg-white py-3">

  <h1 class="fs-1 ">Shopping Cart</h1>
</div> --}}
<div class="pt-3 pt-md-4">
  <div class="container">
    <h4>Shopping Cart</h4>
    <hr>
  </div>    
</div>

@if (session('success'))
<div class="d-flex justify-content-center">
  <div id="success-message" class="alert alert-success alert-dismissible fade show w-50 " role="alert">
    <strong >{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
</div>
@endif



<div class="d-flex justify-content-center wrap shopping-cart m-5 ps-4 pe-5">

  <div class="card card-body col-8 mx-5">
    <div class="column-labels ">
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
    <div class="product">
      <div class="product-image">
        <img src="https://picsum.photos/640/360">
      </div>
      <div class="product-details">
        <div class="product-title">{{$cart->item->name}}</div>
        <p class="product-description">{{$cart->item->description}}</p>
      </div>
      <div class="product-price">{{$cart->item->price}} MAD</div>
      <div class="product-quantity">
        <input id="quantity" onchange="changeQuantity(event,{{ $cart->id }})" type="number" name="quantity" value="{{ $cart->quantity }}" 
        class="w-6 text-center bg-gray-300" min="1"/>
      </div>
      <div class="product-line-price">{{ $cart->item->price*$cart->quantity." MAD" }}</div>
      <div class="product-removal">
      
        <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="remove-product ms-4">
            <i class='bx bxs-tag-x bx-tada bx-flip-vertical' ></i>
          </button>    
        </form>
      </div>
    </div>
  @endforeach

  </div>

  <div class="totals card card-body ">
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
