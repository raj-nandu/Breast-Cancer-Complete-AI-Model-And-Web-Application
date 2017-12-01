<?php 
	session_start();
	if($_POST){
		include('connection.php');
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$organization = $_POST['organization'];
		$message = $_POST['message'];
		$query = "INSERT INTO contact VALUES (null, '$name', '$email', '$phone', '$organization','$message')";
		$result = mysqli_query($conn, $query);
		header("location: index.php#contact");
		
	}
?>