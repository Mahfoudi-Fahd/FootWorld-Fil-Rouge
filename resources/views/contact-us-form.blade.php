

@include('components.landing-nav')

@if (session('success'))
  <div class="d-flex justify-content-center">
    <div id="success-message" class="alert alert-success">{{ session('success') }}</div>

  </div>
@endif

<div class="container">
    <form action="{{route('message.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    
        <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>