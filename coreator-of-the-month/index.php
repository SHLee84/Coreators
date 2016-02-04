<?php 
if(isset($_COOKIE["PHPSESSID"])) {
	session_start();
}
include_once('includes/definition.php');
include_once(INCLUDES_F . DB);
include_once(INCLUDES_F . FUNCTIONS);
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="<?php echo BLOG_NAME; ?>">
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
		<?php 
		include_once(INCLUDES_F . SIDE_MENU);
		include_once(INCLUDES_F . MAIN_TOP);
		connect();
		$res = get_blog_post(); 
		/* if ($res->num_rows == 0) {
			include_once(CONTENT_F . BLOG_F . NO_POST);
		} else {
			include_once(CONTENT_F . BLOG_F . BLOG_POST);
		} */
		if ($res->num_rows > 0) {
			include_once(CONTENT_F . BLOG_F . BLOG_POST);
		} ?>

		<?php include_once(INCLUDES_F . LOGIN);
		include_once(INCLUDES_F . FOOTER); ?>
		<script src="<?php echo BASE_ADDRESS . JS_F; ?>jquery-2.1.4.min.js"></script>
		<script src="<?php echo BASE_ADDRESS . JS_F; ?>bootstrap.min.js"></script>
		<script src="<?php echo BASE_ADDRESS . JS_F; ?>custom.js"></script>
	</body>
</html>
