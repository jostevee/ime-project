@php
  $userwriter = Auth::guard('web')->user();
  $useradmin = Auth::guard('writer')->user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  @include('header_backend')
  <title>Indonesia Marine Exhibition - Admin Page - Games</title>

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

    <!-- Postingan Saya -->
    <section id="games" class="mypost bg-light py-4">
      <div class="container">

        <div class="section-title my-4">
          <h2>My Games</h2>
        </div>

        <div class="container-fluid">
          <div class="card"> <!-- class="card w-50 m-auto" -->
            <!-- <div class="card-header">Category List</div> -->
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
              <p style="text-align: right;">Games total =
                {{ $games->count() }}
              </p>
              @php
              $id = 1;
              @endphp
              <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>No.</th>
                  <th>Platform</th>
                  <th>Time</th>
                  <th>Link</th>
                  <th width="5%"></th>
                </tr>
                @forelse($games as $data)
                  <tr>
                    <td>{{ $id++ }}</td>
                    <td>{{ $data->platform }}</td>
                    <td>{{ $data->time }}</td>
                    <td>{{ $data->link }}</td>
                    <td>
                      <form action="edit/{{ $data->id }}" method="GET">@csrf
                        <button class="btn btn-general-static" style="width: 100%;" type="submit">Edit</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6" align="center"><i>No data available</i></td>
                  </tr>
                @endforelse
              </table>
              </div>
            </div>
          </div>
        </div> 
    </section>

  </main>

@include('footer_backend')
