<html>
<head>
    <meta http-equiv="content-type" content="text/php; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Atma</title>    
    <link rel="stylesheet" href="../css/project_manager.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/project_manager.js" type="text/javascript"></script>
</head>
<body>
<div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="project_manager.php" >
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">
                        User
                    </span>
                </a>
            </li>
            <li>
                <a href ="#" onclick="load()"   >
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
              
            </li>
            <li class="has-subnav">
                <a href="#" onclick="load_volunteer_details()">
                    <i class="fa fa-users fa-2x"></i>
                    <span class="nav-text">
                        Volunteers
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#">
                   <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Forms
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#" onclick="load_organisations()">
                   <i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text">
                        Organisations
                    </span>
                </a>
               
            </li>
            <li>
                <a href="#" onclick="load_screening()">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                        Screening
                    </span>
                </a>
            </li>
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
    </div>
</div>

</body>
</html>