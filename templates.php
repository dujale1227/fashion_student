<?php 
function headertemplate($title){ 

 include "../functions/session.php";
  ?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
               <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
         <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
         <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />

         <script type="text/javascript" src="../assets/global/plugins/awesomechart.js"> </script>
                  <script type="text/javascript" src="../assets/global/plugins/awesomechart.js"> </script>
           <script>
        function showDetails(str) {
          if (str=="") {
            document.getElementById("txtHint").innerHTML="";
            return;
          } 
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
              document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
          }
          xmlhttp.open("GET","get_details.php?q="+str,true);
          xmlhttp.send();
        }

        </script> 

         <script>
        function showMenu(string) {
          if (string=="") {
            document.getElementById("txtMenu").innerHTML="";
            return;
          } 
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
              document.getElementById("txtMenu").innerHTML=xmlhttp.responseText;
            }
          }
          xmlhttp.open("GET","get_menu.php?m="+string,true);
          xmlhttp.send();
        }

        </script> 
        <!-- END THEME LAYOUT STYLES -->
         <link rel="icon" type="image/png" href="../images/geancy_logo_small.png"> 


        </head>
    <!-- END HEAD -->
<?php if ( $_SESSION['sess_userrole'] == "1"){?>
        <?php function navbar($active){?>
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="dashboard.php">
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                     
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                      
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                      
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="../images/geancy_logo_small.png" />
                                <span class="username username-hide-on-mobile"> Admin </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#myModal-1" data-toggle="modal" >
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                           
                                <li class="divider"> </li>
                               
                                <li>
                                    <a href="../functions/logout.php">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->

        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search  "  method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <?php if($active=="dashboard"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                        
                            <a href="dashboard.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                             
                            </a>
                         
                        </li>



                          <?php if($active=="reservation"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                        
                            <a href="reservation.php" class="nav-link nav-toggle">
                                <i class="icon-calendar"></i>
                                <span class="title">Reservation</span>
                                <span class="selected"></span>
                                  <?php
                                    include '../functions/connect.php';

                                    $result=mysql_query("SELECT count(*) as total from tbl_reservation where status != 'Cancelled'");
                                    $data=mysql_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                                     <span class="badge badge-default"> <?php  echo $percent;?> </span>
                            </a>
                         
                        </li>


                          <?php if($active=="message"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                        
                            <a href="message.php" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">Messages</span>
                                <span class="selected"></span>
                             <?php
                                    include '../functions/connect.php';

                                    $result=mysql_query("SELECT count(*) as total from tbl_message");
                                    $data=mysql_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                                     <span class="badge badge-default"> <?php  echo $percent;?> </span>
                            </a>
                         
                        </li>
                          
                          <?php if($active=="client"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                        
                        
                            <a href="client.php" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Registered Clients</span>
                                <span class="selected"></span>
                                 <?php
                                    include '../functions/connect.php';

                                    $result=mysql_query("SELECT count(*) as total from tbl_register");
                                    $data=mysql_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                                     <span class="badge badge-default"> <?php  echo $percent;?> </span>
                            </a>
                         
                        </li>
                       

                               <li class="nav-item  ">
                        <?php if($active=="sales" || $active=='reservation_report' || $active=='user_logs'){ 
                                  echo '<li class="active menu-list">';
                                }?>
                            <a href="javascript:;" class="nav-link nav-toggle">
                                 <i class="fa fa-print"></i>
                                <span class="title">Reports</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                              <?php if($active=="sales"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                                    <a href="sales.php" class="nav-link ">
                                        <span class="title">Sales Report</span>
                                    </a>
                                </li>
                                 <?php if($active=="reservation_report"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                                    <a href="reservation_report.php" class="nav-link ">
                                        <span class="title">Reservation Report</span>
                                    </a>
                                </li>
                                       <?php if($active=="user_logs"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                                    <a href="user_logs.php" class="nav-link ">
                                        <span class="title">User Logs Report</span>
                                    </a>
                                </li>

                           
                            </ul>
                        </li>

         
                   
                        <li class="nav-item  ">
                        <?php if($active=="main_category" || $active=='sub_category' || $active=='page_settings' || $active=='menu'){ 
                                  echo '<li class="active menu-list">';
                                }?>
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-gear"></i>
                                <span class="title">Settings</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                              <?php if($active=="main_category"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                                    <a href="main_category.php" class="nav-link ">
                                        <span class="title">Main Category</span>
                                    </a>
                                </li>
                                  <?php if($active=="sub_category"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                                    <a href="sub_category.php" class="nav-link ">
                                        <span class="title">Sub Category</span>
                                    </a>
                                </li>

                                  <?php if($active=="menu"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                                    <a href="menu.php" class="nav-link ">
                                        <span class="title">Menu</span>
                                    </a>
                                </li>
                                 <?php if($active=="page_settings"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                                    <a href="page_settings.php" class="nav-link ">
                                        <span class="title">Page Settings</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
               
                </div>
                <!-- END SIDEBAR -->
            </div>
            <?php }
                
             ?>
            </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Account Information</h4>
                                    </div>
                                    <div class="modal-body">
                                    <?php
                                        include "../functions/connect.php";
                                        $sql = "select * from tbl_user where role='1'";
                                        $run = mysql_query($sql);

                                        while ($row=mysql_fetch_array($run)) {

                                            extract($row);
                                        
                                    ?>
                                        <form class="form-horizontal" role="form" method="POST" action="../admin/dashboard.php">
                                            <div class="form-group">
                                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Username</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" value=<?php echo $username;?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control"  value=<?php echo $password;?>>
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button type="submit" name="edit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                         <?php
                                            }
                                        }
                                            
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>

<?php if ( $_SESSION['sess_userrole'] == "2"){?>
        <?php function navbar($active){?>
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="dashboard.php">
                    </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                     
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                      
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                      
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="../assets/pages/img/log.png" />
                                <span class="username username-hide-on-mobile"> User </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#myModal-1" data-toggle="modal" >
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                           
                                <li class="divider"> </li>
                               
                                <li>
                                    <a href="../functions/logout.php">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->

        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search  "  method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                             <?php if($active=="reservation"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                        
                            <a href="reservation.php" class="nav-link nav-toggle">
                                <i class="icon-calendar"></i>
                                <span class="title">Reservation</span>
                                <span class="selected"></span>
                                <?php
                                    include '../functions/connect.php';
                                    $user_Id = $_SESSION['sess_user_id'];
                                    $result=mysql_query("SELECT count(*) as total from tbl_reservation as reservation join tbl_user as users on reservation.reg_Id=users.reg_Id where users.user_Id='$user_Id' group by reservation.occasion");
                                    $data=mysql_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                                     <span class="badge badge-default"> <?php echo $percent;?> </span>
                            </a>
                         
                        </li>
                        <?php if($active=="notification"){ 
                                  echo '<li class="nav-item start active">';
                                }
                                else{
                                  echo '<li>';
                                }
                                ?>
                        
                            <a href="notification.php" class="nav-link nav-toggle">
                                <i class="icon-bell"></i>
                                <span class="title">Notification</span>
                                <span class="selected"></span>

                                 <?php
                                    include '../functions/connect.php';
                                    $user_Id = $_SESSION['sess_user_id'];
                                    $result=mysql_query("SELECT count(*) as total from tbl_notification as notification join tbl_register as register on notification.reg_Id=register.reg_Id join tbl_user as users on register.reg_Id=users.reg_Id where users.user_Id='$user_Id'");
                                    $data=mysql_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                                     <span class="badge badge-default"> <?php  echo $percent;?> </span>
                            </a>
                         
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
               
                </div>
                <!-- END SIDEBAR -->
            </div>
            <?php }
                
             ?>
            </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Account Information</h4>
                                    </div>
                                    <div class="modal-body">
                                    <?php
                                        include "../functions/connect.php";
                                        $sql = "select * from tbl_user where role='2'";
                                        $run = mysql_query($sql);

                                        while ($row=mysql_fetch_array($run)) {

                                            extract($row);
                                        
                                    ?>
                                        <form class="form-horizontal" role="form" method="POST" action="../admin/dashboard.php">
                                            <div class="form-group">
                                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Username</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" value=<?php echo $username;?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control"  value=<?php echo $password;?>>
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button type="submit" name="edit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                         <?php
                                            }
                                        }
                                            
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>


<?php } 
  function footertemplate(){
  ?>
   <!-- BEGIN CORE PLUGINS -->

      <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>

        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
<script type="text/javascript">

  $(function() {


  $(".cancelReservation").click(function(){

  //Save the link in a variable called element
  var element = $(this);

  //Find the id of the link that was clicked
  var del_id = element.attr("reservation_Id");

  //Built a url to send
  var info = 'reservation_Id=' + del_id;
   if(confirm("Are you sure you want to Cancel this Transaction?"))
            {
   $.ajax({
     type: "GET",
     url: "../user/cancel_trans.php",
     data: info,
     success: function(){
     
     }
   });
           $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
          .animate({ opacity: "hide" }, "slow");
   }

  return false;

  });
  });
</script>
<script type="text/javascript">
$(function() {


$(".approveTrans").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("occasion");

//Built a url to send
var info = 'occasion=' + del_id;
 if(confirm("Are you sure you want to approve this reservation?"))
          {

 $.ajax({
   type: "GET",
   url: "approve_reservation.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "hide" }, "slow");
 }

return false;

});

});
</script>
<script type="text/javascript">
$(function() {


$(".cancelRes").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("occasion");

//Built a url to send
var info = 'occasion=' + del_id;
 if(confirm("Are you sure you want to cancel this Reservation?"))
          {

 $.ajax({
   type: "GET",
   url: "cancel_reservation.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "hide" }, "slow");
 }

return false;

});

});
</script>

<script type="text/javascript">
$(function() {


$(".deleteNotif").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("notif_Id");

//Built a url to send
var info = 'notif_Id=' + del_id;
 if(confirm("Are you sure you want to delete this notification?"))
          {

 $.ajax({
   type: "GET",
   url: "delete_notif.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "show" }, "slow");
 }

return false;

});

});
</script>
<script type="text/javascript">
$(function() {


$(".disapprove").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("loan_Id");

//Built a url to send
var info = 'loan_Id=' + del_id;
 if(confirm("Are you sure you want to disapprove this loan?"))
          {

 $.ajax({
   type: "GET",
   url: "disapprove_loan.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "show" }, "slow");
 }

return false;

});

});
</script>

<script type="text/javascript">
$(function() {


$(".archiveLoan").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("loan_Id");

//Built a url to send
var info = 'loan_Id=' + del_id;
 if(confirm("Are you sure you want to archive this loan record?"))
          {

 $.ajax({
   type: "GET",
   url: "archive_loan.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "show" }, "slow");
 }

return false;

});

});
</script>

<script type="text/javascript">
$(function() {


$(".restoreLoan").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("loan_Id");

//Built a url to send
var info = 'loan_Id=' + del_id;
 if(confirm("Are you sure you want to restore this loan record?"))
          {

 $.ajax({
   type: "GET",
   url: "restore_loan.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents("#rec").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "show" }, "slow");
 }

return false;

});

});
</script>
<script type="text/javascript">
$(document).ready(function() {
$("#price").change(function(){
  recalculate();
});
function recalculate(){
    var sum = 0;
    $("#price").each(function(){
      sum += parseInt($(this).attr("rel"));
    });
  //  alert(sum);
$("#output").html(sum);
$("#txtval").val(sum);
}
});
</script>
 
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
      <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
         <script src="../assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
          <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>

        <script src="../assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
            <script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
         <script src="../assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->



 <?php }?>

