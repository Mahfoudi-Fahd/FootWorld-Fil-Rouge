<link href='https://fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@include('components.landing-nav')


<div class="text-center mb-5 mt-5 ">
    <h3>GET IN TOUCH</h3>
    <p>Feel free to use our contact form to fill out any queries. We aim to respond within 1 working day. If you need urgent help, please use the chat with us option.</p>
</div>

@if (session('success'))
<div class="d-flex justify-content-center">
  <div id="success-message" class="alert alert-success alert-dismissible fade show w-50 " role="alert">
    <strong >{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
</div>
@endif

<div class="container ">
    <form action="{{route('message.store')}}" method="post">
        @csrf
        <div class="d-flex justify-content-between">
            <div class="mb-3 contact-name">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        
            <div class="mb-3 contact-email" >  
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
    <div class="text-center">

        <button type="submit" class="btn btn-outline-secondary px-5 mt-3">Send</button>
    </div>
    </form>
</div>