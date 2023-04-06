<?php
$host='localhost';
$user='root';
$password='';
$dbname='db1';
$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con)
die("connection issue".mysqli_connect_error());
else
echo'connected successfully';
$sql="CREATE TABLE user(name varchar,mobile int,voterId int,password varchar,address varchar,role varchar,status varchar,votes varchar,aadhaar int)";
if(mysqli_query($con,$sql))
echo'Table cretaed successful';
else
echo'<br>Table not created';
mysqli_close($con);
?>