<?php
	session_start();
	if ((isset($_SESSION['id']) && isset($_SESSION['user_name']))) {
		// echo "demo";
		header("Location: homepg.php");
	}
	else{
?>
<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body background="icons/bg.jpg" style="
    background-image: url(icons/bg.jpg);
    background-size: 100%;">




	<form action="login.php" method="post" role="form">
		<!-- <?php include("../process.php"); ?> -->

		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
	</form>
	<footer class="bg-dark text-light py-3" style="position:relative ; top: 20vh; width:100% ;">

		<p class="text-center p2">
			Developed by: Team Veloce with copyrights &#169; at www.velocetechinsights.com - 2021

		</p>

	</footer>
</body>

</html>
<?php
	}
	?>