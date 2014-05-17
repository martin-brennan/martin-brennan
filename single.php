	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="content">
	<!-- The Loop -->
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p class="post-meta">By <? the_author(); ?> on <? the_date(); ?>.
						<?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?>. 
						Posted under <?php the_category(', '); ?>. <?php edit_post_link('Edit Post'); ?>
					</p>
					
					<!-- Post content up until <!--more>-->
					<?php the_content(); ?>

					<!-- Post comments -->
					<p><?php comments_template(); ?></p>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- Get the footer.php file -->
		<?php get_footer(); ?>
	</div>