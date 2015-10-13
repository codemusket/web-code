<header>
  <div id="jumbotron-home" data-parallax="" data-image-src="" 
  	data-speed=".2" data-bleed="50" data-androidFix="false" data-naturalWidth="2028" data-naturalHeight="773"
    style="background-image: url('<?php echo $header_vars->banner_src; ?>');">
  
      
        <div id="nav-main" class="nav-main" role="navigation">
        	<div class="container">

                    
                <div class="navbar-header">
                  <a href="<?php echo $header_vars->logo_href; ?>">
                  <img class="img-responsive page-logo" src="<?php echo $img_src . $header_vars->logo_src; ?>" alt="Missioneer Logo"></a>
                  
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                
                <div class="collapse navbar-collapse navbar-menubuilder">
                
                    <?php 
											
											wp_nav_menu( array( 'theme_location' => $header_vars->wp_menu, 
															'container_class' => 'collapse navbar-collapse navbar-menubuilder' ,
															'items_wrap' => '<ul class="nav navbar-nav navbar-right nav-text">%3$s</ul>',
															'walker' => new wp_bootstrap_navwalker() 
														)
											);  
											
										
										 ?>
                  
                </div>

          </div> <!-- /container -->
        </div> <!-- /nav-main -->
      
  
      
      <div class="container hero-message">
        <?php echo $header_vars->hero_message_html; ?>
      </div>      
  </div>
</header>