<?php

?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Test Project Database</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <body>
	<header role="banner">
		<div id="cd-logo"><a href="#0"><img src="img/logo2.png" alt="Logo"></a></div>

		<nav class="main-nav">
			<ul>
				<!-- plop -->
				<!-- <li><a class="cd-signin" href="#0">Sign-in</a></li> -->
        <li><a class="cd-home" href="#l">HOME</a></li>
        <?php
        if(!isset($_SESSION['login'])) { ?>
        <li><a class="cd-signin" href="#0">Sign-in</a></li>
        <?php }
        if(isset($_SESSION['login'])) { ?>
        <li><a class="cd-account" href="#">My Account</a></li>
        <?php } ?>
			</ul>
		</nav>
	</header>
	<div class="cd-user-modal">
		<div class="cd-user-modal-container">
			<ul class="cd-switcher">
				<li><a href="#0">Sign-in</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Please write a correct email address.</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">PinCode</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="PinCode">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Please write your Password.</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Forgot your PinCode?</a></p>
			 <a href="#0" class="cd-close-form">Close</a>
			</div>

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">PinCode Lost? Please enter your email address. You will receive an email with the procedure to generate a new one.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Please write a correct email address.</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Generate a new PinCode">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div>

			<a href="#0" class="cd-close-form">Close</a>
		</div>
	</div>

<div>plop</div>
<div>plop</div>
<div>plop</div>

</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
