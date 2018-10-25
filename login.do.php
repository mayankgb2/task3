<?php
	$conn =new mysqli("localhost","root","","task");
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$passmd = md5($pass);
	$sql = "SELECT * FROM user where email='$email' and pass ='$passmd'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	if ($count == 1){
		echo "Your id number is ".$row['id'];
		echo "<br>Your name is ".$row['name'];
	} 
	else{
		echo "Wrong id or password";
	}

?>