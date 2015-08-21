<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Contact Federal Management Debt Collection Agency",$buffer);
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
 
                
                    <p style="font-size: 13px">Please complete the form below and the relevant department will contact you within 3 working hours. For all New Business enquiries please select the "New Business Enquiry" option as the nature of your enquiry and our New Business team will contact you back within 1 working hour. Working hours are 9am - 6pm Monday to Friday.</p>
					
				<form class="" id="commentForm" method="post" action="contactsent.php">
				<fieldset style="background: url(img/federalmanagement-contact-business-woman-card.jpg) 300px 60px no-repeat;">
				<h4>Enquiry Form</h4>
					<div class="form-group img-rounded">
						<label for ="contact-name" class="col-lg-12 control-label">Name:</label></br>
						<div class="col-lg-6 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
							<input type="text" class="form-control" id="cname" name="cname" placeholder="Full Name" minlength="2" required style=""></br>
						</div>
					</div>
					<div class="form-group">
						<label for ="contact-email" class="col-lg-12 control-label">Email:</label></br>
						<div class="col-lg-6 input-group margin-bottom-sm">
						  <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
						  <input type="email" class="form-control" id="cemail" name="cemail" required placeholder="you@example.com" style="">
						</div>		
					
												
					</div>	
					<div class="form-group">
						<label for ="contact-number" class="col-lg-12 control-label">Phone:</label>
						<div class="col-lg-6 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
							<input type="number" class="form-control" name="cnumber" id="contact-number" placeholder="Phone Number" style=""></br>
						</div>
					</div>	
					<div class="form-group">
						<label for ="contact-subject" class="col-lg-12 control-label">Subject:</label>
						<div class="col-lg-6 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
							<input type="text" class="form-control" id="contact-subject" placeholder="Subject" name="csubject" style=""></br>
						</div>
					</div>	
					<div class="form-group">
						<label for ="contact-message" class="col-lg-12 control-label">Your Query:</label>
						<div class="col-lg-7 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-comments fa-fw"></i></span>
							<textarea form="commentForm" class="form-control" rows="4" name="cmessage" style=""></textarea></br>
						</div>
					</div>	
					<div class="col-lg-12 input-group margin-bottom-sm">
					<input class="btn btn-style btn-sm btn-medium btn-danger" href="#" class="submit" type="submit" value="Submit" placeholder="Message">
					</div>
				</fieldset>
				</br>
				</form>         	
				</div>
				<div class="col-md-4">
					<div class="col-md-12 contact-sidebar" style="background-color: #E2E2E2; border-radius: 5px; margin-top: 10px; font-size:12px; padding:25px; color:#3E3E3E; width:339px; position:relative; left:12px; float:left; border:1px solid grey;     box-shadow: inset 0 0 30px rgba(0,0,0,.5);">
						<p style="font-size: 12px;"><span style="color:#CC0000; font-size:15px;" class="text-center">Contact Information</span></br></br>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2371.122943352359!2d-2.792669!3d53.537718999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b174c6c411171%3A0xfa32e48ca3f881b2!2sFederal+Management!5e0!3m2!1sen!2suk!4v1439893484774" width="300" height="200" frameborder="0" style="border:0" class="mobile-map" allowfullscreen></iframe></br>
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
	
					<div class="col-md-12 contact-sidebar" style="background-color: #E2E2E2; border-radius: 5px; margin-top: 10px; font-size:12px; padding:25px; color:#3E3E3E; width:339px; position:relative; left:12px; float:left; border: 1px solid grey;     box-shadow: inset 0 0 30px rgba(0,0,0,.5);">
						<p style="font-size: 12px;"><span style="color:#CC0000; font-size:15px;" class="text-center">New Business Department</span></br></p>
						<ul class="contact-details" style="list-style: none;list-style-image: none; display: block; position:relative; left:-37px;">
							<li class="phone"><span><strong>Phone:</strong></br> 0333 043 4420</li></br>
							<li class="international"><strong>International:</strong></br> +44 1695 554551</li></br>
							<li class="email mobile-email"><strong>New Business Email:</br></strong> newbusiness@federalmanagement.co.uk</li>
						</ul>
					</div>
	
					<div class="col-md-12 contact-sidebar" style="background-color: #E2E2E2; border-radius: 5px; margin-top: 10px; font-size:12px; padding:25px; color:#3E3E3E; width:339px; position:relative; left:12px; float:left; border: 1px solid grey;     box-shadow: inset 0 0 30px rgba(0,0,0,.5);">
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
