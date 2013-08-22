<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type ="text/css" href="http://localhost:8888/MusicSite/css/main.css">
	<link rel="stylesheet" type ="text/css" href="http://localhost:8888/MusicSite/css/normalize.css">
</head>
<body>

<div id="header-wrapper">
<p>
        <ul>
                <li><a href = "http://localhost:8888/MusicSite/">Home</a></li>

        </ul>
<p>
	<h1>BookSmart</h1>
	<h3>Manager Account</h3>
        <a href="http://localhost:8888/MusicSite/index.php?logout">Logout</a>
	<div id = "sign-in">
		<!-- errors & messages -->

		<?php

		// show negative messages
		if ($login->errors) {
    		foreach ($login->errors as $error) {
        		echo $error;    
    		}
		}

		// show positive messages
		if ($login->messages) {
    		foreach ($login->messages as $message) {
        		echo $message;
    		}
		}

		?> 



		<!-- login form box -->
	<form method="post" action="index.php" name="loginform">
		
    	<label for="login_input_username">Username</label>
    	<input id="login_input_username" class="login_input" type="text" name="user_name" required />

    	<label for="login_input_usertype">User Type</label>
    	<select name = "user_type" id = "user_type">
    		<option value = "Agent">Agent</option>
    		<option value = "Promoter">Promoter</option>
    	</select>

    	<label for="login_input_password">Password</label>
    	<input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    	<input type="submit"  name="login" value="Log in" />
	</form>

	<a href="Login/register.php">Register new account</a>
	<a href="Login/password_reset.php">I forgot my password</a>

<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->
	</div>
</div>

