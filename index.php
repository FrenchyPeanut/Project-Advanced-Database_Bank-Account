<?php
include("config.php");
session_start();
//if(!isset($_SESSION['login']) && $_SESSION['login'] != ''){
/*if(!isset($_SESSION['login'])){
                 header ("Location: login.php");
                 exit; // stop further executing, very important
  }*/

?>

<head>
    <link href="css/styles.css" rel="stylesheet" type="text/css"  media="screen">

</head>

<body>
    <!-- Banner Menu: -->
    <header role="banner">
        <div id="logo">
            <a href="#">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-logo_1.svg" alt="Logo">
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <?php
                if(!isset($_SESSION['login'])) { ?>
                <li><a class="nav_signin" href="#">Sign-in</a></li>
                <?php } ?>
                <?php
                if(isset($_SESSION['login'])) { ?>
                <li><a class="nav_account" href="#">My Account</a></li>
                <?php } ?>
            </ul>
        </nav>
        <?php
        if(!isset($_SESSION['login'])){
        } ?>

    </header>
    <!-- Modal form -->
    <div class="user_modal">
        <div class="user_modal_container">
            <ul class="switcher">
                <li><a href="#"></a></li>
            </ul>

            <div id="login">
                <form class="login_form">
                    <!-- I have no idea of what to insert inside the database
for the login.
So just for now, we'll use the usual username/password/email.

<!-  Username -->
                    <p><!-- class="fieldset" -->
                        <label for="login_username">Username</label>
                        <input id="login_username" type="text" placeholder="Username">
                        <span>Enter your Username.</span>
                    </p>

                    <p>
                        <label for="login_password">Password</label>
                        <input id="login_password" type="text" placeholder="Password">
                        <span>Enter your Password.</span>
                    </p>

                    <p>
                        <input type="checkbox" id="remember_me">
                        <label>Remember me</label>
                    </p>

                    <p>
                        <input type="submit" value="Login" class="full_width">
                    </p>
                </form>

                <p>
                    <a href="#" class="bottom_message">Forgot your Password?</a>
                </p>
            </div>

            <!-- Reseting the password -->
            <div id="reset_password">
                <p class="reset_message">Password Lost? </br>Please enter your Email address and you will receive a link to generate another one.</p>

                

            </div>

        </div>
    </div>

</body>
