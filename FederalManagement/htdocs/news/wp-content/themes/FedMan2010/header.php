<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
<!--[if lt IE 7]>
<link href="css/ie7.css" type="text/css" rel="stylesheet" />
<![endif]--> 
<link href="css/nivo-slider.css" type="text/css" rel="stylesheet" />

<style type="text/css" media="screen">
<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
<?php } else { // No sidebar ?>
<?php } ?>
</style>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<!-- Place this in the HEAD section of your code -->
<link rel="canonical" href="http://<?php $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];echo $url;?>" />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
{ parsetags: 'explicit' }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10424793-5', 'auto');
  ga('send', 'pageview');

</script>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?389HcDeyAbizkMFE8MFsVXhoyKdDcJsM";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

</head>

<body>
	<div id="global_container">
    	<div id="social-networks">
        	<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FFederalManagement&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:21px;background:none;margin:1px 4px -2px 0;"></iframe>
        	<div id="plusone-div"></div>
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
            <a href="https://plus.google.com/105240075023583364042?prsrc=3" class="google-plus"><img src="http://www.federalmanagement.co.uk/images/interface/google-plus-icon.png" alt="Join us on Google +" title="Join us on Google +" /> <span>Join us</span></a>
        </div><!-- end #social-networks -->
    	<div id="rounded_top"></div>
        <div id="rounded_body">
        	<div id="header">
            	<div id="logo"></div>
                <div id="menu">
                	<ul>
                    	<li><a href="http://www.federalmanagement.co.uk" class="txtMenu">Home</a></li>
                        <li><a href="http://www.federalmanagement.co.uk/corporate/about_us.php" class="txtMenu">About Us</a></li>
                        <li><a href="http://www.federalmanagement.co.uk/debt_collection/debt_collection.php" class="txtMenu">Debt Collection</a></li>
                        <li><a href="http://www.federalmanagement.co.uk/other_services/other_services.php" class="txtMenu">Other Services</a></li>
                        <!--li><a href="<?=$depth; ?>news/" class="txtMenu">News</a></li-->
                        <li><a href="http://www.federalmanagement.co.uk/contact_us.php" class="txtMenu">Contact Us</a></li>
                    </ul>
                </div>