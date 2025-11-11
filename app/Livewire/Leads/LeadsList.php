<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use Livewire\Component;
use Livewire\WithPagination;

class LeadsList extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';

    public function render()
    {
        $leads = Lead::query()
            ->when($this->search, fn($q) => $q->where('first_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%'))
            ->when($this->status, fn($q) => $q->where('status', $this->status))
            ->latest()
            ->paginate(20);

        return view('livewire.leads.leads-list', compact('leads'));
    }
}
