<? 
	$title = 'Web app Design';
	$id = 'webapp';
	$com = 'Turnitin';

	require_once('../../_header.php');
	// require_once('../../nav.php');
?>

<!--<script type="text/javascript" src="<?= url('/assets/js/jquery.transit.min.js') ?>"></script>-->

<section class="turnitin-webapp intro thin">
	<div class="container">
		<h1><?= $title ?></h1>
		<div class="subtitle">Consolidating three products into one</div>

		<img src="hero.png" alt="Main screenshot" />
	</div>
</section>

<section class="thin">
	&nbsp;
</section>

<section class="description container">
	<div class="row">
		<div class="col-4 col-offset-2">
			<h2 >About this project</h2>
			<p>
				It was quite a challenge to even begin thinking about porting over the webapp into the iPad. The webapp is much more mature and <a href="#">combines three core products into one</a>; there's no way we can cram all that into the iPad &mdash; at least, not for the initial release.				
			</p>
		</div>
		
		<div class="col-4">
			<h2>My role</h2>
			<p><a href="#">Designing for the <?= $com ?> webapp</a> <i class="icon-double-angle-right"></i></p>
		</div>
	</div>
	<!-- <hr /> -->
</section>

<section class="blue">
	<div class="row text-center">
		<h2 class="col-12">Architecture</h2>
		<p class="col-6 col-offset-3">Before dabbing into the visuals, a lot of thought was poured into the architecture of the app. It has to be able to switch across three separate products, yet they must all feel very similar to one another. </p>
		<img src="webapp-blueprint.png" alt="IA comes first" />
	</div>
</section>

<section class="lightgray layers">
	<div class="container">
		<div class="row pad top-30">
			<div class="col-6">
				<h2>One mode at a time</h2>
				<p>&mdash; yet, highlights and marks from all three products can be visible at once. For example, an instructor who's grading (inside <strong>GradeMark</strong>) may want to see the parts of the paper that might be heavily borrowed from another source, so she'll also toggle on <strong>Originality</strong>. </p>		
			</div>
		</div>		
	</div>
	
	<div class="abs base">
		<img src="tii-layer-base.png" />
		<div class="abs level1">
			<img src="tii-layer-pm.png" />
			<div class="abs level2">
				<img src="tii-layer-gm.png" />
				<div class="abs level3">
					<img src="tii-layer-or.png" />			
				</div>
			</div>
		</div>
	</div>
	
</section>

<section class="description container">
	<div class="row pad top-15 text-center">
		<h2 class="col-12">Colors</h2>
		<p class="col-8 col-offset-2"><em>Because</em> all three products can be toggled on at once, one of the early decisions that I made was to keep each product confined to a primary color space, with the option of having one (and only one) accent color.</p>
		<img src="tii-colors.jpg" alt="Color scheme for TII webapp" />
	</div>
	<hr />
	<div class="row text-center">
		<h2>Sidebars</h2>
		<p class="col-8 col-offset-2">Multiple actions &mdash; or states &mdash; are associated with each product. Rather than showcasing all of them as free-floating HUDs, I borrowed design patterns established from the iPhone, and kept all functionality inside the sidebar.</p>
		<img src="webapp-sidebars.png" alt="Color scheme for TII webapp" />
	</div>
</section>

<? require_once('../../_footer.php') ?>