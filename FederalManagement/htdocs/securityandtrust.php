<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Security and Trust",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">					
                <div class="col-lg-8">
                    <h1 class="intro-text">Security and Trust at
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
                </div>
									<p class="text-center" style="margin-top:30px;">Click for more information...</p>
	
                <div class="col-md-8">				
			
                    <p style="font-size: 13px">Federal Management has a wide range of licenses and accreditations, as well as being members of several prestigious bodies. Clicking on the images below will show the latest certificate issued by the relevant organisation.</p>
					<strong><p style="color: #CC0000; font-size:13px;">Accredited by </p></strong>
					<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:13px;">ISO9001 Accredited for Professionalism</p>
					<a href="img/certificates/ico-2012.pdf" rel="prettyPhoto"--><img src="img/logo-iso-big.jpg" alt="ISO 90001 Logo" title="ISO 90001 Accreditation" class="center-block"/></a>					
					</div>
					</div>
					<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:13px">Awarded for High Levels of Staff Training</p>
					<a href="img/certificates/investors-in-people-2012.pdf" rel="prettyPhoto"--><img src="img/logo-investors-in-people-big.jpg" alt="Investors In People logo" title="Financial Conduct Authority" class="center-block" style="padding-top:30px"/></a>					
					</div>
					</div>
					<strong><p style="color: #CC0000; font-size:13px;">Licensed by </p></strong>
										<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:13px">Licensed & Authorised in Debt Collection</p>
					<img src="img/logo-fca-big.jpg" alt="Financial Conduct Authority logo" title="Financial Conduct Authority" class="center-block"/>				
					</div>
					</div>
					<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:13px">Licensed to Hold & Retain Personal Data</p>
					<a href="img/certificates/iso9001.pdf" rel="prettyPhoto"--><img src="img/logo-ico-big.jpg" alt="Information Commissioners Office Logo" title="Information Commissioners Office" class="center-block"/></a>					
					</div>
					</div>
					<strong><p style="color: #CC0000; font-size:13px;">Members of </p></strong>
					<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:13px">Credit Service Association</p>
					<a href="img/certificates/csa-2012.pdf" rel="prettyPhoto"--><img src="img/logo-csa-big.jpg" alt="Credit Service Association Logo" title="Credit Service Association" class="center-block"/></a>					
					</div>
					</div>
					<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:11px">Federation of European National Collection Associations</p>
					<a href="img/certificates/fenca-2012.pdf" rel="prettyPhoto"--><img src="img/logo-fenca-big.jpg" alt="Federation of European National Collection Associations logo" title="Federation of European National Collection Associations" class="center-block" style="padding-top:20px"/></a>					
					</div>
					</div>
					<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:13px">ACA International</p>
					<img src="img/logo-aca-big.jpg" alt="ACA International logo" title="ACA International" class="center-block"/>					
					</div>
					</div>
					<div class="col-md-6">
					<div class="panel panel-default" style="min-height: 250px; max-height: 250px;">
					<p class="text-center panel-heading" style="background-color:#ddd; color:#333; font-size:13px">UK Debt Collection Bureau</p>
					<a href="img/certificates/ukdcb-2012.pdf" rel="prettyPhoto"--><img src="img/logo-ukdebt-big.jpg" alt="UK Debt Collection Bureau logo" title="UK Debt Collection Bureau" class="center-block" style="padding-top:30px;"/></a>	
					</div>
					</div>					
					</div>

	
			
					<?php include
					'sidebar.php'
					?>

				</div>
			</div>



<?php
 include 'footer.php';
?>
