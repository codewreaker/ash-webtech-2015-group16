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
            <td colspan="2" id="pageheader" style="display:none;">
                Application Header
            </td>
        </tr>
        <tr>
           <div class="hide" id="menu2"><a href="#"><i class="fa fa-bars"></i></a></div>
            <td id="sidemenu" >
                <div class=" sideMenuItem " id="menu"><a href="#"><i class="fa fa-bars"></i></a>
                </div>
                <div class="sideMenuItem active " title="Personnel"><a href="#"><i class="fa fa-user"></i></a>
                </div>
                <div class="sideMenuItem  " title="Create Task"><a href="#"><i class="fa fa-plus"></i></a>
                </div>
                <div class="sideMenuItem  " title="Report"><a href="#"><i class="fa fa-edit"></i></a>
                </div>
                <div class="sideMenuItem  " title="Logout"><a href="#"><i class="fa fa-power-off"></i></a>
                </div>
            </td>
            <td id="content">
                <div id="divPageMenu">
                   <span id="pageheader">Task Manager</span>
                    <span class="menuitem">1</span>
                    <span class="menuitem">2</span>
                    <span class="menuitem">3</span>
                    <input type="text" id="txtSearch" />
                    <span class="menuitem">s</span>
                </div>
                <div id="divStatus" class="status">
                    status message
                </div>
                <div id="divContent">
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
            </td>
        </tr>
    </table>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/customanimate.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>







