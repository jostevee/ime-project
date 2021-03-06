@php
  $useradmin = Auth::guard('writer')->user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  @include('header_backend')
  <title>Indonesia Marine Exhibition - Admin Page - Payment Users</title>
  
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

    <section id="payment-user" class="mypost bg-light py-4">
      <div class="container">

        <div class="section-title my-4">
          <h2>My Payment User</h2>
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
              <!-- <a href="/writer/talkshow-detail/add" class="mb-3 btn-general ml-2" style="font-size: 18px;">Add Talkshow Day</a> -->
              <p style="text-align: right;">Payment User total =
                {{ $payment_user->count() }}
              </p>
              @php
              $id = 1;
              @endphp
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Google ID</th>
                    <th width="30%">Transaction Image</th>
                    <th>Payment Status</th>
                    <th>Created at</th>
                    <th width="20%"></th>
                  </tr>
                  @forelse($payment_user as $data)
                    <tr>
                      <td>{{ $id++ }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->google_id }}</td>
                      <td>
                        @if ($data->trx_image != null)
                          <a href="/assets/img/trx_image_list/{{ $data->trx_image }}" class="glightbox play-btn mb-4">
                            <img src="/assets/img/trx_image_list/{{ $data->trx_image }}" style="width: 300px; height: 200px; object-fit: cover; border-radius: 20px;" alt="" class="img-fluid"/>
                          </a>
                        @else
                          <img src="{{ asset('/assets/img/no_image_available.png') }}" style="width: 300px; height: 200px; object-fit: cover; border-radius: 20px;" alt="" class="img-fluid"/>
                        @endif
                      </td> 
                      <td>
                        @if ($data->paid_status == 0)
                          Unpaid
                        @elseif($data->paid_status == 1)
                          Paid
                        @endif
                      </td>
                      <td>{{ $data->created_at }}</td>
                      <td>
                        <form action="edit/{{ $data->id }}" method="GET">@csrf
                          <button class="btn btn-general-static" style="width: 100%;" type="submit">Edit</button>
                        </form>
                        <form action="delete/{{ $data->id }}" method="POST">@csrf
                          <button class="btn btn-general-static" style="width: 100%;" type="submit">Delete</button>
                        </form>
                        <form action="notify/{{ $data->id }}" method="POST">@csrf
                          <button class="btn btn-general-static" style="width: 100%;" type="submit">Ask new image</button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="8" align="center"><i>No data available</i></td>
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
