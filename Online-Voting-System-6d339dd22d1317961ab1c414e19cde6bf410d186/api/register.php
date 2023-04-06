<?php

	include("connect.php");
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$aadhaar=$_POST['aadhaar'];
	$voterId=$_POST['voterId'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$address=$_POST['address'];
	$image=$_FILES['photo']['name'];
	$tmp_name=$_FILES['photo']['tmp_name'];
	$role=$_POST['role'];
	
	if($Password==$Cpassword){
		move_uploaded_file($tmp_name,"../uploads/$image");
		$insert=mysqli_query($connect,"INSERT INTO user (name,mobile,aadhaar,voterId,password,address,photo,role,status,votes) VALUES ('$name','$mobile','$aadhaar','$voterId','$password','$address','$image','$role','0','0')");
		if($insert){
			echo'
				<script>
				alert("Registration Successful!");
				window.location="../";
			</script>
			';
		}
		else{
			echo'
				<script>
				alert("Some Error ocurred!");
				window.location="../onlinevotingsystem2/register.html";
			</script>
			';
		}


	}
	else{
		echo'
			<script>
				alert("Password and Confirmed Passworddoes not match!");
				window.location="../onlinevotingsystem2/register.html";
			</script>
			';
	}
?>