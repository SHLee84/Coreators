<?php
	/* Connect to the MySQL Server */
	function connect() {
		global $hostname, $db_username, $db_pwd, $db_name, $db_con;
		$db_con = new mysqli($hostname, $db_username, $db_pwd, $db_name);
		if ($db_con->connect_error) {
			die("Connection failed: " . $db_con->connect_error);
		}
	}

	function get_main_post() {
		global $db_con;
		$sql = "SELECT anchor, post_order, title, content FROM Post AS p JOIN PostContent AS pc ON (p.post_id = pc.post_id) WHERE post_type=1";
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

	function insert_post() {
		global $db_con;
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