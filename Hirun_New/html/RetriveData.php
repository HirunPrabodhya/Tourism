<?php
				/*connect to the database*/
					$serverName = "localhost";
					$userName = "root";
					$password = "";
					$database = "dropbox";
					
					$conn = mysqli_connect($serverName,$userName,$password,$database);
					
					if(!$conn)
					{
						die("connection error: ".mysqli_connect_error());
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
				<!--background image-->
						body{
							background-image:url("../images/bg_form.jpg");
								}
				</style>	
	</head>
	<body>		
				<?php	
								// sql query
									$sql = "SELECT Name,price FROM hotel WHERE id = 1";
									$result = mysqli_query($conn,$sql);
							
							//get the data from the table
									while($row = mysqli_fetch_array($result))
									{
										
										$hName = $row["Name"];
										$hPrice = $row["price"];
									}		
				?>
			
					<!--show database data to the user-->
						<h1>All Data</h1>
						<form action = "retriveAll.php" method = "POST">
								<div>
									<lable>Hotel Name:</lable>
									<input type = "text" name = "hotelname" value = "<?php echo $hName;?>" readonly>
								</div>	
								<div>
									<lable>Hotel Price(Rs.):</lable>
									<input type = "text" name = "hotelprice" value = "<?php echo $hPrice;?>" readonly>
								</div>
								<div>
									<lable>Name:</lable>
									<input type = "email" name = "name" id = "user" readonly>
								</div>
								<div>
									<lable>From:</lable>
									<input type = "text" name = "from"  id = "place_1" readonly>
								</div>
								<div>
									<lable>To:</lable>
									<input type = "text" name = "to" id = "place_2" readonly>
								</div>
							<input type = "submit" value = "Submit">	
						</form>
				<script>
							var b = localStorage.getItem("origin");
							var c = localStorage.getItem("destination");
							var d = localStorage.getItem("name");
	
							var element = document.getElementById("place_1");
							var element2 = document.getElementById("place_2");
							var element3 = document.getElementById("user");
							element.value = b;
							element2.value = c; 
							element3.value = d;
				</script>
			
		</body>
</html>