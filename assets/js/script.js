/* This Javascript Files Deals With Scripts For Functionality */
$(document).ready(function() {

    /* A variable to check if a task has been created or not */
    var addFormIsCreated = false;
    var reportFormIsCreated = false;
    var selectedTuple = "";
    var $selectedPage = "";

    /****************Operations for Table*************************/




    $(".sideMenuItem, .cards").on('click', switchDiv);
    $(".create").on('click', function() {
        addForm(1);
    });
    $(".fa-file-o").on('click', function() {
        addForm(2);
    });
    $("body").on('click', '#formSection .cancel', function() {
        removeForm(1);
    });
    $("body").on('click', '#formSection2 .cancel', function() {
        removeForm(2);
    });
    displayTableJSON();
    editOptions();
    addTask();
    deleteTask();
    addReport();
    getTuplePrimaryID();




    /****************************************************/



    /****************************Ajax Function Calls**************/

    /********* This Function Adds a Task to The Database *********/
    function addTask() {
        $("body").on('click', '#saveTask', function() {
            var dataString = getFormPost();
            if (dataString != null) {
                var obj = sendRequest(dataString);
                if (obj.result == 1) {
                    alertMessage(obj.message, 1, 1);
                } else if (obj.result == 0) {
                    alertMessage(obj.message, 3, 1);
                }
            } else {
                alertMessage("Please Fill All Fields", 2, 1);
            }
        });
    }

    /********* This Function Adds a Report to a Task *********/
    function addReport() {
        $("body").on('click', '#saveReport', function() {
            var dataString = getReportPost();
            if (dataString != null) {
                var obj = sendRequest(dataString);
                if (obj.result == 1) {
                    alertMessage(obj.message, 1, 2);
                } else if (obj.result == 0) {
                    alertMessage(obj.message, 3, 2);
                }
            } else {
                alertMessage("Please Fill All Fields", 2, 2);
            }
        });
    }


    /********* This Function deletes a selected Table **********/
    function deleteTask() {
        $("body").on('click', '.fa-trash-o', function() {
            //var dataString = 'cmd=2&tid='+selectedTuple;
            var dataString = 'opt=2&tid=' + 34;
            // validation of form data here
            // AJAX code to submit form
            var obj = sendRequest(dataString);
            if (obj.result == 1) {
                alertMessage(obj.message, 1, 1);
            } else if (obj.result == 0) {
                alertMessage(obj.message, 2, 1);
            }
        });
    }

    // Get the data from the form and validate before returning
    function getFormPost() {
        var name = $("#tn").val();
        var admin = 1;
        var personnel = $("#tp").val();
        var date = $("#td").val();
        var description = $("#desc").val();
        var dataString = 'opt=1&tn=' + name + '&desc=' + description + '&admin=' + admin + '&tp=' + personnel + '&td=' + date;
        if (name == '' || personnel == '' || date == '' || description == '') {
            dataString = null;
        }
        return dataString;
    }

    // Get the data from the form and validate before returning
    function getReportPost() {
        var reportId = selectedTuple;
        var limitations = $("#lim").val();
        var errors = $("#err").val();
        var status = getStatus();
        var dataString = 'opt=4&rid=' + reportId + '&lim=' + limitations + '&err=' + errors + '&st=' + status;
        if (limitations == '' || errors == '' || status == '') {
            dataString = null;
        }
        return dataString;
    }

    /* A function that sends a dataString with url to the operations.php which has all the functionality of the application*/
    function sendRequest(dataString) {
        var obj = $.ajax({
            type: "POST",
            url: "operations/operations.php",
            data: dataString,
            async: false,
            cache: false
        });
        var result = $.parseJSON(obj.responseText);
        return result;
    }

    /*
     * This method returns the id of a clicked tuple, it does not fetch from the database but gets it from the already displayed table by getting the value attribute of the trim
     * @param void
     */
    function getTuplePrimaryID() {
        $("body").on('click', 'tr', function() {
            selectedTuple = $("tr").attr('value');
        });
    }

    /*
     *This part of the code creates a table with the JSON data
     *and appends it to the HTML body
     */
    function displayTableJSON() {
        var dataString = 'opt=7';
        $obj = sendRequest(dataString);
        if ($obj.result == 1) {
            var data = $obj.tasks;
            var count = 0;
            var $color;
            var prev;
            var mid = "";
            var end;
            prev = '<div id="viewTasks" ><table><thead><th>Task Name</th><th>Description</th><th>Personnel</th><th>Due Date</th></thead><tbody>';
            for (var i = 0; i < data.length; i++) {
                if (count % 2 == 0) {
                    $color = " ";
                } else {
                    $color = "odd";
                }
                mid = mid + '<tr class="' + $color + '" id="' + data[i].task_id + '">' +
                    '<td>' + data[i].task_name + '</td>' +
                    '<td>' + data[i].description + '</td>' +
                    '<td>' + data[i].task_personnel + '</td>' +
                    '<td>' + data[i].due_date + '</td>' +
                    '</tr>';
                count++;
            }
            end = '</tbody></table></div>';
            var table = prev + mid + end;
            $("#listSection, #listSection2").append(table);
        } else {
            alertMessage("Could not fetch JSON", 3, 1);
        }
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
            divSelected = "#divStatus";
        } else if (page == 2) {
            divSelected = "#divStatus2";
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




    /***************************Ajax Function Calls**************/









    /****************Operations for Table*************************/
    function getStatus() {
        // This method should get the status of a clicked task
        // For now it is just returning complete
        return "complete";
    }


    function editOptions() {
        var x = "";
        var y = "";
        var isActive = false;
        $("#listSection tbody").on('click ', function() {
            selectedTuple = $(this).attr('id');
            $(".optionalFeaturesAlpha").fadeIn();
        });

        $("body").on('click', '.fa - times ', function() {
            $(".optionalFeaturesAlpha").fadeOut();
        });

        // var gets the current position that the mouse was clicked
        $("#listSection tbody").on('click ', function(event) {
            x = event.pageX;
            y = event.pageY;
            $(".optionalFeaturesAlpha").css('left', x - 150);
            $(".optionalFeaturesAlpha").css('top', y - 80);

        });
    }


    /* activating a selected div and switching between divs */
    function switchDiv() {
        var $selectedItem = $(this).attr('id');
        $selectedPage = "#" + $selectedItem + "Page";
        $(".optionalFeaturesAlpha").fadeOut();
        $(".sideMenuItem").each(function() {
            var $allItems = $(this).attr('id');
            var $allElements = "#" + $allItems + "Page";
            $($allElements).hide();
        });
        $($selectedPage).show();
    }

    /* This section adds a orm component to the DOM */
    function addForm(type) {
        var form;
        if (type == 1) {
            form = '<form class="createForm animated fadeIn" ><div class="divider"></div><input type="text" placeholder="Task Name" id="tn"><select id="tp" class="form-styling"><option value="0">Select a Personnel</option ></select><input type="date" id="td" class="form-styling"><div><textarea id="desc" placeholder="Enter a Short Description of the Task"></textarea></div><input id="saveTask" type="button" name="add" value="Save Task"/><input type="button" class="cancel" value="Cancel"/></form>';
            if (!addFormIsCreated) {
                $("#formSection").append(form);
                addFormIsCreated = true;
            }
        } else if (type == 2) {
            form = '<form class="createForm animated fadeIn"><div class="divider"></div >< textarea id = "lim" placeholder = "Write Your Limitations Here Max 100 words" ></textarea><textarea id="err" placeholder="Write Your Limitations Here Max 100 words"></textarea >< input id = "saveReport" type = "button" name = "add" value = "Save Report" / >< input type = "button" class = "cancel" value = "Cancel" / >< /form>';
            $(".optionalFeaturesAlpha").fadeOut();
            if (!reportFormIsCreated) {
                $("#formSection2").append(form);
                reportFormIsCreated = true;
            }
        }


        /* This portion increases the height of the sidebar as you increase the tasks */
        var $toAdjust = $("#divContent").height() + 100;
        $("#sidemenu").css('height', $toAdjust);
    }



    /* Remove a row when you click the delete button */
    function removeForm(type) {
        var originalDiv;
        if (type == 1) {
            originalDiv = '<div id="formSection"></div > ';
            $("#formSection").replaceWith(originalDiv);
            addFormIsCreated = false;
        } else if (type == 2) {
            originalDiv = ' < div id = "formSection2" > < /div>';
            $("#formSection2").replaceWith(originalDiv);
            reportFormIsCreated = false;
        }
    }
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

});
