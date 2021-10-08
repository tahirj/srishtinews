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

                    <h1 class="display-4 py-2 text-truncate">Add Banner</h1>
                    <div class="px-2">
                        <form action='/admin/updatebanner' method="POST" enctype="multipart/form-data" class="justify-content-center">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$banner['id']}}">
                                <label class="sr-only">Banner Name</label>
                                <input type="text" name="b_name" class="form-control" value="{{$banner->b_name}}" placeholder="Banner Name">
                            </div>
                            <div class="form-group">
                                <span>Add Banner Image</span>
                                <label class="sr-only">Image</label>
                                <input type="file" name="b_image" class="form-control" value="{{$banner->b_image}}" placeholder="Banner image">
                            </div>
                             <div class="form-group">
                                <label for="b_description">Banner Description:</label>
                                <textarea class="form-control" name="b_description" rows="5" id="comment">{{$banner->b_description}}</textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Banner News</button>
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
