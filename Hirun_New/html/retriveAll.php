<!DOCTYPE html>
<html lang = "en">
	<head>
	
	</head>
	
	<body>
						<?php
								$serverName = "localhost";
								$userName = "root";
								$password = "";
								$database = "dropbox";
								
								//coonect to the database
								$conn = mysqli_connect($serverName,$userName,$password,$database);
								
								//check the database connection
								if(!$conn)
								{
									die("connection error: ".mysqli_connect_error());
									
								}
								else
								{
									echo"Connection Successful.."."</br>";
								}
								//create sql query
								
								$sql = "INSERT INTO usertrip(username,hotelname,origin,destination,totalprice) VALUES('$_POST[name]','$_POST[hotelname]','$_POST[from]','$_POST[to]','$_POST[hotelprice]')";
								//add a row to the table that coming from the user
								if(mysqli_query($conn,$sql))
								{
									echo "record is add..";//give a message to the user 
								}
								else
								{
									//otherwise error
									echo "connection error: ".mysqli_error($conn);
								}
								//close the connection
								mysqli_close($conn);
						?>
	</body>
</html>