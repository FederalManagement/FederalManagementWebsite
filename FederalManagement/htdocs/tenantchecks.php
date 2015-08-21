<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Tenant Checks Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Tenant Checks with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					It is a must for any Landlord or Lettings Agency that all Tenants be 'Tenant checked' prior to the commencement of a rental term. In the current economic climate, too many property owners are cutting corners and failing to carry out the basic acts of due diligence on their prospective tenants. Over 11.7% of Rent went unpaid in the UK in 2010, totalling just over a whopping 276 Million pounds.
					</br></br>
					Our corporate partners TenantSure offer an exclusive low cost tenant checking service that starts from as little as £8.99 per check with results within 48 hours. Unrivalled in cost and service, TenantSure serves the requirements of thousands of Landlords and Letting Agents up and down the UK and have helped their clients protect themselves against thousands of pounds of unpaid rent.
					</br></br>
					TenantSure's superb tenant checking service is hassle free, no contracts and strictly on a pay as you go basis.
					</p>
					</br></br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">Their tenant checks <strong>include</strong>: </p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Tenant Identity Verification
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> CCJ & Enforcement Order Search
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Bankrutpcy & IVA Checks
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Previous Address verification
					</div>
					</br>
					<div class="bullet-point">					
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Peace of mind and security
					</div>
					</br>
					</div>

					<img src="img/tenantsure-logo.jpg" class="img-responsive center-block" style="padding:25px;">
					<p style="font-size:13px">For further information on TenantSure's fantastic tenant checking service either visit their website at http://www.tenant-sure.co.uk or call their Customer Helpline on 0333 043 4430 to find our more.</p>
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
