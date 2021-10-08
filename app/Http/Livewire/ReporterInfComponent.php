<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reporter;

class ReporterInfComponent extends Component
{
    public function render()
    {
        $reporter=Reporter::where('district','=',"balangir")->get();
        return view('livewire.reporter-inf-component')
        ->with(['reporter'=>$reporter])
        ->layout('livewire.reporter-component');
    }
}
