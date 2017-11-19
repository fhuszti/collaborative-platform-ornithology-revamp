$(function() {
	
	//init modal used for infos editing
	function initEditModal( button, formName ) {
		var modal_body = $('#profile_infos-edit-modal-body'),
			confirmButton = $('#profile_infos-edit-confirm');

		//when clicking the "edit" button
		button.on('click', function(e) {
			//we clean the modal body
			modal_body.html('');

			//we load the correct form inside the modal
			modal_body.load($(e.target).data('url'), function() {
				//link the modal confirm button to the newly loaded form
				confirmButton.attr('form', formName);
			});
		});
	}

	//init email edit modal
	function initEmailEdit() {
		var editButton = $('#profile_email-link'),
			editFormName = 'profile_edit-email-form';

		initEditModal( editButton, editFormName );
	}

	//init password edit modal
	function initPasswordEdit() {
		var editButton = $('#profile_pass-link'),
			editFormName = 'profile_edit-pass-form';

		initEditModal( editButton, editFormName );
	}

	//init user infos edit management
	function initInfosEdit() {
		initEmailEdit();
		initPasswordEdit();
	}



	//init google maps
	function initMap(pos) {
		//generate the map
	  	var map = new google.maps.Map(document.getElementById('gmaps_canvas'), {
	    	zoom: 8,
	    	center: pos
	  	});
	  	
	  	//responsive map
	  	google.maps.event.trigger(map, "resize");
	  	
	  	//generate the marker at the right position
	  	var marker = new google.maps.Marker({
	    	position: pos,
	    	map: map
	  	});
	}

	//init the observation modal display
	function initObservationModal() {
		var observations = $('#profile_observations-content .observation-row');

        //init observation display load on modal opening for every observation
        observations.each(function(index, elmt) {
            $(elmt).on('click', function() {
            	//we load the right observation inside the modal
				$('#profile_obs-modal-body').load($(this).data('url'), function() {
					//get the observation position data
	            	var gmaps_canvas = $('#gmaps_canvas'),
	            		lat = parseFloat( gmaps_canvas.data('lattitude') ),
	            		lng = parseFloat( gmaps_canvas.data('longitude') ),
	            		pos = { lat: lat, lng: lng };

	            	//initialise the map
					if (typeof google === 'object' && typeof google.maps === 'object') {
					 	initMap( pos );
					}
				});
            });
        });

        //empty modal when closing
        $('#profile_obs-modal').on('hidden.bs.modal', function() {
        	$('#profile_obs-modal-body').html('');
        });
	}



	//initialise la galerie photos
	function initGallery() {
		$('ul.gallery').bsPhotoGallery({
		    "classes" : "col-xs-6 col-sm-4 col-md-3",
		    "hasModal" : true
		});
	}





	$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyAQU7F5LE2WL4xxEpeUysxGqriN_RM36G0");

	initInfosEdit();
	initObservationModal();
	initGallery();
});
