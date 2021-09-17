<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  @include('default_header')
  <title>Indonesia Marine Exhibition - Home</title>
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

    <a href="#about" class="to-bottom d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></a>
    
    <!-- ======= intro-page Section ======= -->
    <section id="intro" class="intro-page d-flex">
      <div class="container-fluid d-flex align-items-center justify-content-center">
          <div class="row"> <!-- h-100 -->
            <div class="col-12 d-flex align-items-center justify-content-center">
              @if (session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
              @endif
              @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
            </div>
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
              <img src="{{ asset('assets/img/intro_page/ime_logo_transparent_new.png') }}"/>
            </div>
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
              <h4 style="color: #fff;" class="text-center">" PENTINGNYA MENJAGA KERAGAMAN DAN IDENTITAS LAUT INDONESIA "</h4>
            </div>
            @if ($userwriter == -1)
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <a class="btn-signin" data-bs-toggle="modal" data-bs-target="#signinModal"><h4 style="font-size: 30px;">LOG IN</h4></a>
              </div>
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <h6 style="color: #1C3B51;">OR</h6>
              </div>
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <a class="btn-signup" data-bs-toggle="modal" data-bs-target="#signupModal"><h4 style="font-size: 30px;">SIGN UP</h4></a>
              </div>
            @else
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
              @csrf
                <div class="col-lg-12 d-flex align-items-center justify-content-center">
                  <a class="btn-signin" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                    <h4 style="font-size: 30px;">LOG OUT</h4>
                  </a>
                </div>
              </form>
            @endif

            <!--
            <div class="col-lg-12 d-flex align-items-center justify-content-center ">
              <a href="#about" class="btn-general">Sign Up</a>
            </div> -->

          </div>
      </div>
      <!-- <img src="{{ asset ('assets/img/intro-page.png') }}"/> -->
    </section><!-- End intro-page Section -->
    

    
      <section class="main-page">
        <!-- ======= Clouds Section ======= -->
        <div class="row bg-move-1 d-flex justify-content-center">
          <img id="cloud1" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
          <img id="cloud3" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
        </div>
        <div class="row bg-move-2 d-flex justify-content-center">
          <img id="cloud2" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
          <img id="cloud4" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
        </div>
        
        <!-- Old version Cloud Section -->
        <!--
        <div id="frame">
          <div id="slider">
            <img class="cloud" id="cloud1" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
            <img class="cloud" id="cloud2" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
          </div>
        </div> -->

        <!-- ======= About Section ======= -->
        <div id="about" class="general-div-section about-page d-flex my-4">
          <div class="container d-flex align-items-center">

            <div class="row d-flex justify-content-center mt-4">
              <div class="col-12">
                <h1 class="blue-title">About</h1>
              </div>
              <div class="col-lg-9 mt-4">
                <p class="blue-strong">
                Indonesia Marine Exhibition (IME) merupakan kegiatan pameran daring kelautan 
                yang pertama dengan platform berupa website. Kegiatan ini memiliki tema utama 
                “Pentingnya Menjaga Keragaman dan Identitas Laut Indonesia” yang pelaksanaanya 
                dilakukan selama 2 hari, dimana pengunjung dapat berinteraksi dalam pelaksanaan 
                kegiatannya, sehingga IME dapat menjadi suatu terobosan baru bagi mahasiswa kelautan, 
                non-kelautan, lembaga pemerintahan, non-pemerintahan, dan masyarakat untuk lebih mengenal Kelautan Indonesia.
                </p>
              </div>
              <div class="col-12 mt-4">
                <div class="content">
                  <!-- <h3>IME</h3> -->
                  <div class="row d-flex justify-content-stretch">

                    <div class="row col-12 col-lg-4 col-md-4 about-people-box d-flex justify-content-center">
                      <div class="col-12 d-flex justify-content-center">
                        <a href=""
                          data-bs-toggle="modal"
                          data-name="Nadya Cakasana, S.Kel., M.Si"
                          data-info="Pembina HIMITEKA"
                          data-vid="assets/vid/sambutan_pembina.mp4"
                          data-bs-target="#aboutVideoModal"
                          class="about-pic-box mb-2">
                          <!-- <a href="#" class="glightbox play-btn mb-4"> -->
                          <img src="{{ asset ('assets/img/about/Nadya_About.png') }}" class="video-box"/>
                        </a>
                      </div>
                      <div class="col-12 d-flex justify-content-center my-2">
                        <h5 class="text-center blue-title">PEMBINA HIMITEKA</h5>
                      </div>
                      <div class="col-12 d-flex justify-content-center">
                        <div class="name-box">
                          <p class="text-center yellow-regular" style="font-size: 16px;">Nadya Cakasana, S.Kel., M.Si</p>
                        </div>
                      </div>
                    </div>

                    <div class="row col-12 col-lg-4 col-md-4 about-people-box d-flex justify-content-center">
                      <div class="col-lg-12 d-flex justify-content-center">
                        <a href=""
                          data-bs-toggle="modal"
                          data-name="Jetli Alexandri Lasut"
                          data-info="Ketua HIMITEKA"
                          data-vid="assets/vid/sambutan_kahim.mp4"
                          data-bs-target="#aboutVideoModal"
                          class="about-pic-box mb-2">
                          <!-- <a href="#" class="glightbox play-btn mb-4"> -->
                          <img src="{{ asset ('assets/img/about/Humas_Jetli.png') }}" class="video-box"/>
                        </a>
                      </div>
                      <div class="col-lg-12 d-flex justify-content-center my-2">
                        <h5 class="text-center blue-title">KETUA HIMITEKA</h5>
                      </div>
                      <div class="col-lg-12 d-flex justify-content-center">
                        <div class="name-box">
                          <p class="text-center yellow-regular" style="font-size: 16px;">Jetli Alexandri Lasut</p>
                        </div>
                      </div>
                    </div>

                    <div class="row col-12 col-lg-4 col-md-4 about-people-box d-flex justify-content-center">
                      <div class="col-lg-12 d-flex justify-content-center">
                        <a href=""
                          data-bs-toggle="modal"
                          data-name="Maulidya Qutrothunnada"
                          data-info="Ketua IME 2021"
                          data-vid="assets/vid/sambutan_ketua_pelaksana.mp4"
                          data-bs-target="#aboutVideoModal"
                          class="about-pic-box mb-2">
                          <!-- <a href="#" class="glightbox play-btn mb-4"> -->
                          <img src="{{ asset ('assets/img/about/Maul_About.png') }}" class="video-box"/>
                        </a>
                      </div>
                      <div class="col-lg-12 d-flex justify-content-center my-2">
                        <h5 class="text-center blue-title">KETUA IME 2021</h5>
                      </div>
                      <div class="col-lg-12 d-flex justify-content-center">
                        <div class="name-box">
                          <p class="text-center yellow-regular" style="font-size: 16px;">Maulidya Qutrothunnada</p>
                        </div>
                      </div>
                    </div>

                  </div>  
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- ======= Clouds Section ======= -->      
        <!-- Old version Cloud Section -->
        <!--
        <div id="frame">
          <div id="slider">
            <img class="cloud" id="cloud1" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
            <img class="cloud" id="cloud2" src="{{ asset ('assets/img/all_general_main_page/cloud.png') }}"/>
          </div>
        </div> -->

        <!-- ======= Speaker Section ======= -->
        <section id="speaker" class="general speaker-page d-flex my-4">
          <div class="container"><!-- class="d-flex align-items-center" -->

            <div class="row d-flex justify-content-center mt-4">
              <div class="col-12">
                <h1 class="blue-title">Speakers</h1>
              </div>
              <div class="col-12 mt-4">
                <div class="content row">
                  <!-- <div class="swiper-father"> -->

                  <!-- we put an arrow into the outside swiper swiper -->
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <i class="speaker-btn-prev fas fa-arrow-left"></i>
                  </div>

                  <div class="col-10 swiper-container speaker-swiper col-9 d-flex align-items-center justify-content-stretch">
                    <div class="swiper-wrapper d-flex">

                      @foreach($data_speaker as $data)
                        <div class="swiper-slide">
                          <div class="row speaker-people-box">
                            <div class="d-flex justify-content-center">
                              <div class="speaker-pic-box">
                                <img src="/assets/img/talkshow_speaker_list/{{ $data->image }}" />
                              </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-start my-2">
                              <p class="text-center blue-regular">{{ $data->name }}</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-start my-2">
                              <p class="text-center blue-regular">{{ $data->organization }}</p>
                            </div>
                          </div>
                        </div><!-- End speaker item -->
                      @endforeach
                      

                      <!--
                      <div class="swiper-slide">
                        <div class="row speaker-people-box">
                          <div class="d-flex justify-content-center">
                            <div class="speaker-pic-box">
                            </div>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                          <div class="d-flex justify-content-center align-items-start my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                        </div>
                      </div><!-- End speaker item -->

                      <!--
                      <div class="swiper-slide">
                        <div class="row speaker-people-box">
                          <div class="d-flex justify-content-center">
                            <div class="speaker-pic-box">
                            </div>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                        </div>
                      </div><!-- End speaker item -->

                      <!--
                      <div class="swiper-slide">
                        <div class="row speaker-people-box">
                          <div class="d-flex justify-content-center">
                            <div class="speaker-pic-box">
                            </div>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                        </div>
                      </div><!-- End speaker item -->

                      <!--
                      <div class="swiper-slide">
                        <div class="row speaker-people-box">
                          <div class="d-flex justify-content-center">
                            <div class="speaker-pic-box">
                            </div>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                        </div>
                      </div><!-- End speaker item -->

                      <!--
                      <div class="swiper-slide">
                        <div class="row speaker-people-box">
                          <div class="d-flex justify-content-center">
                            <div class="speaker-pic-box">
                            </div>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                        </div>
                      </div><!-- End speaker item -->

                      <!--
                      <div class="swiper-slide">
                        <div class="row speaker-people-box">
                          <div class="d-flex justify-content-center">
                            <div class="speaker-pic-box">
                            </div>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                          <div class="d-flex justify-content-center my-2">
                            <p class="text-center blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                          </div>
                        </div>
                      </div><!-- End speaker item -->

                    </div>

                    <!-- Swiper buttons -->
                    <!-- <div class="swiper-button-next"></div> -->
                    <!-- <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination-speaker" style="visibility: hidden;"></div>
                  </div>
                  
                  <!-- we put an arrow into the outside swiper swiper -->
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <i class="speaker-btn-next fas fa-arrow-right"></i>
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
        </section><!-- End Speaker Section -->

        <!-- ======= Schedule Section ======= -->
        <section id="schedule" class="general schedule-page d-flex my-4">
          <div class="container"><!-- class="d-flex align-items-center" -->

            <div class="row d-flex justify-content-center mt-4">
              <div class="col-12">
                <h1 class="blue-title">Schedule</h1>
              </div>
              <div class="col-lg-10 mt-4">
                <div class="content d-flex justify-content-center">
                  <!-- <div class="swiper-father"> -->

                  <!-- we put an arrow into the outside swiper swiper -->
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <i class="schedule-btn-prev fas fa-arrow-left"></i>
                  </div>

                  <div class="col-9 swiper-container schedule-swiper col-9 d-flex align-items-center justify-content-center">
                    <div class="swiper-wrapper">

                    <div class="swiper-slide d-flex align-items-center justify-content-center">
                      <div class="col-12 row schedule-box">
                        <div class="schedule-day d-flex justify-content-center py-3">
                          <h3 class="text-center white-strong">DAY 1</h3>
                        </div>

                        <div class="col-12 row schedule-content-day">
                          <!-- Talkshow -->
                            <div class="schedule-day d-flex justify-content-center mt-3 py-3">
                              <h3 class="text-center yellow-regular">Talkshow</h3>
                            </div>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              08.30 - 09.45
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              SESI 1: Andreas A. Hutahaean Ph.D.
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              09.55 - 11.15
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              SESI 2: Annisa Dian Ndari
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              11.25 - 12.45
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              SESI 3: Dwi Ariyoga Gautama
                            </h4>


                          <!-- NGO and Media Partner -->
                            <div class="schedule-day d-flex justify-content-center mt-3 py-3">
                              <h3 class="text-center yellow-regular">NGO and Media Partner</h3>
                            </div>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              08.15 - 09.00
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              HIMAOSE Undip
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              08.30 - 09.15
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              SAWFISH
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              09.15 - 10.00
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              AtSea
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              09.30 - 10.15
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              HIMAIKA Unpad
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              10.15 - 11.00
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              FDC IPB
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              10.30 - 11.15
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              HIMAKUA IPB
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              11.15 - 12.00
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              HIMITEKA
                            </h4>


                          <!-- Games -->
                            <div class="schedule-day d-flex justify-content-center mt-3 py-3">
                              <h3 class="text-center yellow-regular">Games</h3>
                            </div>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              12.50 - 12.55
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              Gartic.io
                            </h4>

                            <!-- Content(s) -->
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                              13.00 - 13.10
                            </h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                              Quizziz
                            </h4>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide d-flex align-items-center justify-content-center">
                      <div class="col-12 row schedule-box">
                        <div class="schedule-day d-flex justify-content-center py-3">
                          <h3 class="text-center white-strong">DAY 2</h3>
                        </div>

                        <div class="col-12 row schedule-content-day">

                        <!-- Talkshow -->
                          <div class="schedule-day d-flex justify-content-center mt-3 py-3">
                            <h3 class="text-center yellow-regular">Talkshow</h3>
                          </div>
                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            08.30 - 09.45
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            SESI 1: M. Erdi Lazuardi
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            09.55 - 11.15
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            SESI 2: Dr. Rahmat Irfansyah, M.Si
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            11.25 - 12.45
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            SESI 3: Aaron Matthew - Agnes Felicia Gesi Romauli
                          </h4>


                        <!-- NGO and Media Partner -->
                          <div class="schedule-day d-flex justify-content-center mt-3 py-3">
                            <h3 class="text-center yellow-regular">NGO and Media Partner</h3>
                          </div>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            08.15 - 09.00
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            HIMAOSE Undip
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            08.30 - 09.15
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            AtSea
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            09.15 - 10.00
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            HIMAIKA Unpad
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            09.30 - 10.15
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            FDC IPB
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            10.15 - 11.00
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            HIMAKUA IPB
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            10.30 - 11.15
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            HIMITEKA
                          </h4>


                        <!-- Games -->
                          <div class="schedule-day d-flex justify-content-center mt-3 py-3">
                            <h3 class="text-center yellow-regular">Games</h3>
                          </div>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            12.50 - 12.55
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            Gartic.io
                          </h4>

                          <!-- Content(s) -->
                          <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                            13.00 - 13.10
                          </h4>
                          <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                            Quizziz
                          </h4>
                      
                      </div>
                    </div>

                      <!--
                      // @foreach($data_day as $data_day)
                        <!-- Day item --> 
                        <!--
                        <div class="swiper-slide d-flex align-items-center justify-content-center">
                          <div class="col-11 row schedule-box">
                            <div class="schedule-day d-flex justify-content-center py-3">
                              <h3 class="text-center white-strong">{{ $data_day->title }}</h3>
                            </div>

                            // @forelse($data_detail as $data_per_detail)
                              // @if ($data_per_detail->id_day == $data_day->id)
                                <!-- Content(s)
                                <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">
                                  {{ $data_per_detail->from_time }}
                                </h4>
                                <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">
                                  SESI 1: Nama Pembicara
                                </h4>
                              //@endif
                            //@empty
                              <h4 class="col-12 schedule-desc d-flex justify-content-center py-3 text-center blue-regular">
                                Please add activity to this day, thank you!
                              </h4>
                            //@endforelse

                            <!--
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">09.00</h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">SESI 2: Nama Pembicara</h4>
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">10.00</h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">SESI 3: Nama Pembicara</h4>
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">11.00</h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">SESI 4: Nama Pembicara</h4>
                            <h4 class="col-4 schedule-time d-flex justify-content-center py-3 text-center white-regular">12.00</h4>
                            <h4 class="col-8 schedule-desc d-flex justify-content-start py-3 blue-regular">SESI 5: Nama Pembicara</h4>
                            
                          </div>
                        </div><!-- End day item
                      // @endforeach -->

                    </div>
                  </div>

                  <!-- Swiper buttons -->
                  <!-- <div class="swiper-button-next"></div> -->
                  <!-- <div class="swiper-button-prev"></div> -->
                  <div class="swiper-pagination-schedule" style="visibility: hidden;"></div>
                </div>
                  
                <!-- we put an arrow into the outside swiper swiper -->
                <div class="col-1 d-flex align-items-center justify-content-center">
                  <i class="schedule-btn-next fas fa-arrow-right"></i>
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
        </section><!-- End Schedule Section -->

        @if ($userwriter == 1)
          <!-- ======= Island Main Section ======= -->
          <section id="island-main" class="general island-main-page d-flex my-4">
            <div class="container">

              <div class="row justify-content-center mt-4">
                <div class="col-12">
                  <h1 class="blue-title">Main Room</h1>
                </div>

                <div class="col-lg-10 mt-4">
                  <div id="container">
                    <div id="box"></div>
                    </div>
                </div>
              </div>

              <!--
              <section id="talkshow-room">
              </section>
              <section id="games-room">
              </section>
              <section id="ngo-room">
              </section>
              <section id="medpart-room">
              </section>
              <section id="donation-room">
              </section>
              <section id="merchandise-room">
              </section>
            -->


            <!--
              <div class="row d-flex justify-content-center mt-4">
                <div class="col-12">
                  <h1 class="blue-title">Main Room</h1>
                </div>
                <div class="col-lg-10 mt-4">
                  <div class="content row d-flex justify-content-stretch">
                    <div class="col-12 d-flex justify-content-stretch">
                      <p class="btn-general text-center blue-strong" style="font-size: 20px;" onclick="location.href='talkshow';">Talkshow Room</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <p class="btn-general text-center blue-strong" style="font-size: 20px;" onclick="location.href='ngo';">NGO Room</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <p class="btn-general text-center blue-strong" style="font-size: 20px;" onclick="location.href='medpart';">Medpart Room</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <p class="btn-general text-center blue-strong" style="font-size: 20px;" onclick="location.href='donation';">Donation Room</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <p class="btn-general text-center blue-strong" style="font-size: 20px;" onclick="location.href='merchandise';">Merchandise Room</p>
                    </div>
                  </div>
                </div>
              </div>
            -->

            </div>
          </section><!-- End Island Main Section -->

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
        @endif

          

        @include('footer')

        <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
      </section><!-- End About Section -->

    @include('modals')
    @include('modal_about_video')
     

  <!-- <main id="main"> -->

    <!-- ======= Why Us Section =======
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 align-items-stretch">
            <div class="content">
              <h3>Why Choose Indonesia Marine Exhibition?</h3>
              <p>
                We're proven to have a good track record in placing qualified talents to numerous kinds of industries. Preserving our clients’ trust thus able to
                build a long-lasting relationship with them and value teamwork the most when it comes to delivering our services. Our works are the harmony
                of youthful, energetic, and experienced professionals. We offer our clients a devoted team to provide valuable advice and insights that are
                needed to face every challenge in human capital. We understand the importance of clients’ satisfaction with the service we offer and putting
                flexibility as the bedrock of our process.
              </p>
              <div><!-- class="text-center"
                <a href="/about-us" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-8 align-items-stretch"><!-- d-flex
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" onclick="location.href='about-us';" style="cursor: pointer;">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>About Us</h4>
                    <!-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch" onclick="location.href='our-solutions';" style="cursor: pointer;">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Our Solutions</h4>
                    <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch" onclick="location.href='events';" style="cursor: pointer;">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Events</h4>
                    <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> 
                  </div>
                </div>
              </div>
            </div><!-- End .content
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section =======
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p data-aos="fade-down" data-aos-delay="100" data-aos-duration="700">
            With proper end-to-end recruitment strategy done by our professionals
            and assisted by impressive digital technology support, finding the right
            talent for your business has never been so enjoyable. We are eager to cordially
            assist you to find the perfect match for your business: job fit, culture fit,
            and budget fit. We offer you, both clients and candidates, a flexible yet
            accountable recruitment and HR solutions, tailored to meet the needs of any
            kind of industry.
          </p>
          <a href="about-us" class="btn-get-started scrollto">Learn More <i class="bx bx-chevron-right"></i></a>
        </div>

      </div>
      <!--
      <div class="container-fluid" id="values">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://youtu.be/oBt-nGvTBJM?t=470" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Our Values</h3>
            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4 class="title"><a href="">Trusted</a></h4>
              <p class="description">
                We have proven a good track record in placing qualified talents to numerous kinds of
                industries, namely BUMN, FMCG, and FSI companies. On top of that, we are able to
                preserve our clients’ trust thus able to build a long-lasting relationship with them.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="bx bx-group"></i></div>
              <h4 class="title"><a href="">Teamwork</a></h4>
              <p class="description">
                Teamwork makes the dream work. We value teamwork the most when it comes to
                delivering our services. Our works are the harmony of youthful, energetic, and
                experienced professionals.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="bx bx-target-lock"></i></div>
              <h4 class="title"><a href="">Committed</a></h4>
              <p class="description">
                We offer our clients a devoted team to provide valuable advice and insights
                that are needed to face every challenge in human capital.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700"> 
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Flexible</a></h4>
              <p class="description">
                We understand the importance of clients’ satisfaction with the service we
                offer. On this account, we put flexibility as the bedrock of our process.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="fa fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Lively</a></h4>
              <p class="description">
                On top of that, we are aspiring to be your partner every step of the way until
                you find your perfect suit and we are planning on doing that enjoyably.
              </p>
            </div>

          </div>
        </div>

      </div>
      <section class="team">
      <div class="container" id="meet-the-team">

        <div class="section-title">
          <h2>Meet the Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6 mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Dien-Natalie-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dien Natalia</h4>
                <span>Founder and Managing Director</span>
                <p style="text-align: justify;">
                <!-- style="text-align: justify;"
                  Dien started Optimus with over a decade of remarkable experience in human capital
                  and...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
                <div class="social">
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                  <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- IT industries. Her expertise includes recruitment, training, assessment, and
                  outsourcing. Settling the longest period in the field of sales in numbers of
                  national HR companies, she led her teams to meet the needs of her then-happy
                  clients. Her current teammates value her integrity and her habit of cherishing
                  people around her.

          <div class="col-lg-6 mt-4" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
          <!-- mt-lg-0 mt-md-0 
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Raymond-Koh-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Raymond Koh</h4>
                <span>Co-Founder</span>
                <p style="text-align: justify;">
                  Raymond is a young-outgoing co-founder of Optimus. Currently, he also acts as
                  a Client Account Manager...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></button>
                </div>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Always interested in HR and technology, Raymond
                  started his career as a LinkedIn Talent Solution associate and account executive
                  in an HR recruitment company. He then gained some international work experience
                  with his former IT solutions company. He then joined Dien Natalia establishing
                  Indonesia Marine Exhibition. Until now, he is really into his dynamic work-life at Optimus.

          <div class="col-lg-6 mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Lucie-Supandi-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Lucie Supandi</h4>
                <span>Head of Consultant</span>
                <p style="text-align: justify;">
                  Specialized in the end-to-end recruitment process and headhunting,
                  Lucie has been in this industry for more than 15 years...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></button>
                </div>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Living abroad for
                  more than a decade, she started her career in HR with a well-known hotel
                  in the USA. Returning to Jakarta, she was assigned as head consultant and
                  executive search assisted in various industries. Her other exposure was managing
                  Recruitment Process Outsourcing for a leading telecommunication, O/G, banking,
                  startup, FMCG, and property management. In her work, Lucie is driven by her love
                  studying humans and the joy she gets from putting the right person in the right
                  place. Her broad range of clienteles and her national and overseas experiences
                  have shaped her into who she is now.

          <div class="col-lg-6 mt-4" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Toman-Alberto-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Toman Alberto</h4>
                <span>Head of PMO and Partnership</span>
                <p style="text-align: justify;">
                  Toman is a relatively newcomer in the human capital industry. Graduated
                  with an engineering degree from ITB, Toman has 10 years’ experience in
                  the oil and gas industry...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></button>
                </div>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- In 2017, Toman started his journey in one of the
                  HR-tech startups in Indonesia. This exposure to the “new world” had this
                  eye-opening effect on him: he came to realize that the world is so full of
                  opportunities that need to be explored. His grit and curious traits are what
                  brought him to this far: enjoying the whale of a time in Indonesia Marine Exhibition. 

        </div>

      </div>
      </section>
      
    </section><!-- End About Section -->

    <!-- ======= Our Solutions Section =======
    <section id="solutions" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Our Solutions</h2>
          <!--
          <p data-aos="fade-down" data-aos-delay="100" data-aos-duration="700">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <div class="icon-box" onclick="location.href='hr-technology';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-users-cog"></i></div>
              <h4><a>HR Technology</a></h4>
              <p>
                Enhance your day-to-day HR essentials with our latest tech-based solutions.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 mt-lg-0" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
          <!-- mt-md-0 
            <div class="icon-box" onclick="location.href='online-assessment';" style="cursor: pointer;">
              <div class="icon"><i class="far fa-file-alt"></i></div>
              <h4><a>Online Assessment</a></h4>
              <p>
                Enabling HR practitioners in acquiring the right talents for the right positions
                anytime, anywhere.
              </p>
            </div>
          </div>

          <!--
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>
          

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 mt-lg-0" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
          <!-- mt-4 
            <div class="icon-box" onclick="location.href='recruitment-services';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-users"></i></div>
              <h4><a>Recruitment Services</a></h4>
              <p>
                We deliver the end-to-end recruitment service for all your needs,
                starting from entry-level to executive search.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 mt-lg-0" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
          <!-- mt-4 
            <div class="icon-box" onclick="location.href='hr-consultancy';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-chart-line"></i></div>
              <h4><a>HR Consultancy</a></h4>
              <p>
                We provide the best-tailored consultancy to maximize your company’s human resources potential.
              </p>
            </div>
          </div>

          <!--
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Our Solutions Section -->

    <!-- ======= Clients Section =======
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Our Client</h2>
        </div>

        <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
          <div class="swiper-wrapper">

          @php
            $dir = "assets/img/client-list/*.png";

            // Get the list of all files with .jpg extension in the directory and safe it in an array named $images
            $images = glob($dir);
          @endphp

          @foreach($images as $image)
            <div class="swiper-slide" style="text-align: center;">
              <div class="client-wrap">
                <div class="client-item">
                  <img src="{{ asset ($image) }}" alt="clients" width="100" height="100"/>
                </div>
              </div>
            </div><!-- End testimonial item
          @endforeach
            
            <!--
            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-7.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-8.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item

            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-9.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-10.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Partners Section ======= 
    <section id="partner" class="partners">
      <div class="container">

        <div class="section-title">
          <h2>Our Partner</h2>
        </div>

        <div class="partners-slider swiper-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
          <div class="swiper-wrapper">

          @php
            $dir = "assets/img/partner-list/*.png";

            // Get the list of all files with .jpg extension in the directory and safe it in an array named $images
            $images = glob($dir);
          @endphp

          @foreach($images as $image)
            <div class="swiper-slide" style="text-align: center;">
              <div class="partner-wrap">
                <div class="partner-item">
                  <img src="{{ asset ($image) }}" alt="partners" width="100" height="100"/>
                </div>
              </div>
            </div><!-- End testimonial item -->
          @endforeach

            <!--
            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-7.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-8.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item

            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-9.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-10.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Partners Section -->

    <!-- ======= Counts Section ======= 
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="0.5" class="purecounter"></span>
              <p>Stats 1</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stats 2</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stats 3</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stats 4</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section =======
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonial-list/Hedi Nuryanto-Avrist Insurance.png') }}" class="testimonial-img" alt="">
                  <h3>Hedi Nuryanto</h3>
                  <h4>Avrist Insurance</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Collaborating with the optimus is an extraordinary and exciting experience. Their team is very solid, knowledge of HR
                    or the solutions given is very bold, and the time management and team management from Optimus are very good. We are
                    very happy and grateful for the support given by Optimus over the years.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonial-list/Inez Adelia-Angkasa Pura Support.png') }}" class="testimonial-img" alt="">
                  <h3>Inez Adelia</h3>
                  <h4>Angkasa Pura Support</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We are very proud for the development of Optimus, even though the company is just 2 and a half years old which is
                    still relatively young. Optimus can meet the needs of our company that can come anytime and quickly where we need
                    a lot of learning management systems, assessments, and require a variety of HRD needs. Unlike the others HR Consultant,
                    Optimus always available 24 hours who is easy to contact and very friendly. We actually don't feel like a client,
                    we feel optimus is our family because the kinship is very much felt. Please continue to be of benefit to many people.
                    Thank you optimus.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonial-list/Khansa Bianca _ Maria Fransisca-Premiair Group.png') }}" class="testimonial-img" alt="">
                  <h3>Khansa Bianca &amp Maria Fransisca</h3>
                  <h4>Premiair Group</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We thank you for your cooperation and support so far, we hope that in the future Optimus and the Premiere group will
                    continue to have a good relationship. Hopefully Optimus will continue to develop and increase its contribution to
                    improving the quality of Indonesian human resources, thank you, optimus consulting.

                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonial-list/Mirna Oktaviani _ Tina Melinda-Sinarmas Mining.png') }}" class="testimonial-img" alt="">
                  <h3>Minra Oktaviani &amp Tina Melinda</h3>
                  <h4>Sinarmas Mining</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    We chose Optimus because they have a LMS with a lot of features and has cooperation with global companies so that
                    it will have continuous updates for its products and services. LMS from Optimus also has LXP (Learning Experience)
                    with user engagement and social digital learning features, I hope the quality will be maintained until the project
                    is completed. Thank you for being responsive to all of our requests. we pray for you success optimus.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!--
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= 
    <section id="events" class="gallery services">
      <div class="container">

        <div class="section-title">
          <!-- <h2>Events</h2> -->
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <!--
      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <!--
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                    -->
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <!--
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                    -->
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <!--
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                    -->
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <!--
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                    -->
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <!--
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      --><!--
              </a>
                  
            </div>
            </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      --><!--
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      --><!--
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      --><!--
              </a>
                  
            </div>
            </div>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section =======
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> 
        </div>
      </div>

      <!--
      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2834772147994!2d106.8301963143606!3d-6.226305662710575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f03383750f%3A0xed1b28d4a1e935ab!2zTUFSUVVFRSAtIEN5YmVyIOKAi-KAizI!5e0!3m2!1sen!2sid!4v1618022658658!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">
        <!--
          <div class="col-lg-4">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2834772147994!2d106.8301963143606!3d-6.226305662710575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f03383750f%3A0xed1b28d4a1e935ab!2zTUFSUVVFRSAtIEN5YmVyIOKAi-KAizI!5e0!3m2!1sen!2sid!4v1618022658658!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
          <!--
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Cyber 2 Tower 18th Floor, Jl. H. R. Rasuna Said Blok X-5, Kav. 13, Jakarta Selatan DKI Jakarta 12950</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>hello@consultwithoptimus.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 21 5799 8265</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  <!-- </main> End #main -->

  <!-- ======= Footer =======
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Optimus</h3>
            <p>
              Cyber 2 Tower 18th Floor, Jl. H. R. Rasuna Said Blok X-5, Kav. 13<br>
              Jakarta Selatan, DKI Jakarta 12950<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 21 5799 8265<br>
              <strong>Email:</strong> <a href="mailto:hello@consultwithoptimus.id">hello@consultwithoptimus.id</a><br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Sitemap</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-us">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="our-solutions">Our Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#contact">Contact Us</a></li>
              <!--
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              
            </ul>
          </div>

          <!--
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>
          -->

          <!--
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
          

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright 2021 <strong><span>Optimus</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> 
          Designed by <a href="https://lb3labs.blogspot.com/">LB3Labs Developer</a> 
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://wa.me/+6285891262233/?text=Halo%20ini%20tes%20percobaan%20yaa" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <!--
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        
        <a href="https://www.instagram.com/optimus_consulting_firm/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!--
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        
        <a href="https://www.linkedin.com/company/consultwithoptimus/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer> End Footer -->
</body>

@include('default_footer')

</html>
