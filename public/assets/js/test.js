$(window).on("load resize scroll", function() {
    $(".bg-static").each(function() {
        var windowTop = $(window).scrollTop();
        var elementTop = $(this).offset().top;
        var leftPosition = windowTop - elementTop;
        var rightPosition = elementTop - windowTop;

        var x = $(".bg-move").position();
        console.log(x.left);
        console.log('windowTop: ', windowTop);
        console.log('elementTop: ', elementTop);
        console.log('leftPosition: ', leftPosition);
        console.log('rightPosition: ', rightPosition);

        if (windowTop > 599) {
            var zoom = 100;
            zoom++
            console.log('zoom: ', zoom);
            $(this)
            .find(".bg-move")
            .css({ left: rightPosition, width: zoom + "%"});
        } else {
            $(this)
            .find(".bg-move")
            .css({ left: leftPosition });
        }

    });
});

/*
$(".BlogImage")
      .css("opacity", 1 - $(window).scrollTop() / 450)
      .css("background-size", (100 + 100 * $(window).scrollTop() / 450) + "%");
*/

/*
$('#first').css({
    background: 'none'
  });
  
  /* Scrolling 
  $(window).scroll(function() {
    var $maxScroll = 300;
    var $maxScale = 1;
    var $x = $(window).scrollTop() / 100 + 1;
    if ($(window).scrollTop() > $maxScroll) $x = $maxScale;
    //    $('#first .background').css({transform: 'scale('+$x+','+$x+')'});
    $('#first .background').css({
      transform: 'scale(' + $x + ',' + $x + ')'
    });
  
  });
*/
  

/*
$(".bg-move").mousemove(function(e){
    var amountMovedX = (e.pageX * -1 / 2);
    var amountMovedY = (e.pageY * -1 / 2);
    $(this).css({
           'background-size': '200%',
           'background-position': amountMovedX + 'px ' + amountMovedY + 'px'} 
    );
});
*/

/*
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    $(".bg-move").css({
      width: (100 + scroll/10) + "%"
    })
  })
*/