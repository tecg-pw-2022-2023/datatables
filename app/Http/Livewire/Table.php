<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Pagination\LengthAwarePaginator;

class Table extends Component
{
    public string $class;
    public string $searchTerm;
    public string $sortField;
    public string $sortOrder;
    public int $perPage;
    protected $listeners = [
        'perPageUpdated' => 'updatePagination',
        'searchTermUpdated' => 'updateSearchTerm',
    ];

    use WithPagination;

    // LifeCycle
    public function mount(
        $class = '',
        $searchTerm = '',
        $sortField = 'name',
        $sortOrder = 'ASC',
        $perPage = 10
    ): void {
        $this->class = $class;
        $this->searchTerm = $searchTerm;
        $this->sortField = $sortField;
        $this->sortOrder = $sortOrder;
        $this->perPage = $perPage;
    }

    // Listeners
    public function updatePagination($perPage): void
    {
        $this->perPage = $perPage;
    }

    public function updateSearchTerm($searchTerm): void
    {
        $this->searchTerm = $searchTerm;
        $this->resetPage();
    }

    // Actions
    public function setSortField($field): void
    {
        if ($this->sortField === $field) {
            $this->sortOrder = $this->sortOrder === 'ASC' ? 'DESC' : 'ASC';
        } else {
            $this->sortField = $field;
        }
    }

    // Internal Helpers
    private function queryContacts(): LengthAwarePaginator
    {
        return Contact::query()
            ->where('name', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('email', 'like', '%'.$this->searchTerm.'%')
            ->orderBy($this->sortField, $this->sortOrder)
            ->paginate($this->perPage);
    }

    // Rendering
    public function render(): Factory|View
    {
        return view('livewire.table', [
            'contacts' => $this->queryContacts(),
        ]);
    }

}
