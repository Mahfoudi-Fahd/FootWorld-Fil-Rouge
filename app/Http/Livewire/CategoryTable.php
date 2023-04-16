<?php
 namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
 
class CategoryTable extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
      
        return view('livewire.category-table', [
            'categories' => Category::where('name', 'like', '%'.$this->search.'%')->paginate(5),
        ]);
    }
}