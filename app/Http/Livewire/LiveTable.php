<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LiveTable extends Component
{
    use WithPagination;

    public $sortField = 'name'; // default sorting field
    public $sortAsc = true; // default sort direction
    public $search = '';

    protected $listeners = ['delete'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function delete($id)
    {
        /* User::find($id)
            ->delete(); */

        //If you want some sort of notification when the user is deleted, you can dispatch a browser event:
        /* User::find($id)
            ->delete();
        $this->dispatchBrowserEvent('user-deleted', ['user_name' => $user->name]); // add this */
    }

    public function render()
    {
        return view('livewire.live-table', [
            'users' => User::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate(10),
        ]);
    }
}
