<?php

require_once('assets/php/kirby.php');
require_once('_CONFIG.php');

$cases = g::get('cases');

// first $index has to be 1, not 0
if ($index) {
	$case = $cases[$index-1];
	$id = a::get($case, 'id');
	$title = a::get($case, 'title');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
	<title><?= $title ?> - <?= c::get('name') ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?= c::get('description') ?>" />
	<meta name="keywords" content="<?= c::get('keywords') ?>" />
	<meta name="robots" content="index, follow" />

	<!-- jQuery -->
	<script type="text/javascript" src="<?= url('/assets/js/jquery-2.0.3.min.js') ?>"></script>
	<script type="text/javascript" src="<?= url('/assets/js/jquery.visible.min.js') ?>"></script>
	<script type="text/javascript" src="<?= url('/assets/js/retina.js') ?>"></script>

	<!-- Using Open Sans: http://www.google.com/fonts#UsePlace:use/Collection:Open+Sans -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<?  $inproduction = c::get('inproduction');
		if ($inproduction): 
	?>

	<link rel="stylesheet" type="text/css" href="<?= url('/assets/styles/abeyang.css') ?>" />

	<? else: ?>

	<link rel="stylesheet/less" type="text/css" href="<?= url('/assets/styles/abeyang.less') ?>" />
	<script type="text/javascript" src="<?= url('/assets/js/less-1.3.3.min.js') ?>"></script>

	<script type="text/javascript">
		less.env = "development";
		less.watch();
	</script>

	<? endif ?>

</head>

<body id="<?= $id ?>">

	<!-- Header -->
	<div class="navbar navbar-fixed-top">
	    <div class="container">
	        <div class="row">
	        	<div class="col-8">
	        		<a class="navbar-brand" href="<?= url(); ?>"><?= c::get('name'); ?></a>
	        	</div>
	            <ul class="nav navbar-nav col-4 pull-right">
	              <li><a href="<?= url(); ?>">Home</a></li>
	              <!-- <li><a href="#">Resume</a></li> -->
	              <li><a href="mailto:<?= c::get('email'); ?>">Contact</a></li>
	            </ul>              
	        </div>
	    </div>
	    
	</div>  <!-- /.navbar -->