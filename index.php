<!DOCTYPE HTML>

<?php
	session_start();
?>

<html>
	<header>
		<title>Index</title>
		<link rel="stylesheet" href="style/css/main.css">
	</header>
	<body>

		<div class="content">
			<div class="col-md-12">
				<h1>Sign in</h1>
				<p class="_subtitle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula. </p>
				<form action="login.php" method="post" id="myForm">
					<div class="form-group">
						<input type="text" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Password" id="pass">
					</div>
					<div class="form-group">
						<a class="button" id="btnForm">Sign in</a>
					</div>
				</form>
			</div>
		</div>

		<script src="style/js/main.js"></script>
	</body>
</html>