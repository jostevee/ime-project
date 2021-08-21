@php
  $userwriter = Auth::guard('web')->user();
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.png') }}" width="250" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link">Home</a></li>
          @if($useradmin!=null && $userwriter == null)
            <li class="dropdown"><a class="nav-link">Event Categories</a>
              <ul>
                <li><a class="nav-link" href="/admin/category/add">Add Category</a></li>
                <li><a class="nav-link" href="/admin/category/list">List Category</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link">Writer</a>
              <ul>
                <li><a class="nav-link" href="/admin/writer/list">List Writer</a></li>
              </ul>
            </li>
          @elseif($useradmin==null && $userwriter != null)
            <li class="dropdown"><a class="nav-link active">Events</a>
              <ul>
                <li><a class="nav-link" href="/writer/event/add">Add Event</a></li>
                <li><a class="nav-link" href="/writer/event/list">List Event</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link">Jobs</a>
              <ul>
                <li><a class="nav-link" href="/writer/job/add">Add Job</a></li>
                <li><a class="nav-link" href="/writer/job/list">List Job</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link">FAQs</a>
              <ul>
                <li><a class="nav-link" href="/writer/faq/add">Add FAQ</a></li>
                <li><a class="nav-link" href="/writer/faq/list">List FAQ</a></li>
              </ul>
            </li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @if($useradmin!=null && $userwriter == null)
        <a href="/admin/logout" class="appointment-btn scrollto">Sign Out</a>
      @elseif($useradmin==null && $userwriter != null)
        <a href="/logout" class="appointment-btn scrollto">Sign Out</a>
      @endif
      <!-- <a href="contact-us" class="appointment-btn scrollto"><i class="bi bi-whatsapp"></i></a> -->
      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>
  </header><!-- End Header -->

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

    <section id="services" class="services hero">
      <div class="container">

        <div class="section-title my-4">
            <h2>{{$data->title}}</h2>
            <p class="mt-3">Writer name: {{$data->writer->name}}<br /><small>Categori: <a href="/category/{{$data->id_category}}">{{$data->category->category}}</a> | Latest Update: {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at)->format('d F Y, H:i:s')}}</small> </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 pb-3">
              @if($data->img_link !== null)
            <img src="/assets/img/event_list/{{$data->img_link}}" alt="gambar" width="400px;">
            @endif

          </div>
        </div>

            <div class="col-md-6 offset-md-3">
              <div class="col text-justify">
                {!! nl2br($data->content) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

@include('footer')
