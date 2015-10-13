function openProjectFormFromVideoOptin() {
			
			console.log("Button clicked: openProjectForm();");
			
			var mod = $("#video-modal");
			
			mod.modal('hide');
			$(".modal-project-form").modal('show');
}
		
		
function openProjectFormModal() {
	$(".modal-project-form").modal('show');
	console.log("openProjForm");
}
			



$(document).ready ( function() {
	// Run your jQuery Code
/*
	$( '.project-form-button').each( function(index) {
		
		console.log("Button: " + index);
		
		$(this).click( function() {

				console.log("running from jquery");
				
				if( $("body").hasClass("modal-open") ) {
					console.log("modal open, going to close it");
					var mod = $(this).closest( ".modal" );
					console.log( mod.html() );
					mod.modal('hide');
					
									
					mod.on('hidden.bs.modal', function(e) {
						console.log("now hidden");
						$(".modal-project-form").modal( 'show' );
					});
			}
			else {
				// no parent modal path (works)
				console.log("no parent");
				$(".modal-project-form").modal( 'show' );
			}
			
		});
	});
	*/
	
	
	$( '.project-form-button' ).click( function() {
	
		//alert('click');
	
		if( $("body").hasClass("modal-open") ) {
			
			//alert('modal open');
			// Could be #video-modal-optin or #video-modal (blank content/video switcher)
			var parent_modal = $(this).parent().closest(".modal"); //$("#video-modal-optin");
			
			
			console.log("PARENT: " + parent_modal.attr("id"));
			parent_modal.modal('hide');
			
			$(".modal-project-form").modal( 'show' );
			
		} else {
			console.log('no modal open');
			$(".modal-project-form").modal( 'show' );
		}
		
	
	});

});