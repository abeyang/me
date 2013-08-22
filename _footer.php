<?php

// first $index has to be 1, not 0
if ($index) {
	// logic for prev/next buttons
	$lastindex = sizeof($cases)-1;
	$currentindex = $index-1;
	$nextindex = ($currentindex==$lastindex) ? 0 : $index;
	$previndex = ($currentindex) ? $currentindex-1 : $lastindex;

	// todo: show buttons
}

// $id of button to make, $class = {left, right}
function makeButton($id, $class) {
	// todo: fill in html here
}

?> 

<script type="text/javascript" src="<?= url('assets/js/retina.js') ?>"></script>
<script type="text/javascript">

$(document).ready(function() {

	<? if ($inproduction): ?>
	mixpanel.track('<?= $title ?>');
	mixpanel.track_links('link-resume', 'clicked Resume');
	mixpanel.track_links('link-contact', 'clicked Contact');
	<? endif ?>

	var lastScrollTop = 0;
	var navbar = $('.navbar');
	layers = $('#webapp .layers');
	
	$(window).scroll(function(event){
	   
		// show navbar on scroll up
		// http://stackoverflow.com/questions/4326845/how-can-i-determine-the-direction-of-a-jquery-scroll-event

		var st = $(this).scrollTop();
	   	
	   	if (st > 50) {
   			if (st > lastScrollTop) {
   		       // downscroll code
   				if (!navbar.hasClass('slideaway')) {
   					navbar.addClass('slideaway');
   				}
   		   	} else {
   		      // upscroll code
   		    	if (navbar.hasClass('slideaway')) {
   					navbar.removeClass('slideaway');
   				}
   		   	}
	   	}

	   	lastScrollTop = st;
	   	
	   	// visibility stuff
	   	if (layers.length) {
   		   	if (layers.visible(false) && !layers.hasClass('alreadyplayed')) {
   		   		layers.addClass('alreadyplayed');

   		   		layers.children('.base').addClass('breakout').delay(1000).queue(function(nxt) {
					$(this).children('.level1').addClass('breakout').delay(1000).queue(function(nxt) {
							$(this).children('.level2').addClass('breakout').delay(1000).queue(function(nxt) {
									$(this).children('.level3').addClass('breakout');
									nxt();
								});
							nxt();
						});
					nxt();
				});
   		   	}
	   	}

	});
	

});

</script>

</body>
</html>