<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
echo "<script>alert('Connection Successful');</script>";

/*
$sql = "CREATE DATABASE formDB";
if(!mysqli_query($conn, $sql)){
	die("Error creating database:".mysqli_error($conn)) ;
} 
echo "<script>alert('DB creation Successful');</script>";
mysqli_select_db($conn,"formDB");
$sql = "CREATE TABLE Users(
		Name varchar(25),
		Email varchar(30),
		message varchar(50))";
		
if(mysqli_query($conn, $sql)){
	echo "<script>alert('Table creation Successful');</script>";
	
}else{
	echo "Error creating table:".mysqli_error($conn);
}

*/

?>


