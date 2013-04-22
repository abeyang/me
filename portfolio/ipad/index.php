<? 
	$title = 'iPad Design';
	$id = 'ipad';
	$com = 'Turnitin';

	require_once('../../header.php');
	require_once('../../nav.php');
?>

<script type="text/javascript" src="<?= url('/assets/js/jquery.transit.min.js') ?>"></script>
<script type="text/javascript" src="<?= url('/assets/js/bespoke.js') ?>"></script>

<section class="blue intro">
	<div class="container">
		<h1><?= $title ?></h1>
		<div class="subtitle">Bringing <?= $com ?>'s flagship product to the iPad</div>

		<img src="hero.png" alt="Main screenshot" />
	</div>
</section>

<section class="description container">
	<h2 class="center">About this project</h2>

	<div class="row">		
		<p class="span6 offset3">
			It was quite a challenge to even begin thinking about porting over the webapp into the iPad. The webapp is much more mature and <a href="#">combines three core products into one</a>; there's no way we can cram all that into the iPad &mdash; at least, not for the initial release.				
		</p>
		<div class="span3 small">
			<h3>Related</h3>
			<p><a href="#">Designing for the <?= $com ?> webapp</a> <i class="icon-double-angle-right"></i></p>
		</div>
	</div>
	
	<div class="row">
		<p class="span6 offset3">
			Thus, we had to set out a clear MVP for ourselves when it came to the iPad. So, we decided to start simple. Let's shed the various layers of complexity that came along with the webapp, and start afresh. This is what we came up with, and here is the process for my designs.
		</p>
		<div class="span3 small">
			<h3>Release plans</h3>
			<ol>
				<li>Sync with accounts and view papers (read-only)</li>
				<li>Stamping final grade to papers, with general feedback</li>
				<li>Marking paper</li>
				<li>Originality Report</li>
			</ol>
		</div>
	</div>
</section>

<section class="sketch">
	<div class="slug">
		Before even touching Photoshop, I sketched and sketched.
		<br />For any given design, we went through dozens of iterations.
	</div>
</section>

<section class="hifi">
	<div class="title">
		<h2>High Fidelity Mockups</h2>
		<p class="subtitle">Designed with love in Photoshop</p>		
	</div>
	
	<article class="classic">
		<section>Slide 1</section>
		<section>Slide 2</section>
		<section>Slide 3</section>
		<section>Slide 4</section>
		<section>Slide 5</section>
		<section>Slide 6</section>
		<section>Slide 7</section>
	</article>
</section>

<script>

	$(document).ready(function() {
		bespoke.horizontal.from('.classic');
		$(window).scroll(function(event) {

			// make sure text only appears once
			// display: none doesn't work well with fn.visible(), thus we need to utilize opacity
			var el = $('.slug');
			if(el.visible(false) && !el.hasClass('alreadyplayed')) {
				el.addClass('alreadyplayed').transition({y:-50, opacity:100});
			}	

		});  
  	});
</script>

<? require_once('../../footer.php') ?>