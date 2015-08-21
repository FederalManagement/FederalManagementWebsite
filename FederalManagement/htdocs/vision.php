<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Vision and Mission",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">					
				
				
                <div class="col-md-8">			
					</br></br>
					<div class="panel panel-default">
					<img src="img/federalmanagement-vision-woman-blue-eye.jpg" style="border-radius:5px; margin-bottom:10px;" class="img-responsive" alt="federal management vision woman blue eye">

                    <p style="font-size: 13px; padding-left:40px;" class=""> <i class="fa fa-university"></i> "To continuously strive to be the <span style="color:#CC0000">first choice</span> for Commercial Debt Recovery services in the UK, by developing beneficial and lasting relationships with our clients through a process of continuous improvement and optimising their returns by delivering the most efficient and effective service."</p>
					 </div>

                    <div class="panel panel-default">
					<img src="img/mission-statement-business-woman-pen.jpg" style="border-radius:5px; margin-bottom:10px;" class="img-responsive">
					<p style="font-size: 13px">
					<ul style="font-size:13px; color:#3D3D3D; list-style:none;" class="">
					<li><i class="fa fa-university"></i> To maintain ISO: 9001, Investors in People and our <span style="color:#CC0000">commitment to quality</span>.</li></br>
					<li><i class="fa fa-university"></i> To endeavour to be the <span style="color:#CC0000">market leader</span> for 'Commercial Debt Recovery services in the UK, by combining our wealth of experience and innovative technology.</li></br>
					<li><i class="fa fa-university"></i> To empower our employees to achieve their individual goals through <span style="color:#CC0000">investment</span> in training and self development.</li></br>
					<li><i class="fa fa-university"></i> To <span style="color:#CC0000">maximise the recovery of all debts</span> whilst remaining sensitive to any existing business relationships.</li></ul></p>
					</div>				
                   
				   <div class="panel panel-default">
					<img src="img/federalmanagement-values-hand-on-chest.jpg" style="border-radius:5px; margin-bottom:10px;" class="img-responsive" alt="federal management values hand on chest">
					<p style="font-size: 13px">					
					<ul style="font-size:13px; color:#3D3D3D; list-style:none; padding-left:10px;" class="fa-ul">
					<li><i class="fa fa-university"></i> We endeavour to provide a diligent, progressive and <span style="color:#CC0000">quality service</span> to our clients.</li></br>
					<li><i class="fa fa-university"></i> We treat our clients with respect, honest and integrity through <span style="color:#CC0000">hard work</span>, perseverance and high levels of communication.</li></br>
					<li><i class="fa fa-university"></i> We actively encourage, motivate and develop our employees to exceed all levels of expectations through pioneering practices and <span style="color:#CC0000">continued investment</span>.</li></ul></p>
					</div>
					</div>
					<p class="text-center" style="margin-top:30px;">Click for more information...</p>
	
			
					<?php include 'sidebar.php' ?>

				</div>
			</div>



<?php
 include 'footer.php';
?>
