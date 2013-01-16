	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<!-- The Loop -->
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<!-- Post title -->
				<?php the_title(); ?>
				<!-- Post content up until <!--more>-->
				<?php the_content(); ?>
				<!-- Date of the post -->
				<p>Posted on <? the_date(); ?></p>
				<!-- Author of the post -->
				<p>Posted by <? the_author(); ?></p>
				<!-- Categories of the post -->
				<p>Posted under <?php the_category(', '); ?></p>
				<!-- Edit post link -->
				<p><?php edit_post_link('Edit Post'); ?></p>
				<!-- Post comments -->
				<p><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></p>
				<p><?php comments_template(); ?></p>
			<?php endwhile; ?>
		<?php endif; ?>
	<!-- Get the footer.php file -->
	<?php get_footer(); ?>