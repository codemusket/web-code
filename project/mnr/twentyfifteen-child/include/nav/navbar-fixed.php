<header>
  <div id="nav-main" class="navbar navbar-fixed-top nav-missioneer-fixed-right" role="navigation">
  
  			<div class="container">
       	
          
          <div class="navbar-header" >
            <a href="<?php echo $header_vars->logo_href; ?>">
            <img alt="logo" class="img-responsive page-logo" src="<?php echo $header_vars->logo_src; ?>"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          </div>
          
  
          <div class="collapse navbar-collapse navbar-menubuilder" id="nav-fixed-menu">
            <?php
  
                  wp_nav_menu( array( 'theme_location' => $header_vars->wp_menu, 
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