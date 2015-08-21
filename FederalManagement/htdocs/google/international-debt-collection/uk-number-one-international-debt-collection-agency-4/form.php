<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

// get posted data into local variables
$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "enquiries@federalmanagement.co.uk";
$Subject = "Federal Management's Debt Collection Landing Page (debt collection - agency 4) Enquiry";
//$Title = Trim(stripslashes($_POST['Title'])); 
$First = Trim(stripslashes($_POST['First'])); 
//$Surname = Trim(stripslashes($_POST['Surname']));
$Company = Trim(stripslashes($_POST['Company']));
//$Address = Trim(stripslashes($_POST['Address']));
//$Address2 = Trim(stripslashes($_POST['Address2']));
//$Address3 = Trim(stripslashes($_POST['Address3']));
//$Area = Trim(stripslashes($_POST['Area']));
//$County = Trim(stripslashes($_POST['County']));
//$Postcode = Trim(stripslashes($_POST['Postcode']));
$Telephone = Trim(stripslashes($_POST['Telephone']));
//$Fax = Trim(stripslashes($_POST['Fax']));
$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$AmountOwed = Trim(stripslashes($_POST['AmountOwed']));
$ip = Trim(stripslashes($_POST['ip']));
//$Marketing = Trim(stripslashes($_POST['Marketing'])); 
//$Contact = Trim(stripslashes($_POST['Contact'])); 
//$Details = Trim(stripslashes($_POST['Details'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
  exit;
};
if (Trim($First)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
  exit;
};
if (Trim($Telephone)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
  exit;
}

// prepare email body text
$Body = "";
//$Body .= "Title: ";
//$Body .= $Title;
//$Body .= "\n";
$Body .= "First: ";
$Body .= $First;
$Body .= "\n";
//$Body .= "Surname: ";
//$Body .= $Surname;
//$Body .= "\n";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";
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
$Body .= "Telephone: ";
$Body .= $Telephone;
$Body .= "\n";
//$Body .= "Fax: ";
//$Body .= $Fax;
//$Body .= "\n";
$Body .= "EmailFrom: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "AmountOwed: ";
$Body .= $AmountOwed;
$Body .= "\n";
$Body .= "ip: ";
$Body .= $ip;
$Body .= "\n";
//$Body .= "Marketing: ";
//$Body .= $Marketing;
//$Body .= "\n";
//$Body .= "Contact: ";
//$Body .= $Contact;
//$Body .= "\n";
//$Body .= "Details: ";
//$Body .= $Details;
//$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

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
