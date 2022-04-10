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
					
					$conn = mysqli_connect($serverName,$userName,$password,$database);
					
					if(!$conn)
					{
						die("connection erro: ".mysqli_connect_error());
					}
					else{
						echo"connection successful"."</br>";
					}
					
					$sql = "INSERT INTO hotel VALUES(1,'The Hideout Sigiriya','Rangirigama Rd, Kimbissa','077 771 6088',10268.00,4.2),
							(2,'Heritance Kandalama','Heritance Kandalama 11, Dambulla','066 555 5000',44643.00,4.7),
							(3,'Habarana Village by Cinnamon','Habarana','066 227 0047',27483.00,4.5)";
					
					 if(mysqli_query($conn,$sql))
					{
						echo"add rows";
					} 
					
			?>	
					
	</body>
</html>