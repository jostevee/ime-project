<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indonesia Marine Exhibition</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <!-- <link href="{{ asset ('assets/js/jquery.min.js') }}"> -->
  <link href="{{ asset ('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('assets/css/talkshow_room.css') }}" rel="stylesheet" type="text/css">

  <!-- Zoom CSS -->
  <link href="{{ asset ('assets/css/zoom.css') }}" rel="stylesheet" type="text/css">

  <!-- Google's Sign In Method -->
  <script src="https://apis.google.com/js/api:client.js"></script>
  <script src="{{ asset ('assets/js/google_signin.js') }}"></script>
  <!-- <script src="https://accounts.google.com/gsi/client" async defer></script> -->

  <!-- Google's Material Design Icons -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: LB3Labs One - v4.1.0
  * Template URL: 
  * Author: LB3Labs Software Developer
  * License: 
  ======================================================== -->
</head>

<body>  
    <section class="main-page">
      <!-- ======= Speaker Section ======= -->
      <section id="talkshow-room-page" class="general talkshow-room-page d-flex">
        <div class="container"><!-- class="d-flex align-items-center" -->

          <div class="row d-flex justify-content-center mt-4">
            <!--
            <div class="col-12">
              <h1 class="blue-title">Speakers</h1>
            </div>
            -->
            <div class="col-12 mt-4">
              <div class="content row">
                <!-- <div class="swiper-father"> -->

                <!-- we put an arrow into the outside swiper swiper -->
                <div class="col-1 d-flex align-items-center justify-content-center">
                  <i class="talkshow-room-btn-prev fas fa-arrow-left"></i>
                </div>

                <div class="swiper-container talkshow-room-swiper col-9 d-flex align-items-center justify-content-stretch">
                  <div class="swiper-wrapper d-flex">

                    <a href="home" class="swiper-slide">
                      <div class="row talkshow-room-day-box">
                        <div class="d-flex justify-content-center">
                          <div class="talkshow-room-pic-box">
                          </div>
                        </div>
                      </div>
                      <div class="row talkshow-room-day-text-box d-flex justify-content-start">
                        <div class="talkshow-room-day-which-box">
                          <h3 class="text-start yellow-strong">DAY 1</h3>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-2">
                          <h5 class="text-center blue-strong">Tema hari N adalah ini dia</h5>
                        </div>
                      </div>
                    </a><!-- End Talkshow item -->

                  </div>

                  <!-- Swiper buttons -->
                    <!-- <div class="swiper-button-next"></div> -->
                    <!-- <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination-talkshow-room" style="visibility: hidden;"></div>
                </div>
                
                <!-- we put an arrow into the outside swiper swiper -->
                <div class="col-1 d-flex align-items-center justify-content-center">
                  <i class="talkshow-room-btn-next fas fa-arrow-right"></i>
                </div>

                <!-- </div> -->
                <!-- <h3>IME</h3> -->
                <!-- <div class="row d-flex justify-content-center"> -->
                  <!-- <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                      <div class="speaker-pic-box">
                      </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                  </div>

                  <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                      <div class="speaker-pic-box">
                      </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                  </div>

                  <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                      <div class="speaker-pic-box">
                      </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                  </div>

                  <div class="row col-lg-3 col-sm-12 col-md-12 about-people-box d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                      <div class="speaker-pic-box">
                      </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-start my-2">
                      <p class="blue-regular">Prof. Dr. Fulan, M.Sc.</p>
                    </div>
                  </div> -->

                <!-- </div>   -->
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Talkshow Section -->

      <!-- ======= Footer Section ======= -->
      <section id="footer" class="general footer-page d-flex">
        <div class="container d-flex align-items-center justify-content-center">

          <div class="col-12 row d-flex mt-4">
            <div class="col-lg-6 row d-flex justify-content-stretch">
              <div class="col-12">
                <h4 class="yellow-strong">Sponsored by</h4>
              </div>
              <div class="col-12 row">
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fas fa-cog"></i></div>
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fas fa-cog"></i></div>
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fas fa-cog"></i></div>
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fas fa-cog"></i></div>
              </div>
            </div>
            <div class="col-lg-6 row d-flex justify-content-stretch">
              <div class="col-12">
                <h4 class="yellow-strong">IME Social Media</h4>
              </div>
              <div class="col-12 row">
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fab fa-instagram"></i></div>
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fab fa-twitter"></i></div>
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fas fa-cog"></i></div>
                <div class="col-6 col-lg-3 sponsors d-flex justify-content-center align-items-center"><i class="fas fa-cog"></i></div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Footer Section -->

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End About Section -->

    <!-- Modal 1 Signin -->
    <div class="modal fade" id="signinModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-signin-signup-menu">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <div class="modal-body row">
            <div class="col-10 d-flex justify-content-center align-items-start">
              <!-- <span class="label">Sign in with:</span> -->
              <a href="{{ url('authorized/google') }}" class="btn-modal row" id="btn-google-modal">
                <p class="text-center white-regular"><i class="fab fa-google"></i> <b>|</b>  Google Account</p>
              </a>
            </div>
            <div class="col-2 d-flex justify-content-end">
              <a class="icon-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-center mt-4">
              <p class="text-center blue-strong">OR</p>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-start">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#emailLoginModal"><p class="text-center white-regular">Email</p></a>
            </div>         
          </div>

          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div> -->

        </div>
      </div>
    </div>

    <!-- Modal Email Login  -->
    <div class="modal fade" id="emailLoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="emailLoginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-signin-signup-menu">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <!-- Session Status -->
          @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
              {{ session('status') }}
            </div>
          @endif

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="modal-body row">
              <!-- Validation error message -->
              <x-jet-validation-errors class="col-12 mb-2" />

              <!-- Email -->
              <div class="col-10 d-flex my-2">
                <div class="col-3 d-flex align-items-center justify-content-end">
                  <x-jet-label for="email" value="{{ __('Email') }}" />
                </div>
                <div class="col-9 d-flex align-items-center mx-2">
                  <x-jet-input id="email" class="w-100" type="email" name="email" :value="old('email')" required autofocus />
                </div>
              </div>

              <!-- Close button -->
              <div class="col-2 d-flex justify-content-end my-2">
                <a class="icon-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
              </div>

              <!-- Password -->
              <div class="col-10 d-flex my-2">
                <div class="col-3 d-flex align-items-center justify-content-end">
                  <x-jet-label for="password" value="{{ __('Password') }}" />
                </div>
                <div class="col-9 d-flex align-items-center mx-2">
                  <x-jet-input id="password" class="w-100" type="password" name="password" required autocomplete="current-password" />
                </div>
              </div>

              <!-- Remember me? -->
              <div class="col-3">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
              </div>
              <div class="col-9 d-flex justify-content-center align-items-center mt-2">
                <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
              </div>

              <div class="col-10 d-flex justify-content-center align-items-center">
                <button class="btn-modal"><p class="text-center white-regular">Log In</p></button>
              </div>
            </div>
                <!-- 
                  <div class="block mt-4">
                      <label for="remember_me" class="flex items-center">
                          
                      </label>
                  </div>

                  <div class="flex items-center justify-end mt-4">
                      @if (Route::has('password.request'))
                          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                              {{ __('Forgot your password?') }}
                          </a>
                      @endif

                      <x-jet-button class="ml-4">
                          {{ __('Login') }}
                      </x-jet-button>
                  </div>
                  <div class="flex items-center justify-end mt-4">
                      <a href="{{ url('authorized/google') }}">
                          <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                      </a>
                  </div> -->
          </form>

          <!-- 
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
          -->

        </div>
      </div>
    </div>

    <!-- Modal 1 Signup -->
    <div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-signin-signup-menu">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <div class="modal-body row">
            <div class="col-10 d-flex justify-content-center align-items-start">
              <!-- <span class="label">Sign in with:</span> -->
              <a href="{{ url('authorized/google') }}" class="btn-modal row" id="btn-google-modal">
                <p class="text-center white-regular"><i class="fab fa-google"></i> <b>|</b>  Google Account</p>
              </a>
            </div>
            <div class="col-2 d-flex justify-content-end">
              <a class="icon-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-center mt-4">
              <p class="text-center blue-strong">OR</p>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-start">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registrationModal"><p class="text-center white-regular">Email</p></a>
            </div>         
          </div>

          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div> -->

        </div>
      </div>
    </div>

    <!-- Modal Registration -->
    <div class="modal fade" id="registrationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-signin-signup-menu">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="modal-body row">
              <!-- Validation error message -->
              <x-jet-validation-errors class="mb-4" />

              <!-- Name -->
              <div class="col-10 d-flex my-2">
                <div class="col-3 d-flex align-items-center justify-content-end text-end">
                  <x-jet-label for="name" value="{{ __('Name') }}" />
                </div>
                <div class="col-9 d-flex align-items-center mx-2">
                  <x-jet-input id="name" class="w-100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
              </div>

              <!-- Close button -->
              <div class="col-2 d-flex justify-content-end">
                <a class="icon-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
              </div>

              <!-- Email -->
              <div class="col-10 d-flex my-2">
                <div class="col-3 d-flex align-items-center justify-content-end text-end">
                  <x-jet-label for="email" value="{{ __('Email') }}" />
                </div>
                <div class="col-9 d-flex align-items-center mx-2">
                  <x-jet-input id="email" class="w-100" type="email" name="email" :value="old('email')" required />
                </div>
              </div>

              <!-- Password -->
              <div class="col-10 d-flex my-2">
                <div class="col-3 d-flex align-items-center justify-content-end text-end">
                  <x-jet-label for="password" value="{{ __('Password') }}" />
                </div>
                <div class="col-9 d-flex align-items-center mx-2">
                  <x-jet-input id="password" class="w-100" type="password" name="password" required autocomplete="new-password" />
                </div>
              </div>

              <!-- Confirm Password -->
              <div class="col-10 d-flex my-2">
                <div class="col-3 d-flex align-items-center justify-content-end text-end">
                  <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                </div>
                <div class="col-9 d-flex align-items-center mx-2">
                  <x-jet-input id="password_confirmation" class="w-100" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
              </div>
              
              @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="col-11 d-flex justify-content-center align-items-start">
                  <x-jet-label for="terms">
                    <div class="flex items-center">
                      <x-jet-checkbox name="terms" id="terms"/>
                      <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                      </div>
                    </div>
                  </x-jet-label>
                </div>
              @endif

              <!-- Register -->
              <div class="col-12 d-flex justify-content-center my-2">
                  <button class="btn-modal">
                    <p class="text-center white-regular">
                      {{ __('Register') }}
                    </p>
                  </button>
              </div>

              <!-- Already Register -->
              <div class="col-12 d-flex justify-content-center">
                <button class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#emailLoginModal">
                  <p class="text-center white-regular" style="font-size: 14px;">
                    Already Registered?
                  </p>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

    <!-- Modal Menu -->
    <div class="modal right fade" id="menuModal" data-bs-keyboard="true" tabindex="-1" aria-labelledby="emailLoginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-signin-signup-menu">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <div class="modal-body align-items-center justify-content-center row">
            <div class="col-4 col-md-3 col-lg-2 menu-modal-row">
              <a data-bs-dismiss="modal" onclick="location.href='#about';"><div class="menu-modal-icon d-flex justify-content-center"><i class="about-icon"></i></div></a>
              <p class="d-flex justify-content-center text-center black-strong mt-2" style="font-size: 24px;">About</p>
            </div>
            <div class="col-4 col-md-3 col-lg-2 menu-modal-row">
              <div class="menu-modal-icon d-flex justify-content-center"><i class="speaker-icon"></i></div>
              <p class="d-flex justify-content-center text-center black-strong mt-2" style="font-size: 24px;">Speakers</p>
            </div>
            <div class="col-4 col-md-3 col-lg-2 menu-modal-row">
              <div class="menu-modal-icon d-flex justify-content-center"><i class="schedule-icon"></i></div>
              <p class="d-flex justify-content-center text-center black-strong mt-2" style="font-size: 24px;">Schedule</p>
            </div>
            <div class="col-4 col-md-3 col-lg-2 menu-modal-row">
              <div class="menu-modal-icon d-flex justify-content-center"><i class="on-ime-icon"></i></div>
              <p class="d-flex justify-content-center text-center black-strong mt-2" style="font-size: 24px;">On IME</p>
            </div>
          </div>

          <!-- 
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
          -->

        </div>
      </div>
    </div>

    <!-- Modal 1 Pay -->
    <div class="modal fade" id="payModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-pay">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <div class="modal-body row">
            <div class="col-10 d-flex justify-content-center align-items-start">
              <p class="text-center white-strong">PAY FIRST TO JOIN THE MAIN EVENT</p>
            </div>
            <div class="col-2 d-flex justify-content-end">
              <a class="icon-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
              <a class="btn-modal" data-bs-dismiss="modal"><p class="text-center blue-strong">Later</p></a>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#payModal2"><p class="text-center blue-strong">Join</p></a>
            </div>         
          </div>

          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div> -->

        </div>
      </div>
    </div>

    <!-- Modal 2 Pay -->
    <div class="modal fade" id="payModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-pay">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <div class="modal-body row">
            <div class="col-10 d-flex justify-content-center align-items-start">
            </div>
            <div class="col-2 d-flex justify-content-end">
              <a class="icon-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
              <img src="{{ asset ('assets/img/register_bar/ticket.png') }}" width="300" />
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
              <p class="text-center yellow-strong">Rp10.000,00</p>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#payModal3"><p class="text-center blue-strong">Pay</p></a>
            </div>         
          </div>

          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div> -->

        </div>
      </div>
    </div>

    <!-- Modal 3 Pay -->
    <div class="modal fade" id="payModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-pay">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

          <div class="modal-body row">
            <div class="col-10 d-flex justify-content-center align-items-start">
            </div>
            <div class="col-2 d-flex justify-content-end">
              <a class="icon-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#payModal3"><p class="text-center blue-strong">Bank Transfer</p></a>
            </div>   
            <div class="col-12 d-flex justify-content-center align-items-center">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#payModal3"><p class="text-center blue-strong">DANA</p></a>
            </div>  
            <div class="col-12 d-flex justify-content-center align-items-center">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#payModal3"><p class="text-center blue-strong">OVO</p></a>
            </div>  
            <div class="col-12 d-flex justify-content-center align-items-center">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#payModal3"><p class="text-center blue-strong">GoPay</p></a>
            </div>    
          </div>

          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div> -->

        </div>
      </div>
    </div>
</body>

<div id="preloader"></div>
  <!--
  <a href="#about" class="to-bottom d-flex align-items-center justify-content-center"><i class="bi bi-arrow-down-short"></i></a>
  -->

  <!-- Vendor and Google JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script> -->
  <!-- <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> -->
  <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <!-- <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script> -->
  <!-- <script src="{{ asset ('assets/vendor/purecounter/purecounter.js') }}"></script> -->
  <script src="{{ asset ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template JS File(s) -->
  <script src="{{ asset ('assets/js/talkshow_room.js') }}"></script>
  <script src="{{ asset ('assets/js/cloud.js') }}"></script>
  <script>
    // on the footer of redirect page
    if (window.location.hash == "#notpaid") {
      $(document).ready(function(){
        $('#payModal').modal('show'); 
        // $("#registrationModal").modal();
        // alert("Tes")
        // document.getElementById("registrationModal").showModal();
      });        
    }
  </script>

  <!-- Zoom Js -->
  <script src="js/zoom.js"></script>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</html>
