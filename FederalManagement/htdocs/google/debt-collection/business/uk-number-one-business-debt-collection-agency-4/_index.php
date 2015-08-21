<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Federal Management are the UK's leading debt collection agency." />
<meta name="keywords" content="Debt Collection Agency, Debt Collection, agency, debt, collection, agencies" />
<title>Federal Management - The UK’s Leading Debt Collection Agency</title>
<link href="css/base.css" type="text/css" rel="stylesheet" />
<!--[if lte IE 7]>
<link href="css/ie.css" type="text/css" rel="stylesheet" />
<![endif]-->
<?
$phone = '0844 875 4022';

$h1 = "Business Debt Collection Specialists"; //This is the one on top of the slider
$h2 = 'Federal Management - The UK\'s No.1 Business Debt Collection Agency'; //This is the text in the footer
$h3 = 'Expert Debt Collection Agency'; //This is the title for the main list

$alt_logo = 'Federal Management - The UK\'s Leading Business Debt Collection Agency'; //ALT text for the main logo at the header
$alt_main_img = 'The UK\'s No1 Business Debt Collection Agency'; //ALT text for the main page's image
$alt_call = 'Call us now on 0844 875 4022 for further information on your debt collection agency requirements.'; //ALT text for the Call Us Now Banner

//Below are all the main list items in order

// THIS LINE MARKS THE MAXIMUM LENGTH FOR THE TEXT -----------------¦ <-- PAST THIS MARK TEXT WILL DROP A LINE! (JUST A REFFERENCE AND MIGHT VARY)
$list_item_1 = 'UK\'s Lowest Commission rates from around 6%';
$list_item_2 = 'High Recovery Rates up to 87%';
$list_item_3 = 'Legal Dispute Resolution Team';
$list_item_4 = 'Specialised Expert Account Managers';
$list_item_5 = 'Field Collection Officers to visit Debtors';
?>
<script type="text/javascript" src="js/external-links.js"></script>
<!--#cufon--> 
<script type="text/javascript" src='js/cufon-yui.js'></script> 
<script type="text/javascript" src='js/century.gothic.font.js'></script> 
<script type="text/javascript"> 
Cufon.replace('h1,h2,h3,h4,h5,h6', { hover: 'true' });
//Cufon.replace('h1:not(.clean)');
</script> 
<!--#cufon-->
<link href="https://plus.google.com/105240075023583364042" rel="publisher" />
<!-- Place this in the HEAD section of your code -->
<link rel="canonical" href="http://<?php $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];echo $url;?>" />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
{ parsetags: 'explicit' }
</script>
</head>

<body>
	<div id="outer-wrapper">
    	<div id="social-networks">
        	<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FFederalManagement&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:21px;background:none;margin:1px 4px -2px 0;"></iframe>
        	<!--<div id="plusone-div"></div>
			<script type="text/javascript">
            gapi.plusone.render
            (
                'plusone-div',
                {
                    "size": "medium",
                    "count": "true"
                }
            );
            </script>
            <a href="https://plus.google.com/105240075023583364042?prsrc=3" class="google-plus"><img src="http://www.federalmanagement.co.uk/images/interface/google-plus-icon.png" alt="Join us on Google +" title="Join us on Google +" /> <span>Join us</span></a>-->
        </div><!-- end #social-networks -->
    	<div id="rounded-top">
        	<img src="images/interface/logo.png" alt="<?=$alt_logo;?>" title="" />
        </div>
        <div id="rounded-body">
            <div id="main-content">
            	<ul class="mini-nav">
                    <li><a href="http://www.federalmanagement.co.uk">Our Website</a></li>
                    <li> | </li>
                    <li><a href="http://www.creditsure.org.uk">Credit Checks</a></li>
                    <li> | </li>
                    <li><a href="http://www.trace-people.co.uk">Track &amp; Trace</a></li>
                </ul>
            	<div id="leftColumn">
                	<h1><?=$h1;?></h1>
                	<div class="slider">
                    	<ul>
                            <li><img src="images/interface/business-team.png" alt="<?=$alt_main_img;?>" title="" /></li>
                        </ul>
                    </div><!-- end .slider -->
                    <div class="text">
                    	<p>By simply completing the form to the right our New Business Department will call you to provide <span style="color:#900;">FREE ADVICE</span> on the collection of your outstanding accounts.</p>
                    	<p>Why Federal Management?</p>
                        
                        <ul>
                        	<li><?=$list_item_1;?></li>
                            <li><?=$list_item_2;?></li>
                            <li><?=$list_item_3;?></li>
                            <li><?=$list_item_4;?></li>
                            <li><?=$list_item_5;?></li>
                        </ul>
                        
                        <p>Take the first steps to recovering your money by calling us now on <span style="color:#900;">0844 875 4022</span> or simply complete the form to the right and a member of our New Business Team will call you back to discuss the matter.</p>
                    </div><!-- end .text -->
                </div><!-- end #leftColumn -->
                <div id="rightColumn">
                	<div class="call-us">
                        <img src="images/interface/call-us-bg.png" alt="<?=$alt_call;?>" title="" />
                    </div><!-- end .call-us -->
                    <div id="formContainer">
                        <form method="post" action="form.php" style="margin-top:105px;">
                            <fieldset>
                                <span><label>Full name: <em>*</em></label><input type="text" name="First" /></span>
                                <span><label>e-mail: <em>*</em></label><input type="text" name="EmailFrom" /></span>
                                <span><label>Company:</label><input type="text" name="Company" /></span>
                                <span><label>Telephone: <em>*</em></label><input type="text" name="Telephone" /></span>
                                <span><label>Amount owed:</label><input type="text" name="AmountOwed" /></span>
                                
                                <div id="notice">
                                    
                                </div>
                                
                                <input type="image" src="images/interface/form-btn.png" name="submit" id="submit" style="margin-top:7px;" />                
                            </fieldset>
                        </form>
                    </div><!-- end #formContainer -->
                </div><!-- end #rightColumn -->
            </div><!-- end #main-content -->
        </div><!-- end #rounded-body -->
        <div id="rounded-bottom"><h2><?=$h2;?></h2></div>
        <div id="footer">
            <div id="copyright">
        	<div id="social-icons">
            	<p>Follow us on:</p>
            	<ul>
                	<li><a href="http://www.facebook.com/FederalManagement" target="_blank"><img src="http://www.federalmanagement.co.uk/images/interface/social-facebook.png" alt="our facebook page" title="follow us on facebook" /></a></li>
                    <li><a href="http://www.linkedin.com/company/federal-management-ltd" target="_blank"><img src="http://www.federalmanagement.co.uk/images/interface/social-linkedin.png" alt="our linkedin page" title="follow us on linkedin" /></a></li>
                    <li><a href="http://www.twitter.com/fedmanltd" target="_blank"><img src="http://www.federalmanagement.co.uk/images/interface/social-twitter.png" alt="our twitter page" title="follow us on twitter" /></a></li>
                    <li><a href="https://plus.google.com/105240075023583364042/" target="_blank"><img src="http://www.federalmanagement.co.uk/images/interface/social-google-plus.png" alt="our google+ page" title="follow us on google+" /></a></li>
                    <li><a href="http://www.federalmanagement.co.uk/news/feed/" target="_blank"><img src="http://www.federalmanagement.co.uk/images/interface/social-rss.png" alt="our RSS feed" title="register on our RSS feed" /></a></li>
                </ul>
            </div><!-- end #social-icons -->
			<strong style="float:left;clear:left;">© <?php $year = getdate(); echo($year['year']);?>. All rights reserved.</strong><br /><br />
            <!--a href="http://validator.w3.org/check?uri=referer" target="_blank" rel="nofollow"><img src="<?=$depth; ?>images/interface/w3c_xhtml_small.png" alt="W3C compliant for XHTML 1.0" title="W3C compliant for XHTML 1.0" /></a>
			<a href="http://jigsaw.w3.org/css-validator/validator?uri=www.federalmanagement.co.uk%2Fcss%2Fbase.css&amp;profile=css3&amp;usermedium=all&amp;warning=no&amp;vextwarning=" target="_blank" rel="nofollow"><img src="<?=$depth; ?>images/interface/w3c_css_small.png" alt="W3C compliant for CSS level 3" title="W3C compliant for CSS level 3" /></a-->
            </div>
            <div id="associations">
                <a href="http://www.investorsinpeople.co.uk" target="_blank" rel="nofollow"><img src="http://www.federalmanagement.co.uk/images/banners/logo_investors.png" alt="Investors in People logo" title="Investors in People" /></a>
                <a href="http://www.oft.gov.uk/" target="_blank" rel="nofollow"><img src="http://www.federalmanagement.co.uk/images/banners/logo_oft.jpg" alt="Office of Fair Trading Website" title="Office of Fair Trading Website" /></a>
                <a href="http://www.ico.gov.uk/" target="_blank" rel="nofollow"><img src="http://www.federalmanagement.co.uk/images/banners/logo_ico.png" alt="Information Commissioner's Office Website" title="Information Commissioner's Office Website" /></a>
                <a href="http://www.i-a-b.ch" target="_blank" rel="nofollow"><img src="http://www.federalmanagement.co.uk/images/banners/logo_iab.jpg" alt="International Accreditation Board Website" title="International Accreditation Board Website" /></a>
            </div>
            <div id="others">
                <a href="http://www.fenca.org/" target="_blank" rel="nofollow"><img src="http://www.federalmanagement.co.uk/images/banners/logo_fenca.png" alt="Federation of European National Collection Associations" title="Federation of European National Collection Associations" /></a>
                <a href="http://www.acainternational.org/" target="_blank" rel="nofollow"><img src="http://www.federalmanagement.co.uk/images/banners/logo_aca.png" alt="Association of Credit and Collection Professionals logo" title="Members of The Association of Credit and Collection Professionals" /></a>
                <a href="http://www.csa-uk.com/media/editor/file/Code%20of%20Practice%202009.pdf" target="_blank" rel="nofollow"><img src="http://www.federalmanagement.co.uk/images/banners/logo_csa.png" alt="Credit Services Association Website" title="Credit Services Association Website" /></a>
            </div>
        </div><!-- end #footer -->
    </div><!-- end #outer-wrapper -->
    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3101414-1']);
  _gaq.push(['_trackPageview']);
  (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- RATING USING MICROFORMATS -->
    <div class="hreview-aggregate">
       <span class="item">
          <span class="fn">Federal Management Debt Collection</span>
       </span>
       <span class="rating">4.8</span>
       based on
       <span class="count">112</span> user reviews.
    </div>
    <!-- END RATING USING MICROFORMATS -->
</body>
</html>