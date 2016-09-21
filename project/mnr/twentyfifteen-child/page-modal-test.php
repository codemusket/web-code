<?php require_once("header.php"); ?>

<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php require_once("include/project-form-modal.php"); ?>
<script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/project-form-modal.js"></script>

<?php require("include/email-spread-2.php"); ?>
<br/>
<?php require("include/email-spread-2.php"); ?>




<script>

$(document).ready( function() {
		
	$( ".project-form-button" ).click( function() {
			
			//alert("hi");
			
			$("#test-modal").modal('show');		
		
	});

});
</script>

<?php wp_footer(); ?>

</body>
</html>