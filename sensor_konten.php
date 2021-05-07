<?php
session_start();
	include('koneksi.php');
	
	$sql = mysqli_query($koneksi,"SELECT * FROM device WHERE id=1");
	$data = mysqli_fetch_assoc($sql);


	
?>

<?php if (isset($_SESSION["admin"]) OR isset($_SESSION["customer"])): ?> 

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<div class="content mt-3">
		<div class="">
			<div class="row">

				<div class="col-md-6 col-lg-3">
					<div class="card bg-flat-color-1 text-light">
						<div class="card-body">
							<div class="h4 m-0"> <?php echo $data['sensor']; ?> cm</div>
							<div>Sensor</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card bg-flat-color-4 text-light">
						<div class="card-body">
							<div class="h4 m-0"><?php echo $data['jam']; ?></div>
							<div>Jam</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card bg-flat-color-3 text-light">
						<div class="card-body">
							<div class="h4 m-0"><?php echo $data['tanggal']; ?></div>
							<div>Tanggal</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="content mt-3">
		<div class="">
			<div class="row">
			
					<div class="col-md-3 ">
                        <aside class="profile-nav alt">
                            <section class="card">
							
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="text-light display-6"><?php echo $_SESSION['namauser']; ?>  </h2>
                                            <p><?php echo $_SESSION['emailuser']; ?></p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#">  Sensor <span class="badge badge-primary pull-right"><?php echo $data['sensor']; ?></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Jam <span class="badge badge-danger pull-right"> <?php echo $data['jam']; ?></span></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> Tanggal  <span class="badge badge-warning pull-right"><?php echo $data['tanggal']; ?></span></a>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                    </div>
			</div>
		</div>
	</div>

</body>

</html>




<?php endif ?>