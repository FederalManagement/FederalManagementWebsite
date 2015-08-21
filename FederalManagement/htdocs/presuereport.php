<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Pre Sue Report Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Pre Sue Report with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					When all avenues and normal methods of attempting to collect a Debt have been exhausted, it is extremely important to establish whether the debtor (individual or company) actually has the ability to pay the debt in question. We think it prudent to advise that a Pre-sue report should be pre-requisite prior to any form of civil action whther it be the issuing of a claim or insolvency action.
					</br></br>
					Our pre-sue reports detail any assets they may own, any existing liabilities they may have as well as gathering all other relevant financial information that enables the ability to access the prospects for a successful court or insolvency action.
					</p>
					</br></br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">What our reports detail: </p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Full Account details for Companies
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Asset details including properties etc
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Application of due dilligence
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> A full and frank risk assessment
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Credit Check
					</div>
					</br>
					</div>

				 
				 <p style="font-size:13px">For further information on this service please contact our New Business Team on 0333 043 4420.</p>
					</br>
				 </div>
				<p class="text-center mobile-nodisplay" style="margin-top:30px;">Click for more information...</p>
					<?php include 'sidebar.php' ?>
				</div>
				</div>
				</div>

<?php
 include 'footer.php';
?>
