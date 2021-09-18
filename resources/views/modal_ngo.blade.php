    <!-- Modal NGO -->
    <div class="modal fade" id="ngoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered"> <!--  modal-fullscreen-md-down -->
        <div class="modal-content modal-signin-signup-menu">

          <!-- <div class="modal-header"> -->
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
          <!-- </div> -->

            <div class="modal-body row d-flex justify-content-center">

              <!-- Validation error message -->
              <x-jet-validation-errors class="mb-4" />

              <!-- Close button -->
              <div class="col-12 d-flex justify-content-end">
                <a class="icon-close" id="close_modal" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></a>
              </div>

              <!-- Name -->
              <div class="col-12 d-flex justify-content-center align-items-center my-2">
                <h3 class="text-center blue-title" id="name_section"></h3>
              </div>

              <div class="col-12 d-flex justify-content-center row">
                <div class="col-md-5 col-lg-5 d-flex justify-content-center">
                  <div class="comment-box">
                    <div id="video_id"></div>
                  </div>
                </div>

                <div class="col-md-7 col-lg-7 d-flex justify-content-center row">
                  <div class="col-12 d-flex justify-content-center">
                    <!-- <div class="video-box"></div> -->
                    <iframe name="videoFrame" id="videoFrame" class="embed-responsive-item video-box" src="#" allowfullscreen></iframe>
                  </div>
                  <div class="col-12 d-flex justify-content-center">
                    <div class="info-box p-3">
                      <div class="col-12 d-flex">
                        <h4 class="text-start white-title">INFO</h4>
                      </div>
                      <div class="col-12 d-flex content">
                        <p class="text-start white-regular" id="info_section"></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-center row">
                    <a class="col-6 col-lg-6 ngo d-flex justify-content-center align-items-center" id="ig_section"><i class="fab fa-instagram"></i></a>
                    <a class="col-6 col-lg-6 ngo d-flex justify-content-center align-items-center" id="fb_section"><i class="fab fa-facebook"></i></a>
                    <!-- <a class="col-4 col-lg-4 medpart d-flex justify-content-center align-items-center"><i class="fab fa-twitter"></i></a> -->
                  </div>
                </div>
              </div>

        </div>
      </div>
    </div>