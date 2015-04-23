$(document).ready(function() {

    $("body").on('click', '#sign_up', function() {
        sign_up();
    });

    $("body").on('click', '#login', function() {
        login();
    });

    $("body").on('click', '#login_signup', function() {
        $('#form_style').addClass('hide');
        $('#form_style2').removeClass('hide');
    });


    function login() {
        var username = $("#username").val();
        var password = $("#password").val();
        var dataString = 'opt=1&pn=' + username + '&pw=' + password;
        var obj = sendLoginRequest(dataString);
        if (obj.result == 1) {
            alertMessage(obj.message, 1, 1);
            window.location.replace("main.php");
        } else {
            alertMessage(obj.message, 2, 1);
        }
    }

    function sign_up() {
        var first_name = $("#fn").val();
        var last_name = $("#ln").val();
        var user_name = $("#un").val();
        var pword = $("#pass").val();
        var pos = $("#pos option:selected").text();
        var type = $("#ptype option:selected").text();
        var tel = $("#cd").val();
        var dataString = 'opt=0&fn=' + first_name + '&ln=' + last_name +
            '&un=' + user_name + '&pass=' + pword + '&pos=' + pos + '&pt=' + type +
            '&cd=' + tel;
        var obj = sendLoginRequest(dataString);
        if (obj.result == 1) {
            alertMessage(obj.message, 1, 2);
        } else {
            alertMessage(obj.message, 2, 2);
        }

    }







    /* A function that sends a dataString with url to the operations.php which has all the functionality of the application*/
    function sendLoginRequest(dataString) {
        var obj = $.ajax({
            type: "POST",
            url: "operations/login_ajax.php",
            data: dataString,
            async: false,
            cache: false
        });
        var result = $.parseJSON(obj.responseText);
        return result;
    }



    /*
     *This function displays the status message in a smooth transition
     * @param message is the message you want to
     * @param type is the type of alert 1 is green-success 2 is orange-warning and 3 is red-danger
     * @param page 1 is the addTask page 2 is the viewReport page
     */
    function alertMessage(message, type, page) {
        var divSelected;
        if (page == 1) {
            divSelected = "#loginStatus";
        } else if (page == 2) {
            divSelected = "#loginStatus2";
        }
        $(divSelected).removeClass("green");
        $(divSelected).removeClass("orange");
        $(divSelected).removeClass("red");
        if (type == 1) {
            $(divSelected).text(message);
            $(divSelected).addClass("green");
            $(divSelected).fadeIn().delay(1000).fadeOut();
        } else if (type == 2) {
            $(divSelected).text(message);
            $(divSelected).addClass("orange");
            $(divSelected).fadeIn().delay(1000).fadeOut();
        } else {
            $(divSelected).text(message);
            $(divSelected).addClass("red");
            $(divSelected).fadeIn().delay(1000).fadeOut();
        }

    }


});
