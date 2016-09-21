// JavaScript Document






	// Make video reload after watch
	/*
	jQuery("#video-modal-institute.modal.fade").click(function() {
					console.log("modal inst closed on fade");
					jQuery("#video-modal-institute iframe").attr("src", jQuery("#video-modal-institute iframe").attr("src"));
	});
	jQuery("#video-modal-consulting.modal.fade").click(function() {
					jQuery("#video-modal-consulting iframe").attr("src", jQuery("#video-modal-consulting iframe").attr("src"));
	});
	jQuery("#video-modal-projects.modal.fade").click(function() {
					jQuery("#video-modal-projects iframe").attr("src", jQuery("#video-modal-projects iframe").attr("src"));
	});
	*/
	

jQuery("document").ready(function($){
	
	/*
	$("#video_why").on("finish", function(){
    console.log( "Video is done playing -why" );
	});
	
	$("#video_why").on("play", function(){
    console.log( "Video is playing -why" );
	});
	
	$("#video_institute").on("finish", function(){
    console.log( "Video is done playing -inst" );
		//videoOptin("institute");
	});
	
	$("#video_institute").on("play", function(){
			console.log( "Video playing -inst" );
	});
	
	$("#video_consulting").on("finish", function(){
			console.log( "Video is done playing -cons" );
			//videoOptin("consulting");
	});
	
	$("#video_projects").on("finish", function(){
			console.log( "Video is done playing -proj" );
			//$("#video_projects").vimeo("play");
			//videoOptin("projects");
	});
	*/
	//works
	//$('#video_why').vimeo("play");
	
	//$('#video-modal-consulting').on('hidden.bs.modal', function (e) {
	//	console.log("modal done closing");		
	//})
	

	// EMAIL HANDLING
	
	if(email_sent == true) {
		$("#email_confirm_modal").modal("show");
	}
	else if( email_error > 0 ) {
		$("#email_error_modal").modal("show");
	}


	
	// Dynamic bubble modal content switching
	$(".info-bubble").click(function(ev){
			ev.preventDefault();
			var uid = $(this).data("id");
			var html = $("#info-bubble-sidebar-" + uid + " .textwidget").html();
			var title = $("#info-bubble-sidebar-" + uid + " .info-bubble-sidebar-title").html();
			
			$("#modal-info-bubble .modal-body").html(html);
			$("#modal-info-bubble .modal-header .modal-title").html(title);
			
	});
	



	
});
// jQuery ready



	