<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class SearchTermField extends Component
{
    public string $searchTerm;

    // lifeCycle
    public function mount(): void
    {
        $this->searchTerm = '';
    }

    public function updatedSearchTerm(): void
    {
        $this->emit('searchTermUpdated', $this->searchTerm);
    }

    //Rendering
    public function render(): Factory|View
    {
        return view('livewire.search-term-field');
    }
}
