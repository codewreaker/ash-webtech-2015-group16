/* This Javascript Files Deals With Scripts For Functionality */
$(document).ready(function() {

    /* activating a selected div */
    $(".sideMenuItem").click(function() {
        var $selectedItem = $(this).attr('id');
        var $selectedPage = "#" + $selectedItem + "Page";
        /*        $($selectedPage).toggleClass("hide");*/
        $(".sideMenuItem").each(function() {
            var $allItems = $(this).attr('id');
            var $allElements = "#" + $allItems + "Page";
            $($allElements).addClass("hide");
        });
        $($selectedPage).removeClass("hide");


    });


});
