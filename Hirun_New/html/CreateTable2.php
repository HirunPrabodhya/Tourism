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
			$sql2 = "CREATE TABLE userdata2(
										userID int(6) not null PRIMARY KEY AUTO_INCREMENT,
										userName varchar(30) NOT NULL,
										password varchar(10) NOT NULL,
										message varchar(30),
										rating int(2)
								)";
								
								//add  the table to the dropbox database
								if(mysqli_query($conn,$sql2))
								{
									echo"table create";
								}
								else{
									echo "creating table error ".mysqli_error($conn);
								}
				//close the connection
				mysqli_close($conn);		
		?>
</body>
</html>