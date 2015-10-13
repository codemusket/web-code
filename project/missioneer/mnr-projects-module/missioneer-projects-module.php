<?php
/**
* Plugin Name: Missioneer Projects Module
* Description: This plugin allows a shortcode to be added to any page to show a list of missioneer projects. Projects are added as posts in a category called 'Missioneer Project'. Shortcode is [missioneer-projects]. Parameters: order=[DESC|ASC], orderby=[date|ID|author|title|modified|parent|rand] num=[integer]. Eg: [missioneer_projects order="desc" orderby="date" num="10"]. Default is order="DESC" num="10" orderby="date".

* Version: 1.0.0
* Author: Jonathan Dymond
*/
// Example 1 : WP Shortcode to display form on any page or post.
function mnr_projects_module( $atts ){
	echo "<!-- missioneer projects module -->";

	$params = shortcode_atts( array( 'order' => 'DESC', 'orderby' => 'date', 'num'	=> '10'), $atts );

	// Display a list of post tagged 'missioneer project'
	$args = array(
		'posts_per_page'   => $params['num'],
		'offset'           => 0,
		'category'         => '',
		'category_name'    => 'Missioneer Project',
		'orderby'          => $params['orderby'],
		'order'            => $params['order'],
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	$project_posts = get_posts( $args );
	$html_out = "


<link rel='stylesheet' type='text/css' href='" . plugin_dir_url(__FILE__) . 'mp_style.css' . "'>"; 

$html_out .= "

<div class='mp-mod-container'>

<div class='row'>
<div class='mp-th col-xs-3'>PROJECT</div>
<div class='mp-th col-xs-3'>MISSIONEER</div>
<div class='mp-th col-xs-6'>LOCATION</div>
<div class='mp-th hidden-xs'>&nbsp;</div>
</div>


";


foreach( $project_posts as $pst ) {
	
	$meta = get_post_meta( $pst->ID );

	

	$mp_title 	= $pst->post_title;
	$mp_name 		= $meta["mp_missioneer_name"][0];
	$mp_location 	= $meta["mp_missioneer_location"][0];;
	$mp_href 		= $meta["mp_missioneer_href"][0];;


	$html_out .= "
	


	<div class='row'>


		<div class='col-xs-3 mp-col mp-col1'>
			<div class='mp-content'>
				<div class='vertical-align text-field'>
				
					$mp_title
				
					</div>
					</div>
					</div>
	    
		<div class='col-xs-3 mp-col mp-col2'>
			<div class='mp-content'>
				<div class='vertical-align text-field'>
				
					$mp_name
				
					</div>
					</div>
					</div>
			
	    
		<div class='col-xs-4 mp-col mp-col3-1'>
			<div class='mp-content'>
				<div class='vertical-align text-field'>
				
					$mp_location
					
					</div>
					</div>
					</div>
	    
		<div class='col-xs-2 mp-col mp-col3-2'>
						
			<div class='mp-content'>
				<div class='vertical-align'>			
					<a href='$mp_href' 
					 class='btn-mp-module-view'>VIEW <span class='glyphicon glyphicon-play'></span></a>
					
					</div>
					</div>
					</div>
  
		</div>



	";

	}
	
	$html_out .= "

	<div class='row'>
   		<div class='mp-footer col-xs-12'>&nbsp;</div>
   		</div>

</div><!-- /mp-mod-container -->
<!-- end missioneer projects module -->


	";
	
	return $html_out;
}

add_shortcode('missioneer_projects', 'mnr_projects_module');
?>