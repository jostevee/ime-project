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
<script src="{{ asset ('assets/js/sound.js') }}"></script>
<script src="{{ asset ('assets/js/talkshow_room.js') }}"></script>
<script src="{{ asset ('assets/js/merchandise.js') }}"></script>
<script src="{{ asset ('assets/js/games.js') }}"></script>
<script src="{{ asset ('assets/js/cloud.js') }}"></script>

<!-- <script src="{{ asset ('assets/js/maps.js') }}"></script> -->

<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  var userwriter = <?php echo json_encode($userwriter); ?>;
  var userid = <?php echo json_encode($userid); ?>;
  var submittedstatus = <?php echo json_encode($submittedstatus); ?>;
  
  // on the footer of redirect page
  if (window.location.hash == "#notpaid") {
    location.href="/";            
  }

  if (userwriter == -1 && submittedstatus == -1) {
    location.href="/";       
  }
  
  if (userwriter == 0 && submittedstatus == 0) {
    location.href="/";              
  }

  if (userwriter == 0 && submittedstatus == 1) {
    location.href="/";               
  }

  $('#ngoModal').on('show.bs.modal', function (event) {
    var id = $(event.relatedTarget).data('id');
    var name = $(event.relatedTarget).data('name');
    var info = $(event.relatedTarget).data('info');
    var vid = $(event.relatedTarget).data('vid');
    var ig = $(event.relatedTarget).data('ig');
    var fb = $(event.relatedTarget).data('fb');


    // $(this).find(".modal-content").text(myVal);

    var str_id = "You Have Entered " + "ID: " + id;
    var str_name = "You Have Entered " + "NAME: " + name;
    var str_info = "You Have Entered " + "INFO: " + info;
    var str_video = "You Have Entered " + "VIDEO: " + vid;
    var str_ig = "You Have Entered " + "IG: " + ig;

    $("#id_section").html(id);
    $("#name_section").html(name);
    $("#info_section").html(info);
    $("#video_section").html(vid);
    $("#ig_section").attr("href", ig);
    $("#fb_section").attr("href", fb);
    $("#videoFrame").attr("src", vid);

    // document.getElementById("video_url").href="https://google.com";
    // $("#video_url").href(video);
  });

  $('#medpartModal').on('show.bs.modal', function (event) {
    var id = $(event.relatedTarget).data('id');
    var name = $(event.relatedTarget).data('name');
    var info = $(event.relatedTarget).data('info');
    var vid = $(event.relatedTarget).data('vid');
    var ig = $(event.relatedTarget).data('ig');
    var fb = $(event.relatedTarget).data('fb');


    // $(this).find(".modal-content").text(myVal);

    var str_id = "You Have Entered " + "ID: " + id;
    var str_name = "You Have Entered " + "NAME: " + name;
    var str_info = "You Have Entered " + "INFO: " + info;
    var str_video = "You Have Entered " + "VIDEO: " + vid;
    var str_ig = "You Have Entered " + "IG: " + ig;

    $("#id_section").html(id);
    $("#name_section").html(name);
    $("#info_section").html(info);
    $("#video_section").html(vid);
    $("#ig_section").attr("href", ig);
    $("#fb_section").attr("href", fb);
    $("#videoFrame").attr("src", vid);

    // document.getElementById("video_url").href="https://google.com";
    // $("#video_url").href(video);
  });

  /*
  var id;
  var name;
  var info;
  var video;
  var ig;

  $("#medpartModalId").click(function () {
    id = $("#id").val();
    name = $("#name").val();
    info = $("#info").val();
    video = $("#video").val();
    ig = $("#ig").val();

    var str_id = "You Have Entered " + "ID: " + id;
    var str_name = "You Have Entered " + "NAME: " + name;
    var str_info = "You Have Entered " + "INFO: " + info;
    var str_video = "You Have Entered " + "VIDEO: " + video;
    var str_ig = "You Have Entered " + "IG: " + ig;

    $("#id_section").html(str_id);
    $("#name_section").html(str_name);
    $("#info_section").html(str_info);
    $("#video_section").html(str_video);
    $("#ig_section").html(str_ig);
    $("#someFrame").attr("src", video);
    // $("#video_url").href(video);


    /*
    $('a[href^="http://"]').each(function(){ 
        var oldUrl = $(this).attr("href"); // Get current url
        var newUrl = oldUrl.replace("http://", "https://"); // Create new url
        $(this).attr("href", newUrl); // Set href value
    });

    $('a[href^="#"]').each(function(){ 
        var oldUrl = $(this).attr("href"); // Get current url
        var newUrl = oldUrl.replace("#", video); // Create new url
        $(this).attr("href", newUrl); // Set herf value
    });
    

    // document.getElementById("abc").href="xyz.php";
  });
  */

</script>

<!-- Zoom Js -->
<!-- <script src="js/zoom.js"></script> -->

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>