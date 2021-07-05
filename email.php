<?php

	//get the form fields, removes html tags and whitespace.
	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r","\n"),array(" "," "),$name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST["message"]);

	//check data
	if (empty($name) OR empty($message) OR !filter_var($email, FILTE_VALIDATE_EMAIL)) {
		header("Location: https://astrolabephotography.com/contact.php?success=-1#form");
		exit;
	}

	//set recipient email address
	$recipient = "victorhmendes@astrolabephotography.com";

	//set the email subject
	$subject = "New contact from $name";

	//build the email content
	$email_content = "Name: $name\n";
	$email_content = "Email: $email\n\n";
	$email_content = "Message: \n$message\n";

	//build the email header
	$email_headers = "From: $name <$email>";

	//send the Email
	mail($recipient, $subject, $email_content, $email_headers);

	//success message
	header("https://astrolabephotography.com/contact.html?success=1#form");

?>
