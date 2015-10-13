
<div id="jumbotron-home" data-parallax="scroll" data-image-src="<?php echo $img_root . $navhead_info->banner_src; ?>" 
data-speed=".2">

    <header>
      <div id="nav-main" class="nav-main" role="navigation">
          <div class="container">
              <div class="navbar-header">
              	<a href="<?php echo get_bloginfo( "url" ); ?>">
                <img class="img-responsive page-logo" src="<?php echo $img_root . $navhead_info->logo_src; ?>" alt="Missioneer Logo" ></a>
                
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse navbar-menubuilder">
              
                  <?php require_once("nav-menu-sites.php"); ?>
                
              </div>
          </div>
      </div>
    </header>

    <div class="container hero-message">
      <?php echo $navhead_info->hero_message_html; ?>
    </div>      
</div>