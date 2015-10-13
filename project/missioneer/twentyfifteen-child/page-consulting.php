<?php 

require_once("header.php"); 


$header_vars = (object)array(																
															'banner_src' 	=>	
																"http://missioneer.com/wp-content/uploads/2015/05/hero-missioneer-consulting.jpg",
															'logo_src'		=>
																"http://missioneer.com/wp-content/uploads/2015/05/missioneer-logo-consulting.png",
															'logo_href' 	=> "/consulting",
															'wp_menu' 		=> "nav-menu-sites-top",
															'hero_message_html'	=>	
															'<h1>CONSULTING THE KINGDOM THROUGH BUSINESS</h1>
															<a href="#start" class="btn-gold">START HERE</a>'
														);
														
require_once("include/nav/navbar-static.php");



?>



       
    <div id="start" class="banner-wrapper" style="border-top: 13px solid #ca971f; ">
        <div class="container-fluid center">
        		
            <div class="left">
            
         		  <div class="page-video-full-container">
            

            
              	<h3>ABOUT CONSULTING</h3>
 							
            		<?php dynamic_sidebar('consulting_trailer_code'); ?>
                
                
              </div>
              
            </div>
          
        </div>
    </div>
    
 		<!-- EMAIL CAPTURE SPREAD -->
    
    <div class="heading-border">
    <?php require("include/email-spread-2.php"); ?>
 		</div>
    <!-- /email capture spread s -->
    
    
 
     <!-- IMAGE MAP-->

    <div id="discover" class="heading-border" style="position: relative; background-color: rgb(207, 206, 189);">
      <div class="heading-tag">HOW IT WORKS</div>
      <div class="container center">
				<div class="row">         



           <div style="display:inline-block; position: relative; " >

              <div class="infographic-instructions">
              Click these icons to discover more information on the map
              </div>


              <img alt="Missioneer Infographic" src="http://missioneer.com/wp-content/uploads/2015/05/infographic-missioneer-consulting1.jpg" class="img-responsive" style="width: 100%;">
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                <img alt="Bubble" src="<?php get_img( "info-icon.svg" ); ?>" id="info-bubble-1" 
                      class="info-bubble hidden-xs tilt-l" 
                      data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                      data-placement="top" data-id="1">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                <img alt="Bubble" src="<?php get_img( "info-icon.svg" ); ?>" id="info-bubble-2" 
                      class="info-bubble hidden-xs tilt-l" 
                      data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                      data-placement="top" data-id="2">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                <img alt="Bubble" src="<?php get_img( "info-icon.svg" ); ?>" id="info-bubble-3" 
                      class="info-bubble hidden-xs tilt-l" 
                      data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                      data-placement="top" data-id="3">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                <img alt="Bubble" src="<?php get_img( "info-icon.svg" ); ?>" id="info-bubble-4" 
                      class="info-bubble hidden-xs tilt-l" 
                      data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                      data-placement="top" data-id="4">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                <img alt="Bubble" src="<?php get_img( "info-icon.svg" ); ?>" id="info-bubble-5" 
                      class="info-bubble hidden-xs tilt-l" 
                      data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                      data-placement="top" data-id="5">
              </div>
              
              <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                <img alt="Bubble" src="<?php get_img( "info-icon.svg" ); ?>" id="info-bubble-6" 
                      class="info-bubble hidden-xs tilt-l" 
                      data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                      data-placement="top" data-id="6">
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
		dynamic_sidebar('consulting-info-bubble-1'); 
    dynamic_sidebar('consulting-info-bubble-2');
    dynamic_sidebar('consulting-info-bubble-3');
    dynamic_sidebar('consulting-info-bubble-4');
    dynamic_sidebar('consulting-info-bubble-5'); 
		dynamic_sidebar('consulting-info-bubble-6'); 
		?>

 		<!-- EMAIL CAPTURE SPREAD -->
    <div class="hidden-xs hidden-sm heading-border">
		<?php require("include/email-spread-2.php"); ?>
 		</div>
    
    <!-- /email capture spread -->
    
    <!-- team section -->
    
   <div id="team" class="heading-border" style="background-color: #f6eddb; position: relative;">
      <div class="heading-tag">TEAM</div>
     
   	<div style="padding: 77px 0 71px 0;" class="center">
      <ul class="list-inline team">
        <li>
          <a href="josh-collins">
          	<div class="img-rollover-container">
            	<div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
              <img class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/josh-team-consulting.jpg">
          	</div>
        		<h5>Josh Collins</h5>
          </a>
        </li>
        <li>
        	<a href="john-sears">
          	<div class="img-rollover-container">
            	<div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>        
            	<img class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/john-team-consulting.jpg">
           	</div>
         		<h5>John Sears</h5>
        	</a>
        </li>
        <li>
          <a href="jacob-william">
          	<div class="img-rollover-container">
            	<div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
              <img class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/jacob-team-consulting.jpg">
          	</div>
          	<h5>Jacob William</h5>
          </a>
        </li>
       </ul>
       
       <ul class="list-inline team">
        <li>
        	<a href="david-benham">
            <div class="img-rollover-container">
              <div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
              <img class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/david-team-consulting.jpg">
            </div>
            <h5>David Benham</h5>
         	</a>
        </li>
        <li>
          <a href="jason-benham">
						<div class="img-rollover-container">
            	<div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
           		<img class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/jason-team-consulting.jpg">
          	</div>
        		<h5>Jason Benham</h5>
        	</a>
        </li>
      </ul>
      
    </div>
   </div>
    
	
    
    <!-- CONTACT SPREAD -->
    
    <div  id="contact" style="background-color: #FFF; padding: 60px 0; position:relative;" class="heading-border">
      <div class="heading-tag">CONTACT</div>
      


			<?php 
      
			$contact_frm = (object)array(	'img_src'		=>	'/consulting/contact-missioneer-consulting.jpg',
																		'headline'	=>	'HAVE A PROJECT IN MIND THAT WILL IMPACT THE KINGDOM?',
																		'message'		=>	''
																	);
															
      require_once("include/contact.php");
      
      ?>      
    </div>
    
     <!-- LOWER NAV -->
     


    
    <?php 
		$footer_vars = (object)array( 'bg_color' => '#dadada',
																	'wp_menu' => 'nav-menu-sites-bottom' );
		require_once("footer.php"); 
		?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   	<?php require_once("include/project-form-modal.php"); ?>
    <script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/project-form-modal.js"></script>

    
    <?php
		wp_footer();
		?>
    
	
		<!-- page specific javascript -->

    <script type="text/javascript">
		
				jQuery("document").ready(function($){
			
											// Enable Popovers											
											$(function () {
												$('[data-toggle="popover"]').popover()
											});
											
											// Dynamic bubble modal content switching
											$(".info-bubble").click(function(ev){
													ev.preventDefault();
													var uid = $(this).data("id");
													var html = $("#info-bubble-sidebar-" + uid + " .textwidget").html();
													var title = $("#info-bubble-sidebar-" + uid + " .info-bubble-sidebar-title").html();
													
													console.log(uid);
													console.log(html);
													console.log(title);
													
													$("#modal-info-bubble .modal-body").html(html);
													$("#modal-info-bubble .modal-header .modal-title").html(title);
													
											});
							});
							
			</script>
        
    </body>
</html>
