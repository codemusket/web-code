<div id="email-spread-1" style="background: #454545 url(<?php echo $img_root; ?>/start-project-banner.jpg) top center no-repeat; height: 427px; padding: 10px 0 75px 0;">
   
   <div class="container-fluid">
      
      	<div class="row">
					<div class="hidden-xs col-lg-12" style="height: 40px;"></div>
          <div class="hidden-md" style="height: 0px;"></div>
        </div>
      
        <div class="row" >
          
          <!-- img col -->
          <div class="col-md-6 hidden-sm hidden-xs">
          	<img class="img-responsive" src="<?php echo $img_root; ?>/gfk-start-a-project.png" style="float: right; margin-right: 50px;">
          </div>
          
          <!-- capture form -->
          <div class="col-md-6 col-sm-12 text-center-sm text-center-xs">
            
                <div style="max-width: 452px; display: inline-block;">
    
                  <blockquote class="home-quote" 
                              style="border-left: 4px solid #CF9D2E; padding-left: 10px; margin: 100px 0 15px 0; line-height: 1.6em;
                               text-align: left; float: left;">
                  
                        <?php if ( dynamic_sidebar('learn-more-email-cta') ) : else : endif; ?>

                  </blockquote>
                  
                  <?php echo do_shortcode( '[mc4wp_form id="622"]' );	?>
                    
                       
                  </div>
          </div>
              
             
          
			</div> <!-- /.row -->
	</div> <!-- /.container -->
</div>
    
