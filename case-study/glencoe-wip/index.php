<? 
	$index = 4;	// not correct

	require_once('../../_header.php');
?>

<section class="intro">
	<div class="container">
		<h1><?= $title ?></h1>
		<p class="subtitle"><?= a::get($case, 'subtitle') ?></p>

		<img src="dv-1.jpg" alt="Main screenshot" />
	</div>
</section>

<section class="description container">
	<div class="row">		
		<h2 class="text-center">About these projects</h2>
		<div class="col-6 col-offset-3">
			All of these are still works in progress &mdash; showcasing them because we're onto something big!

			<ul>
				<li><a href="#dv">Data (Image) Viewer</a></li>
				<li><a href="#logo">Logo Redesign</a></li>
				<li><a href="#rollup">Data Rollup</a></li>
			</ul>
		</div>
	</div>
	
</section>

<section id="dv">
	<div class="row text-center">
		<h2 class="col-12">Data (Image) Viewer</h2>
		<p class="col-6 col-offset-3 text-left">Based on several internal conversations, it's agreed that the current UI is broken, hard to use, and very difficult to extend out for future features. Thus, my first goal was to provide a framework: a design that can allow for more features (or "modules") to be tacked on in the future, while still remaining true to its form. My secondary goal was to see how some of the ROI (regions of interest) elements would fit inside this framework.</p>
	</div>

	<div class="row text-center">
		<img src="dv-2.jpg" />
		<img src="dv-3.jpg" />
		<img src="dv-4.jpg" />		
	</div>
</section>

<section id="logo" class="illustratorgray">
	<div class="container">
		<div class="row text-center">
			<h2 class="col-12">Logo Redesign</h2>
			<p class="col-6 col-offset-3">Left to right: OME, Omero, Glencoe Software</p>		
			<img src="logos1.png" alt="Logo Redesign" />
			<p class="col-6 col-offset-3 text-left">I wanted a big O to represent <strong>OME</strong>, but I also wanted to incorporate this design to the other logos. I think one thing going for the current logos is that they all share the same overarching design. Thus, I kinda-sorta focused on the "Environment" part of OME &mdash;  both Omero and GS build on top of that, thus this became the shell &mdash;  the unifying symbol &mdash;  for all three logos.</p>
			<p class="col-6 col-offset-3 text-left">I focused on the visualization aspect of <strong>Omero</strong> &mdash;  and a tad on the analysis &mdash;  but rather than drawing cells and such (I've seen some logos based on cells, like the CELL image library... they really don't work), I've decided to make them more abstract.</p>		
			<p class="col-6 col-offset-3 text-left">I tried to bring the <strong>Glencoe</strong> logo back to its roots ("a lovely valley in Scotland"). I interconnected the GS lettering because it's not just Glencoe (hills) and software, but they're together as one: Glencoe Software.</p>			
		</div>
		<hr />
		<div class="row text-center">
			<h2 class="col-12">Design Process</h2>
			<p class="col-6 col-offset-3">From sketches to construction grids</p>		
			<img src="logos-sketch1.jpg" /><br />
			<img src="logos-sketch2.jpg" /><br />
			<img src="logos-process1.jpg" /><br />
			<img src="logos-process2.jpg" />
		</div>
	</div>
</section>

<section id="rollup" class="lightgray">
	<div class="container">
		<div class="row text-center">
			<h2 class="col-12">Data Rollup</h2>
			<p class="col-6 col-offset-3 text-left">Closest project to completion. Coded in HTML5 and uses SASS (<a href="http://bourbon.io/">Bourbon</a> and <a href="http://neat.bourbon.io/">Neat</a> frameworks, in particular). Aside from those frameworks (and a tooltip plugin), everything was designed and developed by me.</p>
			<img src="rollup.jpg" alt="Data Rollup" class="frame" />
		</div>
	</div>
</section>


<? require_once('../../_footer.php') ?>