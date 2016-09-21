<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/jquery.vimeo.api.js"></script>

<!-- Vimeo embed code with custom id attribute added -->
<iframe id="myvideo" src="//player.vimeo.com/video/77889659" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


<script>
//use jquery document ready function
$(document).ready(function($) {

    $("#myvideo").vimeo("play");

});

$("#myvideo").vimeo("paused", function(data){  
    console.log( "Is paused?", data ); 
})

$("#myvideo").on("play", function(){
    console.log( "Video is playing" );
});

$("#myvideo").on("pause", function(){
    console.log( "Video is paused" );
});

$("#myvideo").on("finish", function(){
    console.log( "Video is done playing" );
});
</script>
</body>
</html>