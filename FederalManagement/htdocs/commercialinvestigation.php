<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Commercial Investigation Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Commercial Investigation with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					Our Commercial Investigation services can provide information on companies and directors accordingly and unearth any wrong doing were and when appropropriate. Whether it be a case of trading whilst insolvent or simply an investigation into any form of wrong doing by a Limited company or its Directors, our thorough investigations can unearth the smallest of things that can help prove a liability whatever the case may be.
					</p>
					</br></br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">What we can help with: </p>			
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Fraudulent Trading
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Trading whilst Insolvent
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Information & evidence gathering
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Director Investigation
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Director disqualification
					</div>
					</br>
					</div>

				 
				 <p style="font-size:13px">For further information on how we can help you or your business, call us on 0333 043 4420.</p>
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
