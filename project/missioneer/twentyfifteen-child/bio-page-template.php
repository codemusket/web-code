<?php
/*
Template Name: Bio Page Template
*/


require_once("header.php");

$header_vars= (object)array(	'logo_href' 	=> "/consulting",
															'logo_src'		=>	$img_root . "/consulting/missioneer-logo-consulting.png",
															'wp_menu' 		=> "nav-menu-consulting-top"
														);
require_once("include/nav/navbar-fixed.php");


$default_src = $img_root . "/projects/hero/crossbox-hero.jpg";
?>




	<div id="primary" class="content-area" style="padding-bottom: 200px; margin-top: 60px;">
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
				<a href="<?php get_home_url(); ?>">Missioneer</a> /// <a href="../consulting">Consulting</a> // <a href="../#team">Team</a>  / <a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo get_the_title( $ID ); ?></a>
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

		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
	<?php require_once("include/scripts.php"); ?>
  
  <?php wp_footer(); ?>
</body>
</html>