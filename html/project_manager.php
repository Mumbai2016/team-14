<html>
<head>
    <meta http-equiv="content-type" content="text/php; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Atma</title>    
    <link rel="stylesheet" href="../css/project_manager.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/project_manager.js" type="text/javascript"></script>
    </script>
</head>
<body>
    <div>
    <nav class="main-menu">
        <ul>
            <li>
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                    <?php
					        session_start();
	                        echo $_SESSION["username"];
					?>
                </span>
            
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
                <a href="#">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        UI Components
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
                <a href="#">
                   <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                        Pages
                    </span>
                </a>
               
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                        Graphs and Statistics
                    </span>
                </a>
            </li>
            <li>
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
               <a href="#">
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