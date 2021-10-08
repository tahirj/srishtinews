<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdmindashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admindashboard-component')->layout('layouts.base');
    }
}
