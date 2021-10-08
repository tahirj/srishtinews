<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Webnew;

class SinglenewsComponent extends Component
{
    public function render()
    {
        
        return view('livewire.singlenews-component')->layout('layouts.base');
   
    }
}
