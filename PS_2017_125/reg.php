<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <div class="fm">
        <h1>Registration Form</h1>
        <form  method="POST">
            <label>First Name : </label>
            <input type="text" name="fname" required><br><br>
            <label>Last Name : </label>
            <input type="text" name="lname" required><br><br>
            <label>Mobile Number : </label>
            <input type="text" name="mob" required><br><br>
            <label>Email Address : </label>
            <input type="text" name="email" required><br><br>
            <label>Password : </label>
            <input type="text" name="pass" required id="p1"><br><br>
            <label>Conform Password : </label>
            <input type="text" name="cpass" required id="p2"><br><br>
            <input type="submit" name="submit" value="Register" class="sub" onclick="m()"> 
        </form>
        <h1>LogIn Form</h1>
        <form  method="POST">
            <label>Email Address : </label>
            <input type="text" name="email" required><br><br>
            <label>Password : </label>
            <input type="text" name="pass" required><br><br>
            <input type="submit" name="login" value="LogIn" class="sub"> 
        </form>
    </div>
    <?php
       if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form";
      
      // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $mob = $_POST['mob'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $cpass = $_POST['cpass'];

      $sql = "INSERT INTO reg (fname,lname,mob,email,pass,cpass) VALUES ('$fname','$lname','$mob','$email','$pass','$cpass')";

     if ($conn->query($sql) === TRUE) {
            
     } else {
            
     }
     $conn->close();
}
if(isset($_POST['login'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";
  
  // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

  
   $email = $_POST['email'];
   $pass = $_POST['pass'];
  
   $sql = "SELECT * FROM reg WHERE email='$email' AND pass='$pass'";
   $result = $conn->query($sql);

   if ($result->num_rows == 1) {
         
             
   } else {
         echo "<script> alert('Your are not registered or check your password!') </script>";
   }
   $conn->close();
}
   
?>
  <a href="Home.html"><input type="submit" value="Back to Home"></a>
 <script src="reg.js"></script> 
</body>
</html>

