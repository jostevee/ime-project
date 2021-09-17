<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>
<link href="{{ asset ('assets/css/zoom.css') }}" rel="stylesheet" type="text/css">

<div align="center" class="fond">
<div style="width:100%;">

<div class="style_prevu_kit" style="background-color:#cb2025;"></div>
<div class="style_prevu_kit" style="background-color:#f8b334;"></div>
<div class="style_prevu_kit" style="background-color:#97bf0d;"></div>
<div class="style_prevu_kit" style="background-color:#00a096;"></div>
<div class="style_prevu_kit" style="background-color:#93a6a8;"></div>


<div style=" padding:5px; color:#b5e6e3; font-weight:300; font-size:30px; font-family:'Roboto';padding-top:20px;">CSS <font style="font-weight:400;">HOVER</font></div>
        <a href="http://www.wifeo.com/code" style="text-decoration:none;" target="_blank"><div style="color:#b5e6e3; font-weight:300; font-size:20px; font-family:'Roboto';">www.wifeo.com/code</div></a>
  
</div>
</div> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>


<div class="img-hover-zoom">
    <div id="scene">
        <div data-depth="5">
            <div class="imagemaps">
            <a href="/">TES DULU</a>
            <img src="assets/img/all_general_main_page/maps.png" alt="This zooms-in really well and smooth">
            </div>
        </div>
    </div>
</div>

<script>
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);
</script>

<style>
    /* [1] The container */
    .img-hover-zoom {
    pointer-events: auto;
    width: 100%;
    height: 600px; /* [1.1] Set it as per your need */
    overflow: hidden; /* [1.2] Hide the overflowing of child elements */
    }

    /* [2] Transition property for smooth transformation of images */
    .img-hover-zoom .imagemaps {
    width: 100%;
    cursor: pointer;
    pointer-events: auto;
    transition: transform .5s ease;
    }

    .img-hover-zoom .imagemaps img {
    width: 100%;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .img-hover-zoom:hover .imagemaps {
    transform: scale(1);
    }
</style>