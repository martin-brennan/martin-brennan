	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="row">
			<div class="ninecol">
				<!-- The Loop -->
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php if(!has_post_format('aside')) { ?>
							<div class="post-box">
								<!-- Post thumbnail/image -->
								<?php the_post_thumbnail() ?>
								<!-- Post title -->
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<p class="post-meta">
									<? the_date(); ?> - 
									<strong>
										<?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?>
									</strong>
									<?php edit_post_link(' - Edit Post'); ?>
								</p>
								<div class="post-share"><?php dd_fblike_generate('Like Button Count') ?><?php dd_twitter_generate('Compact','twitter_username') ?><?php dd_google1_generate('Compact (20px)') ?></div>
								<!-- Post content up until more -->
								<?php the_content("Read more&hellip;"); ?>
								<!-- Categories of the post -->
								<p class="post-meta">Posted under <?php the_category(', '); ?></p>
							</div>
							<?php } ?>
							<?php if(has_post_format('aside')) { ?>
							<div class="post-box-aside">
								<!-- Post thumbnail/image -->
								<?php the_post_thumbnail() ?>
								<!-- Post title -->
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<p class="post-meta">
									<? the_date(); ?> - 
									<strong>
										<?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?>
									</strong>
									<?php edit_post_link(' - Edit Post'); ?>
								</p>
								<div class="post-share"><?php dd_fblike_generate('Like Button Count') ?><?php dd_twitter_generate('Compact','twitter_username') ?><?php dd_google1_generate('Compact (20px)') ?></div>
								<!-- Post content up until more -->
								<?php the_content("Read more&hellip;"); ?>
								<!-- Categories of the post -->
								<p class="post-meta">Posted under <?php the_category(', '); ?></p>
							</div>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<!-- Check if there is more than one page of posts, if there are then display the page navigation links -->
					<?php if ( $wp_query->max_num_pages > 1 ) : ?>
						<p><?php next_posts_link('Older Posts'); ?></p>
						<p><?php previous_posts_link('Newer Posts'); ?></p>
					<?php else: ?>
						<p>No newer/older posts</p>
					<?php endif; ?>
				</div>
			<div class="threecol last">
	<!-- Get the footer.php file -->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>