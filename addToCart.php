<?php
    session_start();
    // $_SESSION['productId'] = $productId; 
    include 'connect.php';

    if(isset($_SESSION['email'])){
        $productId = $_GET['productId'];
        $query = mysqli_query($con, "SELECT * FROM  products WHERE id='$productId'");
        $rows = mysqli_fetch_array($query);
    
        $productName = $rows['product_name'];
        $price = $rows['price'];
        $image = $rows['image'];
        $qty = 1;
        $userId =  $_SESSION['id'];
    
        $qry =  mysqli_query($con,"INSERT INTO `cart` (`product_name`,`product_id`,`price`,`quantity`,`image`,`userId`) VALUES ('$productName','$productId','$price','$qty','$image','$userId')");
        // $query = mysqli_query($qr);
        if ($query) {
            echo "<script type='text/javascript'>alert('Cart Added Successful!');</script>";
            header("Refresh:1; url=home.php");
        }
    } else {
        echo "<script type='text/javascript'>alert('Need to login your account before adding to cart!');</script>";
        header("Refresh:1; url=home.php");
    }
  
?>