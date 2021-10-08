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

                    <h1 class="display-4 py-2 text-truncate">Add Video News</h1>
                    <div class="px-2">
                        <form action='/admin/updatevideonews' method="POST" enctype="multipart/form-data" class="justify-content-center">
                            @csrf
                            <strong><u>Enter News Details</u></strong>
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$videodata['id']}}">    
                                <label class="sr-only">News Name</label>
                                <input type="text" name="name" class="form-control"value="{{$videodata['vn_name']}}" placeholder="Enter News Name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">News Type</label>
                                <input type="text" name="news_type" class="form-control"value="{{$videodata['news_type']}}" placeholder="Enter news type here">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">News Link</label>
                                <input type="text" name="videolink" class="form-control" value="{{$videodata['vn_videolink']}}"placeholder="Enter video News Link Here">
                            </div>
                            {{--<strong><u>News Type</u></strong>

                            <div class="form-group">

                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="balcony" >Political
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="outkitchen" value="Outdoor Kitchen">Social
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="cabletv" value="Cable Tv">Sports
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="deck" value="Deck">Educational
                                    </label>
                                </div>
                            </div>--}}
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Video News</button>
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
