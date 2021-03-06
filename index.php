<?php 
if(isset($_COOKIE["PHPSESSID"])) {
	session_start();
}
include_once('includes/definition.php');
include_once(BASE_ADDRESS . INCLUDES_F . DB);
include_once(BASE_ADDRESS . INCLUDES_F . FUNCTIONS);
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="<?php echo ORG_FULL_NAME; ?> Main Page">
		<meta name="author" content="<?php echo AUTHOR; ?>">
		<link rel="icon" href="<?php echo BASE_ADDRESS . IMG_F; ?>favicon.png">

		<title><?php echo ORG_FULL_NAME; ?></title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo BASE_ADDRESS . CSS_F; ?>bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo BASE_ADDRESS . CSS_F; ?>custom.css" rel="stylesheet">

	</head>
<!-- NAVBAR
================================================== -->
	<body>
		<?php include_once(BASE_ADDRESS . INCLUDES_F . SIDE_MENU); ?>
		<?php include_once(BASE_ADDRESS . INCLUDES_F . MAIN_TOP); ?>
		<?php 

		connect();
		$res = get_main_post();
		if (isset($_SESSION["uname"])) {
			include(BASE_ADDRESS . INCLUDES_F . MAIN_DIVIDER);
		}
		if ($res->num_rows == 0) {
			include_once(BASE_ADDRESS . CONTENT_F . MAIN_F . NO_POST);
		} else {
			include_once(BASE_ADDRESS . CONTENT_F . MAIN_F . MAIN_POST);
		}
		include_once(BASE_ADDRESS . INCLUDES_F . LOGIN);
		include_once(BASE_ADDRESS . INCLUDES_F . FOOTER); ?>
		<script src="<?php echo BASE_ADDRESS . JS_F; ?>jquery-2.1.4.min.js"></script>
		<script src="<?php echo BASE_ADDRESS . JS_F; ?>bootstrap.min.js"></script>
		<script src="<?php echo BASE_ADDRESS . JS_F; ?>custom.js"></script>
	</body>
</html>
