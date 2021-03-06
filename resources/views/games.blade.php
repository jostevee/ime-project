<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <title>Indonesia Marine Exhibition - Games Room</title>
  <link href="{{ asset ('assets/css/games.css') }}" rel="stylesheet" type="text/css">
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

    <section class="games-room-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="games-room-page" class="general d-flex">
        <div class="container mt-4">

          <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
              <h1 class="blue-title">Games</h1>
            </div>

            <div class="col-12 row d-flex justify-content-center align-items-center mt-4">
              @foreach($data as $data_games)
                @if ($data_games->id == 2)
                  <div class="col-6 row d-flex justify-content-center align-items-center mt-4">
                    <div class="col-12 yellow-background-box row d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/img/games/gartic.png') }}" class="games-box"/>
                      <h2 class="text-center blue-strong">
                        {{ $data_games->time }}  
                      </h2>
                    </div>               
                    <div class="col-12 d-flex justify-content-center mt-3">
                      <div class="name-box d-flex justify-content-center">
                        <a href="{{ $data_games->link }}" class="text-center yellow-strong">
                          Join Game
                        </a>
                      </div>
                    </div>
                  </div>
                @endif
            @endforeach

            @foreach($data as $data_games)
              @if ($data_games->id == 1)
                <div class="col-6 row d-flex justify-content-center align-items-center mt-4">
                  <div class="col-12 yellow-background-box row d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/games/quizizz.png') }}" class="games-box"/>
                    <h2 class="text-center blue-strong">
                      {{ $data_games->time }}  
                    </h2>
                  </div>               
                  <div class="col-12 d-flex justify-content-center mt-3">
                    <div class="name-box d-flex justify-content-center">
                      <a href="{{ $data_games->link }}" class="text-center yellow-strong">
                        Join Game
                      </a>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach

              <!-- <div class="col-6 row d-flex justify-content-center align-items-center mt-4">
                <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                  <div class="yellow-background-box d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/merchandise/plastic_are_predator.jpeg') }}" class="games-box"/>
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
                    <img src="{{ asset('assets/img/merchandise/ime_merch_a.jpg') }}" class="games-box"/>
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
                    <img src="{{ asset('assets/img/merchandise/ime_merch_b.jpg') }}" class="games-box"/>
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
            -->
            </div>
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
