<? 
	$title = 'Prototyping';
	$id = 'prototyping';
	$com = 'RCM';

	require_once('../../header.php');
	require_once('../../nav.php');
?>

<script type="text/javascript" src="<?= url('/assets/js/video.min.js') ?>"></script>
<script type="text/javascript" src="<?= url('/assets/js/jquery.typer.js') ?>"></script>

<section class="orange intro">
	<div class="container">
		<h1><?= $title ?></h1>
		<div class="subtitle">Task Management System at <?= $com ?></div>

		<img src="hero.png" alt="Main screenshot" />
	</div>
</section>

<section class="description container">
	<div class="row">
		<h2 class="span10 offset1 center">About this project</h2>
		
		<p class="span5 offset1">
			There are two main personas: billers and managers. But within billers, we have different scenarios: some only care about specific functions across multiple accounts, whereas some care about all functions within a single account. Thus, the interface must be nimble; it has to satisfy the manager, who wants to see all outstanding tasks across all accounts, while still be useful for all walks of billers.
		</p>
		<p class="span5">
			Even though I prefer <a href="#">Photoshop for designing high-fi mockups</a>, there comes a point when Photoshop is just not enough. What happens when you filter or sort? What happens when you click on a task? How would this look with 10 users? With 100? Touching code directly gave me better control over the data, as well as the ability to make vast changes rather quickly.
		</p>
	</div>
</section>

<section class="spec lightgray">
	<div class="container">
		<div class="row">
			<div id="typer" class="span12" data-typer-targets='
    { "targets" : ["Photoshop is great for changing layouts quickly ","Photoshop is great for making design patterns","Photoshop is great for designing from scratch","Photoshop is NOT great for making quick changes across large data sets","Prototyping is AWESOME for making quick changes across large data sets","Prototyping is AWESOME for dealing with different permutations","Prototyping is AWESOME for getting a good feel of workflows across pages"]}'>Photoshop is great for making quick layout changes</div>
		</div>
	</div>
</section>

<section class="video black">
	<div class="container">
		<div class="row">
			<div class="span12 center">
				<h2>Connecting the dots</h2>
				<div class="subtitle">
					<em>Interactions Photoshop can only dream about</em>
				</div>
			</div>

			<div class="browser span10 offset1">
				<div class="browser-content">
					<!-- http://videojs.com/tag-builder/ -->
					<video id="screencast" class="video-js vjs-default-skin" width="770" height="378" poster="screencast.png" preload="metadata" data-setup="{}">
						<source type="video/mp4" src="screencast.mp4">
						<source type="video/webm" src="screencast.webm">
					</video>					
				</div>
			</div>	


			<div class="span6 offset3">
				<p>Everything was built on top of <strong>HTML5</strong> and <strong>CSS3</strong> (more specifically, using <strong>LESS</strong> and <strong>Twitter Bootstrap</strong>). Data was stored in <strong>JSON</strong> objects, which were then manipulated and made useful via <strong>Angular JS</strong>.</p>

				<p><a href="#">Play around with the live demo</a> <i class="icon-double-angle-right"></i></p>
			</div>
		</div>
	</div>
</section> 

<script>
	$(window).scroll(function(event) {
		if($('#typer').visible(false)) {
			$('[data-typer-targets]').typer();
		}

		// make sure video is only played once
		if($('#screencast').visible(false) && !$('#screencast').hasClass('alreadyplayed')) {
			$('#screencast').addClass('alreadyplayed');
			_V_('screencast').play();
		}
	  
	});
</script>

<? require_once('../../footer.php') ?>