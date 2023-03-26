<!-- <?php
		// session_start();
		?> -->

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<header>
	<div class="header" style="background-color: white;">
		<div class="logo">
			<a href="index.php" style="word-spacing: 30px;
		letter-spacing: 5px;">

				<img src="icons/logo.png" style="position:absolute;left:10px; top:20px; height:70px ; width: 200px; color:white">BIOMETRIC ATTENDANCE</a>
		</div>

	</div>



	<div class="topnav" id="myTopnav">
		<a href="homepg.php">User</a>
		<a href="UsersLog.php">Users Log</a>
		<a href="ManageUsers.php">Manage Users</a>
		<a href="logout.php" onclick="return confirm('sure ?');">Logout</a>
		<a href="javascript:void(0);" class="icon" onclick="navFunction()">
			<i class="fa fa-bars"></i></a>
	</div>
</header>
<script>
	function navFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}

	function logoutAlert() {
		
	}
</script>