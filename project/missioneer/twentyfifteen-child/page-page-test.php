<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<!--
<script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/jquery.vimeo.api.js"></script>
-->
<script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>


<!-- Vimeo embed code with custom id attribute added -->
<iframe id="v1" src="//player.vimeo.com/video/77889659?api=1&player_id=v1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

<iframe id="v2" src="//player.vimeo.com/video/77889659?api=1&player_id=v2" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

<iframe id="v3" src="//player.vimeo.com/video/77889659?api=1&player_id=v3" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

<iframe id="v4" src="//player.vimeo.com/video/77889659?api=1&player_id=v4" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


<script>

$(function() {
	

	function registerVideo(playerID) {
		
			var iframe = $('#' + playerID)[0];
			var player = $f(iframe);
			var status = $('#controls_' +  playerID + ' .status');
	
			// When the player is ready, add listeners for pause, finish, and playProgress
			player.addEvent('ready', function() {
					status.text('ready');
					
					player.addEvent('pause', onPause);
					player.addEvent('finish', onFinish);
					player.addEvent('playProgress', onPlayProgress);
			});
	
			// Call the API when a button is pressed
			$('#controls_' + playerID + ' button').bind('click', function() {
					player.api($(this).text().toLowerCase());
			});
	
			function onPause(id) {
					status.text('paused' + playerID);
			}
	
			function onFinish(id) {
					status.text('finished' + playerID );
			}
	
			function onPlayProgress(data, id) {
					status.text(data.seconds + 's played (' + playerID + ')' );
			}
	}
	
	registerVideo("v1");
	registerVideo("v2");
	registerVideo("v3");
	registerVideo("v4");
	

});

//use jquery document ready function
/*
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
*/
</script>
<div id="controls_v1">
  <button>Play</button>
  <button>Pause</button>
  <p>Status: <span class="status">&hellip;</span></p>
</div>
<div id="controls_v2">
  <button>Play</button>
  <button>Pause</button>
  <p>Status: <span class="status">&hellip;</span></p>
</div>
<div id="controls_v3">
  <button>Play</button>
  <button>Pause</button>
  <p>Status: <span class="status">&hellip;</span></p>
</div>
<div id="controls_v4">
  <button>Play</button>
  <button>Pause</button>
  <p>Status: <span class="status">&hellip;</span></p>
</div>

</body>
</html>