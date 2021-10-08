<div>
<div class="content-wrapper">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-sm-12 stretch-card grid-margin">
              <div class="position-relative">
                @foreach($banner as $b)  
              <img src="{{$b->b_image}}" alt="banner" class="img-fluid" />
                <div class="banner-content">
                  <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    Global news-
                  </div>
                  
                  <h1 class="mb-0">{{$b->b_name}}</h1>
                  <h1 class="mb-2">
                    {{$b->b_description}}
                  </h1>
                  <div class="fs-12">
                    <span class="mr-2">Date: </span>{{$b->created_at}}
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- <div class="col-xl-4 stretch-card grid-margin">
              <div class="card bg-dark text-white">
                <div class="card-body">
                  <h2>Latest news</h2>

                  <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                    <div class="pr-3">
                      <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                      <div class="fs-12">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </div>
                    </div>
                    <div class="rotate-img">
                      <img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid img-lg" />
                    </div>
                  </div>

                  <div class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between">
                    <div class="pr-3">
                      <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                      <div class="fs-12">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </div>
                    </div>
                    <div class="rotate-img">
                      <img src="assets/images/dashboard/home_2.jpg" alt="thumb" class="img-fluid img-lg" />
                    </div>
                  </div>

                  <div class="d-flex pt-4 align-items-center justify-content-between">
                    <div class="pr-3">
                      <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                      <div class="fs-12">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </div>
                    </div>
                    <div class="rotate-img">
                      <img src="assets/images/dashboard/home_3.jpg" alt="thumb" class="img-fluid img-lg" />
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="row" data-aos="fade-up">
            <!-- <div class="col-lg-3 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2>Category</h2>
                  <ul class="vertical-menu">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Health care</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Media</a></li>
                    <li><a href="#">Administration</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Game</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Kids</a></li>
                  </ul>
                </div>
              </div>
            </div> -->
            <div class="col-sm-12 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  @foreach($web as $w)
                  <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="rotate-img">
                        <a href="/singlenews/{{$w->id}}"><img src="{{$w->wn_image}}" alt="banner"
                            class="img-fluid" /> </a>
                            
                      </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                      <h2 class="font-weight-600 mb-2">
                        <a href="/singlenews/{{$w->id}}">{{$w->wn_name}}</a>
                      </h2>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2"> </span>{{$w->created_at}}
                      </p>
                      <p class="fs-15">
                        {{$w->wn_description}}
                      </p>
                    </div>
                  </div>
                  @endforeach
                  <!-- <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="rotate-img">
                        <a href="singlenews2.html"> <img src="{{url('./assets/images/news/luni.jpeg')}}" alt="banner"
                            class="img-fluid" /></a>
                      </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                      <h2 class="font-weight-600 mb-2">
                        <a href="singlenews2.html">ବାପା ଆଗରେ କୁନି ଝିଅର ମୃତ । </a>
                      </h2>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2"> </span>JUNE 29, 2021
                      </p>
                      <p class="fs-15">
                        କୁନି ଝିଅର ଭବିଷ୍ୟତ ଆରମ୍ଭରେ ବୈରି ସାଜିଲା ଦଇବ। ସଡ଼କ ଦୁର୍ଘଟଣାରେ ବାପା ଆଗରେ କୁନି ଝିଅ ଚାଲିଗଲା ଆରପରିକୁ।
                        ଏଭଳି ହୃଦୟ ବିଦାରକ ଘଟଣା ରାୟଗଡ଼ା ସହର ସ୍ଥିତ ମା ମଝିଘରିଆଣି ମନ୍ଦିର ବ୍ରିଜ ନିକଟରେ ଦେଖିବାକୁ ମିଳିଛି। ସଡକ
                        ଦୁର୍ଘଟଣାରେ ଜଣଙ୍କ ମୂର୍ତ୍ୟୁ ଘଟିଥିବାବେଳେ ୩ଜଣ ଗୁରୁତର ଆହତ ହୋଇଛନ୍ତି।
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="rotate-img">
                        <a href="singlenews3.html"><img src="{{url('./assets/images/news/pokhari.jpeg')}}" alt="banner"
                            class="img-fluid" /> </a>
                      </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                      <h2 class="font-weight-600 mb-2">
                        <a href="singlenews3.html"> ପୋଖରୀରେ ବୁଡ଼ି ନାବାଳିକା ମୃତ୍ୟୁ </a>
                      </h2>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2"></span>JUNE 29, 2021
                      </p>
                      <p class="fs-15">
                        ଜଗନ୍ନାଥ ପ୍ରସାଦ :୨୯/୦୬ ଜଗନ୍ନାଥ ପ୍ରସାଦ ଥାନା ଅନ୍ତର୍ଗତ ଅଂlକୁଲକୁମ୍ପା ଗ୍ରାମ ର ଏକ 10 ବର୍ଷ ର ନାବାଳିକା
                        ପୋଖରୀରେ ବୁଡିଯାଇଥିବାର ଦେଖି କିଛି ଗ୍ରାମବାସୀ ଉଦ୍ଧାର କରିଥିଲେ l ପରେ ସେହି ଜାଗାରେ ବାପା ଜଳନ୍ଧର ଯାନୀ ଓ
                        ମାଆ ତିଳୋତ୍ତମl ଜାନି ସେଠାରେ ପହଂଚି 108 ଆମ୍ବୁଲାନ୍ସ ଦ୍ବାରା ନିକଟସ୍ଥ ଜଗନ୍ନାଥ ପ୍ରସାଦ ଗୋଷ୍ଠୀ ସ୍ୱାସ୍ଥ୍ୟ
                        କେନ୍ଦ୍ର ଆଣିଥିଲେ l
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="rotate-img">
                        <a href="singlenews4.html"> <img src="{{url('./assets/images/news/boma.jpeg')}}" alt="banner"
                            class="img-fluid" /> </a>
                      </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                      <h2 class="font-weight-600 mb-2">
                        <a href="singlenews4.html">ବଡ଼ ଧରଣର ଡ଼କାୟତ ଯୋଜନା ଫସରଫାଟିଲା ,୪ବୋମା ଓ ମାରଣାସ୍ତ୍ର ସହ ୫ଗିରଫ। </a>
                      </h2>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2"> </span>JUNE 29, 2021
                      </p>
                      <p class="fs-15">
                        ବ୍ରହ୍ମପୁର,୨୯/୦୬: ଗଞ୍ଜାମ ଜିଲ୍ଲା ଦିଗପହଣ୍ଡି ଅଞ୍ଚଳରେ ଅସାମାଜିକ ଯୁବକଙ୍କ ଦ୍ବାରା ବିଭିନ୍ନ ସମୟରେ ଚୋରି ,
                        ଡକାୟତି , ରାହାଜାନି କରି ଆସୁଥିବା ଜଣାପଡିଛି । ଏହିଭଳି ରବିବାର ବିଳମ୍ବିତ ରାତିରେ ଦିଗପହଣ୍ଡି ଥାନା କାଶି
                        ବିଶ୍ୱନାଥ ମନ୍ଦିର ଯିବା ରାସ୍ତାର କମଳାପୁର ଛକ ନିକଟରେ ଏକ ବଡ଼ ଧରଣର ଡକାୟତି ଗ୍ଯାଙ୍ଗକୁ ପୋଲିସ ଧରିବାରେ ସଫଳ
                        ହୋଇଥିବା ବେଳେ ୫ ଜଣକୁ ଗିରଫ ମଧ୍ୟ କରିବାରେ ସକ୍ଷମ ହୋଇପାରିଛି ।
                      </p>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col-sm-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="card-title">
                        Video
                      </div>
                      
                      <div class="row">
                        
                        <div class="col-sm-6 grid-margin">
                          <div class="position-relative">
                          @foreach($video as $v)
                            <iframe src="{{$v->vn_videolink}}" title="YouTube video player"
                              frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                            <!-- <div class="rotate-img">
                              <img src="assets/images/dashboard/home_7.jpg" alt="thumb" class="img-fluid" />
                            </div>
                            <div class="badge-positioned w-90">
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">Lifestyle</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div> -->
                            @endforeach
                          </div>
                        </div>

                        <!-- <div class="col-sm-6 grid-margin">
                          <div class="position-relative">
                            <iframe src="https://www.youtube.com/embed/6cA1osaTqBs" title="YouTube video player"
                              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;"
                              allowfullscreen></iframe> -->

                            <!-- <div class="rotate-img">
                              <img src="assets/images/dashboard/home_8.jpg" alt="thumb" class="img-fluid" />
                            </div>
                            <div class="badge-positioned w-90">
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">National News</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div> -->
                          <!-- </div>
                        </div>-->
                      </div>
                      
                      <!-- <div class="row">
                        <div class="col-sm-6 grid-margin">
                          <div class="position-relative">
                            <iframe src="https://www.youtube.com/embed/BvpksQRuzY4" title="YouTube video player"
                              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; "
                              allowfullscreen></iframe>--> 
                            <!-- <div class="rotate-img">
                              <img src="assets/images/dashboard/home_9.jpg" alt="thumb" class="img-fluid" />
                            </div>
                            <div class="badge-positioned w-90">
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">Lifestyle</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div> -->
                          <!-- </div>
                        </div>

                        <div class="col-sm-6 grid-margin">
                          <div class="position-relative">
                            <iframe src="https://www.youtube.com/embed/_eigo42GWd4" title="YouTube video player"
                              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; "
                              allowfullscreen> </iframe> -->
                            <!-- <div class="rotate-img">
                              <img src="assets/images/dashboard/home_10.jpg" alt="thumb" class="img-fluid" />
                            </div>
                            <div class="badge-positioned w-90">
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="badge badge-danger font-weight-bold">National News</span>
                                <div class="video-icon">
                                  <i class="mdi mdi-play"></i>
                                </div>
                              </div>
                            </div> -->
                          <!-- </div>
                        </div> 
                      </div>
                    </div>-->
                   
                    <!-- <div class="col-lg-4">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="card-title">
                          Latest Video
                        </div>
                        <p class="mb-3">See all</p>
                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/home_11.jpg" alt="thumb" class="img-fluid" />
                          </div>
                        </div>
                        <h3 class="font-weight-600 mb-0">
                          Apple Introduces Apple Watch
                        </h3>
                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/home_12.jpg" alt="thumb" class="img-fluid" />
                          </div>
                        </div>
                        <h3 class="font-weight-600 mb-0">
                          SEO Strategy & Google Search
                        </h3>
                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/home_13.jpg" alt="thumb" class="img-fluid" />
                          </div>
                        </div>
                        <h3 class="font-weight-600 mb-0">
                          Cycling benefit & disadvantag
                        </h3>
                      </div>
                      <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/home_14.jpg" alt="thumb" class="img-fluid" />
                          </div>
                        </div>
                        <h3 class="font-weight-600">
                          The Major Health Benefits of
                        </h3>
                      </div>
                      <div class="d-flex justify-content-between align-items-center pt-3">
                        <div class="div-w-80 mr-3">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/home_15.jpg" alt="thumb" class="img-fluid" />
                          </div>
                        </div>
                        <h3 class="font-weight-600 mb-0">
                          Powerful Moments of Peace
                        </h3>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row" data-aos="fade-up">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="card-title">
                        Sport light
                      </div>
                      <div class="row">
                        <div class="col-xl-6 col-lg-8 col-sm-6">
                          <div class="rotate-img">
                            <img src="assets/images/dashboard/home_16.jpg" alt="thumb" class="img-fluid" />
                          </div>
                          <h2 class="mt-3 text-primary mb-2">
                            Newsrooms exercise..
                          </h2>
                          <p class="fs-13 mb-1 text-muted">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                          <p class="my-3 fs-15">
                            Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer
                            took
                          </p>
                          <a href="#" class="font-weight-600 fs-16 text-dark">Read more</a>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-sm-6">
                          <div class="border-bottom pb-3 mb-3">
                            <h3 class="font-weight-600 mb-0">
                              Social distancing is ..
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="mb-0">
                              Lorem Ipsum has been the industry's
                            </p>
                          </div>
                          <div class="border-bottom pb-3 mb-3">
                            <h3 class="font-weight-600 mb-0">
                              Panic buying is forcing..
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="mb-0">
                              Lorem Ipsum has been the industry's
                            </p>
                          </div>
                          <div class="border-bottom pb-3 mb-3">
                            <h3 class="font-weight-600 mb-0">
                              Businesses ask hundreds..
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="mb-0">
                              Lorem Ipsum has been the industry's
                            </p>
                          </div>
                          <div>
                            <h3 class="font-weight-600 mb-0">
                              Tesla's California factory..
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="mb-0">
                              Lorem Ipsum has been the industry's
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="card-title">
                            Sport light
                          </div>
                          <div class="border-bottom pb-3">
                            <div class="rotate-img">
                              <img src="assets/images/dashboard/home_17.jpg" alt="thumb" class="img-fluid" />
                            </div>
                            <p class="fs-16 font-weight-600 mb-0 mt-3">
                              Kaine: Trump Jr. may have
                            </p>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                          </div>
                          <div class="pt-3 pb-3">
                            <div class="rotate-img">
                              <img src="assets/images/dashboard/home_18.jpg" alt="thumb" class="img-fluid" />
                            </div>
                            <p class="fs-16 font-weight-600 mb-0 mt-3">
                              Kaine: Trump Jr. may have
                            </p>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card-title">
                            Celebrity news
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="border-bottom pb-3">
                                <div class="row">
                                  <div class="col-sm-5 pr-2">
                                    <div class="rotate-img">
                                      <img src="assets/images/dashboard/home_19.jpg" alt="thumb"
                                        class="img-fluid w-100" />
                                    </div>
                                  </div>
                                  <div class="col-sm-7 pl-2">
                                    <p class="fs-16 font-weight-600 mb-0">
                                      Online shopping ..
                                    </p>
                                    <p class="fs-13 text-muted mb-0">
                                      <span class="mr-2">Photo </span>10
                                      Minutes ago
                                    </p>
                                    <p class="mb-0 fs-13">
                                      Lorem Ipsum has been
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="border-bottom pb-3 pt-3">
                                <div class="row">
                                  <div class="col-sm-5 pr-2">
                                    <div class="rotate-img">
                                      <img src="assets/images/dashboard/home_20.jpg" alt="thumb"
                                        class="img-fluid w-100" />
                                    </div>
                                  </div>
                                  <div class="col-sm-7 pl-2">
                                    <p class="fs-16 font-weight-600 mb-0">
                                      Online shopping ..
                                    </p>
                                    <p class="fs-13 text-muted mb-0">
                                      <span class="mr-2">Photo </span>10
                                      Minutes ago
                                    </p>
                                    <p class="mb-0 fs-13">
                                      Lorem Ipsum has been
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="border-bottom pb-3 pt-3">
                                <div class="row">
                                  <div class="col-sm-5 pr-2">
                                    <div class="rotate-img">
                                      <img src="assets/images/dashboard/home_21.jpg" alt="thumb"
                                        class="img-fluid w-100" />
                                    </div>
                                  </div>
                                  <div class="col-sm-7 pl-2">
                                    <p class="fs-16 font-weight-600 mb-0">
                                      Online shopping ..
                                    </p>
                                    <p class="fs-13 text-muted mb-0">
                                      <span class="mr-2">Photo </span>10
                                      Minutes ago
                                    </p>
                                    <p class="mb-0 fs-13">
                                      Lorem Ipsum has been
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="pt-3">
                                <div class="row">
                                  <div class="col-sm-5 pr-2">
                                    <div class="rotate-img">
                                      <img src="assets/images/dashboard/home_22.jpg" alt="thumb"
                                        class="img-fluid w-100" />
                                    </div>
                                  </div>
                                  <div class="col-sm-7 pl-2">
                                    <p class="fs-16 font-weight-600 mb-0">
                                      Online shopping ..
                                    </p>
                                    <p class="fs-13 text-muted mb-0">
                                      <span class="mr-2">Photo </span>10
                                      Minutes ago
                                    </p>
                                    <p class="mb-0 fs-13">
                                      Lorem Ipsum has been
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- main-panel ends -->
      <!-- container-scroller ends -->
</div>