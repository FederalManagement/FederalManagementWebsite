<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Debt Collection Testimonials",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">					
				
				
                <div class="col-md-8">			
			                    <h1 class="intro-text">Testimonials at
                        <strong>Federal Management</strong>
                    </h1>
					<hr style="max-width: 1200px;">
					<div class="col-md-12" style="margin-bottom:20px;">
					    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/federalmanagement-testimonial-business-man.jpg" style="border-radius: 5px;" alt="federal management testimonial business man">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/federalmanagement-testimonial-business-woman.jpg" alt="federal management testimonial business woman">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/federalmanagement-testimonial-business-woman-crossed-arms.jpg" alt="federal management testimonial business woman arms crossed">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
					</div>
					<div class="col-md-3 panel panel-default text-center" style="min-height: 350px; max-height: 350px;">
						<div class="col-md-2">
						<img src="img/testimonials-lucy.jpg" style="position: relative; left: 20px;">
						</div>
						<div class="col-md-12">
						<p style="font-size:13px; color:#CC0000;">Lucy Dawson</p>
						<p style="font-size:10px" class="text-muted">Senior Credit Controller - UK Tyre Manuf.</p>
						<p style="font-size:12px">"Federal Management came highly recommended to us. 2 years on and we are the ones now doing the recommending. First class service with first class results."</p>
						</div>
					</div>
					
					<div class="col-md-3 panel panel-default text-center" style="min-height: 350px; max-height: 350px;">
						<div class="col-md-2">
						<img src="img/testimonials-steve.jpg" style="position: relative; left: 20px;">
						</div>
						<div class="col-md-12">
						<p style="font-size:13px; color:#CC0000;">Steve Cooper</p>
						<p style="font-size:10px" class="text-muted">Finance Director - Investment Firm</p>
						<p style="font-size:12px">"We've used other means of trying to collect our debts and we can categorically state that Federal have been by far the most impressive."</p>
						</div>
					</div>
					
					<div class="col-md-3 panel panel-default text-center" style="min-height: 350px; max-height: 350px;">
						<div class="col-md-2">
						<img src="img/testimonials-derek.jpg" style="position: relative; left: 20px;">
						</div>
						<div class="col-md-12">
						<p style="font-size:13px; color:#CC0000;">Derek Smith</p>
						<p style="font-size:10px" class="text-muted">Insolvency Practioner - Int. Insolvency Group</p>
						<p style="font-size:12px">"Over the past 12 months we have slashed our Debt Recovery costs by over 60% and nearly tripled the return. The figures speak for themselves."</p>
						</div>
					</div>
					
					<div class="col-md-3 panel panel-default text-center" style="min-height: 350px; max-height: 350px;">
						<div class="col-md-2">
						<img src="img/testimonials-jenny.jpg" style="position: relative; left: 20px;">
						</div>
						<div class="col-md-12">
						<p style="font-size:13px; color:#CC0000;">Jane Bishop</p>
						<p style="font-size:10px" class="text-muted">International Business Telecoms Group, UK</p>
						<p style="font-size:12px">"We've been using Federal Management for 3 years and we find them extremely effective, cost efficient and is now a valued part of our credit control process."</p>
						</div>
					</div>
					
					<h1 class="intro-text">Our latest reviews on
                        <strong>Trustpilot</strong>
                    </h1>
					<hr style="max-width: 1200px;">
					<div class="col-md-12">
					<div class="trustpilot-widget" data-locale="en-GB" data-template-id="539ad60defb9600b94d7df2c" data-businessunit-id="533943130000640005787bb9" data-style-height="500px" data-style-width="100%" data-tags="SelectedReview">
						<a href="https://uk.trustpilot.com/review/federalmanagement.co.uk" target="_blank">Trustpilot</a>
					</div>

					</div>
				</div>
				<p class="text-center" style="margin-top:30px;">Click for more information...</p>
	
			
				<?php include 'sidebar.php' ?>

				</div>
			</div>



<?php
 include 'footer.php';
?>
