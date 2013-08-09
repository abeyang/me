<? 
	$index = 3;

	require_once('../../_header.php');
?>

<script type="text/javascript" src="<?= url('/assets/js/video.min.js') ?>"></script>

<section class="intro">
	<div class="container">
		<h1><?= $title ?></h1>
		<p class="subtitle"><?= a::get($case, 'subtitle') ?></p>

		<img src="hero.png" alt="Main screenshot" />
	</div>
</section>

<section class="description container">
	<div class="row">
		<div class="col-4 col-offset-2">
			<h2>About this project</h2>
			<p>
				Apart from the daily tasks of improving the core product, a good chunk of time was spent on thinking and reimagining what the next-in-class Practice Management system might be.
			</p>
		</div>	
		
		<div class="col-4">
			<h2>My role</h2>
			<p>
				After talking to product managers, back-office billers, front-office managers, and professionals in-the-know, I've come with different designs and concept over the period of eight months.
			</p>
		</div>	
		
	</div>
</section>

<section class="spec lightgray">
	<div class="container">
		<div class="row text-center">
			<div class="col-6 col-offset-3">
				<h2>Round 1</h2>
				<p>Trying out different designs for size. This process is mostly a visual facelift to our existing service (purposefully ignoring the IA for this round).</p>		
			</div>
			<img src="explore-spec1.png" alt="Visual facelift" />
		</div>		
		<hr />
		<div class="row pad top-15">
			<h2 class="col-6 col-offset-3 text-center">Round 2</h2>
			<p class="col-5 col-offset-2">Prototyped a specific interaction piece. We wanted to see how filtering might work, and what drilling in to specific tasks might look like.</p>		
			<p class="col-3 small"><strong>Twitter Bootstrap</strong> was used as the main templating tool. Data was stored in <strong>JSON</strong> objects, which were then manipulated and made useful via <strong>Angular JS</strong>.
				<!-- <p><a href="#">Play around with the live demo</a> <i class="icon-double-angle-right"></i></p> -->
			</p>
		</div>		
	</div>
</section>

<section class="video black">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<h2>Round 3</h2>
				<p>Prototype designed in Photoshop and then animated in After Effects, demonstrating capabilities (and animations) that would have been hard to recreate in HTML/CSS given the tight deadline.</p>				
			</div>
			<div class="col-8">
				<iframe src="http://player.vimeo.com/video/72023942?title=0&amp;byline=0&amp;portrait=0" width="705" height="490" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
		</div>

		<hr />

		<div class="row mockup pad top-15">
			<div class="col-3">
				<h2>Round 4</h2>
				<p>Similar to Round 2, this was prototyped with HTML, CSS, and javascript. However, unlike Round 2, the point of this prototype was to show a bit of <strong>delightfulness</strong>; using a mixture of CSS3 and JQuery chaining events, certain portions of the UI move and animate based on specific actions.</p>
			</div>
		</div>
			
			
		</div>
	</div>
</section> 

<? require_once('../../_footer.php') ?>