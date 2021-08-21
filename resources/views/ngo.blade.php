<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <link href="{{ asset ('assets/css/ngo.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('menu')

    <section class="ngo-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="ngo-page" class="general d-flex">
        <div class="container mt-4">

            <div class="row col-12 justify-content-center mx-4">
              @if ($data->count() == 0)
                <h1 style="margin-top: 250px;">Ups... there are no data available</h1>
                <h2>Please try again :)</h2>
              @else
                @foreach($data as $data)
                <a href="ngo/{{$data->id}}" class="row ngo-list-box justify-content-center align-items-center col-lg-3 mb-2">
                  <div class="d-flex justify-content-center">
                    <div class="ngo-pic-box"></div>
                  </div>
                  <h4 class="text-center blue-title ngo-name-box">{{$data->name}}</h4>
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
