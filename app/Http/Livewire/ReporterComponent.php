<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reporter;

class ReporterComponent extends Component
{
    public function render()
    {
        //$reporter=Reporter::all();
        return view('livewire.reporter-component')
        //->with(['reporter'=>$reporter])
        ->layout('layouts.base');
    }
}
