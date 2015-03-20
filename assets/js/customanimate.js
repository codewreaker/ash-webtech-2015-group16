$(document).ready(function() {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    var count = 0;

    /* This first function animates hiding and revealing */
    $('#menu').click(function() {
        var shiftLeft = 'animated bounceIn shiftLeft';
        var shiftRight = 'animated slideInLeft shiftRight';
        if (count % 2 == 0) {
            $(this).removeClass(shiftRight);
            $("#sidemenu").removeClass('animated slideInLeft');
            $("#sidemenu").addClass('animated slideOutLeft');
            $(this).addClass(shiftLeft);
        } else if (count % 2 != 0) {
            $(this).removeClass(shiftLeft);
            $(this).addClass(shiftRight);
            $("#sidemenu").removeClass('animated slideOutLeft');
            $("#sidemenu").addClass('animated slideInLeft');
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
