<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['designation'];
$message = $_POST['message'];




// $call = $_POST['call'];
// $website = $_POST['website'];
// $priority = $_POST['priority'];
// $type = $_POST['type'];
$formcontent=" 
	Name: $name \n 
	Email: $email \n 
	Contact No.: $phone \n 
	Designation.: $designation \n 
	Message: $message \n 
";
$recipient = "89abdul@gmail.com";
$subject = "CareNest - Requesting Quote";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo 
"<h2>Congratulation</h2>" . 
" -" . 
"<h2>Your Request has been send Successfully</h2>"
;
?>


