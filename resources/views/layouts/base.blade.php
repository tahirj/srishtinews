<?php 
use App\Models\Flashnew;
$datas = Flashnew::get();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Srishti News</title>
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{url('./assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
  <link rel="stylesheet" href="{{url('assets/vendors/aos/dist/aos.css/aos.css')}}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- End plugin css for this page -->
  <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />

  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
  <!-- endinject -->

@livewireStyles
</head>

<body>
  <div id="google_translate_element"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'od' }, 'google_translate_element');
    }
  </script>
  <div class="container-scroller">
    <div class="main-panel">
      <!-- partial:partials/_navbar.html -->
      <header id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
              <div class="d-flex justify-content-between align-items-center">

                <a class="top-header-img"><img src="{{url('assets/images/banner.jpeg')}}" alt="" /></a>

              </div>
            </div>
            <div class="navbar-bottom">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/newupdatedlogo.png" alt="" /></a> -->
                </div>
                <div>
                  <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                      <li>
                        <button class="navbar-close">
                          <i class="mdi mdi-close"></i>
                        </button>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="/">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/about">ABOUT US</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/webnews">WEB NEWS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/videonews">VIDEO NEWS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/reporter">REPORTER</a>
                      </li>
                      <!-- <li class="nav-item">
                          <a class="nav-link" href="./politics.html">POLITICS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./travel.html">Travel</a>
                        </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="/contactus">CONTACT US</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="/baseadmin1">Admin DashBoard</a>
                      </li> -->
                    
                      @if(Route::has('login'))
                        <a href="#"></a>
                        @else 
                             <a href="{{Route('login')}}"></a>
                        @endif
                     
                    </ul>
                  </div>
                </div>
                <ul class="social-media">
                  <a href="#">
                    <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
                  </a>
                  <a href="#">
                    <img src="https://img.icons8.com/color/30/000000/youtube--v1.png" />
                  </a>
                  <a href="#">
                    <img src="https://img.icons8.com/color/30/000000/twitter--v1.png" />
                  </a>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- partial -->
      

      
      <div class="flash-news-banner">
        <div class="container">
          <div class="d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <span class="badge badge-dark mr-3">Flash news</span>
                           
              <marquee width="900px" direction="left" height="30px" scrollamount="15">
              @foreach($datas as $i)
              {{$i->f_description}} | 
              @endforeach  
            </marquee>
              
            </div>
            
            <div class="d-flex" id=time style="color: blue;">
              <script>
                // get a new date (locale machine date time)
                var date = new Date();
                // get the date as a string
                var n = date.toDateString();
                // get the time as a string
                var time = date.toLocaleTimeString();

                // find the html element with the id of time
                // set the innerHTML of that element to the date a space the time
                document.getElementById('time').innerHTML = n + ' ' + time;
              </script>

            </div>
          </div>
        </div>
      </div>
      {{$slot}}
      <!-- main-panel ends -->
      <!-- container-scroller ends -->

      <!-- partial:partials/_footer.html -->
      <footer>
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-sm-5">
                <img src="{{url('assets/images/newupdatedlogo.png')}}" class="footer-logo" alt="" />
                <h5 class="font-weight-normal mt-4 mb-5">
                  <!-- Newspaper is your news, entertainment, music fashion website. We
                    provide you with the latest breaking news and videos straight from
                    the entertainment industry. -->
                </h5>
                <ul class="social-media mb-3">
                  <a href="#">
                    <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
                  </a>
                  <a href="#">
                    <img src="https://img.icons8.com/color/30/000000/youtube--v1.png" />
                  </a>
                  <a href="#">
                    <img src="https://img.icons8.com/color/30/000000/twitter--v1.png" />
                  </a>
                </ul>
              </div>
              <!-- <div class="col-sm-4">
                <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="footer-border-bottom pb-2">
                      <div class="row">
                        <div class="col-3">
                          <img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid" />
                        </div>
                        <div class="col-9">
                          <h5 class="font-weight-600">
                            Cotton import from USA to soar was American traders
                            predict
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="footer-border-bottom pb-2 pt-2">
                      <div class="row">
                        <div class="col-3">
                          <img src="assets/images/dashboard/home_2.jpg" alt="thumb" class="img-fluid" />
                        </div>
                        <div class="col-9">
                          <h5 class="font-weight-600">
                            Cotton import from USA to soar was American traders
                            predict
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div>
                      <div class="row">
                        <div class="col-3">
                          <img src="assets/images/dashboard/home_3.jpg" alt="thumb" class="img-fluid" />
                        </div>
                        <div class="col-9">
                          <h5 class="font-weight-600 mb-3">
                            Cotton import from USA to soar was American traders
                            predict
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="col-sm-3">
                <h3 class="font-weight-bold mb-3">Links</h3>
                <div class="footer-border-bottom pb-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <h5 class="mb-0 font-weight-600" >Home</h5> -->
                    <a class="mb-0 font-weight-600" href="/">Home</a>
                    <!-- <div class="count">1</div> -->
                  </div>
                </div>
                <div class="footer-border-bottom pb-2 pt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <h5 class="mb-0 font-weight-600">ଖେଳ</h5> -->
                    <a class="mb-0 font-weight-600" href="/about">About Us</a>
                    <!-- <div class="count">1</div> -->
                  </div>
                </div>
                <div class="footer-border-bottom pb-2 pt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <h5 class="mb-0 font-weight-600">ଜୀବନଚର୍ଯ୍ୟା</h5> -->
                    <a class="mb-0 font-weight-600" href="/webnews">Web News</a>
                    <!-- <div class="count">1</div> -->
                  </div>
                </div>
                <div class="footer-border-bottom pb-2 pt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <h5 class="mb-0 font-weight-600">ନ୍ୟୁଜ</h5> -->
                    <a class="mb-0 font-weight-600" href="/videonews">Video News</a>
                    <!-- <div class="count">1</div> -->
                  </div>
                </div>
                <div class="pt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <h5 class="mb-0 font-weight-600">ପ୍ରତିଭା</h5> -->
                    <a class="mb-0 font-weight-600" href="/reporter">Reporter</a>
                    <!-- <div class="count">1</div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-sm-flex justify-content-between align-items-center">
                  <div class="fs-14 font-weight-600">
                    © 2021 Srishti News
                  </div>
                  <div class="fs-14 font-weight-600">
                    <a href="https://www.techstain.in/" target="_blank" class="text-white">Designed by TechStain</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- partial -->
    </div>
  </div>
  <!-- inject:js -->
  <script src="{{url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{url('assets/vendors/aos/dist/aos.js/aos.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{url('./assets/js/demo.js')}}"></script>
  <!-- <script src="./assets/js/jquery.easeScroll.js"></script> -->
  <!-- End custom js for this page-->
  <!-- Google translator -->
  <script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
@livewireScripts
</body>

</html>