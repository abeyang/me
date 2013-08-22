<? 
	$index = 5;

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
		<p class="lead col-8 col-offset-2 text-center">Wordpress as a blogging platform is wonderful</p>
		<p class="col-6 col-offset-3">&mdash; but there's severe limitations if you want to use it as a mid-level CMS. My goal for this wordpress theme is not only create something aesthetically pleasing, but it has to be more functional than Wordpress-out-of-the-box, yet simple enough that other groups harness its full power.
		</p>
		<p class="col-3 small">This theme is specifically designed for college campus groups. It's currently being used in at least 8 different groups, spreading across 6 major campuses (including UC Berkeley, UCLA, UC Davis, and University of Minnesota).
		</p>
	</div>
</section>

<section class="isometric">
	<div class="banners">
		<div class="container">
			<div class="row text-center">
				<div class="block col-6 col-offset-3">
					<h2 class="pad top-30">Banner Carousel</h2>
					<p>Taking cues from iTunes, a carousel exists on top of the home page to highlight upcoming events. As a part of this project, I've provided different banner assets to the content writers, while providing a PSD template for subsequent designers.</p>
				</div>
			</div>
		</div>		
	</div>
</section>

<section class="darkblue">
	<div class="container">
		<div class="row text-center gcal">
			<div class="col-6 col-offset-3">
				<h2 class="pad top-30">Google Calendar Integration</h2>
				<p>Wordpress is great in recounting things from the past, but it fails when it comes to pointing to things in the future.</p>
				<p>I've created a PHP framework that hooks Google Calendar and makes it useful for displaying future events. Once the hook is in place, simply add the right notations and the right tags, and it will show up on the website. Magic!</p>
				<p><a href="https://github.com/abeyang/Google-Calendar-PHP">Check out the framework on GitHub <i class="icon-double-angle-right"></i></a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-5">
				<h2 class="pad top-30">Extending Wordpress</h2>
				<p>Not only must the homepage look good, but the inside pages &mdash; the post pages &mdash; must likewise. That's easy enough to do for a designer, but for the average content writer? Not so much.</p>
				<p>Again, Wordpress is limited in providing a good framework for content writers, so we had to create them. Thus, with very little bootup time, anyone can write a post &mdash; and have it look good (and consistent).</p>
				<p>To the right is an example of some (but not all) of the elements that can be placed onto a post page.</p>

				<hr />
				<h2 class="pad top-15">The Grid</h2>
				<p>I typically don't like to employ 16-column grids, but this design called for it. The right rail spans 4 columns, whereas the main content area spans 12, which gives me further flexibility in designing for the elements that reside within.</p>

			</div>
			<div class="col-7">
				<img src="longpage.jpg" alt="a2f website" />
			</div>
		</div>		
	</div>
</section>



<? require_once('../../_footer.php') ?>