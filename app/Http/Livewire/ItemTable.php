<?php
 namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;
 
class ItemTable extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.item-table', [
            'items' => Item::where('name', 'like', '%'.$this->search.'%')->paginate(5),
        ]);
    }
}