<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "m.n.vyshnavi06@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	mail($toEmail, $subject, $content, $mailHeaders);
require_once "contact-view.php";
?>