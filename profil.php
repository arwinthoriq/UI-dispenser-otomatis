<?php
session_start();
include 'koneksi.php';
?>
<?php if (isset($_SESSION["admin"]) OR isset($_SESSION["customer"])): ?> 

<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dispenser</title>
    <meta name="description" content="dispenser">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="sufee-admin-dashboard-master/apple-icon.png">
    <link rel="shortcut icon" href="Remember/ico/favicon.png">

    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="sufee-admin-dashboard-master/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="sufee-admin-dashboard-master/images/sufeadmin2.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php"><img src="sufee-admin-dashboard-master/images/logo2.png" alt="Logo"></a>
            </div>
            
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                
                            <?php if (isset($_SESSION["customer"])): ?> 
                                <li class="active"><a href="home.php"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li> 
                            <?php elseif (isset($_SESSION["admin"])): ?> 
                                <li class="active"><a href="home-admin.php"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li> 
                                <li class="active"><a href="user.php"><i class="menu-icon ti-user"></i>User</a></li> 
                            <?php endif ?>               
                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>        <?php echo $_SESSION['namauser']; ?>  
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="profil.php"><i class="fa fa-user"></i> Profil</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-cog"></i> Logout</a>
                        </div>

                    </div>
                </div>
            </div>

        </header>

        <main class="py-4">
        <div class="col-md-4">
                        <div class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="text-light display-6">Profil</h4>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="sufee-admin-dashboard-master/images/Berbagai.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $_SESSION['namauser']; ?></h5>
                                    <div class="location text-sm-center"><?php echo $_SESSION['emailuser']; ?></div>
                                </div>
                                <hr>
                                <div class=" ">
                                </div>
                            </div>
                        </div>
                    </div>
        </main>

            

        </div>
    </div>

    <script src="sufee-admin-dashboard-master/vendors/jquery/dist/jquery.min.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="sufee-admin-dashboard-master/assets/js/main.js"></script>


    <script src="sufee-admin-dashboard-master/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="sufee-admin-dashboard-master/assets/js/dashboard.js"></script>
    <script src="sufee-admin-dashboard-master/assets/js/widgets.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js "></script>
   
</body>

</html>
<?php endif ?>