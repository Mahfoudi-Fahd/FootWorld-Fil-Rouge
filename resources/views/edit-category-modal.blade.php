<form wire:submit.prevent="updateCategory">
    <div class="form-group">
      <label for="categoryName">Name</label>
      <input type="text" class="form-control" id="categoryName" wire:model.defer="category.name">
    </div>
    <div class="form-group">
      <label for="categoryDescription">Description</label>
      <textarea class="form-control" id="categoryDescription" rows="3" wire:model.defer="category.description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </form>
  