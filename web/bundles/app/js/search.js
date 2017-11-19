$(function() {

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
			var i = 0,
				value = $(this).val().trim(),
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
				    $('<div class="col-xs-12" href="#bird-modal" data-toggle="modal" data-id="'+result_array[0]+'">'+content+'<hr /></div>').appendTo(resultsDiv);
				    
				    i += 1;
				    if (i >= 50)
				      break;
				}
				//no results
				if ( resultsDiv.html() === '' )
					$(empty_results).removeClass('hidden');
			}
			else {
				$(empty_results).removeClass('hidden');
			}
		});
	}



	initSearchResults();
});
