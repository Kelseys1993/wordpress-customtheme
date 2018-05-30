<?php 

/* Template Name: Contact Page */	


 ?>

 <?php  get_header();?>


<section class='contact-section'>
 <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">Can't find what your looking for or want to Adopt?</p>
			    	<p class="lead">Contact us:</p>
			    	
			    	
			    	<form role="form" class="clearfix" action='<?php the_permalink();?>' method='post' id='contact'>
	    				<div class="row  justify-content-center">
	    					<div class="col-sm-8 col-sm-offset-2">
	    						<div class="form-group">
		    						<label class="sr-only" for="first-name">First Name</label>
									<input type="text" class="form-control input-lg" id="first-name" placeholder="First Name" name='first_name' required>
	    						</div>
	    					</div><!-- end col -->
	    			
	    					<div class="col-sm-8 col-sm-offset-2 ">
	    						<div class="form-group">
		    						<label class="sr-only" for="last-name">Last Name</label>
									<input type="text" class="form-control input-lg" id="last-name" placeholder="Last Name " name='last_name' required>
	    						</div>
	    					</div><!-- end col -->
	    				
	    					<div class="col-sm-8 col-sm-offset-2 ">
	    						<div class="form-group">
		    						<label class="sr-only" for="email">Email</label>
									<input type="text" class="form-control input-lg" id="email" placeholder="Email " name='contact_email' required="">
	    						</div>
	    					</div><!-- end col -->
	    				
	    					<div class="col-sm-8 col-sm-offset-2   ">
	    						<div class="form-group">
		    						<label class="sr-only" for="email">Phone</label>
									<input type="text" class="form-control input-lg" id="phone" placeholder="Phone " name="phone" required="">
	    						</div>
	    					</div><!-- end col -->
	    				
	    					<div class="col-sm-8 col-sm-offset-2  ">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-words">Message</label>
		    						<textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3" name='message' required></textarea>
	    						</div>
	    					</div><!-- end col -->
	    				</div>

						<input type="submit" class="btn btn-info btn-lg pull-right" name='submit' value="Get in touch &raquo;">
					</div>
			        </form>
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	
	<?php  get_footer(); ?>


  <?php 
if(isset($_POST['submit'])) {
        global $wbdb;
        $data_array=array(
                    'First_Name'=>$_POST['first_name'],
                    'Last_Name'=>$_POST['last_name'],
                    'Email'=>$_POST['contact_email'],
                    'Phone'=>$_POST['phone'],
                    'Message'=>$_POST['message']




                        );
        $table_name='contact_form';
        $rowResult=$wpdb->insert($table_name, $data_array,$format=NULL);
        if($rowResult==1){
        	
          echo "<p class='  success_message'>Message sent succesfully</p>";
        }else {
            echo "<div class='error_message>Error in from submission<div>";
            }       
        }

        ?>