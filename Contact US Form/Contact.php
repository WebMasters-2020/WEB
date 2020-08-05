		<?php
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
 			
 			$con = mysqli_connect("localhost","root","");
 			if ($con){
 						echo "Successfully Transfered To Our Server";
 			}
 			
 			$db = mysqli_select_db($con,"contact us");

 			$query="INSERT INTO contactinfo(phone,fname,lname,email)VALUES('".$phone."','".$fname."','".$lname."','".$email."')";
 			mysqli_query($con,$query);

		?>
	