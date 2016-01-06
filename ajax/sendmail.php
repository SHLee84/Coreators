<?php
    $to = "sanghyun.lee@shlee.ca";
    $from_email = $_POST["email"];
    $from_name = $_POST["name"];
    $subject = "You have received a message from " . $from_name . " (" . $from_email . ")";
	$message = $_POST["content"];
    $headers = "From: " . $from_email . "\r\n" . 
        "Reply-To: " . $from_email . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $sent = mail($to,$subject,$message,$headers);

    echo "success";
    exit;
?>