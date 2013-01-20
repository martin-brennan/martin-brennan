<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(''); ?></title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Import stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/highlight/styles/monokai.css" type="text/css" />

		<?php wp_head(); ?>
		<script type="text/javascript">

		  // var _gaq = _gaq || [];
		  // _gaq.push(['_setAccount', 'UA-33676213-1']);
		  // _gaq.push(['_trackPageview']);

		  // (function() {
		  //   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  //   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  //   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  // })();

		</script>
	</head>
	<body>
		<header>
			<img class="round side av" src="http://www.gravatar.com/avatar/e61d50823d8a61ae2e50aa1b62c29ab5?s=90" title="Martin Brennan" />
			<div class="header-main">
				<div class="header-social">
					<a href="http://martin-brennan.com/feed" target="_blank" title="Add Martin Brennan to your RSS Feeds">
						<div class="round head" title="Add Martin Brennan to your RSS Feeds" alt="Add Martin Brennan to your RSS Feeds" style="background-position: -65px -226px; background-color: #ea9522;"></div>
					</a>
					<a href="http://stackoverflow.com/users/875941/martin-brennan" target="_blank" title="Martin Brennan on StackOverflow">
						<div class="round head" title="Martin Brennan on StackOverflow" alt="Martin Brennan on StackOverflow" style="background-position: -65px -182px; background-color: #f6891f;"></div>
					</a>
					<a href="https://github.com/Martin-Brennan" target="_blank" title="Martin Brennan on GitHub">
						<div class="round head" title="Martin Brennan on GitHub" alt="Martin Brennan on GitHub" style="background-position: -65px -673px; background-color: #000;"></div>
					</a>
					<a href="http://twitter.com/mjrbrennandev" target="_blank" title="Martin Brennan on Twitter">
						<div class="round head" title="Martin Brennan on Twitter" alt="Martin Brennan on Twitter" style="background-position: -65px -271px; background-color: #3CAAE4;"></div>
					</a>
					<a href="http://www.imbibeblog.com" target="_blank" title="Beer, wine, cocktail, bar and spirit reviews on imbíbe">
						<div class="round head" title="Beer, wine, cocktail, bar and spirit reviews on imbíbe" alt="Beer, wine, cocktail, bar and spirit reviews on imbíbe" style="background-position: -66px -715px; background-color: #CC5630;"></div>
					</a>
				</div>
				<h1 class="header-title">
					Martin Brennan
				</h1>
				<p class="header-desc">
					Web developer, tech afficinado, liquor connoisseur.
				</p>
			</div>
			<div class="head-line"></div>
			<nav>
				<ul>
					<li><a href="/" title="Home">Home</a>
					<li><a href="/about" title="About">About</a>
					<li><a href="/archive" title="Archive">Archive</a>
					<li><a href="/projects" title="Projects">Projects</a>
				</ul>
				<div class="clearfix"></div>
			</nav>
		</header>