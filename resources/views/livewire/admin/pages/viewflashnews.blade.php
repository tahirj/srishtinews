<?php 
use App\Models\Flashnew;
$datas = Flashnew::get();
?>
@extends('livewire/admin/master1')
@section('content')

<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white pt-5 pb-5">
            <h3 class="display-4 py-2 text-truncate">Flash News View</h3>
            <table class="table" border="1">
            <thead>
              <tr>
                <th scope="col">Sl No.</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th>Operations</th>
              </tr>
            </thead>
            <tbody>
            @foreach($datas as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->f_description}}</td>
                <td>
                <a href="/admin/deleteflash/{{$item->id}}">Delete<i class="fa fa-trash"></i></a>
                  <a href="/admin/editflash/{{$item->id}}">Edit<i class="fa fa-edit"></i></a>
                </td>
              </tr>
              @endforeach    
            </tbody>
          </table>

            </div>
        </div>
    </div>
</section>

{{-- <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto").remove();
      });
    });
</script> --}}

@endsection

