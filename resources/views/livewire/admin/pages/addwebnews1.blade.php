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
                        <form action='/admin/postwebnews' method="POST" enctype="multipart/form-data" class="justify-content-center">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only">News Name</label>
                                <input type="text" name="name" class="form-control" placeholder="News Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">News Type</label>
                                <input type="text" name="news_type" class="form-control" placeholder="News Type">

                                {{--<div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="political" value="Political">Political
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="Social" value="Social">Social
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="business" value="Business">Business
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="educational" value="Education">Educational
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="sports" value="Sports">Sports
                                    </label>
                                </div>--}}
                            </div>
                            <div class="form-group">
                                <span>Add Web News Image</span>
                                <label class="sr-only">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                {{--<input type="file" name="image[]" class="form-control" placeholder="image">--}}
                                {{-- <button class="btn btn-success" type="button">Add</button> --}}
                            </div>
                            {{-- <div class="form-group">
                                <span>ADD Video</span>
                                <label class="sr-only">Property video</label>
                                <input type="file" name="video" class="form-control" placeholder="Enter Property video">
                            </div> --}}
                            {{-- <div class="form-group">
                                <label class="sr-only">Property Agent Id</label>
                                <input type="text" name="agent_id" class="form-control" placeholder="Enter Agent ID">
                            </div> --}}
                             <div class="form-group">
                                <label for="description">Web News Description:</label>
                                <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Post Web News</button>
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
