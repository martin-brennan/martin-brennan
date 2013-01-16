<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(''); ?></title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Import stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" type="text/css" />

		<?php wp_head(); ?>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-33676213-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</head>
	<body>
		<header>
			<div class="header-main">
				<h1 class="header-title">
					Martin Brennan
				</h1>
				<p class="header-desc">
					Web developer, tech afficinado, liquor connoisseur.
				</p>
			</div>
			<div class="head-line"></div>
			<nav>

			</nav>
		</header>