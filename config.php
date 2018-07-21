<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("192987593381-gpobklriicmakt97r2j5f44i162rjp8j.apps.googleusercontent.com");
	$gClient->setClientSecret("BLZcXsq5cGv1d1nsGBi3SmeQ");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost.com/saunguyen/social-login/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
