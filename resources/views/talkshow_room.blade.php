<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <title>Indonesia Marine Exhibition - Main Talkshow Room</title>
  <link href="{{ asset ('assets/css/talkshow_room.css') }}" rel="stylesheet" type="text/css">
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

    <section class="talkshow-room-page">
      <!-- ======= Speaker Section ======= -->
      <section id="talkshow-room-page" class="d-flex general">
        <div class="container"><!-- class="d-flex align-items-center" -->

          <div class="row d-flex justify-content-center my-4">

            <!--
            <div class="col-12">
              <h1 class="blue-title">Speakers</h1>
            </div>
            -->
            
            <div class="col-12 mt-4">
              <div class="content row">
                <!-- <div class="swiper-father"> -->

                @if ($data->count() == 0)
                  <div style="margin-top: 250px;">
                    <div class="content-transparent">
                      <h1>Ups... there are no data available</h1>
                      <h2>Please try again :)</h2>
                    </div>
                  </div>
                @else
                  <!-- we put an arrow into the outside swiper swiper -->
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <i class="talkshow-room-btn-prev fas fa-arrow-left"></i>
                  </div>

                  
                    <div class="swiper-container talkshow-room-swiper col-9 d-flex align-items-center justify-content-stretch">
                      <div class="swiper-wrapper d-flex">

                        <a href="talkshow/1" class="swiper-slide">
                          <div class="row talkshow-room-day-box">
                            <div class="d-flex justify-content-center">
                              <div class="talkshow-room-pic-box">
                                <img src="{{ asset('assets/img/maskot/day_1.png') }}"/>
                              </div>
                            </div>
                          </div>
                          <div class="row talkshow-room-day-text-box d-flex justify-content-start">
                            <div class="talkshow-room-day-which-box">
                              <h3 class="text-start yellow-strong">DAY 1</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-2">
                              <p class="text-center blue-strong">Potrait Of Our Wonderful Indonesia Maritime</p>
                            </div>
                          </div>
                        </a><!-- End Talkshow item -->

                        <a href="talkshow/2" class="swiper-slide">
                          <div class="row talkshow-room-day-box">
                            <div class="d-flex justify-content-center">
                              <div class="talkshow-room-pic-box">
                                <img src="{{ asset('assets/img/maskot/day_2.png') }}"/>
                              </div>
                            </div>
                          </div>
                          <div class="row talkshow-room-day-text-box d-flex justify-content-start">
                            <div class="talkshow-room-day-which-box">
                              <h3 class="text-start yellow-strong">DAY 2</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-2">
                              <p class="text-center blue-strong">Potensi Kekayaan Laut Indonesia sebagai Identitas Bangsa</p>
                            </div>
                          </div>
                        </a><!-- End Talkshow item -->

                      <!--
                      // @foreach($data as $data)
                        <a href="talkshow/{{$data->id}}" class="swiper-slide">
                          <div class="row talkshow-room-day-box">
                            <div class="d-flex justify-content-center">
                              <div class="talkshow-room-pic-box">
                              </div>
                            </div>
                          </div>
                          <div class="row talkshow-room-day-text-box d-flex justify-content-start">
                            <div class="talkshow-room-day-which-box">
                              <h3 class="text-start yellow-strong">{{ $data->title }}</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-2">
                              <p class="text-center blue-strong">{{ $data->theme }}</p>
                            </div>
                          </div>
                        </a><!-- End Talkshow item
                      // @endforeach
                      -->

                      </div>

                      <!-- Swiper buttons -->
                        <!-- <div class="swiper-button-next"></div> -->
                        <!-- <div class="swiper-button-prev"></div> -->
                        <div class="swiper-pagination-talkshow-room" style="visibility: hidden;"></div>
                    </div>
                  
                  <!-- we put an arrow into the outside swiper swiper -->
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <i class="talkshow-room-btn-next fas fa-arrow-right"></i>
                  </div>

                  <!-- </div> -->
                  <!-- <h3>IME</h3> -->
                  <!-- <div class="row d-flex justify-content-center"> -->
                    <!-- <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                      <div class="d-flex justify-content-center">
                        <div class="speaker-pic-box">
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                    </div>

                    <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                      <div class="d-flex justify-content-center">
                        <div class="speaker-pic-box">
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                    </div>

                    <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                      <div class="d-flex justify-content-center">
                        <div class="speaker-pic-box">
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                    </div>

                    <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                      <div class="d-flex justify-content-center">
                        <div class="speaker-pic-box">
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                      <div class="d-flex justify-content-center align-items-start my-2">
                        <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                      </div>
                    </div> -->

                  <!-- </div> -->
                @endif

              </div>
            </div>
          </div>

        </div>
      </section><!-- End Talkshow Section -->

      @include('footer')

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End Section -->

    @include('modals')
</body>

@include('default_footer_paid_page')

</html>
