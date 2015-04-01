$(document).ready(function(){
    $("#sign").click(function(){
        $("#form_style").fadeOut();
        $("#form_style2").fadeIn();
    });

    $("#back").click(function(){
        $("#form_style2").fadeOut();
        $("#form_style").fadeIn();
    });

     $("#save").click(function(){
        $("#form_style2").fadeOut();
        $("#form_style").fadeIn();
    });
});

