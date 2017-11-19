$(function() {
	
	//show the loading screen and hide the content
	function startContentLoading(modal, newHidden = []) {
		modal.children('.hidden').removeClass('hidden');
		newHidden.forEach(function(elmt) {
			elmt.addClass('hidden');
		});
	}

	//hide the loading screen and show the content
	function endContentLoading(modal) {
		modal.children('.hidden').removeClass('hidden');
		modal.children('.loader').addClass('hidden');
	}



	//Manage AJAX for modal display with Forgotten Password feature
	function modalOpening() {
		var modal_body = $('#login_forgotten-pass-modal-body'),
			form = $('#login_forgotten-pass-modal-form');

		//when clicking on the Forgotten Password link
		$('#login_forgotten-link').on('click', function(e){
			//start loading animation
			startContentLoading( $('#login_forgotten-pass-modal').find('.modal-content') );
			
			//just load the reset request form into the modal body
			modal_body.load($(e.target).data('action'), function() {
				//hide the loading screen and show the content
	    		endContentLoading( $('#login_forgotten-pass-modal').find('.modal-content') );
			});
		});
	}







	modalOpening();
});
