                           
<div>
<div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body">
                        
                                <div class="aboutus-wrapper">
                                    <h1 class="mt-5">
                                        {{ Session::get('data')['wn_name']}}
                                    </h1>
                                        

                                    <hr>
                                    <img src="{{ Session::get('data')['wn_image']}}" alt="banner" class="img-fluid mb-5" />
                                    <hr>
                                    <p class="font-weight-600 fs-15">
                                    {{ Session::get('data')['created_by']}}
                                        <br>
                                        <br>
                                        {{ Session::get('data')['wn_name']}}
                                        <br>
                                        <br>
                                        <br>
                                        {{ Session::get('data')['wn_description']}}
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
