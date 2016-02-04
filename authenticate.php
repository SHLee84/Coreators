<?php
	include_once('includes/definition.php');
	include_once(BASE_ADDRESS . INCLUDES_F . DB);
	include_once(BASE_ADDRESS . INCLUDES_F . FUNCTIONS);

	if (isset($_POST["email"], $_POST["password"])) {
		connect();
		login_to_db($_POST["email"], $_POST["password"]);
	}

	header('Location: ' . BASE_ADDRESS);
?>