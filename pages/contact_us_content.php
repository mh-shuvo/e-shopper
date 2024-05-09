<?php
	if(isset($_POST['submit'])){
		$message=$objApplication->sendMailFromContact($_POST);
	}
?>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>   
					<hr style="border: 1px solid #FE980F;">
					<div id="gmap" class="contact-map" height="auto" width="100%" >
						<h2 align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254.25550148147158!2d91.4187130028865!3d23.032660020100078!2m3!1f0!2f39.45462522920851!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x375369a47241f7ef%3A0xe1c12206d8f619e0!2sFeni+Computer+Institute!5e1!3m2!1sen!2sbd!4v1509357260107" width="1150" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></h2>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
    				 		
			</div> 
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>365/2 Feni Trunk Road Feni Sadar</p>
							<p>Feni Bangladesh</p>
							<p>Mobile: +88 01917 42 36 80</p>
							<p>Fax: 1-742-368-0066</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
