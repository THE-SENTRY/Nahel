(($, window, undefined) => {

    'use strict';

    $('html').removeClass('no-js');


   	$(document).ready(function() {
    	$('.carousel').carousel({
      		interval: 6000
    	});
  	});

  	setTimeout(function(){ $('#video-image').fadeIn();}, 32000);
  	setTimeout(function(){ $('#image-radikal').fadeIn();}, 34000);

})(jQuery, window);
