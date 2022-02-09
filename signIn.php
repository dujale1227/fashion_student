<?php
  session_start();

  // initializing variables
  $email = "";
  $password = "";
  $errors = array(); 
  if(isset($_SESSION['email'])){
   
    header('location:home.php'); 
  }
  if (isset($_POST['submit'])) 
  include 'connect.php';{
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  
          if(empty($password)) {
            echo "<script type='text/javascript'>alert('Password is required!');</script>";
            header("Refresh:1; url=login.php");
          }elseif (empty($email)) {
            echo "<script type='text/javascript'>alert('Email is required!');</script>";
            header("Refresh:1; url=login.php");
          }else{
            $pass = md5($password);
            $query =mysqli_query($con, "SELECT * FROM  users WHERE email='$email' AND password='$pass'");
            
            $rows = mysqli_fetch_array($query);
                if(!$rows){
                  echo "<script type='text/javascript'>alert('Email or Password is not correct');</script>";
                  header("Refresh:1; url=login.php");
                }else{
                   
                    $role = $rows['role'];

                    if($role == "customer"){
                      $_SESSION['email'] = $_POST['email'];
                      $_SESSION['id'] = $rows['id'];
                      $_SESSION['fullname'] = $rows['fullname'];
                      $_SESSION['role'] = $rows['role'];
                      $_SESSION['success'] = "";
                      header('location: home.php');
                    } else {
                      $_SESSION['email'] = $_POST['email'];
                      $_SESSION['id'] = $rows['id'];
                      $_SESSION['fullname'] = $rows['fullname'];
                      $_SESSION['role'] = $rows['role'];
                      $_SESSION['success'] = "";
                      header('location: admin.php');
                    }
                 
                }
          }
}

?>