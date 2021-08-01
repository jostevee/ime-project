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

  <!-- Template for Summernote WYSIWYG -->
  <!-- include libraries(jQuery, bootstrap) -->
  <!--
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.png') }}" width="250" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="/writer">Home</a></li>
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
          @else
            <li class="dropdown"><a class="nav-link">Events</a>
              <ul>
                <li><a class="nav-link" href="/writer/event/add">Add Event</a></li>
                <li><a class="nav-link" href="/writer/event/list">List Event</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link active">Jobs</a>
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
      @else
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

    <!-- Postingan Saya -->
    <section id="mypost" class="mypost bg-light pb-4">
      <div class="container">

        <div class="section-title">
          <h2>My Jobs</h2>
        </div>

        <div class="container-fluid">
          <div class="card"> <!-- class="card w-50 m-auto" -->
            <div class="card-header">Category List</div>
            <div class="card-body">
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
              <!-- <a href="/dashboard" class="mb-3 btn btn-primary">Dashboard</a> -->
              <a href="/writer/job/add" class="mb-3 btn btn-outline-info ml-2">Add Job</a>
              <p style="text-align: right;">Job total =
			    {{$career->count()}}
		      </p>
              <table class="table table-striped">
                <tr>
                  <th width="5%">No.</th>
                  <th width="35%">Job Title</th>
                  <!-- <th>Content</th> -->
                  <th width="25%">Link</th>
                  <!-- <th width="15%">Due date</th> -->
                  <!-- <th>Diubah</th> -->
                  <th width="35%"></th>
                </tr>
              @php
              $id = 1;
              @endphp
		      @forelse($career as $data)
                <tr>
				    <td>{{$id++}}</td>
				    <td>{{$data->title}}</td>
				    <!-- <td>{{$data->content}}</td> -->
				    <td>{{$data->link}}</td>
				    <!-- <td>{{$data->due_date}}</td> -->
				    <!-- <td>{{$data->updated_at}}</td> -->
				    <td>
                      <a href="{{$data->id}}" class="btn btn-success col-12 my-1">Preview</a>
				              <a class="btn btn-warning mb-2 col-12" href="/writer/job/edit/{{$data->id}}">Edit</a>
                      <form action="delete/{{$data->id}}" method="POST">@csrf
                      <button class="btn btn-danger col-12" type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
			    @empty
                <tr>
				    <td colspan="5" align="center">No data available</td>
                </tr>
                @endforelse
              </table>
            </div>
          </div>
        </div>     

        <!--
        <div class="row pt-3">
            @forelse($career as $data)
                <div class="col-md-4 pt-4">
                    <div class="card text-right">
                        @if($data->file_gambar!==null)
                        <img src="img/{{$data->img_link}}" class="card-img-top" alt="gambar">
                        @endif
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">{{$data->title}}</h5>
                                <p class="card-text text-center">Job Title: {{$data->title}}</p>
                                <a href="edit/{{$data->id}}"  class="btn btn-warning col-12 my-1">Edit career</a>
                                <a href="{{$data->id}}"  class="btn btn-success col-12 my-1">Preview</a>
                                <form method="POST" action="delete/{{$data->id}}">@csrf <button class="btn btn-danger col-12 my-1">Delete</button></form>
                            </div>
                    </div>
                </div>
            @empty
                <div class="col-md pt-4 text-center">
                    <h5>No data to be shown, yet...</h5>
                </div>
            @endforelse -->

        </div>
    </section>

  </main>

@include('footer')
