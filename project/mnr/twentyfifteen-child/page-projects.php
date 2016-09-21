<?php 

require_once("header.php"); 



$header_vars = (object)array(	'banner_src' 	=>	
																	"http://missioneer.com/wp-content/uploads/2015/05/missioneer-hero-projects.jpg",
															'logo_src'		=>	
																	"http://missioneer.com/wp-content/uploads/2015/05/missioneer-logo-projects.png",
															'logo_href'		=>	"http://missioneer.com/projects",
															'wp_menu'	=>	"nav-menu-sites-top",
															'hero_message_html'	=>	
															'<h1>ADVANCING THE KINGDOM THROUGH BUSINESS</h1>
															<a href="#start" class="btn-gold">START HERE</a>'
														);

require_once("include/nav/navbar-static.php");

?>



 

    <div id="start" class="banner-wrapper" style="border-top: 13px solid #ca971f; ">
        <div class="container center">
        		
            <div class="left">
            
         		  <div class="page-video-full-container">

              	<h3>ABOUT PROJECTS</h3>
 							
            		<?php dynamic_sidebar('projects_trailer_code'); ?>
                <div style="background-color: #cf9e2e; width: 100%; height: 35px; margin-top: 5px; ">&nbsp;</div>
                
              </div>
              
            </div>
          
        </div>
    </div>

		<div style="background: #f7f4ee url(<?php echo img_uri('projects/projects-bg-fade.png'); ?>) center bottom no-repeat; padding: 125px 0; " >
      <div class="container" style="max-width: 950px;">


				<div class="row">
        
     			<div class="col-xs-12 col-sm-6 col-md-6 text-center" >
            <div class="img-rollover-container">
              <a href="acua-alda">
              
                <div class="img-rollover-overlay gold img-responsive">
                  <span class="glyphicon glyphicon-plus"></span> 
                </div>            
                
                <img src="<?php echo $img_root; ?>/projects/acua-alda.jpg" class="img-responsive block-center">
              </a>
            </div>
            <h6 class="projects-h6">PUEBLA, MEXICO</h6>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 text-center">
            <div class="img-rollover-container">
              <a href="crossfit-dma">
                <div class="img-rollover-overlay gold img-responsive">
                  <span class="glyphicon glyphicon-plus"></span> 
                </div> 
                <img src="<?php echo $img_root; ?>/projects/crossfit-dma.jpg" class="img-responsive block-center">
              </a>
            </div>
            <h6 class="projects-h6">DAVOA CITY, PHILIPPINES</h6>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12 col-sm-6 text-center" >
            <div class="img-rollover-container">
              <a href="revopolucion">
                <div class="img-rollover-overlay gold img-responsive">
                  <span class="glyphicon glyphicon-plus"></span> 
                </div>             
                <img src="<?php echo $img_root; ?>/projects/revopolucion.jpg" class="img-responsive block-center">
              </a>
            </div>
            <h6 class="projects-h6">Iztapalapa, Mexico CITY</h6>
          </div>
          <div class="col-xs-12 col-sm-6 text-center">
            <div class="img-rollover-container">
              <a href="olink">
                <div class="img-rollover-overlay gold img-responsive">
                  <span class="glyphicon glyphicon-plus"></span> 
                </div>
                <img src="<?php echo $img_root; ?>/projects/olink.jpg" class="img-responsive block-center">
              </a>
             </div>
            <h6 class="projects-h6">DAVOA CITY, PHILIPPINES</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 text-center" >
            <div class="img-rollover-container">          
              <a href="live-it-fitness">
                <div class="img-rollover-overlay gold img-responsive">
                  <span class="glyphicon glyphicon-plus"></span> 
                </div>
                <img src="<?php echo $img_root; ?>/projects/live-it-fitness.jpg" class="img-responsive block-center">
              </a>
            </div>
            <h6 class="projects-h6">SOUTH AFRICA</h6>
          </div>
          <div class="col-xs-12 col-sm-6 text-center">
            <div class="img-rollover-container">
              <a href="flatworld-solutions">
                <div class="img-rollover-overlay gold img-responsive">
                  <span class="glyphicon glyphicon-plus"></span> 
                </div>
                <img src="<?php echo $img_root; ?>/projects/flatworld-solutions.jpg" class="img-responsive block-center">
              </a>
            </div>
            <h6 class="projects-h6">CHARLOTTE, NC</h6>
          </div>
        </div>
      </div> <!-- /.container -->
		</div>

		
    <?php require_once("include/email-spread-1.php"); ?>
 
    <!-- CONTACT SPREAD -->
    
    <div id="contact" style="background-color: #FFF; padding: 60px 0; position:relative;" class="heading-border">
    <div class="heading-tag">
			CONTACT
    </div>


			<?php 
      
			$contact_frm = (object)array(	'img_src'		=>	'/projects/projects-contact.png',
																		'headline'	=>	'WANT TO START A PROJECT OF YOUR OWN THAT WILL IMPACT THE KINGDOM?',
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

	</body>
</html>