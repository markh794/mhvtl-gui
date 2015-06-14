<?php 

$name = $_REQUEST["name"];
$email= $_REQUEST["email"];
$comments = $_REQUEST["comments"];
$msg .= "From: $name\n";
$msg .= "Email: $email\n\n";
$msg .= "$comments";
$recipient = "mhvtl2@gmail.com";
$subject = "Feedback for MHVTL-GUI";
$mailheaders .= "From:$email";
mail($recipient, $subject, $msg, $mailheaders);
header("Location: thankyou.php");
?> 
