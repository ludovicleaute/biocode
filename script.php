<?php
	if (isset($_POST["submitted"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'ludovic.leaute@etu.u-bordeaux.fr'; 
		$subject = 'Message from bio-code site';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$name) {
			$errName = 'Vous avez oublié votre nom';
		}
		
		// Check if email has been entered and is valid
		if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Entrez une adresse valide';
		}
		
		//Check if message has been entered
		if (!$message) {
			$errMessage = 'Racontez une histoire';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Un petit effort mathématique...';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Nous avons reçu votre mail, Nous vous contactons prochainement !</div>';
	} else {
		$result='<div class="alert alert-danger">Il y a eu un problème lors de l\'envoie. Veuillez réessayer...</div>';
	}
}
	}
?>
