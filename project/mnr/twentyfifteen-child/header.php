<?php 
require_once("include/helpers.php");
$theme_root =  get_template_directory_uri() . "-child";

$img_root = $theme_root . "/images";
global $post;
$slug = get_post( $post )->post_name;
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js page-<?php echo $slug;?>" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="http://missioneer.com/wp-content/uploads/2015/06/missioneer-favicon.png">
        <link rel="icon" type="image/png" href="http://missioneer.com/wp-content/uploads/2015/06/missioneer-favicon.png">
        
     		<link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $theme_root; ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo $theme_root; ?>/css/style_custom.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>

    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->