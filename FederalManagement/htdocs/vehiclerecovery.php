<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Vehicle Recovery Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Vehicle Recovery with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					Federal Management have extensive experience in the private and commercial vehicle asset finance sector. We to offer Vehicle Repossession services for vehicles where there is a non payment of a financial agreement or somebody has possession of a vehicle that is not legally theirs. Our Agents work across the UK and we can offer immediate action on most cases. All of our Agents are highly trained, customer focused and above all professional individuals offering you a service that is second to none.
					</br></br>
					Not only can we repossess vehicles on your behalf, we can also offer financial arrears collection, trace work and enforcement. In addition to motor vehicle recovery we can also offer all other associated services including keyless recoveries, machinery & IT equipment recovery and other areas of asset recovery.
					</br></br>
					For further information on this or any other of our services please complete an enquiry form or call our New Business Team on 0333 043 4420 to discuss your requirements.
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
