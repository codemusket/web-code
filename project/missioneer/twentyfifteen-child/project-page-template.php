<?php
/*
Template Name: Project Page Template
*/


require_once("header.php");

$header_vars = (object) array ( 'logo_src'	=>
											'http://missioneer.com/wp-content/themes/twentyfifteen-child/images/projects/missioneer-logo-projects.png',
																'logo_href'	=>	'http://missioneer.com/projects',
																'wp_menu'		=>	'nav-menu-projects-top' );

require_once("include/nav/navbar-fixed.php");

$banner_src = $img_root . "/projects/hero/" . $pagename . "-hero.jpg";
$default_src = $img_root . "/projects/hero/crossbox-hero.jpg";
?>




	<div id="primary" class="content-area" style="margin-top: 60px;">
		<main id="main" class="site-main" role="main">


    <?php if ( has_post_thumbnail() ) : ?>
		<div id="featured-banner" 
    style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');">

    </div>
		<?php endif; ?>

		<div class="container">
    
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="breadcrumb">
          <a href="<?php get_home_url(); ?>">Missioneer</a> /// <a href="../projects">Projects</a>
          // <a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo get_the_title( $ID ); ?></a>
        </div>

        <?php
				
        // Start the loop.
        while ( have_posts() ) : the_post();
    
          // Include the page content template.
          //get_template_part( 'content', 'page' );
    
					the_content();
    
    			edit_post_link(); 
        // End the loop.
        endwhile;
        ?>
    
        </div>	<!-- /.col -->
      </div> <!-- /.row -->



		</div>

		<?php require_once("include/email-spread-2.php"); ?>


		</main><!-- .site-main -->
	</div><!-- .content-area -->

  
  <?php 
	
	$footer_vars = (object) array( "bg_color" => "rgba(246, 237, 219, 1)" );
	
	require_once("footer.php"); 
	
	?>
  
    <!-- begin modal scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <?php require_once("include/project-form-modal.php"); ?>
  <script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/project-form-modal.js"></script>
  <!-- end modal scripts -->
  
  <?php wp_footer(); ?>
</body>
</html>