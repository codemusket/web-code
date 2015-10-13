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
        	    <?php
				
											// Start the loop.
								while ( have_posts() ) : the_post();
					
								// Include the page content template.
								//get_template_part( 'content', 'page' );
					
								the_content();
					
								//edit_post_link(); 
							// End the loop.
							endwhile;
							?>
        </div>
    </div>

		

		



    <?php 
		$footer_vars = (object)array( 'bg_color' => '#dadada',
																	'wp_menu' => 'nav-menu-sites-bottom' );
		require_once("footer.php"); 
		
		wp_footer();
		?>

	</body>
</html>