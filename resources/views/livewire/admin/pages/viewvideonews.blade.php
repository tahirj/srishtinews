<?php 
use App\Models\videonew;
$datas = videonew::get();
?>
@extends('livewire/admin/master1')
@section('content')
<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white pt-5 pb-5">
            <h3 class="display-4 py-2 text-truncate">Video News View</h3>
                <table class="table" border="1">
                    <thead>
                        <tr>
                        <th scope="col">Sl No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">News Type</th>
                        <th scope="col">Video News Link</th>
                        <th scope="col">Posted By</th>

                        <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $item)
                        <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->vn_name}}</td>
                        <td>{{$item->news_type}}</td>
                        <td>{{$item->vn_videolink}}</td>
                        <td>{{$item->created_by}}</td>
                        <td>
                            <a href="/admin/deletevideonews/{{$item->id}}">Delete<i class="fa fa-trash"></i></a>
                            <a href="/admin/editvideonews/{{$item->id}}">Edit<i class="fa fa-edit"></i></a>
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