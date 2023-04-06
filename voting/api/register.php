<?php

	include("connect.php");
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$aadhaar=$_POST['aadhaar'];
	$voterId=$_POST['voterId'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$address=$_POST['address'];
	$role=$_POST['role'];
	
	if($Password==$Cpassword){
		$insert=mysqli_query($connect,"INSERT INTO user (name,mobile,voterId,password,address,role,status,votes,aadhaar) VALUES ('$name','$mobile','$voterId','$password','$address','$role','$aadhaar','0','0')");
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
	}
?>