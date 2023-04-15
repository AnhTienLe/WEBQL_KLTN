<?php  
	session_start();
	if(isset($_SESSION['users_username'])){
		session_destroy();
		header('location: ../../login.php');
	}
	else{
		header('location: ../../login.php');
	}
?>