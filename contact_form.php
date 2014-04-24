<?php
	
// 	$your_email = 'info@patricklenaertstrappen.be'; // Your email address
	$your_email = 'info@webbositedesign.be'; // Your email address
	$subject = 'Email vanuit contactformulier website'; // Email subject
	
	$name = isset($_POST['name']) && $_POST['name'] ? $_POST['name'] : ''; // Visitor Name 
	$email = isset($_POST['email']) && $_POST['email'] ? $_POST['email'] : ''; // Visitor Email
	$message = isset($_POST['message']) && $_POST['message'] ? $_POST['message'] : ''; // Visitor Message
// 	$website = isset($_POST['website']) && $_POST['website'] ? $_POST['website'] : ''; // Visitor Message
	
	$full_message = "Bericht:".$message;

	if($name && $email && $message)
	{
		$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" .
		'Reply-To: '.$email.'' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
			
		//------------------------------------------------
		// Send out email to site admin
		//------------------------------------------------
		if(@mail($your_email, $subject, $full_message, $headers))
			die("success");
		else
			die("error");
	}
	else
	{
		die("error");
	}
	
?>
