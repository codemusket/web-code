// JavaScript Document


// Video Optin Code
function showVideoModalOptin(replace_div) {
	var newHTML = $("#video-optin").html();
	videoModalHTML(newHTML);
	console.log("Loaded Video Optin");
}

function replaceHTML(from, to) {
	$(to).replaceWith($(from).html());
}

function videoModalHTML(newHTML) {
	$("#video-modal").find(".modal-content").html(newHTML);
}
function setModalID(newID) {
	$("#video-modal").find(".modal-content").data("id", newID);
}
function getModalID() {
	return $("#video-modal").find(".modal-content").data("id");
}

$(document).ready( function() {

		// Enable Popovers											
		$(function () {
			$('[data-toggle="popover"]').popover()
		});
		
		$("#video_why").on("finish", function() {
			console.log("why finish");
			//replaceHTML("#video-optin", "#why iframe");
			
			$("#video-modal-optin").modal('show');
			$("#video_why").vimeo("seekTo(0:0)");
		
		});
		
		$("#video_why").on("play", function() {
			console.log("why finish");
		});
		
		// Replace video modal contents based on data-id attribute
		$("#video-modal").on('show.bs.modal', function (event) {

			// unload memory of all vimeo videos first, then play this one (android fix hopefully)		
			//$(".vimeo-vid").vimeo("unload");
			//$(".vimeo-vid iframe").src = $(this).src;
			//jQuery("#video_why").attr("src", jQuery("#video_why").attr("src"));
			jQuery(".vimeo-vid").each( function() {
				$(this).attr("src", $(this).attr("src"));
			});
			
			//console.log($(event.relatedTarget));

			var click_id = $(event.relatedTarget).data("id");
			var newContents = $("#video_contents_" + click_id).html();
			
			
			videoModalHTML(newContents);
			
			setModalID(click_id);

			console.log("video modal clicked data-id:" +  click_id );
			console.log("modal id:" +  getModalID() );
			
			$("#video_" + click_id ).on("finish", function(){
				console.log( "Video FINISH: " + click_id  );
				
				
				
				showVideoModalOptin();
				$("#video-modal .project-form-button").click( function() { 
				
					// hide and then show the next modal
					$("#video-modal").modal('hide').on('hidden.bs.modal', function(e) {
						
						console.log("showing project modal");
						
						$(".modal-project-form").modal( 'show' );
						
					});
					
					// now unload video
					var id = getModalID();
					$("#video_" + id).vimeo("unload");
					jQuery(".vimeo-vid").each( function() {
						$(this).attr("src", $(this).attr("src"));
					});
				
					console.log("video modal done closing/unloaded: " + "#video_" + id);		
				
				} );
			
			});
			
			/*
			$("#video_" + click_id ).on("play", function(){
					console.log( "Video PLAY:" + click_id );
			});
			*/

			
					
			//$('#video_' + getModalID() ).vimeo("play");
		});
	
	
		// Unload videos when Modal closed
		
		/*$('#video-modal').on('hidden.bs.modal', function (e) {
			
			var id = getModalID();
			$("#video_" + id).vimeo("unload");
			jQuery(".vimeo-vid").each( function() {
				$(this).attr("src", $(this).attr("src"));
			});
		
			console.log("video modal done closing: " + "#video_" + id);		
		})*/
		

		
		// load the optin
		/*
		$("#video_institute").vimeo("finish", function(){
			console.log( "Video is done playing -inst" );
			//videoOptin("institute");
		});
		
		$("#video_institute").vimeo("play", function(){
				console.log( "Video playing -inst" );
		});
	*/

	
});




	