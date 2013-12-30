	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
	<!-- The Loop -->
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<div class="mbs large round side cat hidden" title="Martin Brennan" style="background-position: -4px -259px; background-color: #f6891f;"></div>
					<input type="hidden" value="<?php echo get_post_meta($post->ID, 'iconcategory', true); ?>"></input>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p class="post-meta">By <? the_author(); ?> on <? the_date(); ?>.
						<?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?>. 
						Posted under <?php the_category(', '); ?>. <?php edit_post_link('Edit Post'); ?>
					</p>
					<!-- Post content up until <!--more>-->
					<?php the_content(); ?>
					<div class="post-share">
						
					</div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- Check if there is more than one page of posts, if there are then display the page navigation links -->
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="pagination">
				<?php echo get_next_posts_link('<div class="mbs large round page" title="Previous" alt="Previous" style="background-color: #E41F66;">1</div>'); ?>
				<?php echo get_previous_posts_link('<div class="mbs large round page" title="Next" alt="Next" style="background-color: #E41F66;">2</div>'); ?>
			</div>
			<div class="clearfix"></div>
		<?php else: ?>
			<p></p>
		<?php endif; ?>
	<!-- Get the footer.php file -->
	<?php get_footer(); ?>
	</div>