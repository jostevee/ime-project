<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <title>Indonesia Marine Exhibition - NGO</title>
  <link href="{{ asset ('assets/css/ngo.css') }}" rel="stylesheet" type="text/css">
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

    <section class="ngo-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="ngo-page" class="general d-flex">
        <div class="container d-flex justify-content-center mt-4">

            <div class="row col-12 justify-content-center mx-4">
              @if ($data->count() == 0)
                <div style="margin-top: 250px;">
                  <div class="content-transparent">
                    <h1>Ups... there are no data available</h1>
                    <h2>Please try again :)</h2>
                  </div>
                </div>
              @else
                @foreach($data as $data_per_logo)
                <a href="" id="ngoModalId"
                    data-bs-toggle="modal"
                    data-id="{{$data_per_logo->id}}"
                    data-name="{{$data_per_logo->name}}"
                    data-info="{{$data_per_logo->info}}"
                    data-vid="{{$data_per_logo->video}}"
                    data-ig="{{$data_per_logo->ig}}"
                    data-fb="{{$data_per_logo->fb}}"
                    data-bs-target="#ngoModal"
                    class="row ngo-list-box justify-content-center align-items-center col-lg-3 mb-2">
                  <div class="d-flex justify-content-center">
                    <div class="ngo-pic-box">
                      <img src="assets/img/ngo_list/{{$data_per_logo->logo}}"/>
                    </div>
                  </div>
                  <h4 class="text-center blue-title ngo-name-box">{{$data_per_logo->name}}</h4>
                </a>
                @endforeach
              @endif
            </div>

        </div>
      </section>

      @include('footer')

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End About Section -->

    @include('modals')
    @include('modal_ngo')
</body>

@include('default_footer_paid_page')

</html>
