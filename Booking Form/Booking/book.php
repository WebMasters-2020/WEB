
	<?php

		$roomtype=$_POST['roomtype'];
		$roomno=$_POST['roomno'];
		$person=$_POST['person'];
		$children=$_POST['children'];
		$facilities=$_POST['facilities'];
		$cost=$_POST['cost'];
		

		$con = mysqli_connect("localhost","root","");

		if($con)
		{
			echo "Connected to DB server";
		}

		$db = mysqli_select_db($con,"book");

		$query = "INSERT INTO bookform(roomtype,roomno,person,children,facilities,cost)VALUES('".$roomtype."','".$roomno."','".person."','".$children."','".$facilities."','".$cost."')";

		mysqli_query($con, $query);
	?>





