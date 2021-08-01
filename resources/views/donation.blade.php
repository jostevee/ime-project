<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <link href="{{ asset ('assets/css/donation.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('menu')

    <section class="donation-room-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="donation-room-page" class="general d-flex">
        <div class="container mt-4">

          <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
              <h1 class="blue-title">Donation Room</h1>
            </div>
            <div class="col-lg-9 mt-4">
              <p class="blue-strong">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia placerat commodo. Pellentesque euismod arcu orci,
                quis ornare enim blandit eu. Sed iaculis tempus neque, in tincidunt ligula rutrum a. Ut et ornare eros. Donec dignissim
                urna dolor, a lobortis leo auctor eget. Donec elementum neque augue, eu viverra tortor aliquet non. Mauris lacinia tellus
                neque, vel convallis urna eleifend at. Duis commodo luctus lectus, nec elementum nisl elementum quis. Morbi id nunc lacus.
                Proin metus mi, mattis at lacus ut, hendrerit vestibulum nibh. Aliquam erat volutpat.
              </p>
            </div>
            <div class="col-9 mt-4">
              <div class="content my-4">
                <!-- <h3>IME</h3> -->
                <div class="row d-flex justify-content-stretch">

                  <div class="row col-12 col-lg-3 col-md-3 about-people-box d-flex justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                      <div class="round-box">
                      </div>
                    </div>
                  </div>

                  <div class="row col-12 col-lg-9 col-md-9 about-people-box d-flex justify-content-center">
                    <div class="col-lg-12 my-2">
                      <h5 class="yellow-title">OUR DONATION TEAM</h5>
                    </div>
                    <div class="col-lg-12">
                      <p class="yellow-regular" style="font-size: 16px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia placerat commodo. Pellentesque euismod arcu orci, quis ornare enim blandit eu. Sed iaculis tempus neque, in tincidunt ligula rutrum a. Ut et ornare eros. Donec dignissim urna dolor, a lobortis leo auctor eget.
                      </p>
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

    @include('modals')
</body>

@include('default_footer')

</html>
