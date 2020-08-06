
	<?php

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$contactNo=$_POST['contactNo'];
		$pass=$_POST['pass'];
		$pass1=$_POST['pass1'];

		$con = mysqli_connect("localhost","root","");

		if($con)
		{
			echo "Connected to DB server";
		}

		$db = mysqli_select_db($con,"registration");

		$query = "INSERT INTO userregister(pass,fname,lname,gender,dob,email,country,contactNo,pass1)VALUES('".$pass."','".$fname."','".$lname."','".$gender."','".$dob."','".$email."','".$country."','".$contactNo."','".$pass1."')";

		mysqli_query($con, $query);
	?>





