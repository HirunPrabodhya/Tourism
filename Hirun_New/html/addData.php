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
			die("connection is falied: ".mysqli_connect_error());
		}
		else
		{
				echo "connection successful..."."</br>";
		}
		
		$sql = "INSERT INTO city VALUES('1','Colombo'),('2','Dehiwala-Mount Lavinia'),('3','Moratuwa'),
				('4','Jaffna'),('5','Negombo'),('6','Pita Kotte'),('7','Sri Jayewardenepura Kotte'),
				('8','Kandy'),('9','Trincomalee'),('10','Kalmunai'),('11','Galle'),('12','Point Pedro'),
				('13','Batticaloa'),('14','Katunayaka'),('15','Valvedditturai'),('16','Matara'),('17','Battaramulla South'),
				('18','Dambulla'),('19','Maharagama'),('20','Kotikawatta'),('21','Anuradhapura'),('22','Vavuniya'),
				('23','Kolonnawa'),('24','Hendala'),('25','Ratnapura'),('26','Badulla'),('27','Puttalam'),('28','Devinuwara'),
				('29','Welisara'),('30','Kalutara'),('31','Bentota'),('32','Matale'),('33','Homagama'),('34','Beruwala'),
				('35','Panadura'),('36','Mulleriyawa'),('37','Kandana'),('38','Ja Ela'),('39','Wattala'),('40','Peliyagoda'),
				('41','Kelaniya'),('42','Kurunegala'),('43','Nuwara Eliya'),('44','Gampola'),('45','Chilaw'),('46','Eravur Town'),
				('47','Hanwella Ihala'),('48','Weligama'),('49','Vakarai'),('50','Kataragama'),('51','Ambalangoda'),('52','Ampara'),
				('53','Kegalle'),('54','Hatton'),('55','Polonnaruwa'),('56','Kilinochchi'),('57','Tangalle'),('58','Monaragala'),
				('59','Wellawaya'),('60','Gampaha'),('61','Nittambuwa'),('62','Horana South'),('63','Wattegama'),('64','Minuwangoda'),
				('65','Horawala Junction'),('66','Kuliyapitiya')";
		
		
		if(mysqli_query($conn,$sql))
		{
			echo "data inserted successful";
		}
		else
		{
			echo"error occure".mysqli_error($conn);
		}
		
		mysqli_close($conn);
	?>
</body>
</html>