$(function() {
	
	//generate a different button depending on the actual state of the observation
	function generateStateBtn(state, urls) {
		var button;

		switch (state) {
			case 'valid':
				button = $('<button class="btn btn-success"><span class="glyphicon glyphicon-ok-circle"></span> Validée</button><button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li><a href="'+urls.await+'" class="alert-warning"><span class="glyphicon glyphicon-refresh"></span> Mettre en attente</a></li><li><a href="'+urls.refuse+'" class="alert-danger"><span class="glyphicon glyphicon-remove-circle"></span> Refuser</a></li></ul>');
				break;

			case 'refused':
				button = $('<button class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Refusée</button><button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li><a href="'+urls.validate+'" class="alert-success"><span class="glyphicon glyphicon-ok-circle"></span> Valider</a></li><li><a href="'+urls.await+'" class="alert-warning"><span class="glyphicon glyphicon-refresh"></span> Mettre en attente</a></li></ul>');
				break;

			default:
				button = $('<button class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span> En attente</button><button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li><a href="'+urls.validate+'" class="alert-success"><span class="glyphicon glyphicon-ok-circle"></span> Valider</a></li><li><a href="'+urls.refuse+'" class="alert-danger"><span class="glyphicon glyphicon-remove-circle"></span> Refuser</a></li></ul>');
				break;
		}

		return button;
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
		var observations = $('#observations .observation-row');

        //init observation display load on modal opening for every observation
        observations.each(function(index, elmt) {
            $(elmt).on('click', function() {
            	//get current observation state and generate custom state button
            	var state = $(this).data('state'),
	            	urls = {
	            		'validate': $(this).data('validate'),
	            		'await': $(this).data('await'),
	            		'refuse': $(this).data('refuse')
	            	};
            	generateStateBtn(state, urls).appendTo( $('#admin_obs-modal-state') );

            	//we load the right observation inside the modal
				$('#admin_obs-modal-body').load($(this).data('url'), function() {
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
        $('#admin_obs-modal').on('hidden.bs.modal', function() {
        	$('#admin_obs-modal-body').html('');

        	$('#admin_obs-modal-state').html('');
        });
	}




	//manage the route the confirm delete button is gonna point to
	function manageUserDeleteConfirm() {
		var buttons = $('.user_button-row .btn-danger'),
			confirm = $('#admin_user-delete-modal-confirm'),
			current_href = confirm.attr('href'),
			new_href;

		//if current href already is the full need href, we cut the ID at the end
		if ( current_href.indexOf('user/delete') !== -1 ) {
			current_href = current_href.substring( 0, current_href.lastIndexOf('/') + 1 );
		}
		//else we complete the href with user/delete/
		else {
			current_href = current_href+'user/delete/';
		}

		//for each of the "delete" buttons
		buttons.each(function(index, elmt) {
			$(elmt).on('click', function(e) {
				//on click we assign the user id to the path
				//and we update the href of the confirmation button
				new_href = current_href+''+$(e.target).data('id');
				confirm.attr('href', new_href);
			});
		});
	}




	//load correct user edit form into the modal
	function manageUserEditModal() {
		var buttons = $('.user_button-row .btn-warning'),
			modal_body = $('#admin_user-edit-modal-body'),
			confirm = $('#admin_user-edit-modal-confirm'),
			current_href = $(confirm).data('href'),
			new_href;

		//if current href already is the full need href, we cut the ID at the end
		if ( current_href.indexOf('user/edit') !== -1 ) {
			current_href = current_href.substring( 0, current_href.lastIndexOf('/') + 1 );
		}
		//else we complete the href with user/edit/
		else {
			current_href = current_href+'user/edit/';
		}

		//for each of the "edit" buttons
		buttons.each(function(index, elmt) {
			$(elmt).on('click', function(e) {
				//on click we assign the user id to the path
				//and we update the href of the confirmation button
				new_href = current_href+''+$(e.target).data('id');
		
				//and we load the correct form inside the modal
				modal_body.load(new_href, function() {

				});
			});
		});
	}





	$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyAQU7F5LE2WL4xxEpeUysxGqriN_RM36G0");

	initObservationModal();
	manageUserDeleteConfirm();
	manageUserEditModal();
});
