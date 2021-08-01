<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <link href="{{ asset ('assets/css/medpart.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('menu')

    <section class="medpart-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="medpart-page" class="general d-flex">
        <div class="container mt-4">

            <div class="row col-12 justify-content-center mx-4">
              @if ($data->count() == 0)
                <h1 style="margin-top: 250px;">Ups... there are no data available</h1>
                <h2>Please input some...</h2>
              @else
                @foreach($data as $data_per_day)
                <a href="medpart/{{$data->id}}" class="row medpart-list-box justify-content-center align-items-center col-lg-3 mb-2">
                  <div class="d-flex justify-content-center">
                    <div class="medpart-pic-box"></div>
                  </div>
                  <h4 class="text-center blue-title medpart-name-box"></h4>
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
</body>

@include('default_footer')

</html>
