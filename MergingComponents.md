# Introduction #

Great Job guys we did it. This is a description of how everything has been
put together in order to allow you understand the structure.

In order to use the application, sign up and after login


# Details #


> ## Views ##
  * login.php
  * index.php
  * main.php
> ## Controllers ##
  * operations/
  * operations.php
  * script.js(This is the main controller)
  * login\_ajax.php
  * loginScript.js
> ## Modules ##
    * db.php
    * _perssonnel
    *_report
    * _task_

## other ##
**animate.css**style.css
**customanimate.js**


Majority of the code functionality is written in the script.js over here all ajax calls are made. we take info from the views and send a query to the php modules. which is **operations.php.**. It is the central point for all other classes which extend adb.php.


# AJAX.js #

## functions ##
### addTask ###
Gets the fields from the add task form using the method getFormPost() and a request is sent to operations opt=1. This adds the details into the database

### addreport ###
Gets the fields from the add task form using the method getReportPost() and a request is sent to operations opt=4. This adds the report details into the database.

### deleteTask ###
a delete request is sent to operations.php opt=2 and gets the id of the clicked task with javascript and exeites a delete.

### editTask ###
This functions fetched the details of the clicked table and populates it with a form. Once the edit is finalised, an update is made in the database

### sendRequest ###
This is a jQuery ajax call that does a post to the operations.php
it returns a JSON response text as a result

### displayTableJSON ###
This is another important feature of the application.
This function populates the table with current data from the database. This function is almost called any time a CRUD function is executed to quickly refresh the page without the page loading. This makes the application very interactive and responsive.


### logout ###
This functions executes a destroy session by sending a request to login\_ajax.php opt=2. This destroys the session and relocates the user back to the login screen

### get\_curr\_session ###
once a person logs in this function gets the current session details like name id etc by sending a request to login\_ajax.php  opt=3


### editOptions ###
This function causes a small widget to appear on top of a clicked row to allow the user view edit or delete.

### switchDiv ###
This switches in between sections on the main page like user\_section,add\_section,report\_section and logout section

### addForm(type) ###
This function causes a form to fade in when either the plus button is clicked or the report button is clicked. If the type is 1 an add task form will appear, if the type == 2 an add report form will appear


### removeForm(type) ###
This functions causes the visible form to dissapear if type==1 the add task form will disappear if type==2 the add report form will disappear.

### alertMessage(message, type, page) ###
The first parameter takes the message you want to alert, the second shows the page type whether it is a warning sign or success sign or danger sign. The page specifies the page on which you want this to appear.

This is a snippet of the script.js

```

/* This Javascript Files Deals With Scripts For Functionality */
$(document).ready(function() {
    var obj = get_curr_session();
    /* A variable to check if a task has been created or not */
    var curr_user_firstname="empty";
    var addFormIsCreated = false;
    var reportFormIsCreated = false;
    var selectedTuple = "";
    var $selectedPage = "";
    var currAdmin;
    var curr_user_lastname;
    var curr_user_username;
    var curr_user_type;
    var curr_user_position;
    var curr_user_contact;





    /****************Operations for Table*************************/


    displayTableJSON();
//    if(curr_user_firstname==""){
//        window.location.replace("login.php");

    //}
    var tableDataArray = editOptions();
    addTask();
    deleteTask();
    addReport();
    editTask();
    markTask();




    $(".sideMenuItem, .cards").on('click', switchDiv);
    $(".create").on('click', function() {
        addForm(1);
    });
    $(".fa-file-o").on('click', function() {
        addForm(2);
    });
    $("body").on('click', '#formSection .cancel,#saveTask', function() {
        removeForm(1);
    });
    $("body").on('click', '#formSection2 .cancel,#removeTask', function() {
        removeForm(2);
    });
     $("body").on('click', '.fa-power-off', function() {
        logout();

    });





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
            displayTableJSON();
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
            displayTableJSON();
        });
    }


    /********* This Function deletes a selected Table **********/
    function deleteTask() {
        $("body").on('click', '.fa-trash-o', function() {
            var dataString = 'opt=2&tid=' + selectedTuple;
            // validation of form data here
            // AJAX code to submit form
            var obj = sendRequest(dataString);
            if (obj.result == 1) {
                alertMessage(obj.message, 1, 1);
            } else if (obj.result == 0) {
                alertMessage(obj.message, 2, 1);
            }
            displayTableJSON();
        });
    }

    /********* This Function edits a Task*********/
    function editTask() {
        $("body").on('click', '.fa-edit', function() {
            addForm(1);
            $("#tn").val(tableDataArray[1]).val();
            $("#tp").val(tableDataArray[3]).val();
            $("#td").val(tableDataArray[4]).val();
            $("#desc").val(tableDataArray[2]).val();


            $("#saveTask").attr('id', 'editTask');
            $("#editTask").attr('value', 'Update Task');
            $(".cancel").attr('value', 'Done');

            // validation of form data here
            // AJAX code to submit form
            $("body").on('click', '#editTask', function() {
                var name = $("#tn").val();
                var personnel = $("#tp").val();
                var dueDate = $("#td").val();
                var desc = $("#desc").val();
                var dataString = 'opt=3&task_id=' + selectedTuple + '&tn=' + name + '&desc=' + desc + '&tp=' + personnel + '&td=' + dueDate;
                var obj = sendRequest(dataString);
                if (obj.result == 1) {
                    alertMessage(obj.message, 1, 1);
                } else if (obj.result == 0) {
                    alertMessage(obj.message, 2, 1);
                }
                displayTableJSON();
            });
        });
    }

    /********* This Function edits a Task*********/
    function markTask() {
        $("body").on('click', 'span .fa-check', function() {

            // validation of form data here
            // AJAX code to submit form
            $("body").on('click', '#editTask', function() {
                var dataString = 'opt=5&tid=' + selectedTuple;
                var obj = sendRequest(dataString);
                if (obj.result == 1) {
                    alertMessage(obj.message, 1, 1);
                } else if (obj.result == 0) {
                    alertMessage(obj.message, 2, 1);
                }
                displayTableJSON();
            });
        });
    }

    function viewReport(id) {
        var dataString = 'opt=8&report_id=' + id;
        var $obj = sendRequest(dataString);
        if ($obj.result == 1) {
            var data = $obj.report;
            var reportString = '<h1>Limitations</h1><p>' + data.limitations + '</p>' +
                '<h1>Errors</h1><p>' + data.errors + '</p>' + '<h1>Status</h1><p>' + data.progress_status + '</p>';
            $("#viewReportModal span").html(reportString);
        } else {
            alertMessage("Could not fetch JSON", 3, 1);
        }
    }

    // Get the data from the form and validate before returning
    function getFormPost() {
        var name = $("#tn").val();
        var personnel = $("#tp").val();
        var date = $("#td").val();
        var description = $("#desc").val();
        var dataString = 'opt=1&tn=' + name + '&desc=' + description + '&admin=' + currAdmin + '&tp=' + personnel + '&td=' + date;
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
            prev = '<div id="viewTasks" ><table><thead><th>Status</th><th>Task Name</th><th>Description</th><th>Personnel</th><th>Due Date</th></thead><tbody>';
            for (var i = 0; i < data.length; i++) {
                if (count % 2 == 0) {
                    $color = " ";
                } else {
                    $color = "odd";
                }
                mid = mid + '<tr class="' + $color + '" id="' + data[i].task_id + '">' +
                    '<td>' + check_status(data[i].task_id) + '</td>' +
                    '<td>' + data[i].task_name + '</td>' +
                    '<td>' + data[i].description + '</td>' +
                    '<td>' + data[i].task_personnel + '</td>' +
                    '<td>' + data[i].due_date + '</td>' +
                    '</tr>';
                count++;
            }
            end = '</tbody></table></div>';
            var table = prev + mid + end;
            $("#listSection, #listSection2").html(table);
        } else {
            alertMessage("Could not fetch JSON", 3, 1);
        }
    }

    /* This function checks the state of the task and returns a corresponding check */
    function check_status(id) {
        var state = '<i class="fa fa-check">';
        var dataString = 'opt=8&report_id=' + id;
        var $obj = sendRequest(dataString);
        var data = $obj.report;
        if (data.progress_status == "complete") {
            state = '<i class="fa fa-check green">';
        }
        if (data.progress_status == "incomplete") {
            state = '<i class="fa fa-times red">';
        }
        return state;
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

    function logout(){
      var dataString = "opt=2"
        var obj = $.ajax({
            type: "POST",
            url: "operations/login_ajax.php",
            data: dataString,
            async: false,
            cache: false
        });
        window.location.replace("login.php");
    }

    function get_curr_session() {
        var dataString = "opt=3"
        var obj = $.ajax({
            type: "POST",
            url: "operations/login_ajax.php",
            data: dataString,
            async: false,
            cache: false
        });

        var temp = $.parseJSON(obj.responseText);
        if(temp.result==1){
            var objResult = temp.session[0];
            currAdmin = objResult.user_id;
            curr_user_firstname = objResult.first_name;
            curr_user_lastname = objResult.last_name;
            curr_user_id = objResult.pword;
            curr_user_username = objResult.user_name;
            curr_user_type = objResult.p_type;
            curr_user_position = objResult.position;
            curr_user_contact = objResult.contact;
            $("#curr_user_name").html(curr_user_firstname+" "+curr_user_lastname);
            $("#curr_user_pos").html(curr_user_position);
            $("#curr_user_type").html(curr_user_type);
            $("#curr_user_contact").html(curr_user_contact);
        }else if(temp.result==0){
            window.location.replace("login.php");
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
        var table1 = '#listSection tr, #listSection2 tr';
        var tableData = [];
        $("body").on('click ', table1, function() {
            selectedTuple = $(this).attr('id');
            $(".optionalFeaturesAlpha").fadeIn();
            tableData[0] = selectedTuple;
            tableData[1] = $(this).children(':nth-child(1)').text();
            tableData[2] = $(this).children(':nth-child(2)').text();
            tableData[3] = $(this).children(':nth-child(3)').text();
            tableData[4] = $(this).children(':nth-child(4)').text();
        });

        $("body").on('click ', '.fa-eye', function() {
            viewReport(selectedTuple);
            $("#viewReportModal").fadeIn();
            $(".optionalFeaturesAlpha").fadeOut();
        });

        $("body").on('click', '.fa-times', function() {
            $(".optionalFeaturesAlpha").fadeOut();
        });
        $("body").on('click', '#viewReportModal>.fa-times', function() {
            $("#viewReportModal").fadeOut();
        });

        // var gets the current position that the mouse was clicked
        $("body").on('click', table1, function(event) {
            x = event.pageX;
            y = event.pageY;
            $(".optionalFeaturesAlpha").css('left', x - 150);
            $(".optionalFeaturesAlpha").css('top', y - 80);
            $("#viewReportModal").css('left', x - 250);
            $("#viewReportModal").css('top', y - 160);

        });
        return tableData;
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
            form = '<form class="createForm animated fadeIn" ><div class="divider"></div><input type="text" placeholder="Task Name" id="tn"><select id="tp" class="form-styling"><option value="0">Select a Personnel</option ><option value="1">Just another Option</option ></select><input type="date" id="td" class="form-styling"><div><textarea id="desc" placeholder="Enter a Short Description of the Task"></textarea></div><input id="saveTask" type="button" name="add" value="Save Task"/><input type="button" class="cancel" value="Cancel"/></form>';
            if (!addFormIsCreated) {
                $("#formSection").append(form);
                addFormIsCreated = true;
            }
        } else if (type == 2) {
            form = '<form class="createForm animated fadeIn" id="' + selectedTuple + '"><div class="divider"></div ><textarea id="lim" placeholder="Write Your Limitations Here Max 100 words" ></textarea><textarea id="err" placeholder="Write Your Errors Here Max 100 words"></textarea><input id="saveReport" type="button" name="add" value="Save Report"/><input type="button" class="cancel" value="Cancel"/></form>';
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
            originalDiv = '<div id="formSection"></div>';
            $("#formSection").replaceWith(originalDiv);
            addFormIsCreated = false;
        } else if (type == 2) {
            originalDiv = '<div id = "formSection2"> </div>';
            $("#formSection2").replaceWith(originalDiv);
            reportFormIsCreated = false;
        }
    }


    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

});


```