<?php 

require_once("header.php"); 



$header_vars = (object)array(	'banner_src' 	=>	
																  "http://missioneer.com/wp-content/uploads/2015/05/missioneer-hero-institute.jpg",
															'logo_src'		=>	
																	"http://missioneer.com/wp-content/uploads/2015/05/missioneer-logo-institute.png",
																	
															'logo_href'		=>	"http://missioneer.com/institute",
															'wp_menu'			=>	"nav-menu-sites-top",
															'hero_message_html'	=>	
															'<h1>TRAINING THE KINGDOM THROUGH BUSINESS</h1>
															<a href="#start" class="btn-gold">START HERE</a>'
														);

require_once("include/nav/navbar-static.php");


?>


    
   
   
	 <div id="start" class="banner-wrapper" style="border-top: 13px solid #ca971f; ">
        <div class="container-fluid center">
        		
            <div class="left">
            
         		  <div class="page-video-full-container">
              	

              
              	<h3>ABOUT THE INSTITUTE</h3>
 							
            		<?php dynamic_sidebar('institute_trailer_code'); ?>
                
                
              </div>
              
            </div>
          
        </div>
    </div>

		<?php require("include/email-spread-institute.php"); ?>
    
    <!-- INFOGRAPHIC -->
    
    
    <div id="discover" class="heading-border" style="background-color: rgb(207, 206, 189); position:relative;">
      <div class="heading-tag">OVERVIEW</div>
      <div class="container center">
				<div class="row">         

           <div style="display:inline-block; position: relative; " >
           
           		<div class="infographic-instructions hidden-xs">
              Click these icons to discover more information on the map
              </div>
           
              <img alt="Missioneer Infographic" src="http://missioneer.com/wp-content/uploads/2015/05/missioneer-infographic-instutute.jpg" class="img-responsive" style="width: 100%;">
              
                <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                  <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-1" 
                        class="info-bubble hidden-xs tilt-l" 
                        data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                        data-placement="top" data-id="1">
                </div>
                
                <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                  <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-2" 
                        class="info-bubble hidden-xs tilt-l" 
                        data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                        data-placement="top" data-id="2">
                </div>
                
                <div data-toggle="modal" data-target="#modal-info-bubble" class="grow">
                  <img alt="Bubble" src="<?php echo $img_root; ?>/info-icon.svg" id="info-bubble-3" 
                        class="info-bubble hidden-xs tilt-l" 
                        data-toggle="popover" data-trigger="hover" data-content="Click to find out more!" 
                        data-placement="top" data-id="3">
                </div>
                
           
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
            <h4 class="modal-title" id="myModalLabel"></h4>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn-gold" style="margin-top: 0;" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php 
		dynamic_sidebar('institute-info-bubble-1'); 
    dynamic_sidebar('institute-info-bubble-2');
    dynamic_sidebar('institute-info-bubble-3'); 
		?>
    
    <div class="hidden-xs hidden-sm">
    <?php require("include/email-spread-institute.php"); ?>
		</div>
    
		    <!-- CONTACT SPREAD -->
    
    <div id="contact" style="background-color: #FFF; padding: 60px 0; position:relative;" class="heading-border">
      <div class="heading-tag">
        CONTACT
      </div>
      

      <?php 
      
			$contact_frm = (object)array(	'img_src'		=>	'/consulting/contact-missioneer-consulting.jpg',
																		'headline'	=>	'INTERESTED IN BECOMING TRAINED TO BE A MISSIONEER?',
																		'message'		=>	''
																	);
															
      require_once("include/contact.php");
      
      ?>
    </div>
    
   


    <?php 
		$footer_vars = (object)array( 'bg_color' => '#dadada',
																	'wp_menu' => 'nav-menu-sites-bottom' );
		require_once("footer.php"); 
		wp_footer();
		?>
    
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
                            
                            $("#modal-info-bubble .modal-body").html(html);
                            $("#modal-info-bubble .modal-header .modal-title").html(title);
                            
                        });
                });
                
        </script>
        
     </body>
</html>