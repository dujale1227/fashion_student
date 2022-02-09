<?php include('connect.php') ?>
<?php 
  session_start(); 

//   if (!isset($_SESSION['fullname'])) {
//     $_SESSION['msg'] = "You must log in first";
//     header('location: .php');
//   }
//   if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['username']);
//     header("location: index.php");
//   }
?>
<html>
    <head>
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            height: 13%;
            font-size: 25px;
        }

        li {
            float: right;
            margin: auto;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 42px 32px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
        background-color: #111;
        }
        .logo{
            float: left;
            color: white;
            font-size: 15px;
            padding: 14px 150px;
            

        }
        .profile{
            float: right;
            color: white;
            font-size: 25px;
            padding: 42px 32px;
        }
        .w3-content{
            height: 50%;
            width: 82% !important;
            margin-left: 146px;
            margin-right: 146%;
            max-width: none;
        }
        .w3-text-white, .w3-hover-text-white:hover {
            color: #fff!important;
        }
        .w3-section, .w3-code {
            margin-top: 16px!important;
            margin-bottom: 16px!important;
        }
        .w3-center {
            text-align: center!important;
        }
        .w3-large {
            font-size: 18px!important;
        }
        .w3-container, .w3-panel {
            padding: 0.01em 16px;
        }
        .w3-display-bottommiddle {
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translate(-50%,0%);
            -ms-transform: translate(-50%,0%);
        }
        .w3-left {
            float: left!important;
        }
        .w3-right {
            float: right!important;
        }
        .w3-white, .w3-hover-white:hover {
            color: #000!important;
            background-color: #fff!important;
        }

        .w3-transparent, .w3-hover-none:hover {
            background-color: transparent!important;
        }
        .w3-badge {
            border-radius: 50%;
        }
        .w3-badge, .w3-tag {
            background-color: #000;
            color: #fff;
            display: inline-block;
            padding-left: 8px;
            padding-right: 8px;
            text-align: center;
        }
        .mySlides{   
            width: 100%;
            display: block;
            object-fit: fill;
            height: 100%;
            border-radius: 5px;
            position: absolute;
        }
        .w3-tooltip, .w3-display-container {
            position: relative;
        }
        .product{
           margin-left:140px;
           margin-right:140px;
        }
        img{
            border-radius: 5px;
            position: absolute;
            width: -webkit-fill-available;
        }
        * {
        box-sizing: border-box;
        }

        .column {
        margin: 9px;
        border: 1px solid grey;
        height: 70%;
        float: left;
        padding: 0px;
        width: 23%;
        position: relative;
        }

            /* Clearfix (clear floats) */
            .product-container::after {
            content: "";
            clear: both;
            display: table;
            }
        .footer-container{
            /* height: 30px; */
            background-color: #333;
            color: white;
        }
        .product-label{
            word-wrap: break-word;
            color: #787d7d;
            padding-left: 5px;
            padding-right: 5px;
            position: absolute;
            width: 100%;
            bottom: 6px;
        }
        .addCart{
            background-color: #787d7d; 
            border: none;
            color: white;
            padding: 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 2px;
            float: right;
        }
        .addCart:hover{
            background-color: #ffffff;
            color: #787d7d;
            border: 1px solid #787d7d;
        }
         .dropbtn {
        font-size: 17px;    
        color: white;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px !important;
        text-decoration: none;  
        display: block;
        text-align: left;
        }

        .topnav a:hover, .dropdown:hover .dropbtn {
        background-color: #555;
        color: white;
        }

        .dropdown-content a:hover {
        background-color: #ddd;
        color: black;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }

        @media screen and (max-width: 600px) {
        .topnav a:not(:first-child), .dropdown .dropbtn {
            display: none;
        }
        .topnav a.icon {
            float: right;
            display: block;
        }
        }

        @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
        .topnav.responsive .dropdown {float: none;}
        .topnav.responsive .dropdown-content {position: relative;}
        .topnav.responsive .dropdown .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
        }
        }

        .search-container input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 25px;
            border: none;
            }

             .search-container button {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 25px;
            border: none;
            cursor: pointer;
            }

            .search-container button:hover {
            background: #ccc;
            }

            @media screen and (max-width: 600px) {
            .search-container {
                float: none;
                padding: 42px 32px;
                width: 100%;
            }
            .search-container input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .search-container input[type=text] {
                border: 1px solid #ccc;  
            }
            }
    </style>
    <body>
        <ul id="myTopnav" >
            <li class="logo"><img src="./images/logo1.png" alt="" style="width: 15%;height: 10%;"></li>
                <?php if (isset($_SESSION['fullname'])): ?>
                <?php echo "<li class='profile dropdown' style='padding-right: 12%'>" ?>
                <?php 
                      echo $_SESSION['fullname']; 
                      echo " <i class='fas fa-caret-down dropbtn'></i>";
                      echo "<div class='dropdown-content'>";
                        echo "<a href='myProfile.php'>Profile</a>";
                        echo "<a href='myOrder.php'>My Order</a>";
                        echo "<a href='logout.php'>Logout</a>";
                      echo "</div>";
                ?>
                <?php echo "</li>" ?>
                <?php endif ?>
                <?php if (!isset($_SESSION['fullname'])): ?>
                <?php echo "<li style='padding-right: 12%'>" ?>
                <?php echo "<a href='login.php'>Login</a>" ?>
                <?php echo "</li>" ?>
                <?php endif ?>     
            <!-- <li><a href="login.php">Login</a></li> -->
            <li><a href="cart.php"> <i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li><a href="home.php">Home</a></li>
            <li style="width: 40%;">
                <div class="search-container">
                    <form action="search.php" method="post" style="width: 100%; padding: 29px 35px;">
                    <input type="text" placeholder="Search Product Name.." name="search" style="width: 79%;">
                    <button type="submit" name="submit" id="submit" style="width: 18%;">Search</button>
                    </form>
                </div>    
            </li>
        </ul>
        <br>
        <div class="w3-content w3-display-container" >
            <img class="mySlides" src="./images/ads1.jpg" style="width:100%">
            <img class="mySlides" src="./images/ads2.jpg" style="width:100%">
            <img class="mySlides" src="./images/ads3.jpg" style="width:100%">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            </div>
        </div>
        <br>
        <div class="product">
            <?php 
             include('connect.php');
                $qry= mysqli_query($con, "SELECT * FROM products");
                
                echo"<div class='product-container'>";
                    while ($rows = mysqli_fetch_array($qry)){
                        echo"<div class='column'>";
                        echo"<img src='".$rows['image']."'>";
                        echo"<div class='product-label'>";
                        echo"<label > ".$rows['product_name']." </label>";
                        echo"<br>";
                        echo"<label> &#8369; ".$rows['price']." </label>";
                        echo"<br>";
                        echo"<a class='addCart' href='addToCart.php?productId=".$rows['id']."'> Add To Cart</a>";
                        echo"</div>";
                        echo"</div>";
                    }
                echo"</div>";
            ?>
        </div>
        <br>
    </body>
    <footer>
            <div class="footer-container">
              <table style="color: #adabab; margin:auto;width: 80%; padding-top: 18px;">
                <thead style="font-size: 25px;">
                    <tr>
                        <td>Contact Us</td>
                        <td>About Us</td>
                        <td>Policies</td>
                        <td>FAQs</td>
                    </tr>
                </thead>
                <tbody style="margin-left: 10px;">
                    <tr>
                        <td>
                            +639956296451 <br>
                            maes_fashions@gmail.com
                        </td>
                        <td>
                        Welcome to mae fashions, your number one source for all things <br> for woman fashions.<br>
                        We're dedicated to providing you the best of woman fashions, <br>with a focus on dependability and customer service.
                        </td>
                        <td>
                        The customer service continues even after you have purchased your <br> goods with the minimum 2 year warranty.
                        </td>
                    </tr>
                </tbody>
              </table>
            <p style="text-align: center;"> Copyright @ 2021 All rights reserved.</p>
            <br>
            </div>
    </footer>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>