<script type="text/javascript">

// TODO: need to move to separate file later
$(document).ready(function() {

	// http://stackoverflow.com/questions/4326845/how-can-i-determine-the-direction-of-a-jquery-scroll-event

	var lastScrollTop = 0;
	var navbar = $('.navbar');
	
	$(window).scroll(function(event){
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
	});

});

</script>

</body>
</html>