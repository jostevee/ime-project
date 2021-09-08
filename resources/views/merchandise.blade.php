<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
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
  <link href="{{ asset ('assets/css/merchandise.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('menu')

    <section class="merchandise-room-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="merchandise-room-page" class="general d-flex">
        <div class="container mt-4">

          <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
              <h1 class="blue-title">Merchandise</h1>
            </div>
            <div class="col-12 row d-flex justify-content-stretch align-items-center mt-4">
              <div class="col-lg-6 col-12 col-md-6 blue-background-box row d-flex justify-content-center align-items-center">
                <div class="col-12 yellow-background-box row d-flex justify-content-center align-items-center">
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      @include('footer')

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End About Section -->

    @include('modals')
</body>

@include('default_footer')

</html>
