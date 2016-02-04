<?php
	session_start();
	session_unset();
	session_destroy();
	include_once('includes/definition.php');
	
	header('Location: ' . BASE_ADDRESS);
?>