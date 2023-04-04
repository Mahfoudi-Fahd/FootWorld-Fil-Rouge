
@section('content')
    <div class="container">
        <h1>Edit Item</h1>
        <form method="POST" action="{{ route('items.update', $item->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $item->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $item->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
                @if ($item->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" style="max-width: 300px;">
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $item->price }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="available" {{ $item->status == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="out of stock" {{ $item->status == 'out of stock' ? 'selected' : '' }}>Out of Stock</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
@endsection
