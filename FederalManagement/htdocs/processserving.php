<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Process Serving Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Site Visits with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					With our expertise in the Debt Collection industry, we have the ways, means and resources of effectively managing any situation requiring the services of a Certificated Bailiff or High Court Enforcement.
					</br></br>
					We work in partnership with one of the UK's leading High Enforcement Offices delivering services to Businesses and individuals across the UK & EU, enforcing the payment of debt where appropriate.
					</p>
					</br></br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">What we can help with: </p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Commercial Rent Arrears
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Forfeiture (change of locks etc)
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Enforcement of County Court Judgments over 600 pounds
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Process serving
					</div>
					</br>
					</div>

				 
				 <p style="font-size:13px">For enquiries for further information on our robust fixed fee services then please contact the New Business Helpline on 0333 043 4420.</p>
					</br>
						<p class="bullet-point text-center quote-image" style="font-size:12px; padding:20px;">
						<strong>      </br></br> "They delivered quick results, much to our amazement. To say we are grateful is an understatement"</strong></br>
						<span class="text-muted">R Singh - Commercial Letting Agents, London</span>
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
