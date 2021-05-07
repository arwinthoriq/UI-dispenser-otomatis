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
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/selectFX/css/cs-skin-elastic.css">

		<script src="jquery.min.js" type="text/javascript"></script>
		<script src="jquery-latest.js"></script>
		<script language = "javascript">
			$(document).ready(function() {
				$(document).ready(function() {
					$("#konten1").load("sensor_konten.php");
                   // $("#konten2").load("sensor_grafik.php");
                    $("#konten3").load("sensor_notifikasi.php");
					var refreshId = setInterval(function() {
					$("#konten1").load('sensor_konten.php');
                 //   $("#konten2").load("sensor_grafik.php");
                    $("#konten3").load('sensor_notifikasi.php');
					}, 1000);;
					$.ajaxSetup({ cache: false });
				});
			});	
		</script>
       

	

    <script type="text/javascript" src="Chart.js"></script>
    <link rel="stylesheet" href="sufee-admin-dashboard-master/assets/css/style.css">

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
                              <li class="active"><a href="user.php"><i class="menu-icon ti-user"></i>User</a></li> 
                       
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

                    <div class="user-area dropdown float-right col-lg-2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                        </a>
                            
                        <div class="user-menu dropdown-menu ">
                        <div id="konten3"></div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <main class="py-4">
		<div id="konten1"></div>
				
        </main>

            

        </div>
    </div>

    <script src="sufee-admin-dashboard-master/vendors/jquery/dist/jquery.min.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="sufee-admin-dashboard-master/assets/js/main.js"></script>


    <script src="sufee-admin-dashboard-master/assets/js/dashboard.js"></script>
    <script src="sufee-admin-dashboard-master/assets/js/widgets.js"></script>
   
</body>

</html>
<?php endif ?>