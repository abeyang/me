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
  
	<title><?= $title ?> // <?= c::get('name') ?></title>
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

	<link rel="stylesheet" type="text/css" href="<?= url('assets/styles/abeyang.css') ?>" />

	<script type="text/javascript">
	// Gauges
	var _gauges = _gauges || [];
		(function() {
		var t   = document.createElement('script');
		t.type  = 'text/javascript';
		t.async = true;
		t.id    = 'gauges-tracker';
		t.setAttribute('data-site-id', '5206894a613f5d04c4000068');
		t.src = '//secure.gaug.es/track.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(t, s);
	})();

	// Google Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-97361-56', 'abeyang.com');
	ga('send', 'pageview');

	// Mixpanel
	(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
	typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
	b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
	mixpanel.init("f0dfbcdbf8a031c176751d8bd7c4a4e5");

	</script>

	<? else: ?>

	<link rel="stylesheet/less" type="text/css" href="<?= url('assets/styles/abeyang.less') ?>" />
	<script type="text/javascript" src="<?= url('assets/js/less-1.3.3.min.js') ?>"></script>

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
	              <!-- <li><a id="link-resume" href="#">Resume</a></li> -->
	              <li><a id="link-contact" href="mailto:<?= c::get('email'); ?>">Contact</a></li>
	            </ul>              
	        </div>
	    </div>
	    
	</div>  <!-- /.navbar -->