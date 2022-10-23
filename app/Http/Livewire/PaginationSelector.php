<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaginationSelector extends Component
{
    public array $options;
    public int $perPage;

    // LifeCycle
    public function mount()
    {
        $this->options = [10, 15, 20];
        $this->perPage = $this->options[0];
    }

    public function updatedPerPage()
    {
        $this->emit('perPageUpdated', $this->perPage);
    }

    // Rendering
    public function render()
    {
        return view('livewire.pagination-selector');
    }
}
