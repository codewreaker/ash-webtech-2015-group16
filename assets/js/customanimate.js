$(document).ready(function() {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    var count = 0;

    /* This first function animates hiding and revealing */
    $('#menu').click(function() {
        var shiftLeft = 'animated bounceIn shiftLeft';
        var shiftRight = 'animated slideInLeft shiftRight';
        var adjust = 'adjust';
        if (count % 2 == 0) {
            $(this).removeClass(shiftRight);
            $("#content").removeClass(adjust);
            $("#sidemenu").removeClass('animated slideInLeft');
            $("#sidemenu").addClass('animated slideOutLeft');
            $(this).addClass(shiftLeft);
        } else if (count % 2 != 0) {
            $(this).removeClass(shiftLeft);
            $(this).addClass(shiftRight);
            $("#sidemenu").removeClass('animated slideOutLeft');
            $("#sidemenu").addClass('animated slideInLeft');
            $("#content").removeClass(adjust);
            $("#content").addClass(adjust);
        }
        count++;
    });

    /* This first function animates and sets a clicked sidebar active */
    $(".sideMenuItem").each(function() {
        //$(".sideMenuItem").removeClass('active');
        var $selectedItem = $(this);
        $selectedItem.click(function() {
            $(".sideMenuItem").removeClass('active');
            $selectedItem.toggleClass('active');
        });
    });


});
