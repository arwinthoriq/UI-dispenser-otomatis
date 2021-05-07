<?php
session_start();
include 'koneksi.php';
?>
<?php if (isset($_SESSION["admin"])): ?> 

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
                        
                              <li class="active"><a href="home-admin.php"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li> 
                              <li class="active"><a href="user.php"><i class="menu-icon fa fa-dashboard"></i>User</a></li> 
                       
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
 <!-- Data Table area Start-->
 <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                    <center><p><i>User</i> </p></center>
                   
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email </th>
                                        <th>Akses</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1; 
                                    $data = mysqli_query($koneksi, "select * from user");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['email']; ?></td>
                                        <td><?php echo $d['akses']; ?></td>
                                        </tr>
                                    <?php  }
                                     ?>    
                                        
                                    
                                </tbody>
                                
                            </table>    
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
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