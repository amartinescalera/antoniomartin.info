<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "info@antoniomeh.info"; // Your email address here
$Subject = "Contact form";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
//$validationOK=false;

// prepare email body text
$Body = "";
//$Body .= "Name: ";
//$Body .= $Name;
//$Body .= "\n";
//$Body .= "Email: ";
//$Body .= $Email;
//$Body .= "\n";
//$Body .= "Message: ";
//$Body .= "\n";
//$Body .= "\n";
//$Body .= $Message;
//$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page 
if ($success){
	echo $Body;
  echo "Succes";
}
else{
  echo "Error";
}
?>