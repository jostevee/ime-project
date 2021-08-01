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
  <section class="d-flex align-items-center" style="height: 20vh;"> <!-- background: url(assets/img/bg-img.jpeg); -->
  </section>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="login-admin" class="login-admin hero" style="min-height: 350px;">
      <div class="container">

        <!--
        <div class="section-title">
          <h2>Welcome!</h2>
          <p>
            Please fill in the forms to continue, thank you!
          </p>
        </div>-->

        <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
           <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">

                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="mt-4 mt-xl-0 ">
                    <h2>Welcome!</h2>
                    <p>
                      Please log-in to continue to the Writer's Page
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <form method="POST" class="php-login-form">
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

                      <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4">
                          <label for="Email">User ID</label>
                        </div>

                        <input type="hidden" class="form-control" name="admin" value="0">

                        <div class="col-xl-8">
                          <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Input your User ID" required>
                        </div>

                        <div class="col-xl-4 mt-4">
                          <label for="Password">Password</label>
                        </div>

                        <div class="col-xl-8 mt-4">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Input your Password"  required>
                        </div>

                        <div class="col-xl-12 mt-4">
                          <div class="mt-4 mt-xl-0">
                            <button type="submit">Sign in</button>
                          </div>
                        </div>

                        <!--
                        @if(request()->segment(1)!='admin')
                          <div class="row pt-2">
                          <div class="col text-center">
                              <h6>Tidak punya akun? <a href="signup"><i>Buat akun</i></a></h6>
                          </div>
                          </div>
                        @endif -->

                      </div>
                    </form>
                  </div>
                </div>

              </div>
           </div><!-- End .content -->
        </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

@include('footer_backend')
