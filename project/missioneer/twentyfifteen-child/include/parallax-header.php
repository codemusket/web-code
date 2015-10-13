 <!--
    <div class"parallax">
    
    	<div class="parallax__group" id="hero-parallax">
               
    		<div  class="parallax__layer-layer parallax__layer-base">
        	<div class="parallax-title">Foreground</div>
        </div>
        
				<div  class="parallax__layer-layer parallax__layer-back" >
        	<div class="parallax-title">Base</div>
        </div>
        
        <div class="parallax__layer-layer parallax__layer--deep" >
        	<div class="parallax-title">Background</div>
        </div>
       </div>
    	        
    </div>
-->
      
    

  <!--

    <header>
      <div id="nav-main" role="navigation" class="navbar">
          <div class="container">
              
              <div class="row">
              
              		<div class="col-xs-8 col-sm-4">
                  	<div class="navbar-header"><a href="<?php echo get_bloginfo( "url" ); ?>"><img class="img-responsive" src="<?php echo $img_root; ?>/logo-missioneer-sm.png" style="padding: 12px 10px;"></a></div>
                  </div>
                  
                 <div class="col-xs-4 col-sm-8">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                      </button>
                  </div>
               
           
         
                  <?php 
                  
                  wp_nav_menu( array( 'theme_location' => 'nav-menu-home', 
																			'container_class' => 'collapse navbar-collapse navbar-menubuilder' ,
                        							'items_wrap' => '<ul class="nav navbar-nav navbar-right nav-text">%3$s</ul>',
																			'walker' => new wp_bootstrap_navwalker() )
															);  
                  ?>
                
               </div>
           </div>
      </div>
    </header>
  -->