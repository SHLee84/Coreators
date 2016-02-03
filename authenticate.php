<?php
	include_once('includes/db_access.php');
	include_once('content/includes/functions.php');

	if (isset($_POST["email"], $_POST["password"])) {
		connect();
		login_to_db($_POST["email"], $_POST["password"]);
	}

	header('Location: .');
?>