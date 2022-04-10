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
						die("connection erro: ".mysqli_connect_error());
					}
					else{
						echo"connection successful"."</br>";
					}
					// create sql query
					$sql = "CREATE TABLE hotel(
					Id INT(6) PRIMARY KEY,
					Name VARCHAR(30) NOT NULL,
					Address VARCHAR(50) NOT NULL,
					Phone VARCHAR(30) NOT NULL,
					price float NOT NULL,
					Rating float(5) NOT NULL
			)";
			//add  the table to the dropbox database
			if(mysqli_query($conn,$sql))
			{
				echo"table create";
			}
			//close the connection
			mysqli_close($conn);
			?>
	</body>
</html>