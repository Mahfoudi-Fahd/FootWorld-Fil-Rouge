<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href={{url('css/topselling.css')}}>

    </head>
    
    <body class="antialiased">
       
        @include('components.landing-nav')

        <section class="top-section d-flex">
            <div class="title col-5 ">
                <h1 >Comfort </h1>
                <h1>awaits<span class=""> everyday</span></h1>
                <p class="mt-4">Production and sale of the best shoe of various types for
                    tour travel lovers. Feel the tightness and comfort of these items.</p>
                    <a href="{{ route('items.show')}}" class="btn btn-catalog">Open Catalog</a>
            </div>
                <img class="img1 " src="img/image.png" alt="shoes-image">
        </section>
    
    
        <section class="second-section">
            <div class="s-title col-md-7 col-xxl-7 col-sm-10">
                <h1>Know about best <span>feature in shoes.</span></h1> 
                <div class="shoes-features d-flex align-items-center">
                    <div class="col-md-9">
                        <div class="d-flex align-items-center mt-4">
                            <img class="award-img" src="img/award.png" alt="">
                            <div>
                                <h3>Best Quality Shoes</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>  
    
                        <div class="d-flex align-items-center mt-4">
                            <img class="award-img" src="img/time.png" alt="">
                            <div>
                                <h3>Long Lasting Shoes</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div>  
    
                        <div class="d-flex align-items-center mt-4">
                            <img class="award-img" src="img/price.png" alt="">
                            <div>
                                <h3>Best Price Range</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                        </div> 
                        
                    </div>
                    <img class="img2" src="img/image2.png" alt="" srcset="">
                </div> 
            </div>
        </section>
    
    
        <section class="">
            <div class="th-title d-flex justify-content-center flex-wrap">
                <h1 class="col-12 d-flex justify-content-center flex-wrap"><span>top-selling </span> products</h1>
                <p class="topseling-text col-md-7 col-sm-8 col-sm-auto mx-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="top-selling-imgs d-flex justify-content-center flex-wrap ">
                {{-- @foreach($items as $item)
                <div class="first-product mx-4">
                    <img class="" src="img/AirMax.png" alt="">
                    <h6 class="text-center ms-2 text-truncate" style="max-width: 220px;">{{ $item->name }}</h6>
                    <p class="text-center ms-2">price <span>{{ $item->price }}$</span> </p>
                </div>
                @endforeach --}}
                @foreach($items as $item)
                <div class="centeri mx-4">
                    <div class="card">
                    
                                        <a href="{{route('items.discover', $item)}}" class="image">
                                            <img src="{{ asset('/storage/'.$item->image)}}" class="foto" style="width:100%">
                                        </a>

                    
                       <header>
                         <h1>{{ $item->name }}</h1>
                      </div>
                    </div>
                    @endforeach 
                </div>

        </section>
    
    
        <section class="fourth-section ">
            <div class="high-quality d-flex container">
                <div class="col-5">
                    <img class="" src="img/snicker.png" alt="">
                </div>
                <div class="text col-md-7 col-sm-12">
                    <h3>We provide <span>high quality</span>  footwear</h3>
                    
                 
                </div>
    
            </div>
        </section>
    
        <section class="favorite-collection">
            <div class="">
                <h3 class="d-flex justify-content-center ">Our <span> favorite</span> collections</h3>
                <p class="d-flex justify-content-center collection-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="  collection-imgs d-flex justify-content-center flex-wrap">
                <img class="col-3 m-1" src="img/shoe.png" alt="" >
                <img class="col-3 m-1" src="img/shoe1.png" alt="">
                <img class="col-3 m-1" src="img/shoe2.png" alt="">
                <img class="col-3 m-1" src="img/shoe3.png" alt="">
                <img class="col-3 m-1" src="img/shoe4.png" alt="">
                <img class="col-3 m-1" src="img/shoe5.png" alt="">
    
            </div>
        </section>
       
    
        <section class="video-section mt-5 d-flex justify-content-center">
            <video src="img/Dior Air Jordan 1 - Cinematic Sneaker Video.mp4" data-no-fullscreen="true" autoplay loop playsinline muted></video>
            <a href="https://www.youtube.com/watch?v=lBpS4FXC51s&ab_channel=JoshBarolo" class="px-5 py-3 text-white btn border-white position-absolute" id="open-catalog">Watch Video</a>
            
        </section>
    
        
        <section>
            <div class="container">
                <h2>Our  Partners</h2>
                <section class="customer-logos slider">
                    <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                    
                </section>
              </div>
            </section>
            
            
  @include('components.footer')
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="{{ asset('script.js') }}"></script>
</body>
</html>
