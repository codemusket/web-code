<?php

wp_nav_menu( array( 'theme_location' => 'nav-menu-sites', 
        'container_class' => 'collapse navbar-collapse navbar-menubuilder' ,
        'items_wrap' => '<ul class="nav navbar-nav navbar-right nav-text">%3$s</ul>',
        'walker' => new wp_bootstrap_navwalker() 
      )
);  

?>