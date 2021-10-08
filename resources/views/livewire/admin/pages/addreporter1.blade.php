@extends('livewire/admin/master1')
@section('content')

<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white pt-5 pb-5">

                <div class="col-xl-6 col-lg-8 col-md-8 col-sm-10 mx-auto text-center  p-4">


                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                    <h1 class="display-4 py-2 text-truncate">Add Reporter</h1>
                    <div class="px-2">
                        <form action="/admin/addreporter4" method="POST" enctype="multipart/form-data" class="justify-content-center">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only">Reporter Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Reporter Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter Reporter Age">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email Id">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Contact Number</label>
                                <input type="text" name="contact_no" class="form-control" placeholder="Enter Reporter Contact Number">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Job Profile</label>
                                <input type="text" name="jobprofile" class="form-control" placeholder="Enter Job Profile">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Reporter Address">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">District</label>
                                <input type="text" name="district" class="form-control" placeholder="Enter Reporter District Name">
                            </div>

                            <div class="form-group">
                                <span>Add Rporter Image</span>
                                <label class="sr-only">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                {{-- <button class="btn btn-success" type="button">Add</button> --}}
                            </div>
                            {{-- <div class="clone hide">
                                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                  <input type="file" name="image[]" class="myfrm form-control">
                                  <div class="input-group-btn">
                                    <button class="btn btn-danger" type="button">Remove</button>
                                  </div>
                                </div>
                              </div> --}}
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Add Reporter</button>
                        </form>
                    </div>
                </div>
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
