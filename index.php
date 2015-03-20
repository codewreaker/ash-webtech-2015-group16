<html>

<head>
    <title>Index</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <script>
    </script>
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
                <div class="sideMenuItem active " title="Personnel" id="admin"><a href="#adminPage"><i class="fa fa-user"></i></a>
                </div>
                <div class="sideMenuItem  " title="Create Task" id="createTask"><a href="#createTaskPage"><i class="fa fa-plus"></i></a>
                </div>
                <div class="sideMenuItem  " title="Report" id="viewReport"><a href="#viewReportPage"><i class="fa fa-edit"></i></a>
                </div>
                <div class="sideMenuItem  " title="Logout" id="logout"><a href="#logoutPage"><i class="fa fa-power-off"></i></a>
                </div>
            </td>
            <div class="mainArea">
                <td id="content">
                    <div id="divPageMenu">
                        <span id="pageheader">Task Manager</span>
                        <span class="menuitem"></span>
                        <span class="menuitem"></span>
                        <span class="menuitem"></span>
                        <input type="text" id="txtSearch" />
                        <span class="menuitem">s</span>
                    </div>
                    <div id="divContent">

                        <!-- Add Admin Page -->
                        <div id="adminPage" class="">
                            <text>Hello Iam here</text>
                        </div>
                        <!-- End Admin Page -->

                        <!-- Create Task Page -->
                        <div id="createTaskPage" class="hide">
                          <form action="POST" class="createForm">
                             <div class="divider"></div>
                              <input type="text" placeholder="Task Name" >
                              <select name="" id="" >
                                 <option value="0">Select a Personnel</option>
                                  <option value="1"></option>
                                  <option value="2"></option>
                                  <option value="3"></option>
                                  <option value="4"></option>
                                  <option value="5"></option>
                              </select>
                              <input type="date">
<!--
                              <textarea placeholder="description">
                              </textarea>
-->
                              <input type="button" value="Save Task"/>
                          </form>
                           <div class="create">
                               <span class=""></span><i class="fa fa-plus"></i><p>Add New Task</p>

                           </div>
                        </div>
                        <!-- / Create task page -->

                        <!-- viewReportPage -->
                        <div id="viewReportPage" class="hide">
                            You are on the viewReportPage
                        </div>
                        <!-- / viewReportPage -->

                        <!--logoutPage -->
                        <div id="logoutPage" class="hide">
                            You are on the logout Page
                        </div>
                        <!--/logoutPage -->








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







