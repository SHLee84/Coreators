<?php
	/* Connect to the MySQL Server */
	function connect() {
		global $hostname, $db_username, $db_pwd, $db_name, $db_con;
		$db_con = new mysqli($hostname, $db_username, $db_pwd, $db_name);
		if ($db_con->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	}

	function get_main_post() {
		global $db_con;
		$sql = "SELECT anchor, post_order, title, content FROM Post JOIN PostContent ON (post_id) WHERE post_type=1";
		$result = $db_con->query($sql);
		$db_con->close();
		return $result;
	}

	function insert_post() {
		global $db_con;
		$db_con->close();
	}
?>