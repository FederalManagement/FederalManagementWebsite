<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Tracing Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Tracing with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					Federal Management have teamed up with Tracesure and are proud to offer an exclusive Track & Trace service available for tracing absconded or missing persons.
					</br></br>
					Tracesure provide a unique 'no trace - no fee' service that is used by thousands of entities across the UK, EU and even further afield to search for and locate individuals not wishing to be found or that have simply relocated without informing the relevant parties or even family members. Tracesure can track down the most elusive of people using their specialist resources and network of field contacts. Tracesure clients include Solicitors, Debt Collection Agencies, Government Authorities, Letting Agents and even Individuals!
					</br></br>
					Why pay for expensive private investigators or spurious trace agents who want fees even if they do not get a result? On a no trace - no fee basis, Tracesure can find your missing person within minutes and get the results to you fast and all for £50. You only pay once Tracesure have located the person in question and with this exclusive service, total discretion is assured.
					</p>
					</br></br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">What we <strong>can help</strong> with: </p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Absconded tenants
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Missing relatives / Friends
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Tracing 'gone away' debtors
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Non CSA paying parents
					</div>
					</br>
					</div>

					<img src="img/tracesure-logo.jpg" class="img-responsive center-block" style="padding:25px;">
					<p style="font-size:13px">For further information on Tracesure's fantastic Track & Trace service either visit their website at http://www.trace-people.co.uk or call their Customer Helpline on 0333 043 4430 to find our more.</p>
					</br>
						<p class="bullet-point text-center quote-image" style="font-size:12px; padding:20px;">
						<strong>      </br></br> "We have used Tracesure and their accurate tracing has helped us to recover tens of thousands of pounds in debts for our clients" </strong></br>
						<span class="text-muted">John McGovern, Senior Collections Officer, Federal Management Ltd</span>
						</p>
				 </div>
				<p class="text-center" style="margin-top:30px;">Click for more information...</p>

					<?php include 'sidebar.php' ?>
				</div>
				
				
				</div>
			</div>

<?php
 include 'footer.php';
?>
