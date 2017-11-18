$(function() {
	
	//Manage AJAX for modal display with Forgotten Password feature
	function modalOpening() {
		var modal_body = $('#login_forgotten-pass-modal-body'),
			form = $('#login_forgotten-pass-modal-form');

		//when clicking on the Forgotten Password link
		$('#login_forgotten-link').on('click', function(e){
			
			//just load the reset request form into the modal body
			modal_body.load($(e.target).data('action'));
		});
	}







	modalOpening();
});
