<?php
session_start();
	include('koneksi.php');
	
$sqle = mysqli_query($koneksi,"SELECT * FROM device  ");
while($row = mysqli_fetch_array($sqle)){
	//$row = mysqli_fetch_array($sqle);
	$sensor_device[] = $row['sensor'];
	$jam_device[] = $row['jam'];
}

	
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

				<div class="col-md-6 col-lg-6">
                <canvas id="myChart"></canvas>
                    <script>
                            var ctx = document.getElementById("myChart").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: <?php echo json_encode($jam_device); ?>,
                                    datasets: [{
                                        label: 'Jam',
                                        data: <?php echo json_encode($sensor_device); ?>,
                                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                        borderColor: 'rgba(255,99,132,1)',
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero:true
                                            }
                                        }]
                                    }
                                }
                            });
                    </script>
                </div>

        </div>
    </div>
</div>

</body>
</html>
<?php endif ?>