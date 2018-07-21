<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];


if($username!= 'admin' || $password!='admin' ){
	$_SESSION['error'] = 'Invalid login or password.';
	echo 'No';
	//header('Location: login.php');
}else{
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	echo '<script>$(".authentication").hide()</script>' ;
	header('Location: index.php');
}

