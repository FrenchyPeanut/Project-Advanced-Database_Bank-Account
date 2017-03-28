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
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src='http://s.codepen.io/assets/libs/modernizr.js'></script>
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href="css/styles.css" rel="stylesheet" type="text/css"  media="screen">
    <script type="text/javascript" src="js/sketch.js"></script>
</head>

<body>
    <!-- Banner Menu: -->
    <header role="banner">
        <div id="logo">
            <a href="#">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-logo_1.svg" alt="Logo">
            </a>
        </div>
        <nav class="main_nav">
            <ul>
                <?php
                if(!isset($_SESSION['login'])) { ?>
                <li><a class="cd-signin" href="#">Sign-in</a></li>
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
                <li><a href="#">Sign-In</a></li>
            </ul>

            <div id="login">
                <form class="_form">
                    <!-- I have no idea of what to insert inside the database
for the login.
So just for now, we'll use the usual username/password/email.

<!-  Username -->
                    <p class="field">
                        <label class="replace _username" for="login_username">Username</label>
                        <input class="full-width padding border" id="login_username" type="text" placeholder="Username">
                        <span class="error_message">Enter your Username.</span>
                    </p>

                    <p class="field">
                        <label class="replace _password" for="login_password">Password</label>
                        <input class="full-width padding border" id="login_password" type="text" placeholder="Password">
<a href="#0" class="hide_password">Hide</a>
                        <span class="error_message">Enter your Password.</span>
                    </p>

                    <p class="field">
                        <input type="checkbox" id="remember_me">
                        <label>Remember me</label>
                    </p>

                    <p class="field">
                        <input class="full-width padding border" type="submit" value="Login" class="full_width">
                    </p>
                </form>

                <p class="bottom_message">
                    <a href="#" >Forgot your Password?</a>
                </p>
            </div>

            <!-- Resetting the password -->
            <div id="reset_password">
                <p class="reset_message">Password Lost? </br>Please enter your Email address and you will receive a link to generate another one.</p>
        <form class="_form">
            <p class="field">
                <label class="replace _email" for="reset_email">Email</label>
                <input class="full-width padding border" type="email" placeholder="Email" id="reset_email">
                <span class="error_message">Please write your Email.</span>
            </p>
            <p class="field">
                <input class="full-width padding border" type="submit" value="Reset my Password">
            </p>
        </form>
        <p class="bottom_message"><a href="#">Back to Login</a></p>
    </div>

<!-- Test: -->
    <a href="#" class="close_form">Close</a>

    </div>
</div>

</body>
