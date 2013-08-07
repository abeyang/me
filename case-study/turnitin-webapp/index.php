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
	<hr />
	<div class="row pad top-15 text-center">
		<h2 class="col-12">Colors</h2>
		<p class="col-8 col-offset-2">With three core products colliding into one &mdash; and with the ability to flip on all three at once &mdash; one of the early decisions that I made was to keep each product confined to a primary color space. They're each allowed to have an accent color, but even then, the accent color is locked down to a product.</p>
		<img src="tii-colors.jpg" alt="Color scheme for TII webapp" />
		
	</div>
</section>


<? require_once('../../_footer.php') ?>