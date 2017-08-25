// collection
	
// collection

// recipe
	$(".cocktails.list-recipe").click(function(){
		if ( $('.cocktails.list-recipe').hasClass("active") ){
	        $('.cocktails.list-recipe').removeClass("active");
	    }
	    $(this).addClass("active");
	});
// recipe

// articel
	$(document).ready(function() {
	  	$("#owl-news-articel").owlCarousel({
	 
	    	navigation : true,
		    items: 3,
	    	slideSpeed : 300,
	    	paginationSpeed : 400,
	    	pagination: false,
	    	singleItem:false,
		    navigationText : ["<img src='amadeo/image/chevron-down.png'>","<img src='amadeo/image/chevron-down.png'>"]
	 
	  	});
	})
// articel

// public
	// scroll to target
		$(function() {
		    $('a[href*="#"]:not([href="#"])').click(function() {
		        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		            var target = $(this.hash);
		            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		            if (target.length) {
		                $('html, body').animate({
		                    scrollTop: target.offset().top - 50
		                    }, 1500);
		                return false;
		            }
		        }
		    });
		});
	// scroll to target

	// animate scroll 
		var $animation_elements = $('.animation-element-scroller');
		var $window = $(window);

		function check_if_in_view() {
		  var window_height = $window.height();
		  var window_top_position = $window.scrollTop();
		  var window_bottom_position = (window_top_position + window_height);

		  $.each($animation_elements, function() {
		    var $element = $(this);
		    var element_height = $element.outerHeight();
		    var element_top_position = $element.offset().top;
		    var element_bottom_position = (element_top_position + element_height);

		    //check to see if this current container is within viewport
		    if ((element_bottom_position >= window_top_position) &&
		      (element_top_position <= window_bottom_position)) {
		      $element.addClass('in-view');
		    } else {
		      $element.removeClass('in-view');
		    }
		  });
		}

		$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');
	// animate scroll 
// public
