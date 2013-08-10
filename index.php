<? 
	$title = 'Portfolio';
	$id = 'home';
	require_once('_header.php');
?>

	<section id="hello">
		<div class="container">
			<div class="row">
				<div class="col-2 col-offset-3">
					<img id="logo" src="assets/img/ay-brand-large.png" alt="Abe Yang" />
				</div>
				<div class="col-4">
					<h1>Hello!</h1>
					<p class="lead">My name is <?= c::get('name') ?>, and I'm a <?= c::get('profession') ?> living near <?= c::get('location') ?>. </p>
					<p>I design for <a href="case-study/kareo-explore">interactions across screens</a>, whether it's for the <a href="case-study/turnitin-webapp">web</a> or for <a href="case-study/turnitin-ipad">iOS devices</a>. I design for simplicity, for ease-of-use, and for beauty. But enough talk &mdash; take a look at the case studies below!</p>
				</div>
			</div>			
		</div>
	</section>

	<? foreach ($cases as $case) { ?>

	<section class="hero <?= a::get($case, 'class'); ?>">
		<a href="case-study/<?= a::get($case, 'class'); ?>/" class="cover">
			<h4><?= a::get($case, 'company'); ?></h4>
			<h1><?= a::get($case, 'short'); ?></h1>
			<p>View case study</p>
		</a>		
	</section>

	<? } // end foreach ?>

	<section>
		<div class="row pad top-120">
			<div class="col-12 text-center">
				<h2>That's all folks!</h2>
				<p>More designs and case studies will be coming soon!</p>
			</div>
		</div>		
	</section>

<? require_once('_footer.php') ?>