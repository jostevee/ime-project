<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <title>Indonesia Marine Exhibition - Merchandise</title>
  <link href="{{ asset ('assets/css/merchandise.css') }}" rel="stylesheet" type="text/css">
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

    <section class="merchandise-room-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="merchandise-room-page" class="general d-flex">
        <div class="container mt-4">

          <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
              <h1 class="blue-title">Merchandise</h1>
            </div>

            <div class="col-12 my-4">
              <div class="row">
                <!-- <div class="swiper-father"> -->

                  <!-- we put an arrow into the outside swiper swiper -->
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <i class="merchandise-room-btn-prev fas fa-arrow-left"></i>
                  </div>

                  
                    <div class="swiper-container merchandise-room-swiper col-9 d-flex align-items-center justify-content-stretch">
                      <div class="swiper-wrapper d-flex">

                        <div class="swiper-slide">
                          <div class="row d-flex justify-content-center">

                            <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                              <div class="yellow-background-box d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/merchandise/find_the_fish.jpeg') }}" class="merch-box"/>
                              </div>
                            </div>
                            <div class="col-10 d-flex justify-content-center mt-4">
                              <div class="name-box row align-items-center">
                                <p class="text-center yellow-strong">
                                  Find the Fish
                                </p>
                                <p class="text-center yellow-regular" style="font-size: 13px;">
                                  Rp80.000,00 (Lengan Pendek)<br>
                                  Rp85.000,00 (Lengan Panjang)
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="row d-flex justify-content-center">
                            <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                              <div class="yellow-background-box d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/merchandise/plastic_are_predator.jpeg') }}" class="merch-box"/>
                              </div>
                            </div>
                            <div class="col-10 d-flex justify-content-center mt-4">
                              <div class="name-box row align-items-center">
                                <p class="text-center yellow-strong">
                                  Plastic are Predator
                                </p>
                                <p class="text-center yellow-regular" style="font-size: 13px;">
                                  Rp80.000,00 (Lengan Pendek)<br>
                                  Rp85.000,00 (Lengan Panjang)
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="row d-flex justify-content-center">
                            <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                              <div class="yellow-background-box d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/merchandise/ime_merch_a.jpg') }}" class="merch-box"/>
                              </div>
                            </div>
                            <div class="col-10 d-flex justify-content-center mt-4">
                              <div class="name-box row align-items-center">
                                <p class="text-center yellow-regular" style="font-size: 16px;">
                                  Design A<br>
                                  Rp100.000,00
                                </p>                  
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="swiper-slide">
                          <div class="row d-flex justify-content-center">
                            <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                              <div class="yellow-background-box d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/merchandise/ime_merch_b.jpg') }}" class="merch-box"/>
                              </div>
                            </div>
                            <div class="col-10 d-flex justify-content-center mt-4">
                              <div class="name-box row align-items-center">
                                <p class="text-center yellow-regular" style="font-size: 16px;">
                                  Design B<br>
                                  Rp200.000,00
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Swiper buttons -->
                        <!-- <div class="swiper-button-next"></div> -->
                        <!-- <div class="swiper-button-prev"></div> -->
                        <div class="swiper-pagination-merchandise-room" style="visibility: hidden;"></div>
                    </div>
                  
                  <!-- we put an arrow into the outside swiper swiper -->
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <i class="merchandise-room-btn-next fas fa-arrow-right"></i>
                  </div>

              </div>
            </div>

            <div class="col-12 mt-4">
              <div class="col-6 content row d-flex justify-content-stretch my-4">
                <h3 class="yellow-strong mt-4">Contact here to buy</h3>
                <div class="col-2">
                  <img src="{{ asset('assets/img/donation/whatsapp_icon.png') }}">
                </div>
                <div class="col-9 d-flex align-items-center">
                  <h4 class="yellow-title">CP : 081584886530 (Gabriel)</h4>
                </div>
              </div>
            </div>

            <!--
            <div class="col-12 row d-flex justify-content-center align-items-center mt-4">
              <div class="col-6 row d-flex justify-content-center align-items-center mt-4">

                <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                  <div class="yellow-background-box d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/merchandise/find_the_fish.jpeg') }}" class="merch-box"/>
                  </div>
                </div>
                <div class="col-8 d-flex justify-content-center mt-4">
                  <div class="name-box">
                    <p class="text-center yellow-strong">
                      Find the Fish
                    </p>
                    <p class="text-center yellow-regular" style="font-size: 13px;">
                      Rp80.000,00 (Lengan Pendek)<br>
                      Rp85.000,00 (Lengan Panjang)
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-6 row d-flex justify-content-center align-items-center mt-4">
                <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                  <div class="yellow-background-box d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/merchandise/plastic_are_predator.jpeg') }}" class="merch-box"/>
                  </div>
                </div>
                <div class="col-8 d-flex justify-content-center mt-4">
                  <div class="name-box">
                    <p class="text-center yellow-strong">
                      Plastic are Predator
                    </p>
                    <p class="text-center yellow-regular" style="font-size: 13px;">
                      Rp80.000,00 (Lengan Pendek)<br>
                      Rp85.000,00 (Lengan Panjang)
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-6 row d-flex justify-content-center align-items-center mt-4">
                <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                  <div class="yellow-background-box d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/merchandise/ime_merch_a.jpg') }}" class="merch-box"/>
                  </div>
                </div>
                <div class="col-8 d-flex justify-content-center mt-4">
                  <div class="name-box">
                    <p class="text-center yellow-regular" style="font-size: 16px;">
                      Design A<br>
                      Rp100.000,00
                    </p>                  
                  </div>
                </div>
              </div>

              <div class="col-6 row d-flex justify-content-center align-items-center mt-4">
                <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                  <div class="yellow-background-box d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/merchandise/ime_merch_b.jpg') }}" class="merch-box"/>
                  </div>
                </div>
                <div class="col-8 d-flex justify-content-center mt-4">
                  <div class="name-box">
                    <p class="text-center yellow-regular" style="font-size: 16px;">
                      Design B<br>
                      Rp200.000,00
                    </p>
                  </div>
                </div>
              </div>

            </div>
            -->

          </div>

        </div>
      </section>

      @include('footer')

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End About Section -->

    @include('modals')
</body>

@include('default_footer_paid_page')

</html>
