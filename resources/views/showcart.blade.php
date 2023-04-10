<link rel="stylesheet" href={{url('css/cart.css')}}>

@include('components.landing-nav')

{{-- @php
dd($carts);
@endphp --}}
{{-- @foreach($carts as $cart)
                <p>{{$cart->item->name}}</p>
@endforeach --}}
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 15px;">
            <div class="card-body text-black">
  
              <div class="row">
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>

                  @foreach($carts as $cart)
                  <div class="d-flex align-items-center mb-5">
                      <div class="flex-shrink-0">
                        <img src="https://picsum.photos/640/360
                        "
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">{{$cart->item->name}}</h5>
                      <h6 style="color: #9e9e9e;">{{$cart->item->category->name}}</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">{{$cart->item->price}} DH</p>
                        <div class="def-number-input number-input safari_only">
                          
                          <input class="quantity fw-bold text-black" min="1" name="quantity" value="1"
                            type="number">
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
  
  
                </div>
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>
  
                  <form class="mb-5">
  
                    <div class="form-outline mb-5">
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        value="1234 5678 9012 3457" minlength="19" maxlength="19" />
                      <label class="form-label" for="typeText">Card Number</label>
                    </div>
  
                    <div class="form-outline mb-5">
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        value="John Smith" />
                      <label class="form-label" for="typeName">Name on card</label>
                    </div>
  
                    <div class="row">
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="text" id="typeExp" class="form-control form-control-lg" value="01/22"
                            size="7" id="exp" minlength="7" maxlength="7" />
                          <label class="form-label" for="typeExp">Expiration</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="password" id="typeText" class="form-control form-control-lg"
                            value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                          <label class="form-label" for="typeText">Cvv</label>
                        </div>
                      </div>
                    </div>
  
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                        href="#!">obcaecati sapiente</a>.</p>
  
                    <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>
  
                    <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                      <a href="#!"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                    </h5>
  
                  </form>
  
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>