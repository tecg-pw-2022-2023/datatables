<?php

namespace App\View\Components;

use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class Table extends Component
{
    /**
     * @param  array  $qp
     * @param  Collection|Contact[]  $contacts
     */
    public function __construct(
        public array $qp,
        public Collection|array $contacts
    ) {
    }

    public function render(): View
    {
        return view('components.table');
    }
}
