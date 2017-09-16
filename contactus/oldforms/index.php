<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form Submission'; 
		$to = 'tymosd@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
        
        //Validation
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
        }
        
        
        if ($human !== 5) {
        $errHuman = 'Nice try, Skynet!';
        }   
        