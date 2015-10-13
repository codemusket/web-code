<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(function() {
  document.getElementById('player1').api_addEventListener('finish', function(event) {
        // do stuff here
    
		console.log("done baby");
		
		});
});

</script>
</body>
</html>