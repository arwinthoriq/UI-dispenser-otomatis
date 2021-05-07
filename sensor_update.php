<?php
//iki sing di connect ng arduino
	include('koneksi.php');
	
	date_default_timezone_set('Asia/Jakarta');
	$date = date("d-m-Y");
	$time = date("H:i:s");
	
	$nilai = $_GET['sensor'];
	
	if(isset($nilai)){
	      $sql = mysqli_query($koneksi,"UPDATE device SET tanggal='$date',jam='$time',sensor='$nilai' WHERE id=1");
	      if($sql){
		    echo "Success";
	      }
	      else{
		    echo "Error";
	      }
	}
?>