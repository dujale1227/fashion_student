<?php
    session_start();
    // $_SESSION['productId'] = $productId; 
    include 'connect.php';

    if($_GET['cartId']){
        $cartId = $_GET['cartId'];
        $query = mysqli_query($con, "DELETE FROM cart WHERE id ='$cartId'");
        
        if ($query) {
            echo "<script type='text/javascript'>alert('Remove product Successful!');</script>";
            header("Refresh:1; url=cart.php");
        }
    } else {
        echo "<script type='text/javascript'>alert('Error remove product!');</script>";
        header("Refresh:1; url=cart.php");
    }
  
?>