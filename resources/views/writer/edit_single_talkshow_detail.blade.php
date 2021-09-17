@php
  $useradmin = Auth::guard('writer')->user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  @include('header_backend')
  <title>Indonesia Marine Exhibition - Admin Page - Edit Talkshow Detail</title>

  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!--
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:hello@consultwithoptimus.id">hello@consultwithoptimus.id</a>
        <i class="bi bi-phone"></i> +62 21 5799 8265
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <!--
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        
        <a href="https://www.instagram.com/optimus_consulting_firm/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/consultwithoptimus/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div> -->

  @include('writer/nav_backend')

  <!-- ======= Hero Section ======= -->
  <!--
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="color: white;">Welcome to Optimus</h1>
      <h2 style="color: white;">Discover the right talent for your business with Optimus</h2>
      <a href="#about" class="btn-get-started scrollto">About Us</a>
    </div>
  </section><!-- End Hero -->

  <section class="d-flex align-items-center" style="height: 20vh;"> <!-- background: url(assets/img/bg-img.jpeg); -->
  </section>

  <main id="main">

    <!-- Add Event -->
    <section id="talkshow-detail" class="services general-form bg-light py-4">
      <div class="container">

        <div class="section-title my-4">
          <h2>Edit Talkshow Detail</h2>
        </div>

        <div class="row">
        <div class="col-lg-12 align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
	  	        <form method="POST" autocomplete="on" enctype="multipart/form-data" class="php-general-form row">
  			      @csrf
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
                <div class="form-group col-6">
                  <label for="title">Talkshow Day</label>
                  <select class="form-select" id="day" name="id_day" required>
                    <option value="">Select talkshow day...</option>
                    @foreach($data_day as $data_day)
                      @if ($data_day->id == $data->id_day)
                        <option value="{{ $data_day->id }}" selected>{{ $data_day->title }}</option>
                      @else
                        <option value="{{ $data_day->id }}">{{ $data_day->title }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-6">
                  <label for="kategori">Talkshow Speaker</label>
                  <select class="form-select" id="speaker" name="id_speaker" required>
                    <option value="">Select talkshow speaker...</option>
                    @foreach($data_speaker as $data_speaker)
                      @if ($data_speaker->id == $data->id_speaker)
                        <option value="{{ $data_speaker->id }}" selected>{{ $data_speaker->name }}</option>
                      @else
                        <option value="{{ $data_speaker->id }}">{{ $data_speaker->name }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-6 mt-4">
                  <label for="title">From time</label>
                  <div class="md-form">
                    <input type="time" name="from_time" id="from_time" value="{{ $data->from_time }}" class="form-control timepicker" placeholder="Selected time">
                  </div>
                </div>
                <div class="form-group col-6 mt-4">
                  <label for="title">To time</label>
                  <input type="time" name="to_time" id="to_time" value="{{ $data->to_time }}" class="form-control timepicker" placeholder="Enter talkshow end time here" required>
                </div>
                <div class="form-group col-12 mt-4">
                  <label for="title">Zoom</label>
                  <input type="text" name="zoom" value="{{ $data->zoom }}" class="form-control" placeholder="Enter Zoom link here" required>
                </div>

                <!-- <div class="form-group col-6 mt-4">
                  <label for="title">Youtube</label>
                  <input type="text" name="youtube" value="{{ $data->youtube }}" class="form-control" placeholder="Enter Youtube link here">
                </div> -->

                <!--
                <div class="form-group mt-4">
                  <label for="img_link">Choose an image</label>
                </div>
                <div class="form-group my-4">
                  <input type="file" name="img_link" id="img_link" class="form-control-file">
                </div>
                -->

                <div class="mt-4">
                  <button type="submit">Save</button>
                  <a class="cancel" onclick="location.href='/writer/talkshow-detail/list';">Cancel</a>
                  <!-- <button type="cancel" onclick="window.history.back();">Cancel</button> -->
                </div>
		          </form>
		        </div>
		      </div>
	      </div>
        </div>

      </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#content').summernote({
                toolbar: [
                    //['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    //['fontname', ['fontname']],
                    //['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    //['table', ['table']],
                    ['insert', ['link']],
                    ['fontsize', ['fontsize']],
                ],
                height: 450,
            });
        });
    </script>

  </main>

@include('footer_backend')
