<?php
	/* Connect to the MySQL Server */
	function connect() {
		global $hostname, $db_username, $db_pwd, $db_name, $db_con;
		$db_con = new mysqli($hostname, $db_username, $db_pwd, $db_name);
		if ($db_con->connect_error) {
			die("Connection failed: " . $db_con->connect_error);
		}

		// enables Korean
		$sql = "set names utf8";
		$res = $db_con->query($sql);
	}

	function get_blog_post() {
		global $db_con;
		$sql = "SELECT f_name, post_order, title, cover, content, video, post_order, p.status FROM Post AS p JOIN PostContent AS pc ON ( p.post_id = pc.post_id ) JOIN User AS u ON ( p.author_id = u.user_id ) WHERE post_type =2 ORDER BY post_order";
		$result = $db_con->query($sql);
		$db_con->close();
		return $result;
	}

	function get_main_menu() {
		global $db_con;
		$sql = "SELECT anchor, post_order FROM Post WHERE post_type=1";
		$result = $db_con->query($sql);
		$db_con->close();
		return $result;
	}

	function insert_post($title, $author, $anchor, $content, $type, $video = NULL, $status = 0, $order) {
		global $db_con;
		$post_sql = sprintf("INSERT INTO Post (post_type, author_id, anchor, post_order, status) VALUES (%d, %d, '%s', %f, %d)", $type, $author, $anchor, $order, $status);
		$post_content_sql = sprintf("INSERT INTO PostContent (post_id, title, video, content) VALUES (%d, '%s', '%s', '%s')", $post_id, $title, $video, $content);
		$result = $db_con->query($sql);
		$db_con->close();

	}

	function login_to_db($uname, $pword) {

		global $db_con;
		$success = false;

		// extracts a row from users table that matches user name from the input.
		// the input has been securely enhanced by using mysql_real_escape_string()
		$qry = sprintf("SELECT password FROM %s WHERE email='%s'", "User", $uname);

		$qry_res = $db_con->query($qry);
		// if there is a row extracted, there is a user id that matches the input by the user
		if ($qry_res->num_rows == 1) {
			$row = $qry_res->fetch_assoc();
			// holds values from the extracted row
			$encrypted_pw = $row["password"];
			// compare the encrypted password
			if ($encrypted_pw == md5($pword)) {
				$success = true;
				// sets the attempt to true, and stores session values accordingly
				session_start();
				setcookie("PHPSESSID", session_id(), time() + 600);
				$_SESSION["uname"] = $uname;
			}
		}
		$db_con->close();
		// otherwise, login attempt failed
		return $success;
	}

	function check_login() {
		return isset($_SESSION["uname"]);
	}
?>