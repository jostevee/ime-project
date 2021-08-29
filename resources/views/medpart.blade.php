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
                <h2>Please try again :)</h2>
              @else
                @foreach($data as $data_per_logo)
                <a href="" id="medpartModalId" data-bs-toggle="modal" data-bs-target="#medpartModal" class="row medpart-list-box justify-content-center align-items-center col-lg-3 mb-2">
                <!-- medpart/{{$data_per_logo->id}} -->
                  <div class="d-flex justify-content-center">
                    <div class="medpart-pic-box"></div>
                  </div>
                  <h4 class="text-center blue-title medpart-name-box">{{$data_per_logo->name}}</h4>
                </a>

                <!-- For Data to Medpart Modal -->
                <input type="text" id="id" value="{{ $data_per_logo->id }}" hidden>
                <input type="text" id="name" value="{{ $data_per_logo->name }}" hidden>
                <input type="text" id="info" value="{{ $data_per_logo->info }}" hidden>
                <input type="text" id="video" value="{{ $data_per_logo->video }}" hidden>
                <input type="text" id="ig" value="{{ $data_per_logo->ig }}" hidden>


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
