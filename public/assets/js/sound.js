function musicBackground() {
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', '/assets/sound/sound.mp3');
    // {{ asset ("assets/sound/sound.mp3") }}
    audioElement.setAttribute('autoplay', 'autoplay');
    audioElement.load()
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

    // Console log condition detection
    console.log(audioElement.muted);

    // onModalShow
    $('#aboutVideoModal').on('show.bs.modal', function (event) {
      audioElement.muted = true;
    });

    // onModalHidden
    $('#aboutVideoModal').on('hidden.bs.modal', function (event) {
      audioElement.muted = false;
    });

    $('.sound').click(function() {
        if (audioElement.muted == false){
            audioElement.muted = true;
        } else {
            audioElement.muted = false;
        }
    });

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
