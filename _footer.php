<script type="text/javascript">

// TODO: need to move to separate file later
$(document).ready(function() {

	var lastScrollTop = 0;
	var navbar = $('.navbar');
	layers = $('#webapp .layers');
	
	$(window).scroll(function(event){
	   
		// show navbar on scroll up
		// http://stackoverflow.com/questions/4326845/how-can-i-determine-the-direction-of-a-jquery-scroll-event

		var st = $(this).scrollTop();

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
	   	lastScrollTop = st;
	   	// console.log(lastScrollTop);

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