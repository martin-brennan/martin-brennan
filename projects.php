<?php
/*
Template Name: Projects
*/
?>
<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<h1><a href="/projects">Projects</a></h1>
		<input type="hidden" id="hf_templateURL" value="<?php get_bloginfo("template_url"); ?>" />
		<div class="about-content">
			<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
		</div>
		<div class="project-item">
			<h2>imbíbe</h2>
			<div class="mbs medium round floated cat" title="Martin Brennan" style="background-color: #CC5630;">i</div>
			<p>imbíbe is a blog started in 2012 by my good friend and I, Michael Fitz-Payne. We are two liquor connoisseurs and we write cocktail, beer, spirits, wine and bar reviews to provide those interested with an education in liquor and for the sheer enjoyment of our hobby. <a title="imbíbe" href="http://www.imbibeblog.com.au">Visit imbíbe</a>.</p>
		</div>
		<h2>Github Repos</h2>
		<div class="repo-result"></div>
	</div>
<?php get_footer(); ?>