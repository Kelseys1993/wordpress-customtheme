<?php 

/* Template Name: Contact Page */	


 ?>

 <?php  get_header();?>
<section class='contact-section'>
 <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">Can't find what your looking for?</p>
			    	<p class="lead">Contact us:</p>
			    	
			    	<form role="form" class="clearfix">
	    				<div class="row  justify-content-center">
	    					<div class="col-sm-8 col-sm-offset-2">
	    						<div class="form-group">
		    						<label class="sr-only" for="first-name">First Name</label>
									<input type="text" class="form-control input-lg" id="first-name" placeholder="First Name">
	    						</div>
	    					</div><!-- end col -->
	    			
	    					<div class="col-sm-8 col-sm-offset-2 ">
	    						<div class="form-group">
		    						<label class="sr-only" for="last-name">Last Name</label>
									<input type="text" class="form-control input-lg" id="last-name" placeholder="Last Name ">
	    						</div>
	    					</div><!-- end col -->
	    				
	    					<div class="col-sm-8 col-sm-offset-2 ">
	    						<div class="form-group">
		    						<label class="sr-only" for="email">Email</label>
									<input type="text" class="form-control input-lg" id="email" placeholder="Email ">
	    						</div>
	    					</div><!-- end col -->
	    				
	    					<div class="col-sm-8 col-sm-offset-2   ">
	    						<div class="form-group">
		    						<label class="sr-only" for="email">Phone</label>
									<input type="text" class="form-control input-lg" id="phone" placeholder="Phone ">
	    						</div>
	    					</div><!-- end col -->
	    				
	    					<div class="col-sm-8 col-sm-offset-2  ">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-words">Message</label>
		    						<textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3" ></textarea>
	    						</div>
	    					</div><!-- end col -->
	    				</div>

						<input type="submit" class="btn btn-info btn-lg pull-right" value="Get in touch &raquo;">
					</div>
			        </form>
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	<?php  get_footer(); ?>