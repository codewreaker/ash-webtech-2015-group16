/* This Javascript Files Deals With Scripts For Functionality */
$(document).ready(function () {

    /* A variable to check if a task has been created or not */
    var isCreated = false;
    var selectedTuple = "";


    /****************Operations for Table*************************/




    $(".sideMenuItem, .cards").on('click', switchDiv);
    $(".create").on('click', addForm);
    $("body").on('click', '.cancel', removeForm);
    editOptions();
    addTask();
    deleteTask();




    /****************************************************/



    /****************************Ajax Function Calls**************/

    /********* This Function Adds a Task to The Database *********/
    function addTask() {
        $("body").on('click', '#submit', function () {
            var name = $("#tn").val();
            var personnel = $("#tp").val();
            var date = $("#td").val();
            var description = $("#desc").val();
            var dataString = 'tn=' + name + '&desc=' + description + '&tp=' + personnel + '&td=' + date;

            // validation of form
            if (name == '' || personnel == '' || date == '' || description == '') {
                alert("Please fill all fields");
            } else {
                // AJAX code to submit form
                $.ajax({
                    type: "POST",
                    url: "operations/addtask.php",
                    data: dataString,
                    cache: false,
                    success: function () {
                        $("#divStatus").fadeIn().delay(1000).fadeOut();
                    }
                });
            }
        });
    }

    /********* This Function deletes a selected Table **********/
    function deleteTask() {
        $("body").on('click', '.fa-trash-o', function () {
            var id = 17;
            var dataString = 'tid=' + id;
            // validation of form
            if (id == '') {
                alert("You have not clicked on a tuple ");
            } else {
                // AJAX code to submit form
                $.ajax({
                    type: "POST",
                    url: "operations/deletetask.php",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        alert(result);
                    }
                });
            }
        });
    }




    /***************************Ajax Function Calls**************/









    /****************Operations for Table*************************/


    function editOptions() {
        var x = "";
        var y = "";
        var isActive = false;
        $("#listSection tbody").on('click', function () {
            selectedTuple = $(this).attr('value');
            $(".optionalFeaturesAlpha").fadeIn();
        });

        $("body").on('click', '.fa-times', function () {
            $(".optionalFeaturesAlpha").fadeOut();
        });

        // var gets the current position that the mouse was clicked
        $("#listSection tbody").on('click', function (event) {
            x = event.pageX;
            y = event.pageY;
            $(".optionalFeaturesAlpha").css('left', x - 150);
            $(".optionalFeaturesAlpha").css('top', y - 80);

        });
    }


    /* activating a selected div and switching between divs */
    function switchDiv() {
        var $selectedItem = $(this).attr('id');
        var $selectedPage = "#" + $selectedItem + "Page";
        /*        $($selectedPage).toggleClass("hide");*/
        $(".sideMenuItem").each(function () {
            var $allItems = $(this).attr('id');
            var $allElements = "#" + $allItems + "Page";
            $($allElements).addClass("hide");
        });
        $($selectedPage).removeClass("hide");
    }

    /* This section adds a form component to the DOM */
    function addForm() {
        var form = '<form class="createForm animated fadeIn">' + '<div class="divider"></div>' + '<input type="text" placeholder="Task Name" id="tn">' + '<select id="tp"  class="form-styling">' + '<option value="0">Select a Personnel</option>' + '</select>' + '<input type="date" id="td" class="form-styling">' + '<div>' + '<textarea id="desc" placeholder="Enter a Short Description of the Task"></textarea>' + '</div>' + '<input id="submit" type="button" name="add" value="Save Task" />' + '<input type="button" class="cancel" value="Cancel" />' + '</form>';

        if (!isCreated) {
            $("#formSection").append(form);
            isCreated = true;
        }

        /* This portion increases the height of the sidebar as you increase the tasks */
        var $toAdjust = $("#divContent").height() + 100;
        $("#sidemenu").css('height', $toAdjust);
    }



    /* Remove a row when you click the delete button */
    function removeForm() {
            var originalDiv = '<div id="formSection"></div>';
            $("#formSection").replaceWith(originalDiv);
            isCreated = false;
        }
        /************************************************************************************************/

});