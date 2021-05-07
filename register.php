<?php
session_start();
include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dispenser</title>
    <meta name="description" content="dispenser">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="sufee-admin-dashboard-master/apple-icon.png">
    <link rel="shortcut icon" href="'Remember/ico/favicon.png" />


    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="sufee-admin-dashboard-master/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="sufee-admin-dashboard-master/images/sufeadmin2.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                <form method="POST" action="">

                        <div class="form-group">
                            <label  >Nama</label>
                                <input name="nama"type="text" class="form-control" autofocus required pattern="[a-zA-Z]+" required>

                        </div>

                        <div class="form-group">
                            <label  >Email</label>
                                <input name="email"type="email" class="form-control" required>

                        </div>

                        <div class="form-group ">
                            <label >Password</label>
                                <input name="password" type="password" class="form-control " required">

                        </div>

                        
                                <button name="register" class="btn btn-primary">
                                register
                                </button>
                          
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="sufee-admin-dashboard-master/vendors/jquery/dist/jquery.min.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="sufee-admin-dashboard-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="sufee-admin-dashboard-master/assets/js/main.js"></script>




<?php
//jika ada tombol register (tombol register ditekan)

if (isset($_POST["register"]))
{
    $nama =$_POST["nama"];
    $email =$_POST["email"];
    $password =password_hash($_POST['password'],PASSWORD_DEFAULT);
    
    $sql="INSERT INTO user (id, nama, email, password) VALUES('','$nama','$email','$password')";
   // echo "<script>location='login.php';</script>"; 
  // echo "<script>alert('success ');</script>";
    $cek_login = $koneksi->query("select *from user where email='$email'");
	$ktm_login = $cek_login->num_rows;
    $akun = $cek_login->fetch_assoc();
    if($ktm_login>0) {
        echo "<script>alert('anda sudah memiliki akun ');</script>";
        echo "<script>location='register.php';</script>"; 
    } else {

        $result  = mysqli_query($koneksi, $sql);
        if ($result) {
          echo "<script>location='login.php';</script>"; 
            
        } else {
          echo "<script>location='register.php';</script>"; 
        }
    }




}
?>
</body>
</html>