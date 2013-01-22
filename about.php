<?php
/*
Template Name: About
*/
?>
<!-- Get the header.php file -->
<?php get_header(); ?>
<div class="container">
	<div class="about-me">
		<img src="http://www.gravatar.com/avatar/e61d50823d8a61ae2e50aa1b62c29ab5?s=900" alt="Martin Brennan" style="height: 266px; width: 266px;" />
		<h1>Martin Brennan</h1>
	</div>
	<div class="about-content">
		<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>