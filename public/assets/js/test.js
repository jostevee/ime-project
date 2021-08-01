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

//   $(window).scroll(function() {
//     var scroll = $(window).scrollTop();
//     $(".bg-move").css({
//       width: (100 + scroll/10) + "%"
//     })
//   })