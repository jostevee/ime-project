<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <link href="{{ asset ('assets/css/talkshow_room.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('menu')

    <section class="talkshow-room-page">
      <!-- ======= Speaker Section ======= -->
      <section id="talkshow-room-page" class="d-flex">
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

                <!-- we put an arrow into the outside swiper swiper -->
                <div class="col-1 d-flex align-items-center justify-content-center">
                  <i class="talkshow-room-btn-prev fas fa-arrow-left"></i>
                </div>

                @if ($data->count() == 0)
                  <h1 style="margin-top: 250px;">Welcome to IME</h1>
                  <h2>Indonesia Marine</h2>

                @else
                  <div class="swiper-container talkshow-room-swiper col-9 d-flex align-items-center justify-content-stretch">
                    <div class="swiper-wrapper d-flex">

                    @foreach($data as $data)
                      <a href="talkshow/{{$data->id}}" class="swiper-slide">
                        <div class="row talkshow-room-day-box">
                          <div class="d-flex justify-content-center">
                            <div class="talkshow-room-pic-box">
                            </div>
                          </div>
                        </div>
                        <div class="row talkshow-room-day-text-box d-flex justify-content-start">
                          <div class="talkshow-room-day-which-box">
                            <h3 class="text-start yellow-strong">{{$data->day_title}}</h3>
                          </div>
                          <div class="d-flex justify-content-center align-items-center my-2">
                            <h5 class="text-center blue-strong">{{$data->theme}}</h5>
                          </div>
                        </div>
                      </a><!-- End Talkshow item -->
                    @endforeach

                    </div>

                    <!-- Swiper buttons -->
                      <!-- <div class="swiper-button-next"></div> -->
                      <!-- <div class="swiper-button-prev"></div> -->
                      <div class="swiper-pagination-talkshow-room" style="visibility: hidden;"></div>
                  </div>
                @endif
                
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

                <!-- </div>   -->
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

@include('default_footer')

</html>
