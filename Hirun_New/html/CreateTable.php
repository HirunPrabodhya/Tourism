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
				die("connection error".mysqli_connect_error());
			}
			
			else
			{
				echo"connection successful..."."</br>";
			}
			// create sql query
			
			$sql = "CREATE TABLE city(
					id INT(6) PRIMARY KEY,
					cities varchar(30) NOT NULL)";
			
			//add  the table to the dropbox database
			if(mysqli_query($conn,$sql))
			{
				echo"table created successful.."."</br>";
			}
			//otherwise give error
			else
			{
					echo"table created error: ".mysqli_error($conn);
			}
			//close the connection
			mysqli_close($conn);
		?>
</body>
</html>