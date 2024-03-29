<html>

<head>
    <title>Index</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>

<body>
    <table class="container">
        <tr>
        </tr>
        <tr>
            <div id="menu"><a href="#"><i class="fa fa-bars"></i></a>
            </div>
            <td id="sidemenu">

                <div style="text-align:center;padding-bottom:5px;font-size:1.4em;">Menu</div>
                <div class="sideMenuItem active " title="Personnel" id="admin"><a href="#"><i class="fa fa-user"></i></a>
                </div>
                <div class="sideMenuItem  " title="Create Task" id="createTask"><a href="#"><i class="fa fa-plus"></i></a>
                </div>
                <div class="sideMenuItem  " title="Report" id="viewReport"><a href="#"><i class="fa fa-file-text"></i></a>
                </div>
                <div class="sideMenuItem  " title="Logout" id="logout"><a href="#"><i class="fa fa-power-off"></i></a>
                </div>
            </td>
            <div>
                <td id="content" class="adjust">
                    <div id="divPageMenu">
                        <span id="pageheader">Task Manager</span>
                        <div class="menuitem"></div>
                        <input type="search" placeholder="Search" id="txtSearch" />
                        <i class="fa fa-search "></i>
                    </div>
                    <div id="divContent">

                        <!-- Add Admin Page -->
                        <div id="adminPage" class="animated fadeIn">

                           <!-- User Details -->
                           <div class="admin_card">
                               <i class="fa fa-user"></i>
                               <div class="details">
                               <span id="curr_user_name"></span><br>
                               <span id="curr_user_pos"></span><br>
                               <span id="curr_user_type"></span><br>
                               <span id="curr_user_contact"></span>
                               </div>
                           </div>

                            <!-- Tasks Created -->
                            <div class="cards blue" id="createTask">
                                <i class="fa fa-tasks"></i>
                                <span id="number_of_tasks">5</span>
                                <div id="title">Tasks</div>
                            </div>
                            <!-- End Task Created -->

                            <!-- Tasks Created -->
                            <div class="cards orange" id="viewReport">
                                <i class="fa fa-file-text"></i>
                                <span id="number_of_reports">5</span>
                                <div id="title">Reports</div>
                            </div>
                            <!-- End Task Created -->

                            <!-- Tasks Created -->
                            <div class="cards green" id="createTask">
                                <i class="fa fa-check"></i>
                                <span id="number_of_completed">9</span>
                                <div id="title">Completed</div>
                            </div>
                            <!-- End Task Created -->
                            <div id="taskdata"></div>

                        </div>
                        <!-- End Admin Page -->

                        <!-- Create Task Page -->
                        <div id="createTaskPage" class="hide animated fadeIn">
                            <div class="optionalFeaturesAlpha hide">
                                <span class="fa fa-edit"></span>
                                <span class="fa fa-trash-o"></span>
                                <span class="fa fa-check"></span>
                                <span class="fa fa-times"></span>
                            </div>
                            <div id="divStatus" class="status"></div>
                            <div id="listSection">
                                <!-- Existing tasks go here  -->
                            </div>
                            <div id="formSection">
                                <!-- Form Goes Here -->
                            </div>
                            <div class="create">
                                <span class=""></span><i class="fa fa-plus"></i>
                                <p>Add New Task</p>
                            </div>
                            <div id="log"></div>
                        </div>
                        <!-- / Create task page -->




                        <!-- viewReportPage -->
                        <div id="viewReportPage" class="hide animated fadeIn">
                            <div class="optionalFeaturesAlpha hide">
                                <span title="create a report" class="fa fa-file-o"></span>
                                <span title="view details" class="fa fa-eye"></span>
                                <span title="check as completed" class="fa fa-check"></span>
                                <span class="fa fa-times"></span>
                            </div>
                            <!-- Create Report -->
                            <div id="divStatus2" class="status"></div>
                            <div id="viewReportModal"><i class="fa fa-times"></i><span></span><input type="button" value="Edit"><input type="button" value="Delete">
                            </div>
                            <div id="listSection2">
                                <!-- Existing tasks go here -->
                            </div>
                            <div id="formSection2">
                                <!-- Form Goes Here -->
                            </div>
                            <div class="createReport">
                                <span class=""></span><i class="fa fa-warning"></i>
                                <p>Click on a Task to Create a Report for it</p>
                            </div>
                            <!-- /Create Report -->



                            <!-- End Task Summary Page -->
                        </div>
                        <!-- / viewReportPage -->

                        <!--logoutPage -->
                        <div id="logoutPage" class="hide animated fadeIn">
                            You have Successfully Logged Out
                        </div>
                        <!--/logoutPage -->

                    </div>
                </td>
            </div>
        </tr>
    </table>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/customanimate.js"></script>

</body>

</html>







