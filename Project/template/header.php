<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Style Shope</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
    <nav class="header_nav">
        <div class="innerWrap">
            <div class="nav_logo">
                <a href="index.php"><img src="../assets/images/ss_logo3.png"></a> 
            </div>
            <div class="nav_menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="nav_utility">
                <!-- Check Whether user is loged in or not -->
                <?php if(isset($_SESSION['user']['logedin'])){ ?>
                <div class="loged_in">
                        <ul class="user">
                           
                            <li class="profile_img">
                                 <img src="<?= (isset($_SESSION['user']['pic_name']) && !empty($_SESSION['user']['pic_name'])) ? '../'.$_SESSION['user']['profile_pic'] : '../assets/images/profile-icon-9.png' ?>" />
                            </li>
                            <li><span><?= $_SESSION['user']['username'] ?></span>
                                <ul class="nav_sub_menu">
                                    <li><a href="profilepage.php">Profile</a></li>
                                    <li><a href="change_password.php">Change Password</a></li>
                                    <li><a href="../logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>
                <?php }else{ ?>
                <div class="loged_out">
                    <ul>
                        <li><a href="loginpage.php">Login</a></li>
                        <li><a href="registerpage.php">Register</a></li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
    </nav>