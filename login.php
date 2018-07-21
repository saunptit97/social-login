<?php
    require_once "config.php";
   // require_once "connect.php";

  if (isset($_SESSION['access_token']) || isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
  }

  $loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Social Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src = "https://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js" 
         type = "text/javascript"></script>
  <script type="text/javascript" src="popup.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body id="sroger">

<?php include("pages/menu.php");?>

<div class="modal fade" id="social-login-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			  <div class="modal-content">
          <!-- Begin # DIV Form -->
          <div id="div-forms">
            <!--  Login Form -->
            <?php include("popup/login.php"); ?>
            <!-- Lost Password Form -->
            <?php include("popup/forgot.php") ?>
            <!-- Register Form -->
            <?php include("popup/create.php") ?>   
          </div>
          <!-- End # DIV Form -->
			</div>
		</div>
	</div>
</body>
</html>