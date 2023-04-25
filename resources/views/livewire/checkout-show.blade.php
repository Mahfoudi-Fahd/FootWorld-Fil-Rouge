{{-- <link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<meta charset="utf-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
 --}}


<div>
    <div class="py-3 py-md-4 checkout">
        <div class="container">
            <h4>Checkout</h4>
            <hr>
    @if ($this->totalProductAmount != '0')
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Item Total Amount :
                            <span class="float-end">MAD {{$totalProductAmount}}</span>
                        </h4>
                        <hr>
                        <small>* Items will be delivered in 3 - 5 days.</small>
                        <br/>
                        <small>* Tax and other charges are included !</small>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Basic Information
                        </h4>
                        <hr>
    
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Full Name</label>
                                    <input type="text" wire:model.defer.defer="fullname" class="form-control" placeholder="Enter Full Name"  />
                               @error('fullname')<small class="text-danger">{{$message}}</small>@enderror
                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Phone Number</label>
                                    <input type="tel" wire:model.defer.defer="phone" class="form-control" placeholder="Enter Phone Number" />
                                    @error('phone')<small class="text-danger">{{$message}}</small>@enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" wire:model.defer.defer="email" class="form-control" placeholder="Enter Email Address"  />
                                    @error('email')<small class="text-danger">{{$message}}</small>@enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label> Zip-code</label>
                                    <input type="number" wire:model.defer.defer="zipcode" class="form-control" placeholder="Enter Zip-code" />
                                    @error('zipcode')<small class="text-danger">{{$message}}</small>@enderror

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Full Address</label>
                                    <textarea wire:model.defer.defer="address" class="form-control" rows="2"></textarea>
                                    @error('address')<small class="text-danger">{{$message}}</small>@enderror

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Select Payment Mode: </label>
                                    <div class="d-md-flex align-items-start mt-4">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true">Cash on Delivery</button>
                                            <button class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false">Online Payment</button>
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane active show fade" id="cashOnDeliveryTab" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>Cash on Delivery Mode</h6>
                                                <hr/>
                                                <button type="button" wire:click="codOrder" class="btn btn-primary">Place Order (Cash on Delivery)</button>
    
                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <h6>Online Payment Mode</h6>
                                                <hr/>
                                                <button type="button" class="btn btn-warning">Pay Now (Online Payment)</button>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </form>
    
                    </div>
                </div>
    
            </div>
        @else
        <div class="card card-body shadow text-center p-md-5">
            <h4>No Items In cart</h4>
            <a href="{{url('products')}}" class="btn btn-warning">Shop Now</a>

        </div>
    @endif
        </div>
    </div>
</div>
