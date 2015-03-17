$(document).ready(function() {
    // var currItem =

    /* This first function animates the sidebar and hides it for the first time when you click it */
    $("#menu").click(function() {
        //These classes are removed if they only exist
        $("#menu2").removeClass('animated bounceOutRight');
        //

        $("#sidemenu").addClass('animated fadeOutLeft');
        $("#menu2").removeClass('hide');
        $("#menu2").addClass('animated bounceInRight');
    });

     /* This first function animates the sidebar after it is hidden */
    $("#menu2").click(function() {
        $("#menu2").removeClass('animated bounceInRight');
        $("#menu2").addClass('animated bounceOutRight');
        $("#sidemenu").removeClass('animated fadeOutLeft');
        $("#sidemenu").addClass('animated fadeInLeft');

    });

     /* This first function animates and sets a clicked sidebar active */
    $(".sideMenuItem").each(function(){
        //$(".sideMenuItem").removeClass('active');
        var $selectedItem = $(this);
        $selectedItem.click(function(){
            $(".sideMenuItem").removeClass('active');
            $selectedItem.toggleClass('active');
        });
    });

    $(".menuitem").mouseover(function(){
        $(".menuitem").addClass("animated bounceInTop");
    });
});
