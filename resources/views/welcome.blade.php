<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{url('css/style.css')}}>

    </head>
    
    <body class="antialiased">
       
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
                                <a class="nav-link" href="#">Home</a>
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
                      
                    {{-- <div class="d-flex m-auto">
                        <a href="login.html" class="btn signin-button">Sign In</a>
                        <button class=" btn signup-button">SignUp</button>
                    </div> --}}



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

        <section class="top-section d-flex">
            <div class="title col-5 ">
                <h1 >Comfort </h1>
                <h1>awaits<span>everyday</span></h1>
                <p class="mt-4">Production and sale of the best shoe of various types for
                    tour travel lovers. Feel the tightness and comfort of these items.</p>
                    <button class="btn btn-catalog">Open Catalog</button>
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
                <h1 class="col-12 d-flex justify-content-center flex-wrap">A<span>top-selling</span>product</h1>
                <p class="topseling-text col-md-7 col-sm-8 col-sm-auto mx-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="top-selling-imgs d-flex justify-content-center flex-wrap ">
                @foreach($items as $item)
                <div class="first-product mx-4">
                    <img class="" src="img/AirMax.png" alt="">
                    <h6 class="text-center ms-2">{{ $item->name }}</h6>
                    <p class="text-center ms-2">price <span>{{ $item->price }}$</span> </p>
                </div>
                @endforeach
    
            </div>
        </section>
    
    
        <section class="fourth-section">
            <div class="high-quality d-flex ">
                <div class="col-5">
                    <img class="" src="img/snicker.png" alt="">
                </div>
                <div class="text col-md-7 col-sm-12">
                <h3>We provide </h3>
                    <h3>high quality footwear</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
    
            </div>
        </section>
    
        <section class="favorite-collection">
            <div class="">
                <h3 class="d-flex justify-content-center ">Our <span>favorite</span>collections</h3>
                <p class="d-flex justify-content-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
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
    
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    
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
            
            
            <footer class=" p-5 mt-5">
                
    
            <div class="row d-flex justify-content-around">
                <div class="col-lg-3 mb-3">
                    <h1 class="navbar-brand">Foot <span>World</span></h1>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                            
                <div class="col-6 col-md-2  mb-3">
                    <h5><span>About</span></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">News & Blogs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Help & Supports</a></li>
                    </ul>
                </div>
    
                <div class="col-6 col-md-2  mb-3">
                    <h5><span>Partner with us</span></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">How we work</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms of service</li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
                    </ul>
                </div>
    
                <div class="col-6 col-md-2  mb-3">
                    <h5><span>Support</span></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">+1 202-918-2132</a><li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">beanscene@mail.com<a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">www.beanscene.com</a></li>
          
                    </ul>
                </div>
            </div>
              
        </footer>
    
        <script src="{{ asset('script.js') }}"></script>
    </body>
</html>
