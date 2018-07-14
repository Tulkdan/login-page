<?php
	session_start();

	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
		header('Location: /');
	}
?>


<html>
	<header>
		<title>Sucesso!</title>
		<link rel="stylesheet" href="style/css/main.css">
	</header>
	<body>

		<div class="content">
			<div class="col-md-12">
				<h2>Welcome <?php if (isset($_SESSION['user'])) { echo $_SESSION['user']; } ?>! </h2>
				<div class="form-group">
					<a class="button" id="btnForm" href="logout.php">Logout</a>
				</div>
			</div>
		</div>

	</body>
</html>