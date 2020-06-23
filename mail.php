<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$formcontent="Name: $name \nContact No.: $phone \nDesignation.: $designation \nDescription: $description";
$recipient = "info@carenest.co";
$subject = "CareNest - Requesting Quote";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<img src='https://img.icons8.com/dusk/100/000000/thumb-up.png'/>" . "<h2>Congratulations</h2>" . "<h2>Your Request has been send Successfully</h2>";
?>


