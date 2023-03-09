
<link rel="stylesheet" href={{url('css/style.css')}}>
<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}

<section class="video-section mt-5 flex justify-center bg-dark">
    <video src="{{url('img/FWVIDEO.mp4')}}"  autoplay loop playsinline muted></video>
    <div class="login min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
        <div>
            {{ $logo }}
        </div>
        <div class="login-form w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</section>

