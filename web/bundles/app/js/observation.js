$(function() {

	var lastMarker;

	function placeMarker(map, pos) {
		var latField = $('#addObservationForm_lattitude'),
	  		longField = $('#addObservationForm_longitude');
		
		var marker = new google.maps.Marker({
	    	position: pos,
	    	map: map
	  	});

	  	lastMarker = marker;

		map.setCenter(pos);

	  	//fill the lat and long form fields
  		latField.val(pos.lat);
  		longField.val(pos.lng);
	}

	//init the main map
	function initMainMap() {
		var lat = 47.560408,
			long = 2.633094,
			pos = new google.maps.LatLng(lat, long),
	  		map = new google.maps.Map(document.getElementById('gmaps_canvas'), {
		    	zoom: 5,
		    	center: {lat: lat, lng: long}
		  	});

		if (navigator.geolocation) {
          	navigator.geolocation.getCurrentPosition(
          		function(position) {
		            var lat = position.coords.latitude,
		            	long = position.coords.longitude;

		            pos = {
		            	lat: lat,
		            	lng: long
		            };

		            placeMarker( map, pos );
          		}, 
          		function() {
            		placeMarker( map, map.getCenter() );
          		}
          	);
        }
        else {
        	placeMarker( map, map.getCenter() );
        }

	  	google.maps.event.trigger(map, "resize");

	  	//allow user to place marker
	  	google.maps.event.addListener(map, 'click', function(event) {
			lastMarker.setMap(null);
			lastMarker = null;

			placeMarker(map, event.latLng);
		});
	}



	//load the correct add observation form in the right container
	function initObservationForm() {
		var container = $('#observationForm-container');
		
		container.load(container.data('url'), function() {
			initMainMap();

			//hide the initial loading screen and show the content of the page
			$('#content .hidden').removeClass('hidden');
			$('#content .loader').addClass('hidden');
		});
	}



	initObservationForm();
});
