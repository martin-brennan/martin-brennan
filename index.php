<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article>				
				<p class="post-meta"><? the_date("l F j, Y"); ?> with <?php comments_popup_link('0 comments', '1 comment', '% comments'); ?>. </p>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<div class="pagination">
			<table style="width:100%;">
				<tr>
					<td style="text-align:left">
						<?php echo get_previous_posts_link(); ?>
					</td>
					<td style="text-align:right">
						<?php echo get_next_posts_link(); ?>
					</td>
				</tr>
			</table>
		</div>
	<?php else: ?>
		<p></p>
	<?php endif; ?>
<?php get_footer(); ?>