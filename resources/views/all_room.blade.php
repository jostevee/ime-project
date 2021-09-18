<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  @include('default_header')
  <title>Indonesia Marine Exhibition - All Room</title>
</head>

<body>
    @include('menu')
    @php
      $userwriter = -1;
      $userid = 0;
      $useremail = -1;
      $submittedstatus = -1;
      if (Auth::guard('web')->user() != null){
        $userwriter = Auth::guard('web')->user()->paid_status;
        $submittedstatus = Auth::guard('web')->user()->trx_image_submit;
        $userid = Auth::guard('web')->user()->id;
        $useremail = Auth::guard('web')->user()->email;
      } else {
        $userwriter = -1;
      }
      /* $useradmin = Auth::guard('writer')->user(); */
    @endphp

    <section id="island-main" class="main-page-all-room general d-flex py-4">
                  <div class="container">

                  <section id="talkshow-room" class="general island-page d-flex my-4">
                    <div class="container">

                      <div class="row d-flex justify-content-center talkshow-page-move mt-4">
                        <div class="col-12">
                          <h1 class="text-center blue-title">Talkshow Room</h1>
                        </div>

                        <!-- <div class="image"></div> -->
                        <img src="{{ asset ('assets/img/all_general_main_page/talkshow.png') }}" class="col-12 feature_image" alt="">
                        <p class="col-3 btn-general talkshow-btn text-center blue-title" onclick="location.href='talkshow';">GO IN</p>
                        
                      </div>

                    </div>
                  </section>



                  <section id="games-room" class="general island-page d-flex my-4">
                    <div class="container">

                      <div class="row d-flex justify-content-center mt-4">
                        <div class="col-12">
                          <h1 class="text-center blue-title">Games Room</h1>
                        </div>
                        <img src="{{ asset ('assets/img/all_general_main_page/games.png') }}" class="col-12 feature_image" alt="">
                        <p class="col-3 btn-general games-btn text-center blue-title" style="margin: 240px 0px 0px 90px;" onclick="location.href='games';">GO IN</p>

                        <!--
                        <div class="col-12">
                          <img src="{{ asset ('assets/img/all_general_main_page/games.png') }}"class="img-fluid" alt="">
                        </div>
                            -->
                        

                      </div>  

                    </div>
                  </section>
                  
                  

                  <section id="ngo-room" class="general island-page d-flex my-4">
                    <div class="container">

                      <div class="row d-flex justify-content-center mt-4">
                        <div class="col-12">
                          <h1 class="text-center blue-title">NGO Room</h1>
                        </div>
                        <img src="{{ asset ('assets/img/all_general_main_page/ngo.png') }}" class="col-12 feature_image" alt="">
                        <p class="col-3 btn-general text-center blue-title" style="margin: 240px 0px 0px 90px;" onclick="location.href='ngo';">GO IN</p>
                        
                        <!--
                        <div class="col-12">
                          <img src="{{ asset ('assets/img/all_general_main_page/ngo.png') }}"class="img-fluid" alt="">
                        </div>
    -->
                        
                      </div>  

                    </div>
                  </section>
                  

                  
                  <section id="medpart-room" class="general island-page d-flex my-4">
                    <div class="container">

                      <div class="row d-flex justify-content-center mt-4">
                        <div class="col-12">
                          <h1 class="text-center blue-title">Medpart Room</h1>
                        </div>
                        <img src="{{ asset ('assets/img/all_general_main_page/medpart.png') }}" class="col-12 feature_image" alt="">
                        <p class="col-3 btn-general text-center blue-title" style="margin: 240px 0px 0px 90px;" onclick="location.href='medpart';">GO IN</p>
                        
                        <!--
                        <div class="col-12">
                          <img src="{{ asset ('assets/img/all_general_main_page/ngo.png') }}"class="img-fluid" alt="">
                        </div>
    -->
                        

                      </div>  

                    </div>
                  </section>
                  

                  
                  <section id="donation-room" class="general island-page d-flex my-4">
                    <div class="container">

                      <div class="row d-flex justify-content-center mt-4">
                        <div class="col-12">
                          <h1 class="text-center blue-title">Donation Room</h1>
                        </div>
                        <img src="{{ asset ('assets/img/all_general_main_page/donation.png') }}" class="col-12 feature_image" alt="">
                        <p class="col-3 btn-general text-center blue-title" style="margin: 240px 0px 0px 90px;" onclick="location.href='donation';">GO IN</p>

                        <!--
                        <div class="col-12">
                          <img src="{{ asset ('assets/img/all_general_main_page/donation.png') }}"class="img-fluid" alt="">
                        </div>
    -->
                        
                      </div>  

                    </div>
                  </section>
                  

                  
                  <section id="merchandise-room" class="general island-page d-flex my-4">
                    <div class="container">

                      <div class="row d-flex justify-content-center mt-4">
                        <div class="col-12">
                          <h1 class="text-center blue-title">Merchandise Room</h1>
                        </div>
                        <img src="{{ asset ('assets/img/all_general_main_page/merchandise.png') }}" class="col-12 feature_image" alt="">
                        <p class="col-3 btn-general text-center blue-title" style="margin: 240px 0px 0px 90px;" onclick="location.href='merchandise';">GO IN</p>

                        <!--
                        <div class="col-12">
                          <img src="{{ asset ('assets/img/all_general_main_page/merchandise.png') }}"class="img-fluid" alt="">
                        </div>
    -->
                        
                      </div>  

                    </div>
                  </section>

    </div>
    </section>
                  

                  @include('footer')

        <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
      </section><!-- End About Section -->

    @include('modals')
</body>

@include('default_footer_paid_page')

</html>