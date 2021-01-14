<?php

require 'vendor/autoload.php';

use SendGrid\Mail\Mail;

echo 'called';

$email = new Mail();
$email->setFrom("DreamAlchemy30@gmail.com", "Dream Alchemy");
$email->setSubject("Sending with Twilio SendGrid is Fun");
$email->addTo("Jefferson30.jdg@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
	print $response->body() . "\n"; 
} catch (Exception $e) {
    echo 'Caught exception: '.  $e->getMessage(). "\n";
}

?>