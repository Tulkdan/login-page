<?php
	session_start();

	$email = 'user';
	$pass = 'pass';

	if (isset($_POST['email']) && isset($_POST['password'])) {
		if ($email == $_POST['email'] && $pass == $_POST['password']) {
			$_SESSION['logged_in'] = true;
			$_SESSION['user'] = $_POST['email'];
			$_SESSION['pass'] = $_POST['password'];
			header('Location: success.php');
		} else {
			header('Location: /');
		}
	} else {
		header('Location: /');
	}
?>