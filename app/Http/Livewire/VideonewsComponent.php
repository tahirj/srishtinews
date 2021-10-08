<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Videonew;

class VideonewsComponent extends Component
{
    public function render()
    {
        $videonews= Videonew::all();
        return view('livewire.videonews-component')->with(['video'=>$videonews])->layout('layouts.base');
    }
}
