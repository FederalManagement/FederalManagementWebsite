<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Commercial Rent Recovery Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Commercial Rent Recovery with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					Federal Management and its agents are able to assist in the collection of Commercial Rent across the UK, quite often, within 24 hours of instruction. Whether it be for a retail premises, Office space or factory units, we have the resources to help you as quickly as possible.
					</br></br>
					Whether you wishes is to collect overdue Commercial Rent or Forfeit a Commercial Lease, our agents aim is to protect and secure the landlord's position as quickly as possible as per your instruction.
					</br></br>
					We have access to a dedicated team of Certificated Bailiffs, authorised by the Courts to enter premises and seize goods to the total value of the rent arrears owing and where necessary, actually sell goods to recover the arrears. Our agents are also empowered to forfeit Commercial Leases to gain possession of property for landlords/Letting Agents, when and where appropriate.
					</br></br>
					Upon receiving an instruction, our agents take the time to look at the particulars of every case and apply due diligence. Each case is taken on its own merit and dealt with in the appropriate manner so as to maximise the potential of a full recovery.
					</p>
					</br></br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">We can Recovery Commercial Rentfrom the Following Premises: </p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Retail Premises
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Office Spaces
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Factory Units
					</div>
					</br>
					</div>
				 </div>
				<p class="text-center mobile-nodisplay" style="margin-top:30px;">Click for more information...</p>

					<?php include 'sidebar.php' ?>
				</div>
				
				
				</div>
			</div>

<?php
 include 'footer.php';
?>
