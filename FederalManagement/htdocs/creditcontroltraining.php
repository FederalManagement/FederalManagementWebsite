<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("$title","Federal Management Credit Control Services",$buffer);
echo $buffer;
?>
    <div class="container">

        <div class="row">
            <div class="box">	
				<div class="col-md-12">
                <div class="col-md-8">
                    <h1 class="intro-text">Credit Control Training with
                        <strong>Federal Management</strong>
                    </h1>
                    <hr style="max-width: 1200px;">
					
					<p style="font-size:13px">
					We are able to provide extensive and indepth training on all aspects of Credit Control.
					</br></br>
					Our comprehensive and practical training can cover all aspects of credit control and collections. It enables delegates to see the bigger picture so that they not only improve their knowledge, but will help them to understand priorities better and to allocate their time better between tasks, enabling them to become more effective in collecting cash and reducing bad debts.
					</br></br>
					We can offer an intensive 1 day workshop either at our modern offices or we can arrange for our Training Officers to attend your premises. Be prepared to acquire new knowledge and skills, interact with other delegates, discover inovative methods to reduce your company's debtors and increase your cashflow at a fraction of the course.
					</br></br>
					In these current tough economic times it is vital that a company has the right resources and people within their credit control/management operations and our training courses ensure you maximise your own internal practices.
					</p>
					</br>
					<div class="class=col-md-4">
					<p style="font-size: 13px; color:#CC0000">Leaning Objectives: </p>
					<p style="font-size:13px">By the end of this course you will be able to confidently deal with customers on the telephone and bring collection calls to a satisfactory conclusion</p>
					<p style="font-size: 11px">
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Recognising the importance of effective credit management.
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Minimising bad debt and losses.
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Understanding how to deal with companies, sole traders, consumers and your/their rights.
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Manage your ledger and your customers with greater confidence.
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Increase the recovery statistics.
					</div>
					</br>
					<div class="bullet-point">
					<img class="img-responsive" src="img/red-tick.png" alt="" style="display: inline-block;" height="25px" width="25px;"> Understanding Legal Debt Recovery Options.
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
