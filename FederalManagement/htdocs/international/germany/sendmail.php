<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

// get posted data into local variables
$email = Trim(stripslashes($_POST['email'])); 
$EmailTo = "enquiries@federalmanagement.co.uk";
$Subject = "Federal Management Enquiry (in German)";
//$Title = Trim(stripslashes($_POST['Title'])); 
$name = Trim(stripslashes($_POST['name'])); 
//$Surname = Trim(stripslashes($_POST['Surname']));
//$Company = Trim(stripslashes($_POST['Company']));
//$Address = Trim(stripslashes($_POST['Address']));
//$Address2 = Trim(stripslashes($_POST['Address2']));
//$Address3 = Trim(stripslashes($_POST['Address3']));
//$Area = Trim(stripslashes($_POST['Area']));
//$County = Trim(stripslashes($_POST['County']));
//$Postcode = Trim(stripslashes($_POST['Postcode']));
$phone = Trim(stripslashes($_POST['phone']));
//$Fax = Trim(stripslashes($_POST['Fax']));
$email = Trim(stripslashes($_POST['email'])); 
//$Marketing = Trim(stripslashes($_POST['Marketing'])); 
//$Contact = Trim(stripslashes($_POST['Contact'])); 
$Subject2 = Trim(stripslashes($_POST['Subject2']));
$message = Trim(stripslashes($_POST['message']));
$amountOwed = Trim(stripslashes($_POST['amountOwed'])); 
$ip = Trim(stripslashes($_POST['ip']));

// validation
$validationOK=true;
if (Trim($email)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
  exit;
}

// prepare email body text
$Body = "";
//$Body .= "Title: ";
//$Body .= $Title;
//$Body .= "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
//$Body .= "Surname: ";
//$Body .= $Surname;
//$Body .= "\n";
//$Body .= "Company: ";
//$Body .= $Company;
//$Body .= "\n";
//$Body .= "Address: ";
//$Body .= $Address;
//$Body .= "\n";
//$Body .= "Address2: ";
//$Body .= $Address2;
//$Body .= "\n";
//$Body .= "Address3: ";
//$Body .= $Address3;
//$Body .= "\n";
//$Body .= "Area: ";
//$Body .= $Area;
//$Body .= "\n";
//$Body .= "County: ";
//$Body .= $County;
//$Body .= "\n";
//$Body .= "Postcode: ";
//$Body .= $Postcode;
//$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Amount Owed: ";
$Body .= $amountOwed;
$Body .= "\n";
//$Body .= "Marketing: ";
//$Body .= $Marketing;
//$Body .= "\n";
//$Body .= "Contact: ";
//$Body .= $Contact;
//$Body .= "\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "ip: ";
$Body .= $ip;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
?>


</body>
</html>
