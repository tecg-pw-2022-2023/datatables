<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class PaginationSelector extends Component
{
    public array $options;
    public int $perPage;

    // LifeCycle
    public function mount(): void
    {
        $this->options = [10, 15, 20];
        $this->perPage = $this->options[0];
    }

    public function updatedPerPage(): void
    {
        $this->emit('perPageUpdated', $this->perPage);
    }

    // Rendering
    public function render(): Factory|View
    {
        return view('livewire.pagination-selector');
    }
}
