<?php
    session_start();
    include('connect.php');
    $userId =  $_SESSION['id'];
    $qry= mysqli_query($con, "SELECT * FROM cart Where userId = $userId");
    // $data = mysqli_fetch_array($qry);
    // echo $data;
    // print_r($data);
    // $success = false;
    foreach ( $qry as $value) {
        $include[] = "('$value[product_name]',$value[product_id],$value[price],$value[quantity],'$value[image]',$value[userId])";
        $cartId[] = "($value[id])";
    }  
    $values = implode(",", $include);
        $qry2 =  mysqli_query($con,"INSERT INTO `placeorder`(`product_name`,`product_id`,`price`,`qty`,`image`,`userId`) VALUES $values");
        if($qry2){
            $query = mysqli_query($con, "DELETE FROM cart WHERE userId = $userId");
            if($query){
                 echo "<script type='text/javascript'>alert('Place Order Successful!');</script>";
                 header("Refresh:1; url=home.php");
            }
        }
  
?>