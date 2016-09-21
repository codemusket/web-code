<div class="email-spread-2">
	<div class="container-fluid" style="height: 100%;">
     <div class="row" style="height: 100%; min-height: 427px;">
					      
       		<div class="col-lg-4  col-md-4 pnl blue">
          	<h4>Looking to Invest?</h4>
            <p>Have someone from our team contact you about how investment opportunities work.</p>

            <?php echo do_shortcode( '[mc4wp_form id="620"]' );	?>
                               
                    
          </div>
       		
          <div class="col-lg-4 col-md-4 pnl red">
          	<h4>Have a Project?</h4>
            <p>Click the link below to fill out this questionaire and get started on your business.</p>
            <!--<a class="btn-white-clear" href="http://missioneer.com/project-form">GO TO FORM</a>-->
            <button type="button" class="btn-white-clear project-form-button">GO TO FORM</button>
          	<!--  data-toggle="modal" data-target=".modal-project-form" -->
          </div>
       		
          <div class="col-lg-4 col-md-4 pnl green">
          	<h4>Donate?</h4>
            <p>Click the link below if you want to help support missioneer projects.</p>
						<?php dynamic_sidebar( 'donation-link' ); ?>
          </div>
              
             
          
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div>