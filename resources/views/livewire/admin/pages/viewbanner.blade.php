<?php
use App\Models\Banner;
$datas = Banner::get();
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
                            <th scope="col">Banner Description</th>
                            <th scope="col">Image</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->b_name}}</td>
                            <td>{{$item->b_description}}</td>
                            <td><img class="card-img-top card-img" src="{{$item->b_image}}" alt="Card image" height="200px" width="200px"></td>
                            <td>
                            <a href="/admin/deletebanner/{{$item->id}}">Delete<i class="fa fa-trash"></i></a>
                            <a href="/admin/editbanner/{{$item->id}}">Edit<i class="fa fa-edit"></i></a>
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
