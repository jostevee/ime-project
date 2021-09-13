// $(document).ready(function() {
// });

if(window.attachEvent) {
  window.attachEvent('onload', musicBackground);
} else {
  if(window.onload) {
      var curronload = window.onload;
      var newonload = function(evt) {
          curronload(evt);
          yourFunctionName(evt);
      };
      window.onload = newonload;
  } else {
      window.onload = musicBackground;
  }
}

// window.addEventListener("load", function(){
// });

function musicBackground(){
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', '/assets/sound/sound.mp3');
    // {{ asset ("assets/sound/sound.mp3") }}
    audioElement.setAttribute('autoplay', 'autoplay');
    //audioElement.load()
    $.get();
    audioElement.addEventListener("load", function() {
      audioElement.play();
    }, true);

    /*
    audioElement.addEventListener("ended", function() {
      this.currentTime = 0;
      this.play();
    }, false);
    */

    console.log(audioElement.muted);

    $('.sound').click(function() {
        if (audioElement.muted == false){
            audioElement.muted = true;
        } else {
            audioElement.muted = false;
        }
    });

    // $('.glightbox').click(function() {
    //   if (audioElement.muted == false){
    //       audioElement.muted = true;
    //   } else {
    //       audioElement.muted = false;
    //   }
    // });


    /*
    $('.sound').click(function() {
        alert(audioElement.muted)
        /*
        if (audioElement.muted == true) {
          audioElement.muted = false;
        } else {
          audioElement.muted = true;
        }    
    }
    */


    // toggleSound(img){
    //     if (audioElement.muted == true) {
    //         audioElement.muted = false;
    //         // $("#audio").prop('muted', false);
    //     } else {
    //         audioElement.muted = true;
    //         // $("#audio").prop('muted', true);
    //     }
    //     img.src= img.src=="http://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/500px-Speaker_Icon.svg.png" ? "https://cdn2.iconfinder.com/data/icons/picons-essentials/57/music_off-512.png" : "http://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/500px-Speaker_Icon.svg.png";
    // }
};