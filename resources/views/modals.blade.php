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
            <!-- <div class="col-10 d-flex justify-content-center align-items-center mt-4">
              <p class="text-center blue-strong">OR</p>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-start">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#emailLoginModal"><p class="text-center white-regular">Email</p></a>
            </div> -->
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
            <!--
            <div class="col-10 d-flex justify-content-center align-items-center mt-4">
              <p class="text-center blue-strong">OR</p>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-start">
              <a class="btn-modal" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registrationModal"><p class="text-center white-regular">Email</p></a>
            </div> -->
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
              <a data-bs-dismiss="modal" onclick="location.href='about';"><div class="menu-modal-icon d-flex justify-content-center"><i class="about-icon"></i></div></a>
              <p class="d-flex justify-content-center text-center black-strong mt-2" style="font-size: 24px;">About</p>
            </div>
            <div class="col-4 col-md-3 col-lg-2 menu-modal-row">
              <a data-bs-dismiss="modal" onclick="location.href='speaker';"><div class="menu-modal-icon d-flex justify-content-center"><i class="speaker-icon"></i></div></a>
              <p class="d-flex justify-content-center text-center black-strong mt-2" style="font-size: 24px;">Speakers</p>
            </div>
            <div class="col-4 col-md-3 col-lg-2 menu-modal-row">
              <a data-bs-dismiss="modal" onclick="location.href='schedule';"><div class="menu-modal-icon d-flex justify-content-center"><i class="schedule-icon"></i></div></a>
              <p class="d-flex justify-content-center text-center black-strong mt-2" style="font-size: 24px;">Schedule</p>
            </div>
            <div class="col-4 col-md-3 col-lg-2 menu-modal-row">
              <a data-bs-dismiss="modal" onclick="location.href='#about';"><div class="menu-modal-icon d-flex justify-content-center"><i class="on-ime-icon"></i></div></a>
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