<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Privacy Policy",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">					
                <div class="col-lg-8">
                    <h1 class="intro-text"><strong>Federal Management</strong>
                        Privacy Policy
                    </h1>
                    <hr style="max-width: 1200px;">
                </div>
 
                <div class="col-md-8">
					<img class="img-responsive" src="img/federalhouse-outside-privacypolicy.jpg" alt="" style="margin: 0px 0 10px 0; border-radius: 5px;">
                    <p style="font-size: 13px">If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at enquiries@federalmanagement.co.uk. 
					</br></br>
					At www.federalmanagement.co.uk, the privacy of our visitors is of extreme importance to us. This privacy policy document outlines the types of personal information is received and collected by www.federalmanagement.co.uk and how it is used. 
					</br></br>
					Log Files
					Like many other Web sites, www.federalmanagement.co.uk makes use of log files. The information inside the log files includes internet protocol ( IP ) addresses, type of browser, Internet Service Provider ( ISP ), date/time stamp, referring/exit pages, and number of clicks to analyze trends, administer the site, track user’s movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable. 
					</br></br>
					Cookies and Web Beacons 
					www.federalmanagement.co.uk does use cookies to store information about visitors preferences, record user-specific information on which pages the user access or visit, customize Web page content based on visitors browser type or other information that the visitor sends via their browser. 
					</br></br>
					DoubleClick DART Cookie 
					.:: Google, as a third party vendor, uses cookies to serve ads on www.federalmanagement.co.uk.
					.:: Google's use of the DART cookie enables it to serve ads to users based on their visit to www.federalmanagement.co.uk and other sites on the Internet. 
					.:: Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL - http://www.google.com/privacy_ads.html 
					</br></br>
					Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include ....
					Google Adsense
					</br></br>
					These third-party ad servers or ad networks use technology to the advertisements and links that appear on www.federalmanagement.co.uk send directly to your browsers. They automatically receive your IP address when this occurs. Other technologies ( such as cookies, JavaScript, or Web Beacons ) may also be used by the third-party ad networks to measure the effectiveness of their advertisements and / or to personalize the advertising content that you see. 
					</br></br>
					www.federalmanagement.co.uk has no access to or control over these cookies that are used by third-party advertisers.
					</br></br>
					You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices. www.federalmanagement.co.uk's privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites. 
					</br></br>
					If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers' respective websites. 
				</div>
				<p class="text-center" style="margin-top:30px;">Click for more information...</p>
				<?php include 'sidebar.php'?>
            </div>
		</div>


<?php
 include 'footer.php';
?>
