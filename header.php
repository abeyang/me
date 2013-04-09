<?php

require_once('kirby.php');
require_once('CONFIG.php');

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
	<script type="text/javascript" src="<?= url('/assets/js/jquery-1.9.1.min.js') ?>"></script>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,400italic|Gabriela' rel='stylesheet' type='text/css'>

	<?  $inproduction = c::get('inproduction');
		if ($inproduction): 
	?>

	<link rel="stylesheet" type="text/css" href="<?= url('/assets/styles/abeyang.bootstrap.css') ?>" />

	<? else: ?>

	<link rel="stylesheet/less" type="text/css" href="<?= url('/assets/styles/abeyang.bootstrap.less') ?>" />
	<script type="text/javascript" src="<?= url('/assets/js/less-1.3.3.min.js') ?>"></script>

	<script type="text/javascript">
		less.env = "development";
		less.watch();
	</script>

	<? endif ?>

</head>

<body id="<?= $id ?>">
