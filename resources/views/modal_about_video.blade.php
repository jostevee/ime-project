<!-- Modal About Video -->
<div class="modal fade" id="aboutVideoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="aboutVideoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-md-down"> <!--  modal-fullscreen-md-down -->
    <div class="modal-content modal-about-video">

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
          <h3 class="text-center blue-strong" id="info_section"> </h3>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">
          <h4 class="text-center blue-strong" id="name_section"> </h4>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center mt-4">
          <!--
            <video class="embed-responsive-item video-box" controls autoplay>
            <source id="videoFrame" src="#"><!-- type="video/mp4"
          </video>
          -->

          <iframe name="videoFrame" id="videoFrame" class="embed-responsive-item video-play-box" src="#" allowfullscreen></iframe>
          <!-- <img src="{{ asset('assets/img/poster_ims.png') }}" class="col-12 d-flex justify-content-center align-items-center" style="border-radius: 40px;"/> -->
        
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center mt-2">
          <a class="col-8 btn-modal" style="border-radius: 25px;" data-bs-dismiss="modal"><p class="text-center yellow-strong" style="font-size: 16;">Close</p></a>
        </div> 
      </div>

      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->

    </div>
  </div>
</div>