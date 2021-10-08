<?php 
use App\Models\Reporter;
$datas = reporter::get();
?>
@extends('livewire/admin/master1')
@section('content')
<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white pt-5 pb-5">
            <h3 class="display-4 py-2 text-truncate">View Reporter List</h3>
                <table class="table" border="1">
                    <thead>
                        <tr>
                        <th scope="col">Sl No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Job Profile</th>
                        <th scope="col">Address</th>
                        <th scope="col">District</th>
                        <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $item)
                        <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->contact_no}}</td>
                        <td>{{$item->job_profile}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->district}}</td>
                        <td>
                            <a href="/admin/deletereporter/{{$item->id}}">Delete<i class="fa fa-trash"></i></a>
                            <a href="/admin/editreporter/{{$item->id}}">Edit<i class="fa fa-edit"></i></a>
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