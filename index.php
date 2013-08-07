<? 
	$title = 'Welcome';
	$id = 'home';
	require_once('_header.php');
?>

<!-- <div class="container"> -->
	<section id="hello">
		<div class="row">
			<div class="col-8 col-offset-2">
				<h1>Hello!</h1>
				<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
				<p>Hi, this is <strong><?= c::get('name') ?></strong>. <br />
			We do <strong><?= c::get('profession') ?></strong> and we're located in <strong><?= c::get('location') ?></strong>.</p>
			</div>
		</div>		
	</section>
	<section class="turnitin-webapp">
		<a href="#" class="cover">
			<h4>Turnitin</h4>
			<h1>Web app</h1>
			<p>View case study</p>
		</a>	
	</section>
	<section class="turnitin-ipad">
		<a href="#" class="cover">
			<h4>Turnitin</h4>
			<h1>iPad app</h1>
			<p>View case study</p>
		</a>	
	</section>
	<section class="secret">
		<div class="row">
			<a href="#" class="cover">
				<h4>Shhhh...</h4>
				<h1>Secret</h1>
				<p>View case study</p>
			</a>
		</div>		
	</section>
	<section>
		<div class="row">
			<div class="col-12">
				<h1>Hola!</h1>
				<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
				<p>Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
			</div>
		</div>		
	</section>

<!-- </div> -->


<? require_once('_footer.php') ?>