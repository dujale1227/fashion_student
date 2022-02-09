<?php
  include('connect.php');
extract($_POST);
session_start(); 
$userId = $_SESSION['id'];
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $address = $_POST['address']; 
    $contact = $_POST['contact']; 
    $email = $_POST['email']; 
  
    // echo $fullname;
    // echo $address;
    // echo $email;
    // echo $contact;
    // echo $userId;
    if(empty($fullname)){
        echo "<script type='text/javascript'>alert('Fullname is required!');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($email)){
        echo "<script type='text/javascript'>alert('Email is required!');</script>";
	    header("Refresh:1; url=signUp.php");
    }else {
        $query =  mysqli_query($con,"UPDATE `users` SET fullname = '$fullname', address = '$address',email= '$email', contact='$contact' WHERE id = $userId");
        // $query = mysqli_query($qr);
        if ($query) {
            // echo "<script type='text/javascript'>alert('Sign Up Successful!');</script>";
            header("Refresh:1; url=myProfile.php");
        }
    }
}
?>