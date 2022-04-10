<?php
		$serverName = "localhost";
			$userName = "root";
			$password = "";
			$database = "dropbox";
			
			$conn = mysqli_connect($serverName,$userName,$password,$database);
			
			if(!$conn)
			{
				die("connection error".mysqli_connect_error());
			}
			else
			{
				echo"connection successful..."."</br>";
			}
		
?>


<!DOCTYPE html>
<html lang = "en">

	<head>
	
		<style>
			body{
			background-image:url("../images/bg_form.jpg");
		}
				input[type = "button"]{
					margin-top:2%;
				}
				.block{
					margin-left:2%;
				}
		</style>
		
		<script>
				function myFunction()
				{
					alert("details are send");
					
						<?php
								$sql3 = "INSERT INTO userdata2(userName,password,message,rating) VALUES('$_POST[username]','$_POST[password]','$_POST[message]','$_POST[Rating]')";
								
								if(mysqli_query($conn,$sql3))
								{
									echo"data insert";
								}
								else{
									echo "data insert error: ".mysqli_error($conn);
								}
						?>	
						
				}
		</script>
	</head>
	<body>
					<h1>Your Data Result</h1>
		<?php
		echo"<div class = 'block'>";
				$rate = $_POST["Rating"];
				
				echo"UserName ".$_POST["username"]."</br>"; 
				echo"Password:".$_POST["password"]."</br>";
				echo"Message: ".$_POST["message"]."</br>";
				
				echo"rating our site: ".$rate."</br>";	
				
		echo"</div>";		
		?>
		
		<input type = "button" value = "Send" onclick = "myFunction()">
</body>		
</html>