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

                    <h1 class="display-4 py-2 text-truncate">Add Flash News</h1>
                    <div class="px-2">
                        <form action="{{ route('admin.add') }}" method="POST" enctype="multipart/form-data" class="justify-content-center">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only">News Name</label>
                                <input type="text" name="name" class="form-control" placeholder="News Name">
                            </div>
                             <div class="form-group">
                                <label for="description">News Description:</label>
                                <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Post Flash News</button>
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
