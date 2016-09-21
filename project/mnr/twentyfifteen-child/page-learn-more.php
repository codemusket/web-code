<?php 

require_once("header.php"); 

$header_vars = (object)array( 'logo_href' => get_home_url(),
															'logo_src'	=>	"http://missioneer.com/wp-content/uploads/2015/05/logo-missioneer-sm.png",
															'wp_menu' => 'nav-menu-sites'
														);

require_once("include/nav/navbar-fixed.php");

?>



    <div id="jumbotron-learn-more" class="jumbotron">
    	<img alt="Learn more" src="<?php echo img_uri('/headline-learn-more.png'); ?>" 
      style="display:block; position:relative; top: Calc(50% - 23px); left: Calc( 50% - 265px );">
    </div>
 
    

 		<div class="banner-tag"><img alt="Why" src="<?php echo $img_root; ?>/circle-header-tag-why.png"></div>
 
    <div class="container">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
            <div id="why" style="margin-top: 10px">&nbsp;</div>
        		
            <?php
						// INCLUDE THE BODY CONTENT
            while ( have_posts() ) : the_post();
							the_content();
            endwhile;
            ?>
        
            </main><!-- .site-main -->
          </div><!-- .content-area -->
      
    </div>
 
 	 	<!-- EMAIL CAPTURE SPREAD -->
    <?php require("include/email-spread-2.php"); ?>
    <!-- /email capture spread -->
   
   <div id="team" style="background-color: #f6eddb; ">
    <div class="banner-tag" id="banner_team"><img src="<?php echo $img_root; ?>/icn-team.png"></div>
     
    	<div style="padding: 77px 0 71px 0;" class="center">
        <ul class="list-inline team">
          <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'consulting/josh-collins' ) ); ?>">
            <div class="img-rollover-container">
              <div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
                <img alt="Josh Collins" class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/josh-collins.jpg">
              </div>
              <h5>Josh Collins</h5>
            </a>
          </li>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'consulting/john-sears' ) ); ?>">
              <div class="img-rollover-container">
                <div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>        
                <img alt="John Sears"  class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/john-sears.jpg">
              </div>
              <h5>John Sears</h5>
            </a>
          </li>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'consulting/jacob-william' ) ); ?>">
              <div class="img-rollover-container">
                <div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
                <img alt="Jacob William"  class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/jacob-william.png">
              </div>
              <h5>Jacob William</h5>
            </a>
          </li>
         </ul>
       
         <ul class="list-inline team">
          <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'consulting/david-benham' ) ); ?>">
              <div class="img-rollover-container">
                <div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
                <img alt="David Benham" class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/david-benham.jpg">
              </div>
              <h5>David Benham</h5>
            </a>
          </li>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'consulting/jason-benham' ) ); ?>">
            
              <div class="img-rollover-container">
                <div class="img-rollover-overlay gold"><span class="glyphicon glyphicon-plus"></span></div>
                <img alt="Jason Benham" class="img-responsive" src="http://missioneer.com/wp-content/uploads/2015/05/jason-benham.jpg">
              </div>
              <h5>Jason Benham</h5>
            </a>
          </li>
        </ul>
      </div>
    </div> <!-- /#team -->
    
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php require_once("include/project-form-modal.php"); ?>
    <script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/project-form-modal.js"></script>

    
    <?php 
		$footer_vars = (object)array( 'bg_color' => '#fff',
																	'wp_menu' => 'nav-menu-sites' );
		require_once("footer.php"); 

		wp_footer();

		?>
		

 </body>
</html>