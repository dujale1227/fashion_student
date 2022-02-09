<?php

session_start();

if(isset($_SESSION['sess_user_id'])&& $_SESSION['sess_user_id']!=""){
	
}
else{
     header("Location:index.php");
}
$user_Id = $_SESSION['sess_mem_Id'];

?>