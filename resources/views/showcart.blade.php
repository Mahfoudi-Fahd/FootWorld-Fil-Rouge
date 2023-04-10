<link rel="stylesheet" href={{url('css/cart.css')}}> 

@include('components.landing-nav')

{{-- @php
dd($carts);
@endphp --}}
{{-- @foreach($carts as $cart)
                <p>{{$cart->item->name}}</p>
@endforeach --}}
<div class="text-center mb-5">

  <h1 class="fs-1">Shopping Cart</h1>
</div>

<div class="shopping-cart mt-5">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
@foreach($carts as $cart)
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
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">25.98</div>
  </div>
@endforeach

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>


@include('components.footer')
