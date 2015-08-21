<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Terms of Service",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">					
                <div class="col-lg-8">
                    <h1 class="intro-text"><strong>Federal Management</strong>
                        Terms of Service
                    </h1>
                    <hr style="max-width: 1200px;">
                </div>
	
                <div class="col-md-8">
					<img class="img-responsive" src="img/federalhouse-outside-privacypolicy.jpg" alt="" style="margin: 0px 0 10px 0; border-radius: 5px;">
                    <p style="font-size: 13px">Welcome to Federal Management. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Federal Management’s relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.
					</br></br>
					The term 'Federal Management' or ‘us’ or ‘we’ refers to the owner of the website whose registered office is Federal House, Maple Court, Skelmersdale, Lancashire, WN8 9TW, United Kingdom. The term ‘you’ refers to the user or viewer of our website.
					</br></br>
					The use of this website is subject to the following terms of use:
					</br></br>
					<ul>
					<li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li></br>
					<li>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: Google Adsense</li></br>
					<li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li></br>
					<li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li></br>
					<li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li></br>
					<li>All trademarks reproduced in this website, which are not the property of, or licensed to the operator, are acknowledged on the website.</li></br>
					<li>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li></br>
					<li>From time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li></br>
					<li>Your use of this website and any dispute arising out of such use of the website is subject to the laws of England, Northern Ireland, Scotland and Wales.</li></br>

				</div>
				<p class="text-center" style="margin-top:30px;">Click for more information...</p>
				<?php include 'sidebar.php'?>
				</div>
		</div>


<?php
 include 'footer.php';
?>
