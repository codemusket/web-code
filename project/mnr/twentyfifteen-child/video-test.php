<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<param name="flashvars" value="api=1" />
<!-- 16:9 aspect ratio 
<div class="embed-responsive embed-responsive-16by9">
-->
 <iframe class="embed-responsive-item"  
 src="https://player.vimeo.com/video/123342586?api=1&player_id=video-institute"></iframe>


<!--
</div>
-->

<script>
document.getElementById('video-institute').api_play();

document.getElementById('video-institute').api_addEventListener('finish', function(event) {
        // do stuff here
				console.log("done with video");
    });

</script>
</body>
</html>