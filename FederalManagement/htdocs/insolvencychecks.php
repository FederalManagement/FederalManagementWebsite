<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Debt Insolvency Checks Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Insolvency Checks with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					Our partners, Creditsure offer an immediate Insolvency Checking service on both companies and individuals that provides up to date information in relation to the status of any company or individual in the UK.
					</br></br>
					Whether it be a Limited Company that is claiming that they have gone into liquidation or administration or an unscrupulous Debtor that is trying to evade payment by claiming they are bankrupt, we can verify the correct legal status of any legal entity (both corporate & consumer) and demist any potential smoke screens by ascerting the facts.
					</p>
					</br></br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">What<strong> Creditsure's</strong> services offer: </p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Full Insolvency Register Check for Individuals
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Insolvency check against companies including any action pending
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> IVA & CVA Checks
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Bankrutpcy status including discharge date
					</div>
					</br>
					<div class="bullet-point">					
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Insolvency Practioner details were possible
					</div>
					</br>
					</div>

					<img src="img/creditsure-logo.jpg" class="img-responsive center-block" style="padding:25px;">
					<p style="font-size:13px">For further details on this or any other of Creditsure's services, please visit their website or call their Client Support helpline on 0333 043 4430.</p>
					</br>
					<p class="bullet-point text-center quote-image" style="font-size:12px; padding:20px;">
						<strong>      </br> "It is essential that Tenant Checks are done prior to any agreements being signed. I recommend TenantSure's services" </strong></br>
						<span class="text-muted">Paul Taylor, Belvoir Lettings</span>
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
