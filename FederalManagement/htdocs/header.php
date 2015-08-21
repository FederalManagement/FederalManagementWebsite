<?php
	include 'variables.php';
	$title = "Debt Collection, Debt Recovery &amp; Debt Collectors | Federal Management";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?$description;?>">
    <meta name="author" content="<?=$author;?>">
	<link rel="icon" 
      type="image/png" 
      href="img/federalhouse-logo-favicon.png">

    <title><?=$title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="show_clock()">
<body>
	</br>
	<div class="container social" style="display: block; padding: 5px">
    	<iframe class="facebook-like" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FFederalManagement&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:87px; height:21px;background:none;margin:1px 4px -2px 0; float:left;">
		</iframe>  
            
		<span class ="facebook-like" style="height:21px;">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<span style="height:22px;"><g:plusone size="medium"></g:plusone></span>
		</span>
		
            <div class="timecontainer" id="timecontainer" style="float:right;">
				<script type="text/javascript" src="js/liveclock.js"></script>
            </div>             
    </div>
	<div class="container main-header">
    <img class="main-logo img-responsive center-block" src="img/federalmanagement-debt-collection-logo.jpg" alt="Federal Management Debt Collectors Logo">
	<img class="phone-banner img-responsive center-block" src="img/federalmanagement-phone-call-mobile.jpg" alt="Federal Management Debt Recovery Call Us">
	</div>
    <!-- Navigation -->
    <nav class="container navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="background-color: #CC0000;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Federal Management</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="container nav navbar-nav cl-effect-1">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
					<li>
                        <a href="debtcollection.php">Debt Collection</a>
                    </li>
					<li>
                        <a href="disputeresolution.php">Dispute Resolution</a>
                    </li>
                    <li>
                        <a href="otherservices.php">Other Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
					<li>
                        <a href="/news">News</a>
                    </li>
							<li class = "dropdown tablet-nodisplay">
							<a href="#" class="dropdown-toggle tablet-nodisplay" data-toggle="dropdown"><span class="flag-uk" aria-hidden="true"></span>  English (UK) <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="international/spain"> <span class="flag-esp" aria-hidden="true"></span> Espanol</a></li>
									<li><a href="international/france"> <span class="flag-fr" aria-hidden="true"></span> Francais</a></li>
									<li><a href="international/germany"> <span class="flag-ger" aria-hidden="true"></span> Deutsch</a></li>
									<li><a href="international/italy"> <span class="flag-ita" aria-hidden="true"></span> Italiano</a></li>
									<li><a href="international/poland"> <span class="flag-pol" aria-hidden="true"></span> Polski</a></li>
									<li><a href="international/rusia"> <span class="flag-rus" aria-hidden="true"></span> русский</a></li>
									<li><a href="international/arabic"> <span class="flag-ara" aria-hidden="true"></span> Arabic</a></li>
								</ul>
							</li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>