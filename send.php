<?php

$EmailTo = "tomaszrybacki1989@gmail.com";

$Name = Trim(stripslashes($_POST['full-name']));
$Email = Trim(stripslashes($_POST['e-mail']));
$Subject = Trim(stripslashes($_POST['message-title']));
$Message = Trim(stripslashes($_POST['message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Imię i Nazwisko: ";
$Body .= $Name;
$Body .= "\n";

$Body .= "E-mail: ";
$Body .= $Email;
$Body .= "\n";

$Body .= "Tytuł: ";
$Body .= $Subject;
$Body .= "\n";

$Body .= "Wiadomość: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
