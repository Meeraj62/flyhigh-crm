<?php

namespace App\Livewire\Universities;

use App\Models\University;
use Livewire\Component;
use Livewire\WithPagination;

class UniversityCatalog extends Component
{
    use WithPagination;

    public $search = '';
    public $country = '';

    public function render()
    {
        $universities = University::query()
            ->when($this->search, fn($q) => $q->where('name', 'like', '%'.$this->search.'%'))
            ->when($this->country, fn($q) => $q->where('country', $this->country))
            ->where('is_active', true)
            ->paginate(12);

        $countries = University::distinct()->pluck('country');

        return view('livewire.universities.university-catalog', compact('universities', 'countries'));
    }
}
