<?php
use App\Models\webnew;
$datas = webnew::get();
?>
@extends('livewire/admin/master1')
@section('content')
<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white pt-5 pb-5">
            <h3 class="display-4 py-2 text-truncate">Web News View</h3>
                <table class="table" border="1">
                    <thead>
                        <tr>
                        <th scope="col">Sl No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">News Type</th>
                        <th scope="col">News Description</th>
                        <th scope="col">news image</th>
                        <th scope="col">Posted by</th>
                        <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $item)
                        <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->wn_name}}</td>
                        <td>{{$item->wn_type}}</td>
                        <td>{{$item->wn_description}}</td>
                        
                        <td>
                            <img class="card-img-top card-img" src="{{$item->wn_image}}" alt="Card image" height="200px" width="200px"></td>
                        <td>{{$item->created_by}}</td>
                        <td>
                            <a href="/admin/deletewebnews/{{$item->id}}">Delete<i class="fa fa-trash"></i></a>
                            <a href="/admin/editwebnews/{{$item->id}}">Edit<i class="fa fa-edit"></i></a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection


<!-- @if (Auth::user()->avatar_url != NULL)
    <img class="figure-img img-fluid img-circle profile-avatar" src="{{ URL::to(Auth::user()->getAvatarUrl()) }}" width="200" height="150" alt="profile photo" />
@else
    <img class="figure-img img-fluid img-circle profile-avatar" src="{{ URL::to('images/avatar.jpg') }}" width="100" height="100" alt="profile photo">
@endif -->