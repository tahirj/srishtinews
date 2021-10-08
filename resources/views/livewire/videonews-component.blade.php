<div>
<div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">

                  <div class="thumbnail"> 
                    @foreach($video as $v)
                    <!-- <a href="https://youtube.com">Srishti News </a> -->
                    <iframe  src="{{$v->vn_videolink}}" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen ></iframe>       
                    @endforeach
                    <!-- <iframe  src="https://www.youtube.com/embed/6cA1osaTqBs" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;" 
                     allowfullscreen></iframe> -->

                     <!-- gyroscope; picture-in-picture" -->
                    <!-- <iframe src="https://www.youtube.com/embed/BvpksQRuzY4" title="YouTube video player"
                     frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; "
                      allowfullscreen></iframe> -->
                      
                    
                    <!-- <iframe src="https://www.youtube.com/embed/_eigo42GWd4" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; "
                    allowfullscreen> </iframe> 
                    
                    <iframe src="https://www.youtube.com/embed/tk5BZiGn5Qk" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; "
                    allowfullscreen></iframe> 
                    
                    <iframe src="https://www.youtube.com/embed/Nj3-C3cGM3o" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; "
                    allowfullscreen></iframe>  -->
                    
                  
                  
                  </div> 
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container-scroller ends -->
  </div>
