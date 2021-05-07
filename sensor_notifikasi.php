<?php
session_start();
	include('koneksi.php');
	
$sqle = mysqli_query($koneksi,"SELECT * FROM device ");
$datae = mysqli_fetch_assoc($sqle);

//<span class="count bg-danger">5</span> bg-flat-color-2
	
?>
<?php if (isset($_SESSION["admin"]) OR isset($_SESSION["customer"])): ?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="sufee-admin-dashboard-master/vendors/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="alert alert-primary">
			<div class="row media ">
				  <h6 > <i>  terdeteksi  <?php echo  $datae['sensor']; ?>  cm  </i>  </h6>  
            </div>
    </div>

</body>
</html>
<?php endif ?>