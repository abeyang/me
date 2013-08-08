<script type="text/javascript">

// TODO: need to move to separate file later
$(document).ready(function() {

	var lastScrollTop = 0;
	var navbar = $('.navbar');
	var layers = $('#webapp .layers');
	
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

	   	// visibility stuff
	   	if (layers.visible(false) && !layers.hasClass('alreadyplayed')) {
	   		layers.addClass('alreadyplayed');
	   		layers.find('img').animate({right:'10%'}, 1000, function() {
	   			layers.find('.level1').animate({right:'20%'}, 1000, function() {
	   				layers.find('.level2').animate({right:'30%'}, 1000, function() {
	   					layers.find('.or').animate({right:'40%'}, 1000, function() {});
	   				});
	   			});
	   		});

	   	}
	});
	

});

</script>

</body>
</html>