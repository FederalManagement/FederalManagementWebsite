<?php
	include 'header.php';
?>

	
    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive img-rounded" src="img/federalmanagement-debt-collection-logo.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->

        <hr>


        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
			<h1>Contact Us</h1>	</br>
			<h4>Enquiry Form</h4>
					<div class="form-group img-rounded">
						<label for ="contact-name" class="col-lg-12 control-label">Name:</label></br>
						<div class="col-lg-6 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
							<input type="text" class="form-control" id="cname" name="cname" placeholder="Full Name" minlength="2" required style=""></br>
						</div>
					</div>
					<div class="form-group">
						<label for ="contact-email" class="col-lg-12 control-label">Email:</label></br>
						<div class="col-lg-6 input-group margin-bottom-sm">
						  <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
						  <input type="email" class="form-control" id="cemail" name="cemail" required placeholder="you@example.com" style="">
						</div>		
					
												
					</div>	
					<div class="form-group">
						<label for ="contact-number" class="col-lg-12 control-label">Phone:</label>
						<div class="col-lg-6 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
							<input type="number" class="form-control" name="cnumber" id="contact-number" placeholder="Phone Number" style=""></br>
						</div>
					</div>	
					<div class="form-group">
						<label for ="contact-subject" class="col-lg-12 control-label">Subject:</label>
						<div class="col-lg-6 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
							<input type="text" class="form-control" id="contact-subject" placeholder="Subject" name="csubject" style=""></br>
						</div>
					</div>	
					<div class="form-group">
						<label for ="contact-message" class="col-lg-12 control-label">Your Query:</label>
						<div class="col-lg-7 input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-comments fa-fw"></i></span>
							<textarea form="commentForm" class="form-control" rows="4" name="cmessage" style=""></textarea></br>
						</div>
					</div>	
					<div class="col-lg-12 input-group margin-bottom-sm">
					<input class="btn btn-style btn-sm btn-medium btn-danger" href="#" class="submit" type="submit" value="Submit" placeholder="Message">
					</div>
				</fieldset>
				</br>
				</form> 
			</div>
        </div>
        <!-- /.row -->

<?php
	include 'footer.php';
?>