<div id="preloader"></div>
<!-- <a href="#about" class="to-bottom d-flex align-items-center justify-content-center"><i class="bi bi-arrow-down-short"></i></a> -->

<!-- Vendor and Google JS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script> -->
<!-- <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> -->

<script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- <script src="{{ asset ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> -->
<!-- <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script> -->
<!-- <script src="{{ asset ('assets/vendor/purecounter/purecounter.js') }}"></script> -->

<!-- Template JS File(s) -->
<script src="{{ asset ('assets/js/main.js') }}"></script>
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