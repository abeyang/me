<? 
	$index = 4;

	require_once('../../_header.php');
?>

<section class="intro">
	<div class="container">
		<h1><?= $title ?></h1>
		<p class="subtitle"><?= a::get($case, 'subtitle') ?></p>

		<img src="hero.png" alt="Gracepoint websites" />
	</div>
</section>

<section class="description container">
	<div class="row">
		<h1 class="text-center">About this project</h1>
		<p class="lead col-8 col-offset-2 text-center">Whenever I would go to a new city, I'm always frustrated by my experience whenever I look at a church website; they never seem to have what I'm looking for.</p>
		<p class="col-4 col-offset-2">Or, even if they do have the information, it takes a while sleuthing through the myriad of pages just to find the right information.
		</p>
		<p class="col-4">So, with this site, I wanted to make it simple, perculate all the relevant info to the homepage, and showcase the attended audience via <strong>big</strong> photos.
		</p>
	</div>
</section>

<section class="lightgray">
	<div class="container">
		<div class="row text-center">
			<h2 class="col-12 pad top-30">Play Responsively</h2>
			<p class="col-6 col-offset-3">With 12% of the viewers coming to the site via their smartphones, it's absolutely critical that their experience is just as good &mdash; if not better &mdash; than that on the desktop.</p>
			<img src="websites-responsive.png" alt="Gracepoint website in standard desktop and mobile viewports" />
		</div>
		<hr />
		<div class="row">
			<div class="col-5">
				<h2 class="pad top-30">The Grid</h2>
				<p>Twelve columns for the regular and extra-wide desktop views. It responsively collapses down as the viewport size decreases (from tablet down to smartphone).</p>

				<hr />
				<h2 class="pad top-15">No CMS</h2>
				<p>Not only does it not utilize a CMS, but there's no database hooked up, either. That's all by design; weighing in at four pages, this featherweight website is "controlled" by a single config (PHP) file.</p>

				<hr />
				<h2 class="pad top-15">Check it out</h2>
				<p>Play around with the <a href="http://gracepointriverside.org/">live site</a> <i class="icon-double-angle-right"></i></p>
			</div>
			<div class="col-7">
				<img src="websites-grid.png" alt="The Grid" />
			</div>
		</div>		
	</div>
</section>



<? require_once('../../_footer.php') ?>