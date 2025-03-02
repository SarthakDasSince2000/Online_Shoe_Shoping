<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
$server = "localhost";
$username ="root";
$password ="";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die ("Connection to database failed due to ".
    mysqli_connect_error());
}
echo "Success connecting to the db";

$username = $_POST['Username'];
$phone number = $_POST['Phonenumber'];
$password = $_POST['Password'];
$confirm password = $_POST['Confirm password'];


$sql ="INSERT INTO `user`.`user data` (`username`, `phonenumber`, `password`, `confirmpassword`) VALUES ('$Username', '$Phonenumber', '$Password', '$ConfirmPassword')";
echo $sql;


 if($con->query($sql) == true){
    echo "Successfully inserted";
         $insert = true;                       
}else{

   echo "ERROR $sql <br> $con->error";

}

    $con->close();

 }
 
 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>

<body>
	<!--<img class="bg" src="back1.jpg" alt="shoess">-->
	<div class="signup-container">
		<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>

		<img class="bg" src="Ban1.jpg" alt="shoess">
		<h1>Sign Up</h1>



		<form action="#" method="post">

			?>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required>

			<label for="number">Phone Number</label>
			<input type="number" id="phone" name="phonenumber" required>

			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>

			<label for="confirm-password">Confirm Password</label>
			<input type="password" id="confirm-password" name="confirmpassword" required>

			<input type="submit" value="Sign Up">
			<p>Already have an account? <a href="login.html">Log in</a></p>
		</form>
	</div>
	<script src="sign.js"></script>
</body>

</html>

