<!DOCTYPE html>
<html lang = "en">
<head>

</head>
<body>

	<!--create the connection-->
		<?php
				$serverName = "localhost";
				$userName = "root";
				$password = "";
				
				$conn = mysqli_connect($serverName,$userName,$password);
				//check connection is ok
				if(!$conn)
				{
					//if connection is faild give a message that connection is fail
					die("connection error: ".mysqli_connect_error());
				}
				else
				{
					//otherwise give a message connection is successful...
					echo "connection successful..."."</br>";
				}
				//create a query for creating database
				$sql = "CREATE DATABASE dropbox";
				
				if(!mysqli_query($conn,$sql))
				{
					//if database not created then give a message
					echo"database error: ".mysqli_error($conn);
				}
				else
				{
					//otherwise give a message database created..
						echo"database is created";
				}
				mysqli_close($conn);
		?>
</body>
</html>