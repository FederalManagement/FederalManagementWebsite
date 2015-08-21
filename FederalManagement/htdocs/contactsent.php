<?php 
$name = $_POST['cname'];
$email = $_POST['cemail'];
$number = $_POST['cnumber'];
$subject = $_POST['csubject'];
$message = $_POST['cmessage'];

$formcontent="From: $name \n Subject: $subject \n Message: $message \n Contact Number: $number";
$recipient="enquiries@federalmanagement.co.uk";
$subject="Federal Management Enquiry";
$mailheader="From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Debt Collection Services",$buffer);
echo $buffer;
?>
	<div class="container">
        <div class="row">
            <div class="box">					
                <div class="col-lg-8">
                    <h1 class="intro-text">Contact
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
                </div>
				<div class="col-lg-8">
 
                
                   <h4>Thanks for your message, we'll be in touch soon.</h4>
				   
				   <p>Alternatively call us now on 0800 043 6922.</p>
					         	
				</div>
				<div class="col-md-4">
					<div class="col-md-12 contact-sidebar" style="background-color: #E2E2E2; border-radius: 5px; margin-top: 10px; font-size:12px; padding:25px; color:#3E3E3E; width:339px; position:relative; left:12px; float:left; border:1px solid grey">
						<p style="font-size: 12px;"><span style="color:#CC0000; font-size:15px;" class="text-center">Contact Information</span></br></br>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9497.163629884735!2d-2.2259452!3d53.4811318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcc8cb0bf2c74070!2sFederal+Management+Ltd+(Northern+Office)!5e0!3m2!1sen!2suk!4v1437563712147" width="300" height="200" frameborder="0" style="border:0" class="mobile-map" allowfullscreen></iframe></br>
						<strong>Head Office</strong> </br>
						Federal House, Maple Court </br>
						Skelmersdale, Lancashire </br>
						WN8 9TW </br>
						United Kingdom </br></p>
						
						<p style="font-size: 10px; display: inline-block;">
						<strong>Northern Office</strong> </br>
						Advantage House </br>
						132 - 134 Great Ancoats Street </br>
						Manchester </br>
						M4 6DE</br>
						United Kingdom</br></p>
						
						<p style="font-size: 10px; display: inline-block; float: right;">
						<strong>Southern Office</strong> </br>
						Dalton House </br>
						60 Windsor Avenue </br>
						London </br>
						SW19 2RR</br>
						United Kingdom</br></p>
			
						<ul class="contact-details" style="list-style: none;list-style-image: none; display: block; position:relative; left:-37px; ">
							<li class="phone"><span><strong>Phone:</strong></br> 0333 043 4421</li></br>
							<li class="international"><strong>International:</strong></br> +44 1695 554550</li></br>
							<li class="email"><strong>General Enquiries Email:</br></strong> enquiries@federalmanagement.co.uk</li>
						</ul>
					</div>
	
					<div class="col-md-12 contact-sidebar" style="background-color: #E2E2E2; border-radius: 5px; margin-top: 10px; font-size:12px; padding:25px; color:#3E3E3E; width:339px; position:relative; left:12px; float:left; border: 1px solid grey">
						<p style="font-size: 12px;"><span style="color:#CC0000; font-size:15px;" class="text-center">New Business Department</span></br></p>
						<ul class="contact-details" style="list-style: none;list-style-image: none; display: block; position:relative; left:-37px;">
							<li class="phone"><span><strong>Phone:</strong></br> 0333 043 4420</li></br>
							<li class="international"><strong>International:</strong></br> +44 1695 554551</li></br>
							<li class="email mobile-email"><strong>New Business Email:</br></strong> newbusiness@federalmanagement.co.uk</li>
						</ul>
					</div>
	
					<div class="col-md-12 contact-sidebar" style="background-color: #E2E2E2; border-radius: 5px; margin-top: 10px; font-size:12px; padding:25px; color:#3E3E3E; width:339px; position:relative; left:12px; float:left; border: 1px solid grey">
						<p style="font-size: 12px;"><span style="color:#CC0000; font-size:15px;" class="text-center">Collections Department</span></br></p>
						<ul class="contact-details" style="list-style: none;list-style-image: none; display: block; position:relative; left:-37px;">
							<li class="phone"><span><strong>Phone:</strong></br> 0333 043 4422</li></br>
							<li class="international"><strong>International:</strong></br> +44 1695 554553</li></br>
							<li class="email mobile-email"><strong>Collections Email:</br></strong> collections@federalmanagement.co.uk</li>
						</ul>
					</div>
				</div>				
			</div>
		</div>
<?php
	include 'footer.php';
?>
