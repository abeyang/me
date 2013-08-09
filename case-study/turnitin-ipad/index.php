<? 
	$index = 2;

	require_once('../../_header.php');
?>

<script type="text/javascript" src="<?= url('/assets/js/jquery.transit.min.js') ?>"></script>
<script type="text/javascript" src="<?= url('/assets/js/bespoke.js') ?>"></script>

<section class="blue intro">
	<div class="container">
		<h1><?= $title ?></h1>
		<div class="subtitle"><?= a::get($case, 'subtitle') ?></div>

		<img src="hero.png" alt="Main screenshot" />
	</div>
</section>

<section class="description container">
	<div class="row">		
		<h2 class="text-center">About this project</h2>
		<p class="col-6 col-offset-2">
			It was quite a challenge to even begin thinking about porting over the webapp into the iPad. The webapp is much more mature and <a href="#">combines three core products into one</a>. Thus, for the initial release of the iPad app, we focused only on the grading capability.
		</p>
		<div class="col-3 small">
			<h3>Related</h3>
			<p><a href="../turnitin-webapp/">Designing for the webapp</a> <i class="icon-double-angle-right"></i></p>
		</div>
	</div>
	
</section>

<section class="sketch">
	<div class="row text-center">
		<h2 class="col-12">Low Fidelity Sketches</h2>
		<p class="col-6 col-offset-3">So many iterations and states were drawn before a pixel even reaches to Photoshop. It helps the creative juices to get pumpin' when things are done freehand and at such a high level.</p>		
	</div>

</section>

<section class="lightgray">
	<div class="container">
		<div class="row text-center">
			<h2 class="col-12">The flow</h2>
			<p class="col-6 col-offset-3">All the pieces of the main workflow &mdash; from drilling down to the right class to finding the right paper, then to marking a paper and then grading &mdash; had to be designed, in both landscape and portrait orientations. </p>		
			<img src="ipad-screenshots.png" alt="iPad app designs" />
		</div>		
		<hr />
		<div class="row text-center">
			<h2 class="col-12">Simple, yet powerful</h2>
			<p class="col-6 col-offset-3">We wanted the marking and highlighting capabilities to be simple, yet it has to pack a punch as well. We worked out a <strong>popover design</strong> that's remarkably easy to use, yet provides the instructor with many editing and grading options.</p>

			<img src="ipad-popovers.png" alt="Popovers" />

			<p class="col-6 col-offset-3 small">
				A "QuickMark" is a saved comment. We provided instructors with canned QuickMarks, but we also give them the ability to save comments as QuickMarks. This allows them to reuse their most common comments easily and speedily.
			</p>
		</div>	
	</div>
		
</section>


<? require_once('../../_footer.php') ?>