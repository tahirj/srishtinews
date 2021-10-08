<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Flashnew;
use App\Models\Webnew;
use App\Models\Videonew;
use App\Models\Banner;

class HomeComponent extends Component
{
    public function render()
    {
        $property = Flashnew::get();
        $webnews= Webnew::all();
        $videonews=Videonew::all();
        $banner=Banner::all();
        return view('livewire.home-component')->with(['datas'=>$property])
        ->with(['web'=>$webnews])
        ->with(['video'=>$videonews])
        ->with(['banner'=>$banner])
        ->layout('layouts.base');
        // return view('livewire.home-component')->layout('layouts.base');
    }
}
