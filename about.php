<?php
/*
Template Name: About
*/
?>
<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="ninecol">
				<h1>About</h1>
				<div class="about-stats">
					<img src="http://www.gravatar.com/avatar/e61d50823d8a61ae2e50aa1b62c29ab5?s=266" alt="Martin Brennan" />
				</div>
				<div class="about-content">
					<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				</div>
			</div>
			<div class="threecol last">
<?php get_sidebar(); ?>
<?php get_footer(); ?>