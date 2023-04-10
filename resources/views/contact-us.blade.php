<x-app-layout>
    <div class="">
        <div class="container" style="overflow-x:auto;">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th >Email</th>
                <th >Message</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($messages as $message)
              <tr>
                <th scope="row">{{$message->id}}</th>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td class=" text-truncate" style="max-width: 100px;">{{$message->message}}</td>
              </tr>
            @endforeach
          </tbody>
        
          </table>
            <div>
              {{-- {{ $messages->links()}} --}}
              </div>
          </div>
      </div>
</x-app-layout>