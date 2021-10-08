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

                    <h1 class="display-4 py-2 text-truncate">Add Web News</h1>
                    <div class="px-2">
                        <form action='/admin/updatewebnews' method="POST" enctype="multipart/form-data" class="justify-content-center">
                            @csrf

                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$webdata['id']}}">    
                                <label class="sr-only">News Name</label>
                                <input type="text" name="name" value="{{$webdata['wn_name']}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">News Type</label>
                                <input type="text" name="news_type" value="{{$webdata['wn_type']}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <span>Add Web News Image</span>
                                <label class="sr-only">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>


                                <div class="form-group">

                                <img src="#" height="200" width="200" alt="No image" />
                                </div>


                                {{--<input type="file" name="image[]" class="form-control" placeholder="image">--}}
                                {{-- <button class="btn btn-success" type="button">Add</button> --}}
                            <!-- </div> -->
                             <div class="form-group">
                                <label for="description">Web News Description:</label>
                                <!-- <input type="text"  class="form-control" name="description" value="{{$webdata['wn_description']}}" > -->
                                <textarea class="form-control" name="description" rows="5" id="comment">{{$webdata['wn_description']}}</textarea>

                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Web News</button>
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
