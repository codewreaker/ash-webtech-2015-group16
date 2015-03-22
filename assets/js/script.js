/* This Javascript Files Deals With Scripts For Functionality */
$(document).ready(function() {

    /* A variable to check if a task has been created or not */
    var isCreated = false;


    $(".sideMenuItem").on('click',switchDiv);
    $(".create").on('click', addForm);
    $("body").on('click', '.fa-trash-o',removeForm);
    $("body").on('click', '.fa-refresh', refresh);




    /* activating a selected div and switching between divs */
    function switchDiv(){
        var $selectedItem = $(this).attr('id');
        var $selectedPage = "#" + $selectedItem + "Page";
        /*        $($selectedPage).toggleClass("hide");*/
        $(".sideMenuItem").each(function() {
            var $allItems = $(this).attr('id');
            var $allElements = "#" + $allItems + "Page";
            $($allElements).addClass("hide");
        });
        $($selectedPage).removeClass("hide");
    }

    /* This section adds a orm component to the DOM */
    function addForm() {
        var form = '<form action="POST" class="createForm animated fadeIn">' + '<div class="divider"></div>' + '<input id="d" type="text" placeholder="Task Name">' + '<select name="" id="" class="form-styling">' + '<option value="0">Select a Personnel</option>' + '<option value="1"></option>' + '<option value="2"></option>' + '<option value="3"></option>' + '<option value="4"></option>' + '<option value="5"></option>' + '</select>' + '<input type="date" class="form-styling">' + '<div>' + '<textarea placeholder="Enter a Short Description of the Task"></textarea>' + '</div>' + '<input type="button" value="Save Task" />' + '<div class="optionalFeatures">' + '<span class="fa fa-edit"></span>' + '<span class="fa fa-trash-o"></span>' + '<span class="fa fa-refresh" ></span>' + '</div>' + '</form>';

        if (!isCreated) {
            $("#formSection").append(form);
            isCreated = true;
        }

        /* This portion increases the height of the sidebar as you increase the tasks */
        var $toAdjust = $("#divContent").height() + 100;
        $("#sidemenu").css('height', $toAdjust);
    }

    /*This refreshes an existing form you are filling */
    function refresh() {
        var form = '<div id="formSection"><form action="POST" class="createForm animated fadeIn">' + '<div class="divider"></div>' + '<input id="d" type="text" placeholder="Task Name">' + '<select name="" id="" class="form-styling">' + '<option value="0">Select a Personnel</option>' + '<option value="1"></option>' + '<option value="2"></option>' + '<option value="3"></option>' + '<option value="4"></option>' + '<option value="5"></option>' + '</select>' + '<input type="date" class="form-styling">' + '<div>' + '<textarea placeholder="Enter a Short Description of the Task"></textarea>' + '</div>' + '<input type="button" value="Save Task" />' + '<div class="optionalFeatures">' + '<span class="fa fa-edit"></span>' + '<span class="fa fa-trash-o"></span>' + '<span class="fa fa-refresh" ></span>' + '</div>' + '</form></div>';

        $("#formSection").replaceWith(form);

        /* This portion increases the height of the sidebar as you increase the tasks */
        var $toAdjust = $("#divContent").height() + 100;
        $("#sidemenu").css('height', $toAdjust);
    }

    /* Remove a row when you click the delete button */
    function removeForm(){
        var originalDiv = '<div id="formSection"></div>';
        $("#formSection").replaceWith(originalDiv);
        isCreated = false;
    }

});
