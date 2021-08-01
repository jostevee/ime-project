@php
  $userwriter = Auth::guard('web')->user();
  $useradmin = Auth::guard('admin')->user();
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

  @include('nav_backend')

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

    <!-- ======= Services Section ======= -->
    <section id="home" class="d-flex align-items-center my-4" style="min-height: 350px;">
      <div class="container">

        <div class="section-title">
          <h2>Welcome, {{$data->name}}!</h2>
          <p>
            Please choose one of the menu on the navigation bar to proceed to the next page, thank you!
          </p>
        </div>

        <!--
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="icon-box" onclick="location.href='/admin/login';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a>Admin Page</a></h4>
              <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="icon-box" onclick="location.href='/login';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a>Writer Page</a></h4>
              <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
        </div> -->

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

@include('footer_backend')
