<?php
	session_start();

	$role = $_SESSION['role'];
	if(session_destroy())
	{
		if($role === 'customer'){
			header("Location: index.php");
		} else {
			header("Location: login.php");
		}
	
	}
?>