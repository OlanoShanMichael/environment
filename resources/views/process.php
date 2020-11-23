<?php 
$username = $_POST['username'];	
$password = $_POST['password'];

$con = mysqli_connect("localhost","root","","ddsbe");
$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$username' && password = '$password' " );
$count= mysqli_num_rows($result);
 if  ($count == 1) {
	echo '<script>alert("User Found")</script>';
	echo '<script>window.location.replace("login.php")</script>';
 }
 else {
	 echo '<script>alert("No User Found ")</script>'; 
	 echo '<script>window.location.replace("login.php")</script>';
 }

?>
