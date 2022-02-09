<?php include('connect.php') ?>
<?php 
  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
    font-family: "Lato", sans-serif;
    margin-top: 0;
    }

    .sidenav {
    height: 100%;
    width: 15%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 2%;
    }

    .sidenav a {
    padding: 22px 8px 6px 48px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    }

    .sidenav a:hover {
    color: #f1f1f1;
    }

    .main {
        margin-left: 277px; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 10px;
    }

    .active{
        background-color: #ffffff;
        color: #111;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 80%;
        margin: auto;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
         /* Add some padding inside the card container */
         .container {
            padding: 2px 16px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #111;
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
        .logo{
            float: left;
            color: white;
            font-size: 15px;
            padding: 14px 25px;
        }
        .profile{
            float: right;
            color: white;
            font-size: 25px;
            padding: 15px 25px;
        }
        #products {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 20px;
        }

        #products td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #products tr:nth-child(even){background-color: #f2f2f2;}

        #products tr:hover {background-color: #ddd;}

        #products th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        } 
        .back{
            background-color: #0c9216;; /* Green */
            border: none;
            color: white;
            padding: 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            float: right;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .back:hover{
            background: #ffffff;
            color: #0c9216;
        }
</style>
</head>
<body>  
        <div class="sidenav">
            <a href="admin.php"><img src="./images/logo1.png" alt="" style="width: 100%;height: 10%;"></a>
            <a href="admin.php" style="margin-top:10%;">Home</a>
            <a href="products.php" >Products</a>
            <a href="customers.php" class="active">Customers</a>
        </div>
        <ul id="myTopnav" >
            
                <?php if (isset($_SESSION['fullname'])): ?>
                <?php echo "<li class='profile dropdown' style='padding-right: 12%'>" ?>
                <?php 
                      echo $_SESSION['fullname']; 
                      echo " <i class='fas fa-caret-down dropbtn' ></i>";
                      echo "<div class='dropdown-content'>";;
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
        </ul>
       

        <div class="main">
            <div class="card">
            <h2 style=" padding: 10px; margin-top: 5%;">Customer List:</h2>
                    <div class="container">
                    
                        <?php 
                            include('connect.php');
                            $qry= mysqli_query($con, "SELECT * FROM users WHERE role = 'customer'");
                            
                            echo"<div class='product-container'>";
                              
                                    echo"<table id='products'>";
                                    echo"<thead style='font-weight: 600;'>";
                                    echo"<tr>";
                                    echo"<td> Fullname</td>";
                                    echo"<td> Email</td>";
                                    echo"<td> Address</td>";
                                    echo"<td> Contact No.</td>";
                                    echo"</tr>";
                                    echo"</thead>";
                                    echo"<tbody>";
                                    while ($rows = mysqli_fetch_array($qry)){
                                    echo"<tr>";
                                    echo"<td> ".$rows['fullname']."</td>";
                                    echo"<td> ".$rows['email']."</td>";
                                    echo"<td style='width: 55%'> ".$rows['address']."</td>";
                                    echo"<td> ".$rows['contact']."</td>";
                                    echo"</tr>";
                                    }
                                    echo"</tbody>";
                                    echo"</table>";
                                  
                                
                            echo"</div>";
                        ?>
                        <br>
                    </div>
            </div>
        </div>
</body>
<script>
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