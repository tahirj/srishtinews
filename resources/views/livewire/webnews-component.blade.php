<div>
<div class="content-wrapper">
        <div class="container">
          <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="font-weight-600 mb-4">
                      WEB NEWS
                    </h1>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                    @foreach($web as $w)
                      <div class="col-sm-4 grid-margin">
                        <div class="rotate-img">
                          <!-- $id="{{$w->id}}"; -->
                          <!-- <input type="hidden" name="id" value="{{$w['id']}}"> -->
                          <a href="/singlenews/{{$w->id}}"><img src="{{$w->wn_image}}" alt="Webnews Image"
                              class="img-fluid" /> </a>
                        </div>
                      </div>
                      <div class="col-sm-8 grid-margin">
                        <h2 class="font-weight-600 mb-2">
                          <a href="/singlenews/{{$w->id}}">{{$w->wn_name}}।</a>
                          <!-- {id={{$w->id}}} -->
                        </h2>
                        <p class="fs-13 text-muted mb-0">
                          <span class="mr-2"> </span>{{$w->created_at}}
                        </p>
                        <p class="fs-15">
                          {{$w->wn_description}}
                        </p>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
      <!-- container-scroller ends -->
</div>
