<?php 

require_once("header.php"); 

$header_vars = (object)array(		'logo_href'		=>  "http://missioneer.com",
																'logo_src'		=>	"http://missioneer.com/wp-content/uploads/2015/05/logo-missioneer-sm.png",
																'banner_src' 	=>	"http://missioneer.com/wp-content/uploads/2015/05/hero-home.jpg",
																'wp_menu'			=> "nav-menu-home",
															);

require_once("include/nav/navbar-static.php");

?>




<script>
var email_sent = false;
var email_error = 0;

<?php


if( $_POST['ct_submit'] ) {

	$to = "info@missioneer.com";
	$subject = "Contact email sent...";
	$body = filter_var($_POST['ct_message'], FILTER_SANITIZE_STRING);
	$headers = filter_var($_POST['ct_email'], FILTER_SANITIZE_EMAIL);
	$human = filter_var($_POST['ct_human'], FILTER_SANITIZE_STRING);
	
	if($human == "4" ) {
		if( wp_mail ($to, $subject, $body, $headers) ) {
			echo "email_sent = true;";
		}
		else {
			echo "email_error = 1;";
		}
	}
	else {
		echo "email_error = 2;";
	}
}
?>

</script>

<!-- scripts for Vimeo listener (jquery link from other files doesn't work...)-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="<?php echo $theme_root; ?>/js/jquery.vimeo.api.min.js"></script>
<script src="<?php echo $theme_root; ?>/js/page-home-top.js"></script>

<?php require_once("include/project-form-modal.php"); ?>
<script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/project-form-modal.js"></script>

    


<div class="modal fade" id="email_confirm_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Email Sent</h4>
      </div>
      <div class="modal-body">
        <p>Thank you for reaching out to us. A team member will contact you shortly. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="email_error_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Email Error</h4>
      </div>
      <div class="modal-body">
        <p>Sorry, there was an error. Please make sure that you answered the security question correctly, and try again. If you feel this is a mistake, please reach us directly at info@missioneer.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


   <!-- *******************************
    			WHY
    *********************************** -->
    
		<div class="headline-banner">
      <div class="banner-tag"><img alt="Why" src="<?php echo $img_root; ?>/circle-header-tag-why.png"></div>
      <div class="container center">
        <?php dynamic_sidebar('home_headline_why'); ?>
      </div>
		</div>
    
    <div id="why" class="banner-wrapper bg-clouds">
        <div class="container center">
        		
            <div class="page-video-full-container text-left">

 						           
         		  <?php dynamic_sidebar('home_trailer_subtitle'); ?>
            	<?php dynamic_sidebar('home_trailer_code'); ?>
              
            </div>
           
            <a href="learn-more" class="btn-gold btn-home-trailer">LEARN MORE</a>
            <a href="#discover" class="btn-home-trailer btn-gold ">NEXT STEP</a>
  
        </div>
    </div>
    
   <!-- *******************************
    			DISCOVER
    *********************************** -->
    
    <div class="headline-banner">
    	<div class="banner-tag"><img alt="Discover" src="<?php echo $img_root; ?>/circle-header-tag-discover.png"></div>
    	<div class="container center">
      	<blockquote class="home-quote">
        
        <?php dynamic_sidebar('home_headline_discover'); ?>
        
        </blockquote>
        
      </div>
    </div>
    
    
    <!-- IMAGE MAP-->

    <div id="discover" style="background-color: rgb(207, 206, 189);">
      <div class="container center">
				<div class="row">         

           <div style="display:inline-block; position: relative; " >

            <div class="infographic-instructions hidden-xs">
            Click these icons to discover more information on the map
            </div>
           
              <img alt="Missioneer Infographic" src="http://missioneer.com/wp-content/uploads/2015/05/infographic-missioneer-sm.jpg" class="img-responsive" style="width: 100%;">
              
              <div class="grow">
              <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-1" class="info-bubble hidden-xs tilt-l" >
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
              <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-2" class="info-bubble hidden-xs tilt-r" 
               data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" data-placement="top" data-id="2">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
              <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-3" class="info-bubble hidden-xs tilt-l" 
               data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" data-placement="top" data-id="3">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
              <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-4" class="info-bubble hidden-xs tilt-r" 
               data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" data-placement="top" data-id="4">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
              <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-5" class="info-bubble hidden-xs tilt-l" 
               data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" data-placement="top" data-id="5">
              </div>
          </div>
          
        </div> <!-- /row -->
      </div> <!-- /container-fluid -->
    </div> <!-- /#discover -->

    
    <!-- Image Map Modal -->
    <div class="modal fade" id="modal-info-bubble" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
					
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn-gold" style="margin-top: 0;" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <?php 
		
		dynamic_sidebar('home-info-bubble-1'); 
    dynamic_sidebar('home-info-bubble-2');
    dynamic_sidebar('home-info-bubble-3');
    dynamic_sidebar('home-info-bubble-4');
    dynamic_sidebar('home-info-bubble-5'); 
		
		?>
    
    
  
    
     <!-- Video Modal -->
     
		 <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
      </div>
    </div>
    
    <div class="hidden">
      <div id="video_contents_institute"><?php dynamic_sidebar('institute_trailer_code'); ?></div>
      <div id="video_contents_consulting"><?php dynamic_sidebar('consulting_trailer_code'); ?></div>
      <div id="video_contents_projects"><?php dynamic_sidebar('projects_trailer_code'); ?></div>
    </div>
    
    <div class="modal fade" id="video-modal-optin" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
        
        <?php /*
          <div class="container-fluid email-spread-2" >	
      
      <button style="position: absolute; right: 0; top: 0; z-index: 100; width: 1em; height: 1em;" 
          type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      
      <div class="row" style="height: 100%; min-height: 427px; position:relative;">
           <div class="col-md-4 pnl blue">
    
                <h4>Looking to Invest?</h4>
                <p>Have someone from our team contact you about how investment opportunities work.</p>
                    <?php
                    if( function_exists( "mc4wp_form" ) ) {
                      mc4wp_form();
                    }
                    ?>
              </div>
              
              <div class="col-md-4 pnl red">
                <h4>Have a Project?</h4>
                <p>Click the link below to fill out this questionaire and get started on your business.</p>
                <a class="btn-white-clear" href="http://missioneer.com/project-form" >GO TO FORM</a>
              </div>
              
              <div class="col-md-4 pnl green">
                <h4>Donate?</h4>
                <p>Click the link below if you want to help support missioneer projects.</p>
                <a class="btn-white-clear" href="http://missioneer.com#contact">DONATE NOW</a>
              </div>   
         
      	</div> <!-- /.row -->
    	</div> <!-- /.container -->
              */?>
             
           <?php require("include/email-spread-2.php"); ?>
            
        </div>
      </div>
    </div>
    
        
    <!-- Video Optin -->
    <div class="hidden" id="video-optin">
     
				<?php /*
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
                    <button type="button" class="btn-white-clear project-form-button" >GO TO FORM</button>
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
		
      */?>
      <?php require("include/email-spread-2.php"); ?>
    </div>
    
   <!-- *******************************
    			EXPLORE
    *********************************** -->
    
    
    <div class="headline-banner center">
    
    	<div class="banner-tag"><img alt="Explore" src="<?php echo $img_root; ?>/circle-header-tag-explore.png"></div>
      
      	<div class="container center">

      		<blockquote class="home-quote">
          <?php dynamic_sidebar('home_headline_explore'); ?>
          </blockquote>
          
         </div>
    
    </div>	<!-- /headline-banner -->



    <div id="explore" class="container">
      <div class="row">
      	<div class="hidden-xs col-xs-12" style="height: 100px;"></div>
        <div class="visible-xs-block col-xs-12" style="height: 30px;"></div>
      </div>
      <div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 text-center" style="border-right: 1px solid #eee;">
          
            <div class="sub-logo"><img alt="Missioneer Institute Logo" src="<?php echo $img_root; ?>/logo-missioneer-institute.png" class="img-responsive block-center" ></div>
            
            <!-- INSTITUTE ROLLOVER  -->
            <div class="img-rollover-container text-center" style="text-align:justify; max-width:300px;">
              <div class="img-rollover-overlay img-responsive">
                
                	<a href="#" data-toggle="modal" data-target="#video-modal" data-id="institute">
                     <div class="img-rollover-video-thumb-container">
                     		<img alt="Overlay" class="img-rollover-video-thumb-overlay" src="<?php echo $img_root; ?>/icp-rollover/rollover-thumb-institute-overlay.jpg">
                        <img alt="Institute Thumb" class="img-rollover-video-thumb" src="<?php echo $img_root; ?>/icp-rollover/rollover-thumb-institute.jpg">
                    </div>
                  </a>

             
									<?php dynamic_sidebar('home_rollover_institute'); ?>
                  
                  <img alt="Institute Badge" class="hidden-xs hidden-sm hidden-md" src="<?php echo $img_root; ?>/icn-badge-institute-white.png" style="position: absolute; bottom: 10px; left: calc(50% - 18.5px) ;" >
                 
                </div>
                
                <img alt="Institute Rollover" class="img-rollover-base block-center img-responsive" id="rollover-institute"  src="<?php echo $img_root; ?>/missioneer-institute.jpg" >
             </div> 
             <!-- /img-rollover-container -->
            
            <a class="btn " style="display: block; margin: 30px auto 60px auto; width:100%; max-width:300px;" href="institute" role="button" >SEE MORE</a>
          
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center" style="border-right: 1px solid #eee;">
        	
            <div class="sub-logo"><img alt="Missioneer Consulting Logo" src="<?php echo $img_root; ?>/logo-missioneer-consulting.png" class="img-responsive block-center"></div>
            
      
            <!-- CONSULTING ROLLOVER  -->
            <div class="img-rollover-container text-center" style="text-align:justify; max-width:300px;">
              <div class="img-rollover-overlay img-responsive">
                
                	<a href="#" data-toggle="modal" data-target="#video-modal" data-id="consulting">
                     <div class="img-rollover-video-thumb-container">
                     		<img alt="Consulting Thumb" class="img-rollover-video-thumb-overlay" src="<?php echo $img_root; ?>/icp-rollover/rollover-thumb-consulting-overlay.jpg">
                        <img alt="Consulting Rollover" class="img-rollover-video-thumb" src="<?php echo $img_root; ?>/icp-rollover/rollover-thumb-consulting.jpg">
                    </div>
                  </a>
         
									<?php dynamic_sidebar('home_rollover_consulting'); ?>
                  
                  <img alt="Consulting Badge"  class="hidden-xs hidden-sm hidden-md" src="<?php echo $img_root; ?>/icn-badge-consulting-white.png" style="position: absolute; bottom: 10px; left: calc(50% - 18.5px) ;" >
                  
              </div>
             	<img alt="Consulting Rollover" class="img-rollover-base block-center img-responsive" id="rollover-consulting"  src="<?php echo $img_root; ?>/missioneer-consulting.jpg" >
             </div> 
             <!-- /img-rollover-container -->
             
            
            <a class="btn" style="display: block; margin: 30px auto 60px auto; width:100%; max-width:300px;" href="consulting" role="button">SEE MORE</a>
         
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        	
            <div class="sub-logo"><img alt="Missioneer Projects Logo" src="<?php echo $img_root; ?>/logo-missioneer-projects.png" class="img-responsive block-center" ></div>
            
            <!-- PROJECTS ROLLOVER  -->
            <div class="img-rollover-container" style="text-align:justify; max-width: 300px;">
              <div class="img-rollover-overlay img-responsive">
                
                	<a href="#" data-toggle="modal" data-target="#video-modal" data-id="projects">
                     <div class="img-rollover-video-thumb-container">
                     		<img alt="Projects Rollover Thumb" class="img-rollover-video-thumb-overlay" src="<?php echo $img_root; ?>/icp-rollover/rollover-thumb-projects-overlay.jpg">
                        <img alt="Projects Rollover" class="img-rollover-video-thumb" src="<?php echo $img_root; ?>/icp-rollover/rollover-thumb-projects.jpg">
                    </div>
                  </a>
          
           
									<?php dynamic_sidebar('home_rollover_projects'); ?>
                  
                  <img alt="Projects Badge"  class="hidden-xs hidden-sm hidden-md" src="<?php echo $img_root; ?>/icn-badge-projects-white.png" style="position: absolute; bottom: 10px; left: calc(50% - 18.5px) ;" >
                  
                </div>
                
                <img alt="Rollover Projects" class="img-rollover-base block-center img-responsive" id="rollover-projects"  src="<?php echo $img_root; ?>/missioneer-projects.jpg" >
             </div> 
             <!-- /img-rollover-container -->
             
            <a class="btn" style="display: block; margin: 30px auto 60px auto; width:100%; max-width:300px;" href="projects" role="button">SEE MORE</a>
          

        </div>
      </div>
      
       <div class="row">
      	<div class="hidden-xs col-xs-12" style="height: 100px;"></div>
        <div class="visible-xs-block col-xs-12" style="height: 30px;"></div>
      </div>
      
    </div>
    
    <!-- **********************************
    			CONTACT
     ************************************** -->
    
    <div class="headline-banner">
    	<div class="banner-tag"><img alt="Contact" src="<?php echo $img_root; ?>/circle-header-tag-contact.png"></div>
    	<div class="container center">
      
      		<blockquote class="home-quote">
          <?php dynamic_sidebar('home_headline_contact'); ?>
          </blockquote>

        	
 			</div>
    </div>
    
    
    <div id="contact" style="background-color: rgb(207, 206, 189); padding: 60px 0;">

    	<?php 
			
			$contact_frm = (object)array(	'img_src'		=>	'/missioneer-sites.jpg',
																		'headline'	=>	'LEARN MORE ABOUT MISSIONEER',
																		'message'		=>	'Complete this form to have someone from our team contact you about this incredible journey.'
																	);
															
      require_once("include/contact.php");
      
      ?> 
      
    </div>




		<script src="<?php echo $theme_root; ?>/js/page-home-bottom.js"></script>


           
    <?php 
		$footer_vars = (object)array( 'bg_color' => '#dfded3',
																	'wp_menu' => 'nav-menu-bottom' );
		require_once("footer.php"); 
		?>
      
    <!-- page specific javascript -->


	
    
    
    <!-- wp_footer() -->
    <?php wp_footer() ;?>

    


    </body>
</html>
