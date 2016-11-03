<?php 



		include 'inc/config.php';

		

		$timezone = date_default_timezone_set('Asia/Kolkata');

	//$today = date("d/m/y - g:i A T");

		//hello

	

	//test comments

	$today = date("d/m/y - F - g:i A T");

	echo "$today";



		$date = "2016-09-15";

		echo date('Y-m-d', strtotime($date. '+ 2 days'));

		echo "<br>";

		echo "<br>";

		echo date('Y-m-d', strtotime($date. '+ 5 days'));

		echo "<br>";

		echo date('Y-m-d', strtotime($date. '+ 15 days'));

		echo "<br>";

		

		$date = "15-8-2016";

		

		echo date('d-m-Y', strtotime($date. '+ 2 days'));

		echo "<br>";

		echo date('d-m-Y', strtotime($date. '+ 2 months'));

		echo "<br>";

		echo date('d-m-Y', strtotime($date. '+ 5 days'));

		

		echo "<br>";

		echo "<br>";

		echo "<br>";

		

		$sql ="SELECT end_date FROM rent WHERE tenants_name='ram' ORDER BY end_date DESC LIMIT 1";

		 $fetch= mysqli_query($conn,$sql);

		 $row = mysqli_fetch_array($fetch);

		$dat= $row['end_date'];

		echo $dat;



		 

		 

		 echo "<br>"; echo "<br>";

		 echo "welomslkdjfk";



		



		

		 ?>