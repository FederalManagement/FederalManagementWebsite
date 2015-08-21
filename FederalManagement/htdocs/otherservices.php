<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Other Debt Collection Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				
                <div class="col-md-8">
                    <h1 class="intro-text">Other Services at
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					<img class="img-responsive" src="img/debt-collection-other-services.jpg" alt="debt collection other services" style="margin: 10px 0 10px 0; border-radius: 5px;  border: 1px solid grey; box-shadow: 3px 3px 3px #888888;"></br>
					<p style="font-size:13px">Federal Management also offers other discounted supporting services to our clients. Simply click on the service you are interested in for more information.</p>
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist" style="font-size:13px;">
						<li role="presentation" class="active"><a href="#checking" aria-controls="checking" role="tab" data-toggle="tab">Checking Services</a></li>
						<li role="presentation"><a href="#recovery" aria-controls="recovery" role="tab" data-toggle="tab">Recovery Services</a></li>
						<li role="presentation"><a href="#bailiff" aria-controls="bailiff" role="tab" data-toggle="tab">Bailiff Services</a></li>
						<li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab">Reporting Services</a></li>
						<li role="presentation"><a href="#tracing" aria-controls="tracing" role="tab" data-toggle="tab">Tracing Services</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content other-services">
						<div role="tabpanel" class="tab-pane fade in active" id="checking">
							</br>
							<ul class="text-muted" style="list-style-type:none;"> 
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="companychecks.php"> Company Checks</a></li></br>
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="tenantchecks.php"> Tenant Checks</a></li></br>
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="insolvencychecks.php"> Insolvency Checks</a></li></br>
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="tracing.php"> Tracing</a></li></br>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="recovery">
							</br>
							<ul class="text-muted" style="list-style-type:none;"> 
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="assetrecovery.php"> Asset Recovery</a></li></br>
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="vehiclerecovery.php"> Vehicle Recovery</a></li></br>
							</ul>						
						</div>
						<div role="tabpanel" class="tab-pane fade" id="bailiff">
							</br>
							<ul class="text-muted" style="list-style-type:none;"> 
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="commercialrentrecovery.php"> Commercial Rent Recovery</a></li></br>
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="processserving.php"> Process Serving</a></li></br>
							</ul>							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="reporting">
							</br>
							<ul class="text-muted" style="list-style-type:none;"> 
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="presuereport.php"> Pre-Sue Report</a></li></br>
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="commercialinvestigation.php"> Commercial Investigation</a></li></br>
							</ul>							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tracing">
							</br>
							<ul class="text-muted" style="list-style-type:none;"> 
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="creditcontroltraining.php"> Credit Control Training</a></li></br>
								<li title="Click for more information" data-toggle="tooltip" data-placement="left"><i class="fa fa-university"></i><a href="debtrecoverytraining.php"> Debt Recovery Training</a></li></br>
							</ul>							
						</div>
					</div>
					<!--
					<p style="font-size:13px;">Federal Management also offers other discounted supporting services to our clients. Simply mouse over the tabs to show all related services, then <span style="color:#CC0000;">click on the service</span> you are interested in for more information.</p>
					
					<i class="fa fa-university"></i><span style="color:#CC0000" title="Click a service for more information" data-toggle="tooltip" data-placement="top"><strong> Checking Services</strong></span></br>
					<ul class="text-muted" style="list-style-type:none;"> 
						<li>Company Checks</li>
						<li>Tenant Checks</li>
						<li>Insolvency Checks</li>
						<li>Tracing</li>
					</ul>
					 <i class="fa fa-university"></i><span style="color:#CC0000"  title="Click a service for more information" data-toggle="tooltip" data-placement="top"><strong> Recovery Services</strong></span></br>
					<ul class="text-muted" style="list-style-type:none;">
						<li>Asset Recovery</li>
						<li>Vehicle Recovery</li>
					</ul>
					<i class="fa fa-university"></i><span style="color:#CC0000"  title="Click a service for more information" data-toggle="tooltip" data-placement="top"><strong> Bailiff Services</strong></span></br>
					<ul class="text-muted" style="list-style-type:none;">
						<li>Commercial Rent Recovery</li>
						<li>Process Serving</li>
					</ul>
					<i class="fa fa-university"></i><span style="color:#CC0000"  title="Click a service for more information" data-toggle="tooltip" data-placement="top"><strong> Reporting Services</strong></span></br>
					<ul class="text-muted" style="list-style-type:none;">
						<li>Pre-Sue Report</li>
						<li>Commercial Investigation</li>
					</ul>
					<i class="fa fa-university"></i><span style="color:#CC0000"  title="Click a service for more information" data-toggle="tooltip" data-placement="top"><strong> Tracing Services</strong></span></br>
					<ul class="text-muted" style="list-style-type:none;">
						<li>Credit Control Training</li>
						<li>Debt Recovery Training</li>
					</ul>-->
				</div>
				
				<p class="text-center" style="margin-top:30px;">Click for more information...</p></br>

					<?php include 'sidebar.php'?>

				
				</div>
			</div>

<?php
 include 'footer.php';
?>
