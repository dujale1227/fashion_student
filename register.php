<?php
  include('connect.php');
extract($_POST);
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $address = $_POST['address']; 
    $contact = $_POST['contact']; 
    $email = $_POST['email']; 
    $password =  md5($_POST['password']);
    $secret = $_POST['password'];
    $role = "customer";
    // echo $fullname;
    // echo $address;
    // echo $email;
    // echo $password;
    if(empty($fullname)){
        echo "<script type='text/javascript'>alert('Fullname is required!');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($email)){
        echo "<script type='text/javascript'>alert('Email is required!');</script>";
	    header("Refresh:1; url=signUp.php");
    } else if(empty($password)){
        echo "<script type='text/javascript'>alert('password is required!');</script>";
	    header("Refresh:1; url=signUp.php");
    } else {
        $query =  mysqli_query($con,"INSERT INTO `users` (`fullname`,`address`,`contact`,`email`,`password`,`secret`,`role`) VALUES ('$fullname','$address','$contact','$email','$password','$secret','$role')");
        // $query = mysqli_query($qr);
        if ($query) {
            echo "<script type='text/javascript'>alert('Sign Up Successful!');</script>";
            header("Refresh:1; url=login.php");
        }
    }
}
?>