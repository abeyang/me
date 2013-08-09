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
		<div class="row text-center pad top-15">
			<h2 class="col-6 col-offset-3">Round 2</h2>
			<p>...</p>		
			<div class="col-6 col-offset-3">
				<p>Everything was built on top of <strong>HTML5</strong> and <strong>CSS3</strong> (more specifically, using <strong>LESS</strong> and <strong>Twitter Bootstrap</strong>). Data was stored in <strong>JSON</strong> objects, which were then manipulated and made useful via <strong>Angular JS</strong>.</p>

				<p><a href="#">Play around with the live demo</a> <i class="icon-double-angle-right"></i></p>
			</div>
		</div>		
	</div>
</section>

<section class="video black">
	<div class="container">
		<div class="row">
			<div class="col-12 center">
				<h2>Round 3</h2>
				<p>asdf</p>
			</div>

			VIMEO VIDEO HERE
			
		</div>
	</div>
</section> 

<? require_once('../../_footer.php') ?>