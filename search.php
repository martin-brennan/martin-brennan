<?php
/**
 * Search results page
 */
?>
<?php get_header(); ?>
	<div class="content">
		<div class="row">
			<div class="onecol"></div>
			<div class="tencol">
				<?php if ( have_posts() ): ?>
				<p>Search results for the term <strong>'<?php echo get_search_query(); ?>'</strong></p> 
				<?php while ( have_posts() ) : the_post(); ?>
				<article class="search">
					<h3>
							<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h3>
					<p class="post-meta"><em><?php the_time('l jS F, Y'); ?></em> — <?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?> <?php edit_post_link('Edit Post'); ?></p>
					<p><?php the_excerpt(); ?></p>
				</article>
				<?php endwhile; ?>
				<?php else: ?>
				<p>No results found for <strong>'<?php echo get_search_query(); ?>'</strong></p>
				<?php endif; ?>
			</div>
			<div class="onecol"></div>
		</div>
<?php get_footer(); ?>