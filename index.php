<?php
session_start();
include 'koneksi.php';

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <title>dispenser</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="Remember/css/bootstrap.css" rel="stylesheet" />
  <link href="Remember/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="Remember/css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="Remember/css/style.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Remember/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Remember/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Remember/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="Remember/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="Remember/ico/favicon.png" />
</head>
<body>


<!-- konten -->
<div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
           
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.php"><i class="icon-tint"></i> dispenser</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">

                         <!-- jika sudah login (ada session admin) -->
                         <?php if (isset($_SESSION["admin"])): ?>
                              <li><a href="home-admin.php">Home</a></li>
                          <!--     <li><a href="logout.php">logout</a></li> -->

                        <!-- jika selain itu(belum login /belum ada sesion admin) -->
                        <?php elseif (isset($_SESSION["customer"])): ?>
                              <li><a href="home.php">Home</a></li> 
                          <!--       <li><a href="logout.php">logout</a></li> -->

                        <?php else: ?>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="register.php">Register</a></li>
                        <?php endif ?>
                      
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">
      <blockquote>
      Dispenser Otomatis
       </blockquote>
      
      </div>
    </section>
    <!-- /section intro -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              

              <div class="span4">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-info badge-circled">1</span>
                    <i class="ico icon-file-text icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Dispenser</strong></h4>
                    <p>Dispenser</p>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-important badge-circled">2</span>
                    <i class="ico icon-user icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>ESP8266</strong></h4>
                    <p>ESP8266</p>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-warning badge-circled">3</span>
                    <i class="ico icon-thumbs-up icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Web</strong></h4>
                    <p>Web</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


       

      </div>
    </section>

    <section id="offer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <h3>IOT</h3>
                  <blockquote>
                    Dispenser Otomatis
                  </blockquote>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="span3">
                <h5>Dispenser</h5>
                <p>Mengambil air.</p>
              </div>
              <div class="span3">
                <h5>Sensor Ultrasonik</h5>
               <p>Mengukur jarak gelas.</p>
              </div>
              <div class="span3">
                <h5>ESP8266</h5>
                <p>Menghubungkan ke jaringan wifi.</p>
              </div>
              <div class="span3">
                <h5>Web</h5>
                <p>Menampilkan data ke halaman web.</p>
              </div>
              
              
              

              
          </div>
        </div>

      </div>
    </section>

    <footer>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; 2020 dispenser</span></p>
              </div>

            </div>

            
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="Remember/js/jquery.js"></script>
  <script src="Remember/js/jquery.easing.1.3.js"></script>
  <script src="Remember/js/bootstrap.js"></script>
  <script src="Remember/js/modernizr.custom.js"></script>
  <script src="Remember/js/toucheffects.js"></script>
  <script src="Remember/js/google-code-prettify/prettify.js"></script>
  <script src="Remember/js/jquery.prettyPhoto.js"></script>
  <script src="Remember/js/portfolio/jquery.quicksand.js"></script>
  <script src="Remember/js/portfolio/setting.js"></script>
  <script src="Remember/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="Remember/js/custom.js"></script>
    
</body>
</html>