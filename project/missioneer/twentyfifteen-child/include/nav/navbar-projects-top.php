
<div id="jumbotron-home" data-parallax="scroll" data-image-src="<?php echo $img_root . $header_vars->banner_src; ?>" 
data-speed=".2">

    <header>
      <div id="nav-main" class="nav-main" role="navigation">
          <div class="container">
              <div class="navbar-header">
              	<a href="<?php echo get_bloginfo( "url" ); ?>">
                <img class="navbar-brand" src="<?php echo $img_root . $header_vars->logo_src; ?>" alt="Missioneer Logo" style="padding: 10px;"></a>
                
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse navbar-menubuilder">
              
                   <?php 
										wp_nav_menu( array( 'theme_location' => 'nav-menu-projects-top', 
														'container_class' => 'collapse navbar-collapse navbar-menubuilder' ,
														'items_wrap' => '<ul class="nav navbar-nav navbar-right nav-text">%3$s</ul>',
														'walker' => new wp_bootstrap_navwalker() 
													)
										);  
									 ?>
                
                
              </div>
          </div>
      </div>
    </header>

    <div class="hero-message">
      <?php echo $navhead_info->hero_message_html; ?>
    </div>      
</div>