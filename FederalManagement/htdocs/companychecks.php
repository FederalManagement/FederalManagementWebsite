<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Company Checks Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Company Checks with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					As part of our commitment to excellence, Federal Management are proud to partner one of the UK's leading Business Credit Reference Agencies, Creditsure.
					</br></br>
					Creditsure offers a simple On-Line service that allows you to access information on every UK Limited Company within seconds. They deliver a "Low Cost - Pay as You go" service and offer 5 FREE Company Credit Checks to all existing Federal Management's Clients.
					</p>
					
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">What <strong>Creditsure</strong> offers</p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> No Contracts
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> No Annual Fees
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> FREE Registration
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Reports for over 1.8m UK Companies
					</div>
					</br>
					<div class="bullet-point">					
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Credit Limit Recommendation
					</div>
					</br>
					</div>
					<p style="font-size:13px">In addition, Creditsure offers a range of cost effective Company Credit Checking packages to suit your business. Remember, prevention is better than a cure so be sure before you do business, be Creditsure.</p>
					<img src="img/creditsure-logo.jpg" class="img-responsive center-block" style="padding:25px;">
					<p style="font-size:13px">For further information on a free trial, please contact the Federal Management New Business Team on </br><span style="color:#CC0000;"><strong>0333 043 4420</strong></span> or call Creditsure direct on <span style="color:#CC0000;"><strong>0333 043 4430</strong> </span>, quoting your Federal Management reference.</p>
					</br>
					<p class="bullet-point text-center quote-image" style="font-size:13px; padding:20px;">
						<strong>      </br> "We highly recommend Creditsure's superb on-line credit checking service" </strong></br>
						<span class="text-muted">Mark Butcher, Senior Collections Officer</span>
						</p>
				 </div>
				<p class="text-center mobile-nodisplay" style="margin-top:30px;">Click for more information...</p>

					<?php include 'sidebar.php' ?>
				</div>
				
				
				</div>
			</div>

<?php
 include 'footer.php';
?>
