<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
		
		<!-- Import stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/1140/1140.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/1140/ie.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/1140/styles.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/highlight/styles/github.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/highlight/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
		<script type="text/javascript" src="http://use.typekit.com/daz4wqi.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mb.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/1140/css3-mediaqueries.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
		<div class="row">
			<div class="twelvecol last">
				<div class="header-left">
					<a href="/">
						<div class="head-avatar">
							<img src="http://www.gravatar.com/avatar/e61d50823d8a61ae2e50aa1b62c29ab5?s=50" title="Martin Brennan" alt="Martin Brennan"></img>
						</div>
						<div class="head-martin">
							<h4><strong>Martin Brennan</strong></h4>
							<p class="subtitle">Front and back-end web developer.</p>
						</div>
					</a>
				</div>
				<div class="header-right">
					<ul class="header-nav">
						<li><h4><a href="/">Blog</a></h4></li>
						<li><h4><a href="/about">About</a></h4></li>
						<li><h4><a href="/archive">Archive</a></h4></li>
						<li><h4><a href="http://www.github.com/Martin-Brennan">Github</a></h4></li>
					</ul>
					<div class="clearfix"></div>
					<p class="subtitle">I love web development, and I hope you will too!</p>
				</div>
			</div>
		</div>