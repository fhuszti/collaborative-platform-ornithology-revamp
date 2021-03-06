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



	//init modal used for infos editing
	function initEditModal( button, formName ) {
		var modal_body = $('#profile_infos-edit-modal-body'),
			confirmButton = $('#profile_infos-edit-confirm');

		//when clicking the "edit" button
		button.on('click', function(e) {
			//we clean the modal body
			modal_body.html('');
			
			//start loading animation
			startContentLoading(
				$('#profile_infos-edit-modal').find('.modal-content'),
				[
					$('#profile_infos-edit-modal').find('.modal-footer')
				]
			);

			//we load the correct form inside the modal
			modal_body.load($(e.target).data('url'), function() {
				//link the modal confirm button to the newly loaded form
				confirmButton.attr('form', formName);

	    		//hide the loading screen and show the content
	    		endContentLoading( $('#profile_infos-edit-modal').find('.modal-content') );
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
				//start loading animation
				startContentLoading(
					$('#profile_obs-modal').find('.modal-content'),
					[
						$('#profile_obs-modal').find('.modal-footer')
					]
				);
				
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

	    			//hide the loading screen and show the content
	    			endContentLoading( $('#profile_obs-modal').find('.modal-content') );
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

//hide the initial loading screen and show the content of the page on load finished
$(window).on('load', function() {
	$('#profile_content>.hidden').removeClass('hidden');
	$('#profile_content>.loader').addClass('hidden');
});

(function($) {
  "use strict";
  $.fn.bsPhotoGallery = function(options) {

      var settings = $.extend({}, $.fn.bsPhotoGallery.defaults, options);
      var id = generateId();
      var classesString = settings.classes;
      var classesArray = classesString.split(" ");
      var clicked = {};

      function getCurrentUl(){
        return 'ul[data-bsp-ul-id="'+clicked.ulId+'"][data-bsp-ul-index="'+clicked.ulIndex+'"]';
      }
      function generateId() {
        //http://fiznool.com/blog/2014/11/16/short-id-generation-in-javascript/
        var ALPHABET = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var ID_LENGTH = 4;
        var out = '';
        for (var i = 0; i < ID_LENGTH; i++) {
          out += ALPHABET.charAt(Math.floor(Math.random() * ALPHABET.length));
        }
        return 'bsp-'+out;
      }
      function createModalWrap(){

        if($('#bsPhotoGalleryModal').length !== 0){
          return false;
        }

        var modal = '';
        modal += '<div class="modal fade" id="bsPhotoGalleryModal" tabindex="-1" role="dialog"';
        modal += 'aria-labelledby="myModalLabel" aria-hidden="true">';
        modal += '<div class="modal-dialog modal-lg"><div class="modal-content">';
        modal += '<div class="modal-body"></div></div></div></div>';
        $('body').append(modal);

      }
      function showHideControls(){
        var total = $(getCurrentUl()+' li[data-bsp-li-index]').length;

        if(total === clicked.nextImg){
          $('a.next').hide();
        }else{
          $('a.next').show();
        }
        if(clicked.prevImg === -1){
          $('a.previous').hide();
        }else{
          $('a.previous').show();
        }
      }
      function showModal(){

          var src = $(this).find('img').attr('src');
          var largeImg = $(this).find('img').attr('data-bsp-large-src');
          if(typeof largeImg === 'string'){
                src = largeImg;
          }
          var index = $(this).attr('data-bsp-li-index');
          var ulIndex = $(this).parent('ul').attr('data-bsp-ul-index');
          var ulId = $(this).parent('ul').attr('data-bsp-ul-id');
          var theImg = $(this).find('img');
          var pText = $(this).find('.text').html();        
          var modalText = typeof pText !== 'undefined' ? pText : 'undefined';
          var alt =  typeof theImg.attr('alt') == 'string' ? theImg.attr('alt') : null;
          
          clicked.img = src;
          clicked.prevImg = parseInt(index) - parseInt(1);
          clicked.nextImg = parseInt(index) + parseInt(1);
          clicked.ulIndex = ulIndex;
          clicked.ulId = ulId;


          $('#bsPhotoGalleryModal').modal();

          var html = '';
          var img = '<img src="' + clicked.img + '" class="img-responsive"/>';

          html += img;
          html += '<span class="' + settings.iconClose + ' bsp-close"></span>';
          html += '<div class="bsp-text-container">';
          
          if(alt !== null){
            html += '<h6>'+alt+'</h6>';
          }
          if(typeof pText !== 'undefined'){
            html += '<p class="pText">'+pText+'</p>';
          }        
          html += '</div>';
        
      if(settings.showControl){
            html += '<a class="bsp-controls next" data-bsp-id="'+clicked.ulId+'" href="'+ (clicked.nextImg) + '"><span class="' + settings.iconRight + '"></span></a>';
            html += '<a class="bsp-controls previous" data-bsp-id="'+clicked.ulId+'" href="' + (clicked.prevImg) + '"><span class="' + settings.iconLeft + '"></span></a>';
          }
          $('#bsPhotoGalleryModal .modal-body').html(html);

          manageModalSize(true);

          $('.bsp-close').on('click', closeModal);
          showHideControls();
      }

      function manageModalSize(modal_opening) {
          var dialog = $('#bsPhotoGalleryModal .modal-dialog'),
              img = $('#bsPhotoGalleryModal .modal-body img'),
              imgDOM = img.get(0); //use "get(0)" to get DOM elmt within jquery elmt

          //reset .modal-dialog size to original
          if (dialog.hasClass('modal-lg')) {
            if ( $(window).width() > 900 )
                dialog.width('900px');
            else {
                dialog.width('auto');
                dialog.css('margin-left', 'auto');
                dialog.css('margin-right', 'auto');
            }
          }
          else {
            if ( $(window).width() > 600 )
                dialog.width('600px');
            else {
                dialog.width('auto');
                dialog.css('margin-left', 'auto');
                dialog.css('margin-right', 'auto');
            }
          }

          //set .modal-dialog width to img width
          if ( imgDOM.naturalHeight > imgDOM.naturalWidth ) {
            img.removeClass('img-width').addClass('img-height');
            
            if (!modal_opening) {
              dialog.width(img.outerWidth());
            }
          }
          else if ( imgDOM.naturalHeight == imgDOM.naturalWidth ) {
            img.removeClass('img-height').removeClass('img-width');
            
            if (!modal_opening) {
              dialog.width(img.outerWidth());
            }
          }
          else {
            img.removeClass('img-height').addClass('img-width');
          }
      }

      function closeModal(){
        $('#bsPhotoGalleryModal').modal('hide');
      }

      function nextPrevHandler(){

          var ul = $(getCurrentUl());
          var index = $(this).attr('href');

          var src = ul.find('li[data-bsp-li-index="'+index+'"] img').attr('src');
          var largeImg = ul.find('li[data-bsp-li-index="'+index+'"] img').attr('data-bsp-large-src');
          if(typeof largeImg === 'string'){
                src = largeImg;
          } 
          
          var pText = ul.find('li[data-bsp-li-index="'+index+'"] .text').html();        
          var modalText = typeof pText !== 'undefined' ? pText : 'undefined';
          var theImg = ul.find('li[data-bsp-li-index="'+index+'"] img');
          var alt =  typeof theImg.attr('alt') == 'string' ? theImg.attr('alt') : null;
           
          $('#bsPhotoGalleryModal .modal-body img').attr('src', src);
          manageModalSize(false);

          var txt = '';
          if(alt !== null){
            txt += '<h6>'+alt+'</h6>';
          }
          if(typeof pText !== 'undefined'){
            txt += '<p class="pText">'+pText+'</p>';
          }        
          
          $('.bsp-text-container').html(txt); 

          clicked.prevImg = parseInt(index) - 1;
          clicked.nextImg = parseInt(clicked.prevImg) + 2;

          if($(this).hasClass('previous')){
              $(this).attr('href', clicked.prevImg);
              $('a.next').attr('href', clicked.nextImg);
          }else{
              $(this).attr('href', clicked.nextImg);
              $('a.previous').attr('href', clicked.prevImg);
          }

        showHideControls();
        return false;
      }
      function clearModalContent(){
        $('#bsPhotoGalleryModal .modal-body').html('');
        clicked = {};
      }
      function insertClearFix(el,x){
        var index = (x+1);
        $.each(classesArray,function(e){
           switch(classesArray[e]){
             //large
             case "col-lg-1":
                  if($(el).next('li.clearfix').length == 0){
                    $(el).after('<li class="clearfix visible-lg-block"></li>');
                  }
              break;
             case "col-lg-2":
                if(index%6 === 0){
                  $(el).after('<li class="clearfix visible-lg-block"></li>');
                }
              break;
             case "col-lg-3":
              if(index%4 === 0){
                $(el).after('<li class="clearfix visible-lg-block"></li>');
              }
             break;
             case "col-lg-4":
              if(index%3 === 0){
                $(el).after('<li class="clearfix visible-lg-block"></li>');
              }
             break;
             case "col-lg-5":
             case "col-lg-6":
              if(index%2 === 0){
                $(el).after('<li class="clearfix visible-lg-block"></li>');
              }
             break;
             //medium
             case "col-md-1":
                  if($(el).next('li.clearfix').length == 0){
                    $(el).after('<li class="clearfix visible-md-block"></li>');
                  }
              break;
             case "col-md-2":
                if(index%6 === 0){
                  $(el).after('<li class="clearfix visible-md-block"></li>');
                }
              break;
             case "col-md-3":
              if(index%4 === 0){
                $(el).after('<li class="clearfix visible-md-block"></li>');
              }
             break;
             case "col-md-4":
              if(index%3 === 0){
                $(el).after('<li class="clearfix visible-md-block"></li>');
              }
             break;
             case "col-md-5":
             case "col-md-6":
              if(index%2 === 0){
                $(el).after('<li class="clearfix visible-md-block"></li>');
              }
             break;
             //small
             case "col-sm-1":
                  if($(el).next('li.clearfix').length == 0){
                    $(el).after('<li class="clearfix visible-sm-block"></li>');
                  }
              break;
             case "col-sm-2":
                if(index%6 === 0){
                  $(el).after('<li class="clearfix visible-sm-block"></li>');
                }
              break;
             case "col-sm-3":
              if(index%4 === 0){
                $(el).after('<li class="clearfix visible-sm-block"></li>');
              }
             break;
             case "col-sm-4":
              if(index%3 === 0){
                $(el).after('<li class="clearfix visible-sm-block"></li>');
              }
             break;
             case "col-sm-5":
             case "col-sm-6":
              if(index%2 === 0){
                $(el).after('<li class="clearfix visible-sm-block"></li>');
              }
             break;
             //x-small
             case "col-xs-1":
                  if($(el).next('li.clearfix').length == 0){
                    $(el).after('<li class="clearfix visible-xs-block"></li>');
                  }
              break;
             case "col-xs-2":
                if(index%6 === 0){
                  $(el).after('<li class="clearfix visible-xs-block"></li>');
                }
              break;
             case "col-xs-3":
              if(index%4 === 0){
                $(el).after('<li class="clearfix visible-xs-block"></li>');
              }
             break;
             case "col-xs-4":
              if(index%3 === 0){
                $(el).after('<li class="clearfix visible-xs-block"></li>');
              }
             break;
             case "col-xs-5":
             case "col-xs-6":
              if(index%2 === 0){
                $(el).after('<li class="clearfix visible-xs-block"></li>');
              }
             break;
           }
        });
      }


      this.each(function(i){
        //ul
        var items = $(this).find('li');
        $(this).attr('data-bsp-ul-id', id);
        $(this).attr('data-bsp-ul-index', i);

        items.each(function(x){
          var theImg = $(this).find('img'); 
          insertClearFix(this,x);
          $(this).addClass(classesString);
          $(this).attr('data-bsp-li-index', x);
          theImg.addClass('img-responsive');
          if(settings.fullHeight){
            theImg.wrap('<div class="imgWrapper"></div>');
          }
          if(settings.hasModal === true){
            $(this).addClass('bspHasModal');
            $(this).on('click', showModal);
          }
        });
      });

      if(settings.hasModal === true){
        //this is for the next / previous buttons
        $(document).on('click', 'a.bsp-controls[data-bsp-id="'+id+'"]', nextPrevHandler);
        $(document).on('hidden.bs.modal', '#bsPhotoGalleryModal', clearModalContent);
        //start init methods
        createModalWrap();
      }

      return this;
  };
  /*defaults*/
  $.fn.bsPhotoGallery.defaults = {
    'classes' : 'col-lg-2 col-md-2 col-sm-3 col-xs-4',
    'showControl' : true,
    'hasModal' : true, 
    'fullHeight' : true,
    'iconClose' : 'glyphicon glyphicon-remove-circle',
    'iconLeft' : 'glyphicon glyphicon-chevron-left',
    'iconRight' : 'glyphicon glyphicon-chevron-right'
  };


}(jQuery));
