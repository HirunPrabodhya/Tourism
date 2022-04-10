<!DOCTYPE html>
<?php
		//Create connection with database
		
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
				//echo"connection successful..."."</br>";
			}
			
			
?>



<html lang = "en">

	<head>
			
			<meta name = "viewport" content = "width = device-width,initial-scale = 1.0">
			
			
			<link rel = "stylesheet" type = "text/css" href = "../my css/plan_your_trip.css"> <!--link to the css file-->
			
			<!--Java Script part-->
		<script>
				<!-- create a function  name is showPassword() for show and hide password-->
			function showPassword()
						{
							var getPassword = document.getElementById("passWord");
							
							if(getPassword.type == "password")
							{
								getPassword.type = "text";
								document.getElementById("passwordShowIcon").style.visibility = "hidden";
								document.getElementById("passwordHideIcon").style.visibility = "visible";
								
							}
							else if(getPassword.type == "text")
							{
								getPassword.type = "password";
								document.getElementById("passwordShowIcon").style.visibility = "visible";
								document.getElementById("passwordHideIcon").style.visibility = "hidden";
							}
						}
						<!--creating a function name myRating() to show starts accrding to user selected rate-->
						function myRating()
							{
								// get user selected value and store in  variable called selectedValue 
									var selectedValue = document.getElementById("rate").value;
									
									if(selectedValue == 1)
									{
											
											document.getElementById("s2").style.display = "none";
											document.getElementById("s3").style.display = "none";
											document.getElementById("s4").style.display = "none";
											document.getElementById("s5").style.display = "none";
									}
									if(selectedValue == 2)
									{
											document.getElementById("s2").style.display = "block";
											document.getElementById("s3").style.display = "none";
											document.getElementById("s4").style.display = "none";
											document.getElementById("s5").style.display = "none";
									}
									else if(selectedValue == 3)
									{
										document.getElementById("s3").style.display = "block";
										document.getElementById("s2").style.display = "block";
										document.getElementById("s4").style.display = "none";
										document.getElementById("s5").style.display = "none";
									}
									else if(selectedValue == 4)
									{
										document.getElementById("s4").style.display = "block";
										document.getElementById("s2").style.display = "block";
										document.getElementById("s3").style.display = "block";
										document.getElementById("s5").style.display = "none";
									}
									else if(selectedValue == 5)
									{
										document.getElementById("s5").style.display = "block";
										document.getElementById("s4").style.display = "block";
										document.getElementById("s2").style.display = "block";
										document.getElementById("s3").style.display = "block";
									}
									
							}
							// create a function call showDetail_1() for visible and hidden first hotel details
							
							var click1 = 0,click2 = 0,click3 = 0;
							function showDetail_1()
							{
								click1 = click1 + 1;
								
								if(click1 % 2 != 0)
								{
									document.getElementById("de_1").style.visibility = "visible";
								}
								else
								{
									document.getElementById("de_1").style.visibility = "hidden";
								}
								
								
							}
							// create a function call showDetail_2() for visible and hidden second hotel details
							function showDetail_2()
							{
								click2 = click2 + 1;
								
								if(click2 % 2 != 0)
								{
									document.getElementById("de_2").style.visibility = "visible";
								}
								else
								{
									document.getElementById("de_2").style.visibility = "hidden";
								}
								
								
							}
							//create a function call showDetail_3() for visible and hidden third hotel
							function showDetail_3()
							{
								click3 = click3 + 1;
								
								if(click3 % 2 != 0)
								{
									document.getElementById("de_3").style.visibility = "visible";
								}
								else
								{
									document.getElementById("de_3").style.visibility = "hidden";
								}
								
							}
							// create a function  call getDetails() for send user name,Origin and destination to the RetriveData.php
							function getDetails()
							{
									var name = prompt("please enter your name: ");
									if(name){
										
										var fromCity = document.getElementById("formCity").value;
											var toCity = document.getElementById("toCity").value;
										
											localStorage.setItem("name",name);
											localStorage.setItem("origin",fromCity);
											localStorage.setItem("destination",toCity);
											window.location.href = "RetriveData.php";
									}
									
								
							}
							
			
		</script>

		<!--css part-->
		<style>
					/*style show_eye and close_eye*/
					.img1,.img2{
						float:right;
						position:relative;
						right:84%;
						
					}
					/*style open_eye*/
					.img2{
							position:absolute;
							left:14%;
						}
						
					/*style icons in  before you go topic*/	
					.topic1,.topic2,.topic3 a{
								text-decoration:none;
						}
						.img3,.img4,.img5,.img6,.img7{
								position:absolute;
								top:97.7%;
											
						}
						.img3{
							left:12%;
						}
						.img4{
							left:13%;
						}
						.img5{
							left:14%;
						}
						.img6{
							left:15%;
						}
						.img7{
								left:16%;
						}
										
						#msg{
							color:red;
						}
					
		</style>		
	<!--HTML Part-->		
	</head>
	<body>
			<!--In the navigation bar-->
			<div class = "header-body">
			<div class = "header">
					<ul>
					
						<li class = "list1"><a href = "Things_to_Do.html">Things to Do</a></li>
						<li class = "list2"><a href = "#">Plan Your Trip</a></li>
						
					</ul>
					<!--google translator-->
					<div id = "google_translator"></div>
					<script>
							function googleTranslateElementInit(){
								new google.translate.TranslateElement({pageLanguage: 'en'},"google_translator");
							}
					</script>
					<script type = "text/javascript" src = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			</div>
		</div>
			
			<!--first image-->
			<img src = "../images/image_1.jpg" alt = "image">
			
			<!--Create external javascript file to validate user input-->
			<script src = "../my js/Plan your trip.js"></script>
			
				<!--images in "before you go topic"-->
				<div class = "image-block">
						<h3>Before you Go</h3>
						<img src = "../images/visa.webp" class = "image1"  height = "100">
						<img src = "../images/bus.jpg" class = "image1" height = "100">
						<img src = "../images/explorer.jpg" class = "image1"  height = "100">
						<!--link images in "before you go topic"-->
					<div>
							<a class = "topic1" href = "https://slembassyusa.org/new/">Ambesidor >></a>
							<a class = "topic2" href = "https://www.srilanka.travel/transport#:~:text=Sri%20Lanka%20has%20a%20well,services%20operate%20within%20the%20island.">Transport >></a>
							<a class = "topic3" href = "https://traveltriangle.com/blog/sri-lanka-solo-traveling/">Travel >></a>
					</div>
					<!--text background in before you go topic-->
					<div class = "image-text-background"></div>
					<div class = "image-text-background2"></div>
					<div class = "image-text-background3"></div>
					
				</div>
				<!--middel paragraph-->
					<div class = "paragraph">
							<h2>Smooth your way with a little forward planning</h2>
						<p>
								It is easy to feel a little overwhelmed and disoriented when you visit SriLanka for the first time, 
								so find out the basics before you fly and get acquainted with the country through our helping you plan guide.
						</p>
						<p>
							Learn a little more about SriLanka's customs, culture and Wi-Fi connectivity, as well as its seasonal weather, 
								geography and luggage delivery options. Many of the questions first-time travelers might have are answered here, 
								along with insider tips and practical advice to help you navigate the country with confidence.
						</p>
						
				</div>
				<!--6 blocks(Wifi Connection,Currency,Credit Cards,Weather,Visa Information,Custom & Manners)-->
				<div class = "table">
						<table>
								<tr>
										
										<td><a href = "https://www.go-lanka.com/sri-lanka/internet-rental.html"><img src = "../images/wifi.jpg" width = "300" height = "250"></a>
											<h1>Wifi Connection</h1>
											<p>Wireless hotspots are popping up all over major cities in SriLanka, 
												so you should never be too far from a Wi-Fi connection.
												Revolutionizing internet usage across the country whilst expanding Sri Lanka’s broadband capacity, SLT Broadband proudly introduced fastest internet, 
												taking the speeds up to as much as 1 Gbps.
											</p>
										</td>
										<td><a href = "https://dfe.lk/web/index.php?option=com_content&view=article&id=142:gold-trade&catid=81&lang=en"><img src = "../images/money.jpg" width = "300" height = "250"></a>
												<h1>Currency</h1>
											<p>The SriLankan Rupees is used throughout the country and you can exchange foreign currency 
												at the airports and most major banks.Indicative US Dollar SPOT Exchange Rate is the weighted 
												average rate of all actual USD/LKR SPOT transactions executed in the domestic inter-bank foreign 
												
											</p>
										</td>
										<td><a href = "https://www.hsbc.lk/credit-cards/"><img src = "../images/credit.jpg" width = "300" height = "250"></a>
												<h1>Credit Cards</h1>
											<p>Even though SriLanka is a cash-centric country, credit cards are usually accepted in most shops, 
												restaurants and taxis in major cities.Availability of information about loans obtained by a person/institution from banks, 
												finance companies and leasing companies etc. is important for an efficient credit market
											</p>
										</td>
								</tr>
								<tr>
										<td><a href = "https://www.meteo.gov.lk/index.php?lang=en"><img src = "../images/weather.webp" width = "300" height = "250"></a>
													<h1>Weather</h1>
											<p>
												The weather in SriLanka can vary wildly depending on where you are traveling to. 
												Find out the best times to visit and what to pack.Heavy showers above 100 mm can be expected at some places in Central, Sabaragamuwa, Southern, Uva and 
												North-central provinces and in Ampara and Kurunegala districts.

 
											</p>
										</td>
										<td><a href = "https://eta.gov.lk/slvisa/visainfo/center.jsp;jsessionid=xj30Yh6XPHdwsOM_dknKSGeK5bZoLG4PNheu7pqbzAMRb7X_glcr!-1296937436?locale=en_US"><img src = "../images/visaApp.webp" width = "300" height = "250"></a>
												<h1>Visa Information</h1>
											<p>
												With effect from 10th  August 2015, applicants applying for passports are required to provide digital   photograph and fingerprints to the Department. The digital photograph should be submitted through one of our  authorized photo studio located 
												island-wide or at the Department head office or at regional offices. Printed photographs will no longer be accepted.
											</p>
										</td>
										<td><a href = "https://www.commisceo-global.com/resources/country-guides/sri-lanka-guide#:~:text=Greetings%20are%20given%20upon%20meeting,woman%20to%20extend%20her%20hand."><img src = "../images/custom.jpg" width = "300" height = "250"></a>
												<h1>Custom & Manners</h1>
											<p>Following a general travelers code of respect for the people you meet and places you visit will stand you in good stead.The Cultural Atlas team acknowledges the Traditional Owners of the lands throughout Australia on whose country 
												we have the privilege to live and work. We pay our respects to all Aboriginal and Torres Strait Islander custodians past, present and emerging.
											</p>
										</td>
								</tr>
								
						</table>
				</div>
				
					<h2>Plan your Trip</h2>
					<div>
							<form action = "https://www.google.com/maps/@7.1260598,80.0870147,15z" class = "form1">
									<!--retrieve data  from the database to show cities-->
									<lable>Orgin:</lable>
									<select name = "saddr" id = "formCity" class = "select">
											<?php
													$sql = "SELECT * FROM city";
													
													$result = mysqli_query($conn,$sql);
													
													
														while($row = mysqli_fetch_array($result))
														{
															?>
															<option><?php echo $row['cities'];?></option>
														<?php	
														}
														?>
												
											
									</select>
									
									<!--retrieve data  from the database to show cities-->
											<lable>Destination:</lable>
												<select name = "daddr" id = "toCity" class = "select">
														<?php
															$sql2 = "SELECT * FROM city";
															
															$result2 = mysqli_query($conn,$sql2);
															
															while($row2 = mysqli_fetch_array($result2))
															{
																?>
																<option><?php echo $row2['cities'];?></option>
															<?php
															}
														?>
														
												</select>
										<!--submit these cites to google map-->
										<input type="submit" value="Distance">
							</form>
					</div>
					<!--Accomadete block-->
					<h1>Accomadate</h1>
					<div class = "accomadate">
						<!--accomadates images -->
							<img src = "../images/aco1.jpg" width = "20%" height = "270">
							<img src = "../images/aco2.jpg" width = "20%" height = "270">
							<img src = "../images/aco3.webp" width = "20%" height = "270">
					</div>
					<div class = "button">
						<!--clickable buton to show hotel details-->
							<input type = "button" id = "btn1" value = "Click here" onclick = "showDetail_1()">
							
							<input type = "button" id = "btn2" value = "Click here" onclick = "showDetail_2()">
							
							<input type = "button" id = "btn3" value = "Click here" onclick = "showDetail_3()">
							
					</div>
					<div class = "price">
								<div class = "detail_1" id = "de_1" style = "visibility:hidden;">
									<!--retrieve data  from the database to show hotel details-->
										<?php
											$sql = "SELECT * FROM hotel WHERE id = 1";
											
											$result = mysqli_query($conn,$sql);
											
											
												while($row = mysqli_fetch_array($result))
												{
													?>
													<p><b>Hotel Name</b>:&nbsp;<?php echo $row['Name'];?></p>
													<p><b>Address</b>:&nbsp;<?php echo $row['Address'];?></p>
													<p><b>Phone</b>:&nbsp;<?php echo $row['Phone'];?></p>
													<p><b>Price</b>:&nbsp;Rs.<?php echo $row['price'];?></p>
													<p><b>Rating</b>:&nbsp;<?php echo $row['Rating'];?></p>
												<?php	
												}
												?>
									
										<input type = "button" class = "select_1" value = "Select" onclick = "getDetails()">
								</div>
								<div class = "detail_2" id = "de_2" style = "visibility:hidden;">
										<!--retrieve data  from the database to show hotel details-->
										<?php
												$sql2 = "SELECT * FROM hotel WHERE id = 2";
												$result = mysqli_query($conn,$sql2);
												
												while($row2 = mysqli_fetch_array($result))
												{
													?>
													<p><b>Hotel Name</b>:&nbsp;<?php echo $row2['Name'];?></p>
													<p><b>Address</b>:&nbsp;<?php echo $row2['Address'];?></p>
													<p><b>Phone</b>:&nbsp;<?php echo $row2['Phone'];?></p>
													<p><b>Price</b>:&nbsp;Rs.<?php echo $row2['price'];?></p>
													<p><b>Rating</b>:&nbsp;<?php echo $row2['Rating'];?></p>
												<?php	
												}
												?>
										<input type = "button" class = "select_2" value = "Select">
								</div>
								<div class = "detail_3" id = "de_3" style = "visibility:hidden;">
								<!--retrieve data  from the database to show hotel details-->
										<?php
												$sql3 = "SELECT * FROM hotel WHERE id = 3";
												$result = mysqli_query($conn,$sql3);
												
												while($row3 = mysqli_fetch_array($result))
												{
													?>
													<p><b>Hotel Name</b>:&nbsp;<?php echo $row3['Name'];?></p>
													<p><b>Address</b>:&nbsp;<?php echo $row3['Address'];?></p>
													<p><b>Phone</b>:&nbsp;<?php echo $row3['Phone'];?></p>
													<p><b>Price</b>:&nbsp;Rs.<?php echo $row3['price'];?></p>
													<p><b>Rating</b>:&nbsp;<?php echo $row3['Rating'];?></p>
												<?php	
													
												}
										?>
										<input type = "button" class = "select_3" value = "Select">
								</div>
								
					</div>
					
						<!--Feeback block-->	
							<h1>Your Feeback</h1>
			<!--create a form for feeback-->
					<form action = "sendData.php" class = "form2" method = "POST" name = "myform" onsubmit = "return myFunction()">
					
							<div>
							<lable>UserName:</lable>
							<input type = "text" name = "username" placeholder = "xxxxxx@gmail.com" required >
							</div>
							<div>
									<lable>Password:</lable>
									<input type = "password" name = "password" id = "passWord" >
									<span onclick = "showPassword()">
									<img src = "../images/open_eye.jpg" width = "50" height = "30" class = "img2" id = "passwordHideIcon">
									<img src = "../images/close_eye.png" width = "40" height = "30" class = "img1" id = "passwordShowIcon">
					
									</span>
									<div id = "msg" style = "display:none;">***Please Enter password***</div>
							</div>
							<div>
									<lable>Message:</lable>
									<textarea cols = "70" rows = "10" name = "message" placeholder = "Tell us your opinion about this site"></textarea>
							</div>
							<div>
									<lable>Rating:</lable>
									<select class = "select" name = "Rating" id = "rate" onchange = "myRating()">
										<option value = "1">1</option>
										<option value = "2">2</option>
										<option value = "3">3</option>
										<option value = "4">4</option>
										<option value = "5">5</option>
										
									</select>
									<!--show Stars -->
									<span class = "stars">
									<img src = "../images/star.jpg" class = "img3" id = "s1" width = "20" height = "20" >
									<img src = "../images/star.jpg" class = "img4" id = "s2" width = "20" height = "20" style = "display:none;">
									<img src = "../images/star.jpg" class = "img5" id = "s3" width = "20" height = "20" style = "display:none;">
									<img src = "../images/star.jpg" class = "img6" id = "s4" width = "20" height = "20" style = "display:none;">
									<img src = "../images/star.jpg" class = "img7" id = "s5" width = "20" height = "20" style = "display:none;">
									</span>
							</div>
							
							
							<input type = "submit" value = "Submit" ><!--wehen click button submit user data send to sendData.php--> 
					</form>
						
			
						<!--display a popup model if user email is wrong-->
								<div id = "container">
									<div class = "block"></div>
										<div class = "box">
											<div class = "close-btn" onclick = "closeFunction()">&times;</div>
												<h1>This Page Says</h1>
												<p>
													UserName is Wrong...
												</p>
									  </div>
							</div>
							
							
					
				
							
						
	</body>
</html>