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
            <!--
            <td colspan="2" id="pageheader" style="display:none;">
                Application Header
            </td>
-->
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
                <div class="sideMenuItem  " title="Report" id="viewReport"><a href="#"><i class="fa fa-edit"></i></a>
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
                        </div>
                        <!-- End Admin Page -->

                        <!-- Create Task Page -->
                        <div id="createTaskPage" class="hide animated fadeIn">
                            <div class="optionalFeaturesAlpha hide">
                                <span class="fa fa-edit"></span>
                                <span class="fa fa-trash-o"></span>
                                <span class="fa fa-times"></span>
                            </div>
                            <div id="listSection">
                                <!-- Existing tasks go here -->
                                <div id="viewTasks" >
                                    <div id="divStatus" class="status green">
                                        Added Succesfully
                                    </div>
                                    <table>
                                        <thead>
                                            <th>Task Name</th>
                                            <th>Description</th>
                                            <th>Personnel</th>
                                            <th>Due Date</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sample Name 1</td>
                                                <td>Sample Description</td>
                                                <td>Sample Personnel</td>
                                                <td>Sample Date</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Sample Name 1</td>
                                                <td>Sample Description</td>
                                                <td>Sample Personnel</td>
                                                <td>Sample Date</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
                            You are on the viewReportPage
                            <!-- Task Summary Page -->

                            <div id="viewTasks" class="hide">
                                <div id="divStatus" class="status">
                                    status message
                                </div>
                                Content space
                                <span class="clickspot">click here </span>
                                <table id="tableExample" class="reportTable" width="100%">
                                    <tr class="header">
                                        <td>column1</td>
                                        <td>column2</td>
                                        <td>column3</td>
                                        <td>column4</td>
                                    </tr>
                                    <tr class="row1">
                                        <td>data example</td>
                                        <td>123</td>
                                        <td>01/01/2014</td>
                                        <td>data</td>
                                    </tr>
                                    <tr class="row2">
                                        <td>data example</td>
                                        <td>123</td>
                                        <td>01/01/2014</td>
                                        <td>data</td>
                                    </tr>
                                </table>
                            </div>

                            <!-- End Task Summary Page -->
                        </div>
                        <!-- / viewReportPage -->

                        <!--logoutPage -->
                        <div id="logoutPage" class="hide animated fadeIn">
                            You are on the logout Page
                        </div>
                        <!--/logoutPage -->










                    </div>
                </td>
            </div>
        </tr>
    </table>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/customanimate.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>







