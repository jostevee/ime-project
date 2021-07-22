/**
* Template Name: LB3labs One - v1.0.0
* Template URL: 
* Author: LB3Labs Developer
* License: 
*/

$(document).ready(function() {

    function runIt(item$) {
        var animWidth = Math.min($(window).width(), $(".main-page").width());
        var numRand = Math.floor(Math.random()*6000) + 7000;
        // alert(numRand);
        item$.animate({left: (animWidth + item$.width()) + "px"}, numRand, 'linear', function() {
            item$.css("left", -item$.width());   // set back to just off the left side of the screen
            runIt(item$); // start again
        });
    }

    // start each cloud separately
    $('.cloud').each(function() {
        runIt($(this));
    });

});


// $(function() {
//     function resetAnimation() {
//       var windowWidth = $(window).width();
//     //   alert(windowWidth);
// 	  $("#slider").animate({ "left": "-="+($("#slider").width()+$(window).width())+"px"}, 30000, function() {
// 	    $("#slider").css("left", "0");
// 	    resetAnimation();
// 	  });
//         }
// 	resetAnimation();
//       });

      
// $(document).ready(function() {

//     function loop() {
//         $('#clouds').css({right:0});
//         $('#clouds').animate ({
//             right: '+=1400',
//         }, 5000, 'linear', function() {
//             loop();
//         });
//     }
        
//     loop();
//  });