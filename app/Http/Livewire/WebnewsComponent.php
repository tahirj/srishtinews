<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Webnew;
// use Livewire\WithPagination;

class WebnewsComponent extends Component
{
    public function render()
    {
        $webnews= Webnew::all();
        return view('livewire.webnews-component')->with(['web'=>$webnews])->layout('layouts.base');
    }
    // public function show($id)
    // {
    //     $data=Webnew::find($id)->get();
    //     return view('livewire.singlenews-component')->with(['webnews'=>$data])
    //     ->layout('layouts.base');
    // }
    
}
