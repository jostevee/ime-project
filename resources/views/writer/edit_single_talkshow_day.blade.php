@php
  $useradmin = Auth::guard('writer')->user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indonesia Marine Exhibition</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('header_backend')

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

    <!-- Edit Post -->
    <section id="talkshow-day" class="services general-form bg-light py-4">
      <div class="container">
      <!-- container-fluid -->

          <div class="section-title">
            <h2>Edit Talkshow Day</h2>
          </div>

	        <div class="row">
            <div class="col-lg-12 align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
			            <form method="POST" autocomplete="on" class="php-general-form row">
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
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" value="{{ $talkshow_day->title }}" required>
                    </div>
                    <div class="form-group mt-4">
                      <label for="title">Theme</label>
                      <input type="text" name="theme" id="theme" class="form-control" value="{{ $talkshow_day->theme }}" required>
                    </div>

                    <!--
                    <div class="form-group mt-4">
                      <label for="img_link_update">Choose an image</label>
                    </div> -->
                    <!--
                    <div class="form-group mt-2">
                      <input type="file" name="img_link_update" id="img_link" class="form-control-file">
                    </div> -->
                    <div class="mt-4">
                      <button type="submit">Save</button>
                      <a class="cancel" onclick="location.href='/writer/talkshow-day/list';">Cancel</a>
                      <!-- <button type="cancel" onclick="window.history.back();">Cancel</button> -->
                    </div>
			            </form>
		            </div>
				        {{--

			        --}}
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
            ],
            height: 450,
        });
        });
    </script>

  </main>

@include('footer_backend')
