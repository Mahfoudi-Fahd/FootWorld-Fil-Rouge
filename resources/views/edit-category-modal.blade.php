
      <x-app-layout>
        <div class="container">
               <form id="editCategoryForm" action="{{route('categories.update', $category->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <input type="hidden" name="id" id="editId">
            <div class="form-group">
              <label for="editName">Name</label>
              <input type="" name="name" class="form-control"  value="{{$category->name}}">
            </div>
          </div>
          <div class="mt-5">
            <a href="{{route('dashboard')}}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
        </div>
      {{-- Form  --}}
   
      </x-app-layout>
  