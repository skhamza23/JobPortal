<?php
session_start();
require_once("db.php");
if(isset($_POST)) {
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);
	$stream = mysqli_real_escape_string($conn, $_POST['stream']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
    $password = base64_encode(strrev(md5($password)));
	$active = mysqli_real_escape_string($conn,'age');

	$sql = "SELECT email FROM users WHERE email='$email'";
	$result = $conn->query($sql);	
	if($result->num_rows == 0) {
 		
		$sql = "INSERT INTO users(firstname, lastname, email, password, city, state, contactno, qualification, stream, age, aboutme, active) VALUES ('$firstname', '$lastname', '$email', '$password', '$city', '$state', '$contactno', '$qualification', '$stream' , '$age',  '$aboutme', '$active')";

		if($conn->query($sql)===TRUE) {	
			$_SESSION['registerCompleted'] = true;
			header("Location: page-login.php");
			exit();
		} else {
			echo "Error " . $sql . "<br>" . $conn->error;
		}
	} 
    else {
		$_SESSION['registerError'] = true;
		header("Location: register-candidate.php");
		exit();
	}
	$conn->close();
} else {
	header("Location: register-candidate.php");
	exit();
}