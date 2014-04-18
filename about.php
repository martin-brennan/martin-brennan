<?php
/*
Template Name: About
*/
?>
<!-- Get the header.php file -->
<?php get_header(); ?>
<div class="content">
	<div class="about-avatar">
		<img style="width:50%" src="<?php bloginfo('stylesheet_directory'); ?>/img/martin-brennan.jpeg" alt="Martin Brennan" />
	</div>
	<h1><?php the_title(); ?></h1>
	<div class="about-content">
		<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
	</div>
<?php get_footer(); ?>