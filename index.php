<?php 
if(!isset($_COOKIE["PHPSESSID"]))
{
	session_start();
}
include_once('includes/db_access.php');
include_once('content/includes/functions.php');
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Coreators Main Page">
		<meta name="author" content="SH Lee">
		<link rel="icon" href="img/favicon.png">

		<title>Coreators</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

	</head>
<!-- NAVBAR
================================================== -->
	<body>
		
		<?php include_once('content/includes/side_menu.php'); ?>
		<?php include_once('content/includes/top_menu.php'); ?>
		<?php 

		connect();
		$res = get_main_post();

		if (isset($_SESSION["uname"])) {
		}
		
		if ($res == NULL) {
			include_once("content/main/no_post.php");
		} else {             
			while ($post =         )

			//include_once('content/main/about.php');
			//include_once('content/includes/divider.php');
			//include_once('content/main/people.php');
			//include_once('content/main/contact.php');		
		}
		include_once('content/main/add_main.php');
		include_once('content/includes/login_modal.php');
		include_once('content/includes/footer.php'); ?>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
