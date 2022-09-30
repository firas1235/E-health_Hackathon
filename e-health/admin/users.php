<?php
   ?>
<html>
    <head>
        
        <!-- Title -->
        <title>E-Health Valley | Admin Pannel</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">


            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
		</nav>
       
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index.php" class="logo-text"><span>Dashboard</span></a>
                    </div><!-- Logo Box -->
                   
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>

                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                               
                               
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                                </li>
                               
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">Admin</span>
                                    </a>
                                  
                                </li>
                                <li>
                                    <a href="login.php" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                                <li>
                                 
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a>

                                <div class="sidebar-profile-details">
                                    <span>Super Admin<br><small>Add/Remove Users</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        
                        <li><a href="register.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Register New User</p></a></li>
                        <br>
                        <li><a href="register.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-ok"></span><p>Current Users</p></a></li>

                       
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>Welcome Admin!</h3>
                            </div>

                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            
                                            <tr>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php      
    include('config.php');  
    $sql = "SELECT 	username,password FROM cnopt; ";  
    $result = mysqli_query($link, $sql);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    $row = $result->fetch_assoc();
    foreach ($result as $row) {
     
        echo ("      <tr><th>".$row['username']."</th>");
        echo ("      <td>".$row['password']."</td>");
        echo ("      <td>cnopt</td>");
    }

    $sql2 = "SELECT 	username,password FROM dpm; ";  
    $result2 = mysqli_query($link, $sql2);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count2 = mysqli_num_rows($result2); 
    $row2 = $result2->fetch_assoc();
    foreach ($result2 as $row2) {
     
        echo ("      <tr><th>".$row2['username']."</th>");
        echo ("      <td>".$row2['password']."</td>");
        echo ("      <td>Dpm</td>");

    }
    $sql3 = "SELECT 	username,password FROM grossiste; ";  
    $result3 = mysqli_query($link, $sql3);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count3 = mysqli_num_rows($result3); 
    $row3 = $result3->fetch_assoc();
    foreach ($result3 as $row3) {
     
        echo ("      <tr><th>".$row3['username']."</th>");
        echo ("      <td>".$row3['password']."</td>");
        echo ("      <td>Grossiste</td>");

    }
    $sql4 = "SELECT 	username,password FROM ineas; ";  
    $result4 = mysqli_query($link, $sql4);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count4 = mysqli_num_rows($result4); 
    $row4 = $result4->fetch_assoc();
    foreach ($result4 as $row4) {
     
        echo ("      <tr><th>".$row4['username']."</th>");
        echo ("      <td>".$row4['password']."</td>");
        echo ("      <td>Ineas</td>");

    }
    $sql6 = "SELECT 	username,password FROM medecin; ";  
    $result6 = mysqli_query($link, $sql6);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count5 = mysqli_num_rows($result6); 
    $row6 = $result6->fetch_assoc();
    foreach ($result6 as $row6) {
     
        echo ("      <tr><th>".$row6['username']."</th>");
        echo ("      <td>".$row6['password']."</td>");
        echo ("      <td>Medecin</td>");

    }
    $sql7 = "SELECT 	username,password FROM pct; ";  
    $result7 = mysqli_query($link, $sql7);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count7 = mysqli_num_rows($result7); 
    $row7 = $result7->fetch_assoc();
    foreach ($result7 as $row7) {
     
        echo ("      <tr><th>".$row7['username']."</th>");
        echo ("      <td>".$row7['password']."</td>");
        echo ("      <td>Pct</td>");

    }
    $sql8 = "SELECT 	username,password FROM pharmacie; ";  
    $result8 = mysqli_query($link, $sql8);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count8 = mysqli_num_rows($result8); 
    $row8 = $result8->fetch_assoc();
    foreach ($result8 as $row8) {
     
        echo ("      <tr><th>".$row8['username']."</th>");
        echo ("      <td>".$row8['password']."</td>");
        echo ("      <td>Pharmacie</td>");

    }
    $sql9 = "SELECT 	username,password FROM sephire; ";  
    $result9 = mysqli_query($link, $sql9);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count9 = mysqli_num_rows($result9); 
    $row9 = $result9->fetch_assoc();
    foreach ($result9 as $row9) {
     
        echo ("      <tr><th>".$row9['username']."</th>");
        echo ("      <td>".$row9['password']."</td>");
        echo ("      <td>Sephire</td>");

    }
    $sql10 = "SELECT 	username,password FROM spot; ";  
    $result10 = mysqli_query($link, $sql10);  
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count10 = mysqli_num_rows($result10); 
    $row10 = $result10->fetch_assoc();
    foreach ($result10 as $row10) {
     
        echo ("      <tr><th>".$row10['username']."</th>");
        echo ("      <td>".$row10['password']."</td>");
        echo ("      <td>Spot</td>");

    }
      
 
    ?> 
                                           
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                <div id="main-wrapper">
                    <div class="row">
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2022 &copy; E-Health Valley Hackathon By <a href="https://www.facebook.com/Aymenhmaidi69/" target="_blank">Aymen Hmaidi</a> And <a href="https://www.facebook.com/melki.firas.9" target="_blank">Firas Melki</a> And <a href="https://www.facebook.com/youssefhaddouk" target="_blank">Youssef Haddouk</a> , Made With Love ❤️</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
     
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/js/modern.min.js"></script>
        
    </body>
</html>
