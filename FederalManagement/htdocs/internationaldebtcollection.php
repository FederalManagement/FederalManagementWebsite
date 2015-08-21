<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management International Debt Collection Services",$buffer);
echo $buffer;
?>

<?php
	$title = "International Debt Collection, Global Debt Recovery | Federal Management";
	$keywords = "international debt recovery, international debt collection, international debt collection agency, global debt recovery, global debt collection, itnernational debt recovery, debt collection, debt collection agency, debt recovery, debt collectors";
	$description = "International Debt Collection and Global Debt Recovery Agency with Localised Debt Collectors Specialising in Debt Collection from around the World.";
	$depth = "../";
	
	$america = "Argentina, Aruba, Bahamas, Belize, Bermuda, Bolivia, Brazil, Canada, Chile, Colombia, Costa Rica, Cuba, Dominican Republic, Ecuador, Guadeloupe, Guatemala, Guyana, Honduras, Jamaica, Martinique, Mexico, Nicaragua, Panama, Paraguay, Peru, Puerto Rico, Salvador, Trinidad &amp; Tobago, Uruguay, USA, Venezuela.";
	$europe = "Austria, Azerbaidjan, Belgium, Bosnia - Herzegovina, Bulgaria, Croatia, Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Georgia, Germany, Gibraltar, Greece, Hungary, Iceland, Ireland, Italy, Latvia, Lithuania, Luxembourg, Macedonia, Malta, Moldavia, Isle of Man, Netherlands, Norway, Poland, Portugal, Romania, Russian Federation, Serbia &amp; Montenegro, Slovak Republic, Slovenia, Spain, Sweden, Switzerland, Ukraine.";
	$asia = "Bagladesh, Bahrain, Brunei Darussalam, China, Hong Kong, India, Indonesia, Israel, Japan, Jordan, Kuwait, South Korea, Lebanon, Malaysia, Mongolia, Myanmar, Oman, Pakistan, Philippines, Qatar, Saudi Arabia, Singapore, Sri Lanka, Syria, Taiwan, Thailand, Turkey, United Arab Emirates (UAE), Vietnam, Yemen.";
	$africa = "Algeria, Benin, Botswana, Burkina Faso, Cameroon, Central African Republic, Chad, Congo, Egypt, Equatorial Guinea, Ethiopia, Gabon, Ghana, Guam, Guinea Bissau, Ivory Coast, Kenya, Mauritania, Mauritius, Morocco, Namibia, Niger, Nigeria, Reunion (French), Senegal, South Africa, Sudan, Swaziland, Tanzania, Togo, Tunisia, Uganda, Zambia.";
	$oceania = "Australia, Fiji, New Zeland, Papua New Guinea, Samoa, Solomon Islands.";
 ?>
 
 <link rel="stylesheet" href="css/map.css">
 <link rel="stylesheet" href="css/tooltip.css">
    <div class="container">

        <div class="row">
            <div class="box">					
				
				
                <div class="col-md-8">			
			                    <h1 class="intro-text">International Debt Collection with
                        <strong>Federal Management</strong>
                    </h1>
					<hr style="max-width: 1200px;">
					<div class="col-md-12" style="margin-bottom:20px;">
                                <img class="img-responsive img-full" src="img/international-debt-collection-federal-management-logo.jpg" style="border-radius: 5px;" alt="international debt collection red globe">
					</div>

					<div class="col-md-12">				
						<p style="font-size:13px">
					As well as being 1st choice for Commercial Debt Collection in the UK, we can also recover debt from almost anywhere in the world using our network of trusted partners.
					</br></br>
					Our network of dedicated Debt Collection Professionals ensures we have the capability to collect monies almost anywhere in the world upon request. Where necessary, we can also enforce Legal Action on your behalf to ensure all is done to get your money back as quickly as possible using the appropriate and most effective means of collecting outstanding bad debt.
					</br></br>
					We represent thousands of UK companies overseeing the collection of Millions of pounds of Overseas Debt. We ensure a professional, proactive and direct approach is undertaken by our overseas associates. All our partners have offices in their respective countries and are experts in the field of Debt Collection. A local knowledge and in-depth Debt Collection experience ensures we maximise the potential of recovering your money.
					</br></br>
					For further information regarding our services simply call us now on <span style="color:#CC0000"><strong>0333 043 4420</span></strong>
					</p>
					
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> High Recovery rates
					</div>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Low fixed Cost solution
					</div>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Global Network of Agents
					</div>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Specialist Overseas team
					</div>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Cross jurisdiction expertise
					</div></p>
					
					<p class="mobile-nodisplay" style="margin-top:40px; font-size:14px; color:#CC0000; opacity:0.9;">
					Countries Covered by Our Services
				    </p>
							<p class="mobile-nodisplay" style="font-size:13px;">Mouse over the continents to see a list of the countries we cover. Alternatively<br />
				you can click on the tabs to the right of the map.</p></h2></br>		
			<div class="col-md-12 mobile-nodisplay">
				<div class="col-md-8">
                <div id="world">
                    <ul>
                        <li id="america"><a data-toggle="tooltip" data-placement="left" href="#" class="tTip" title="<?=$america; ?>">america</a></li>
                        <li id="europe"><a data-toggle="tooltip" data-placement="left" href="#" class="tTip" title="<?=$europe; ?>">europe</a></li>
                        <li id="asia"><a data-toggle="tooltip" data-placement="left"  href="#" class="tTip" title="<?=$asia; ?>">asia</a></li>
                        <li id="africa"><a data-toggle="tooltip" data-placement="left" href="#" class="tTip" title="<?=$africa; ?>">africa</a></li>
                        <li id="oceania"><a data-toggle="tooltip" data-placement="left" href="#" class="tTip" title="<?=$oceania; ?>">oceania</a></li>
                    </ul>
                </div>
				</div>
                <div class="col-md-4 countries">
                	<h2 class="acc_trigger"><a href="#" title="Debt Recovery America">America</a></h2>
                    <div class="acc_container">
                        <div class="block">
                        <p><?=$america; ?></p>
                        </div>
                    </div>
                    
                    <h2 class="acc_trigger"><a href="#" title="Debt Collection Europe">Europe</a></h2>
                    <div class="acc_container">
                        <div class="block">
                        <p><?=$europe; ?></p>
                        </div>
                    </div>
                    
                    <h2 class="acc_trigger"><a href="#" title="Debt Recovery Asia">Asia</a></h2>
                    <div class="acc_container">
                        <div class="block">
                        <p><?=$asia; ?></p>
                        </div>
                    </div>
                    
                    <h2 class="acc_trigger"><a href="#" title="Debt Collection Africa">Africa</a></h2>
                    <div class="acc_container">
                        <div class="block">
                        <p><?=$africa; ?></p>
                        </div>
                    </div>
                    
                    <h2 class="acc_trigger"><a href="#" title="Debt Recovery Oceania">Oceania</a></h2>
                    <div class="acc_container">
                        <div class="block">
                        <p><?=$oceania; ?></p>
                        </div>
                    </div>
				</div>
			</div>
						
						
					</div>
					
				</div>
					
	
				<p class="text-center mobile-nodisplay" style="margin-top:30px;">Click for more information...</p>
				<?php include 'sidebar.php'
				?>
				</div>
				</div>

			<script type="text/javascript">
				$('document').ready(function(){
					$('#tooltip').tooltip();
				});
			</script>
			
			<script type="text/javascript">
			$(function () {
				$('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
			});
			</script>

<?php
 include 'footer.php';
?>