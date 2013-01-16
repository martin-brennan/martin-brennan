	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<!-- The Loop -->
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<!-- Post thumbnail/image -->
				<?php the_post_thumbnail() ?>
				<!-- Post title -->
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<!-- Post content up until <!--more>-->
				<?php the_content(); ?>
				<!-- Date of the post -->
				<p>Posted on <? the_date(); ?></p>
				<!-- Author of the post -->
				<p>Posted by <? the_author(); ?></p>
				<!-- Get the post author's avatar -->
				<p><?php echo get_avatar( get_the_author_meta('ID'), 64 ); ?></p>
				<!-- Categories of the post -->
				<p>Posted under <?php the_category(', '); ?></p>
				<!-- Edit post link -->
				<p><?php edit_post_link('Edit Post'); ?></p>
				<!-- Post comments -->
				<p><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- Check if there is more than one page of posts, if there are then display the page navigation links -->
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<p><?php next_posts_link('Older Posts'); ?></p>
			<p><?php previous_posts_link('Newer Posts'); ?></p>
		<?php else: ?>
			<p>No newer/older posts</p>
		<?php endif; ?>
	<!-- Get the footer.php file -->
	<?php get_footer(); ?>