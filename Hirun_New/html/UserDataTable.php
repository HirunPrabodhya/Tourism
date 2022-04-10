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
					// creat database connection 
					$conn = mysqli_connect($serverName,$userName,$password,$database);
					//check  connection 
					if(!$conn)
					{
						die("connection error: ".mysqli_connect_error());
					}
					else
					{
							echo"connection successdful....."."</br>";
					}
					// create sql query
					$sql = "CREATE TABLE usertrip(
							id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
							username VARCHAR(30) NOT NULL,
							hotelname VARCHAR(30) NOT NULL,
							origin VARCHAR(30) NOT NULL,
							destination VARCHAR(30) NOT NULL,
							totalprice float NOT NULL
							
					)";
					//add  the table to the dropbox database
					if(mysqli_query($conn,$sql))
					{
						echo"table is created";
					}
					else{
						echo "error".mysqli_error($conn);
					}
					//close the connection
					mysqli_close($conn);
				?>
	</body>
</html>