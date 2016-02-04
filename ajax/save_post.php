<?php
	session_start();
	include_once('../includes/db_access.php');
	include_once('../includes/functions.php');
	$title = $_POST["title"];
	$author = $_SESSION["uname"];
	$anchor = $_POST["anchor"];
	$content = $_POST["content"];
	$type = NULL;
	if (!isset($_POST["video"])) {
		$type = "1";
	} else {
		$type = "2";
	}
	$order = $_POST["order"];
	$post_id = insert_post($title, $author, $anchor, $content, $type, $video = NULL, $status = 0, $order);

?>