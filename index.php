<? 
	$title = 'Welcome';
	$id = 'home';
	require_once('header.php');
?>

<div class="container">
	<div class="row">
		<div class="span2 offset1">
			<div class="logo card">
				<div class="face front">
					<?= c::get('initials') ?>
				</div>
				<div class="face back hide">
					Kareo Labs
				</div>				
			</div>
		</div>
		<h1 class="span9">
			Hi, this is <strong><?= c::get('name') ?></strong>. <br />
			We do <strong><?= c::get('profession') ?></strong> and we're located in <strong><?= c::get('location') ?></strong>.
		</h1>
	</div>

	<div class="row projects">
		<div class="span2 offset2">
			<a href="portfolio/prototyping/" class="card">
				<div class="face front">
					Prototyping
				</div>
				<div class="face back hide">
					...
				</div>				
			</a>
		</div>
		<div class="span2">
			<a href="portfolio/ipad/" class="card">
				<div class="face front">
					iPad
				</div>
				<div class="face back hide">
					...
				</div>				
			</a>
		</div>
		<div class="span2">
			<a href="#" class="card">
				<div class="face front">
					Webapp
				</div>
				<div class="face back hide">
					...
				</div>				
			</a>
		</div>
		<div class="span2">
			<a href="#" class="card">
				<div class="face front">
					Website
				</div>
				<div class="face back hide">
					...
				</div>				
			</a>
		</div>
	</div>
</div>


<? require_once('footer.php') ?>