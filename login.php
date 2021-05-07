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
                            <label  >Email</label>
                                <input name="email"type="email"  class="form-control" required>

                        </div>

                        <div class="form-group ">
                            <label >Password</label>
                                <input name="password" type="password" class="form-control "  required">

                        </div>

                      

                        

                        
                                <button name="login" class="btn btn-primary">
                                   Login
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
//jika ada tombol login (tombol login ditekan)
if (isset($_POST["login"]))
{
    $email =$_POST["email"];
    $password =$_POST["password"];
  //  BCRYPT (PASSWORD_DEFAULT)
    //password_hash($_POST['password'],PASSWORD_DEFAULT);
    //lakukan query ngecek akun di tabel pelanggan di db
   // $ambil = $koneksi->query("SELECT * FROM user 
    //WHERE email='$email' AND password='$password'");

//ngitung akun yang terambil
//$akunyangcocok = $ambil->num_rows;

$cek_login = $koneksi->query("select *from user where email='$email'");
	$ktm_login = $cek_login->num_rows;
	$akun = $cek_login->fetch_assoc();

//jika 1 akun yang cocok maka dilogikan
//if ($akunyangcocok > 0)
if($ktm_login>0)
{
   // $p=password_verify($password,$akun['password']);
    //anda sukses login
    //mendapatkan akun dalam bentuk array
    //$akun = $ambil->fetch_assoc();
    if(password_verify($password,$akun['password']))
    {
        if($akun['akses']=="customer"){
            //simoan di session customer
            $_SESSION["customer"] = $akun;
            $_SESSION["namauser"] = $akun["nama"];
            $_SESSION["emailuser"] = $akun["email"];
            $_SESSION["passworduser"] = $akun["password"];
            echo "<script>location='home.php';</script>"; 
           // echo "<script>alert('success ');</script>";
         //   $_SESSION["akun_id"] = $akun["id"];
           // $_SESSION["akun_nama"] = $row_akun["nama"];
            //$_SESSION["akun_email"] = $row_akun["email"];


        } else if($akun['akses']=="admin") {
            //simoan di session admin
            $_SESSION["admin"] = $akun;
            $_SESSION["namauser"] = $akun["nama"];
            $_SESSION["emailuser"] = $akun["email"];
            $_SESSION["passworduser"] = $akun["password"];
            echo "<script>location='home-admin.php';</script>"; 
           // echo "<script>alert('success ');</script>";
        }
    }
  
}
else {
    //anda gagal login
    echo "<script>alert('anda gagal login');</script>";
    echo "<script>location='login.php';</script>";

}

}

?>
</body>
</html>