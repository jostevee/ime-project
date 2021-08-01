<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indonesia Marine Exhibition - Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('header_backend')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.png') }}" width="250" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link active">Writer Registration</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="contact-us" class="appointment-btn scrollto"><i class="bi bi-whatsapp"></i></a> -->
      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>
  </header><!-- End Header -->

  <section class="d-flex align-items-center" style="height: 20vh; background: url(assets/img/bg-img.jpeg);">
  </section>

  <main id="main">

      <!-- ======= Registration Section ======= -->
      <section id="signup" class="about my-4">
        <div class="container">

          <div class="section-title">
            <div class="col text-center">
              <h2>Writer Registration</h2>
            </div>
          </div>

          <!-- Form -->
	      <div class="row justify-content-center">
          <div class="col-lg-4">
            <form method="POST">
              @csrf
              @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
		      <div class="pt-2">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama..." required>
              </div>

              <div class="pt-2">
                <label for="email">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID..." required>
              </div>

              <div class="pt-2">
                <label for="Password">Password</label>
                <input type="password" class="form-control" name="password" id="Password" placeholder="Masukkan Password..."  required>
              </div>

              <div class="">
                <button class="btn btn-dark mt-3 col-lg-12" type="submit">Sign Up</button>
              </div>
            </form>
          </div>
          </div>

        </div>
      </section>

  </main><!-- End #main -->

@include('footer')
