<?php
/*
Template Name: Wide Page
*/

require_once("header.php");

$header_vars = (object)array( 'logo_href' => get_home_url(),
															'logo_src'	=>	"http://missioneer.com/wp-content/uploads/2015/05/logo-missioneer-sm.png",
															'wp_menu' => 'nav-menu-projects-top'
														);

require_once("include/nav/navbar-fixed.php");
?>


	<div id="primary" class="content-area" style="padding-bottom: 100px; margin-top: 60px;">
		<main id="main" class="site-main" role="main">
    
    <?php if ( has_post_thumbnail() ) : ?>
		<div id="featured-banner" 
    style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');">

    </div>
		<?php endif; ?>

		<div class="container">
    
  
    
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

		</main><!-- .site-main -->
	</div><!-- .content-area -->


		<?php 
    $footer_vars = (object)array( 'bg_color'	=> '#e1e1e1',
                                  'wp_menu'		=>	'nav-menu-bottom');
    require_once("footer.php"); 

		wp_footer();    
    ?>



    

    </body>
</html>
