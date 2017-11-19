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



	//init google maps
	function initMap(observations) {
		//generate the map centered on France
	  	var map = new google.maps.Map(document.getElementById('gmaps_canvas'), {
	    	zoom: 1,
	    	center: {lat: 47.560408, lng: 2.633094}
	  	});
	  	
	  	//responsive map
	  	google.maps.event.trigger(map, "resize");
	  	
	  	observations.forEach(function(elmt) {
	  		//generate the marker at the right position
		  	var marker = new google.maps.Marker({
		    	position: {lat: parseFloat(elmt.lattitude), lng: parseFloat(elmt.longitude)},
		    	map: map
		  	});

		  	//generate the comment if it exists
		  	var content = '';
		  	if (elmt.comment === null)
		  		content = '<p><em>Aucun commentaire associé.</em></p>';
		  	else
		  		content = '<p>'+elmt.comment+'</p>';

	  		//add the comment to the info window
	  		var infowindow = new google.maps.InfoWindow({
          		content: content
        	});

		  	//open info window upon click on the marker
		  	marker.addListener('click', function() {
          		infowindow.open(map, marker);
        	});
	  	});
	}

	//fill modal body on opening with the right bird infos
	function initBirdModal(resultsDiv) {
		var birdDivs = $('.bird-div');

		birdDivs.each(function(index, elmt) {
			$(elmt).on('click', function(e) {
				//start loading animation
				startContentLoading( $('#bird-modal').find('.modal-content') );

				var modalHref = resultsDiv.data('home')+'oiseau/'+$(e.target).data('id'),
					obsAjaxHref = resultsDiv.data('home')+'oiseau/ajax/'+$(e.target).data('id');

            	//we load the right observation inside the modal
				$('#bird-modal-body').load(modalHref, function() {
					var observations,
						observationsJSON = $.get(obsAjaxHref, function() {
							//get result as a huge string
							observations = observationsJSON.responseJSON;
					
							//initialise the map
							if (typeof google === 'object' && typeof google.maps === 'object') {
							 	initMap( observations );
							}

							//hide the loading screen and show the content
				    		endContentLoading( $('#bird-modal').find('.modal-content') );	
						});

					//init gallery
					$('#bird-modal ul.gallery').bsPhotoGallery({
					    "classes" : "col-xs-6 col-sm-4 col-md-3",
					    "hasModal" : true
					});
				});
            });
		});

        //empty modal when closing
        $('#bird-modal').on('hidden.bs.modal', function() {
        	$('#bird-modal-body').html('');
        });
	}

	//the search engine magic happens here
	//look for results among a long string representing all database birds
	//given an input field
	//then append the results to the given div
	function searchEngine( input, resultsDiv, birds ) {
		var i = 0,
			value = input.val().trim(),
			results = [], result, result_array;

		//escaping the input
		value = value.replace(/(['"\/\\<>~_\(\);?,:\.])/ig, '');

		resultsDiv.html('');
		
		//if there are 3 or more characters in the input field
		if ( value.length > 2 ) {
			var re = new RegExp('([^{]*'+value+'[^}]*)',"gi"),
				content;
			
			//as long as there are results 
			while (result = re.exec(birds)) {
			    $(empty_results).addClass('hidden');

			    result_array = result[1].split(',');
			    
			    content = '';
				if ( result_array[2] !== '' )
					content += '('+result_array[2]+') ';
				content += result_array[1];

			    //result_array[0] is the ID
			    $('<div class="col-xs-12 bird-div" href="#bird-modal" data-toggle="modal" data-id="'+result_array[0]+'">'+content+'<hr /></div>').appendTo(resultsDiv);
			    
			    i += 1;
			    if (i >= 50)
			      break;
			}

			//no results
			if ( resultsDiv.html() === '' ) {
				$(empty_results).removeClass('hidden');
			}
			else { //if there are results, we attach event to each to load modal
				initBirdModal(resultsDiv);
			}
		}
		else { //less than 3 characters in search input
			$(empty_results).removeClass('hidden');
		}
	}

	//get results via ajax everytime user enters a letter in search input
	function initSearchResults() {
		var input = $('#search_content input'),
			resultsDiv = $('#search_results');

		//get all birds with id, latin name and common name
		var birds,
			birdsJSON = $.get(resultsDiv.data('url'), function() {
				//get result as a huge string
				birds = birdsJSON.responseText;
				//string is like that : [{"id":1,"lb_nom":latinName,"nom_vern":commonName},{...}]
				//so we clean it to get : [{1,latinName,commonName},{...}]
				birds = birds.replace(/("id":)/ig, '');
				birds = birds.replace(/("lb_nom":)/ig, '');
				birds = birds.replace(/("nom_vern":)/ig, '');
				birds = birds.replace(/(")/ig, '');

				//hide the initial loading screen and show the content of the page
				$('#search_content>.hidden').removeClass('hidden');
				$('#search_content>.loader').addClass('hidden');
			});

		input.on('change keyup input', function(e) {
			//now we look for results
			searchEngine( $(this), resultsDiv, birds );
		});
	}



	$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyAQU7F5LE2WL4xxEpeUysxGqriN_RM36G0");

	initSearchResults();
});
