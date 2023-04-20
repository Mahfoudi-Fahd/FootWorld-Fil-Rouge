<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href={{url('css/style.css')}}>







<!-- Scripts -->
{{-- @vite([ 'resources/js/app.js']) --}}

<nav class="ms-lg-5 navbar navbar-expand-lg">
    <div class="container-fluid d-flex justify-content-between">
        <div class="d-flex mx-5">
             <a class="ms-lg-5 navbar-brand" href="{{route('items.index')}}">Foot Woorld</a>
        </div>
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <div class="d-flex m-auto">
                 <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('items.show') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact-us.view')}}">Contact Us</a>
                    </li>
                  
                  
                </ul>
            </div>


            <div class="">
                @if (Route::has('login'))
                    <div class="d-flex m-auto ">
                        @auth
                       
                        <div class="dropdown me-5">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" >
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu welcome-dropdown text-center">
                              <li><x-dropdown-link href="{{ route('profile.show') }}">
                                <i class='bx bxs-user-circle'> </i>  {{ __('Profile') }}
                            </x-dropdown-link></li>
                            <li> @can('add item')
                                <x-dropdown-link href="{{ url('/dashboard') }}" class="text-sm  text-decoration-none"><i class='bx bxs-dashboard'> </i> Dashboard</x-dropdown-link>
                            @endcan</li>
                            </ul>
                          </div>
                        @else
                            <a href="{{ route('login') }}" class="btn signin-button">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn signup-button">Register</a>
                            @endif
                        @endauth
                    </div>

                    
                @endif
            </div>
            <a class="nav-link me-5" href="{{url('showcart')}}"><i class='bx bx-cart-alt'></i>Cart</a>

        </div>
    </div>

</nav> 