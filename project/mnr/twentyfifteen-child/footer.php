		

     <footer>
  
				<div id="lower-nav" style="background-color: <?php echo $footer_vars->bg_color; ?>">
        				<?php 
        wp_nav_menu( array( 'theme_location' => $footer_vars->wp_menu, 
                            'container_class' => '' ,
                            'items_wrap' => '<ul>%3$s</div>' ));  
        ?>
        </div>
  
        <map name="social-links">
          <area alt="Moose Mojo" shape="rect" coords="0,0,33,33" href="https://www.facebook.com/missioneering">
          <area alt="Moose Mojo Twitter" shape="rect" coords="38,0,71,33" href="https://twitter.com/moosemojo1">
          <area alt="Moose Mojo Google+" shape="rect" coords="77,0,110,33" href="https://plus.google.com/106161123794488152527/">
          <area alt="LinkedIn" shape="rect" coords="116,0,149,33" href="https://www.linkedin.com/company/missioneer-fulfill-the-great-commission-through-business">
        </map>
        
        <div style="background-image:url(http://missioneer.com/wp-content/uploads/2015/05/footer-clouds.jpg); height: 364px; text-align:center; padding-top: 160px;">
          <a href="<?php echo get_bloginfo( "url" ); ?>">
          <img alt="logo flag" src="<?php echo $img_root; ?>/logo-mini-flag.png" style="margin-bottom: 10px;"><br/>
          <img alt="Logo text" src="<?php echo $img_root; ?>/logo-mini-text.png" style="margin-bottom: 42px;"></a><br/>
    
          <img alt="footer" usemap="#social-links" src="<?php echo $img_root; ?>/social-buttons.png">
        </div>
        
        <div class="container" id="footer-bottom-line">
   
          	<p>
            &copy; 2015 Missioneer. All Rights Reserved.
            | 704-707-0617 | info@missioneer.com | Charlotte, NC</p>
   
        </div> <!-- /container -->        
        

	</footer>
				


	