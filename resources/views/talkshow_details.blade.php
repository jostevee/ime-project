<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <link href="{{ asset ('assets/css/talkshow_details.css') }}" rel="stylesheet" type="text/css">
</head>

<body>  
    <section class="talkshow-details-page">
      <!-- ======= About Section ======= -->
      <section id="talkshow-details-page" class="d-flex">
        <div class="container mt-4">

          <div class="row d-flex justify-content-stretch mt-4">
            <div class="col-12 mt-4">
              <h1 class="text-center yellow-title">{{$data_root->day_title}}</h1>
            </div>

            <div class="col-12 mt-1">
              <h3 class="text-center yellow-title">{{$data_root->theme}}</h3>
            </div>

            <div class="row col-12 mt-4">
              @if ($data_root->count() == 0)
                <h1 style="margin-top: 250px;">Welcome to IME</h1>
                <h2>Indonesia Marine</h2>
              @else
                @foreach($data as $data_per_day)
                <div class="row col-lg-3 mx-3 mb-2">
                  <p class="blue-strong">
                    {{$data_per_day->speaker}}
                  </p>
                </div>
                @endforeach
              @endif 
            </div>

            <div class="col-12 mt-4">
              <div class="content">
                <!-- <h3>IME</h3> -->
                <div class="row d-flex justify-content-stretch">

                  <div class="row col-12 col-lg-4 col-md-4 about-people-box d-flex justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                      <div class="video-box">
                      </div>
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
                      <div class="video-box">
                      </div>
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
                      <div class="video-box">
                      </div>
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
      </section>

      @include('footer')

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End About Section -->
</body>

@include('default_footer')

</html>
