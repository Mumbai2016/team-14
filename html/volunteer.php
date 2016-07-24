<html>
<head>
    <meta http-equiv="content-type" content="text/php; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Atma</title>    
    <link rel="stylesheet" href="../css/volunteer.css" />
    <link href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/volunteer.js" type="text/javascript"></script>
    </script>
</head>
<body>
    <div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="volunteer.php" >
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">
                        Account
                    </span>
                </a>
            
            </li>
            <li>
                <a href ="#" onclick="load_volunteer_details()"   >
                    <i class="fa fa-users fa-2x"></i>
                    <span class="nav-text">
                        Volunteers  
                    </span>
                </a>
              
            </li>
            <li class="has-subnav">
                <a href="#" onclick="load_edit_profile()" >
                    <i class="fa fa-cog fa-2x"></i>
                    <span class="nav-text">
                        Edit Profile
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#">
                   <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Feedback Forms
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#">
                   <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                        Projects
                    </span>
                </a>
               
            </li>
            <li>
                <a href="#" onclick="load_graph()">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                        Graphs and Statistics
                    </span>
                </a>
            </li>
            <!--li>
                <a href="#">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                        Typography and Icons
                    </span>
                </a>
            </li>
            <li>
               <a href="#">
                   <i class="fa fa-table fa-2x"></i>
                    <span class="nav-text">
                        Tables
                    </span>
                </a>
            </li>
            <li>
               <a href="#">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text">
                        Maps
                    </span>
                </a>
            </li-->
            <li>
                <a href="#">
                   <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                        Documentation
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
               <a href="dashboard.php">
                     <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>  
        </ul>
    </nav>

    <div id="area">
        <div class="page-header">
            <h1><center>User Name</center></h1>
        </div>
        <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500" style="width: 400px;height: 400px;">

        <div class="featurette" id="about">
            <div class="header-text" >
                <div class="panel panel-success" style="height: 400px;margin-top:150px;background-color: #e2e2e2">
                    <div class="panel-body">
                        <div class="form-group">
                            Last login Date: <b>02/09/2013</b>
                        </div>
                        <div class="form-group">
                            Download Count: <b>104</b>
                        </div>
                        <div class="form-group">
                            User Rating:
                            <i class="fa fa-star logo"></i>
                            <i class="fa fa-star logo"></i>
                            <i class="fa fa-star logo"></i>
                            <i class="fa fa-star logo"></i>
                            <i class="fa fa-star-o logo"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>