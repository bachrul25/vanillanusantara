<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grade;

/**
 * CompanyProfile Livewire component displays company information and grade list.
 */
class CompanyProfile extends Component
{
    /**
     * Collection of vanilla grades.
     *
     * @var \Illuminate\Support\Collection
     */
    public $grades;

    /**
     * Initialize the component and load grade data.
     */
    public function mount()
    {
        $this->grades = Grade::all();
    }

    /**
     * Render the company profile view using the app layout.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.company-profile')
            ->layout('layouts.app');
    }
}
