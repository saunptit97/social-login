<?php
	session_start();
	if (!isset($_SESSION['access_token']) && !isset($_SESSION['username'])) {
	
		header('Location: login.php');
		exit();
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login With Google</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-3">
			<?php if(isset($_SESSION['picture'])): ?> 
			<img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
		<?php endif; ?>
		</div>
    <a href="logout.php">Log out</a>
		<div class="col-md-9">
			<table class="table table-hover table-bordered">
				<tbody>
					<?php if(isset($_SESSION['id'])) :?>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['id'] ?></td>
						</tr>
					<?php endif; ?>

					<?php if(isset($_SESSION['givenName'] )):?>
					<tr>
						<td>First Name</td>
						<td><?php echo $_SESSION['givenName'] ?></td>
					</tr>
					<?php endif; ?>

					<?php if(isset($_SESSION['familyName'] )):?>
					<tr>
						<td>Last Name</td>
						<td><?php echo $_SESSION['familyName'] ?></td>
					</tr>
					<?php endif; ?>

					<?php if(isset($_SESSION['email'] )) :?>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email'] ?></td>
					</tr>
					<?php endif; ?>

					<?php if(isset($_SESSION['username'] )):?>
					<tr>
						<td>Username</td>
						<td><?php print_r( $_SESSION['username'] )?></td>
					</tr>
					<?php endif; ?>
					<?php if(isset($_SESSION['password'] )):?>
					<tr>
						<td>Username</td>
						<td><?php print_r( $_SESSION['password'] )?></td>
					</tr>
					<?php endif; ?>

					<?php if(isset($_SESSION['gender'] )):?>
					<tr>
						<td>Gender</td>
						<td><?php echo $_SESSION['gender'] ?></td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>