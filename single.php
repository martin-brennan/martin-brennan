	<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="row" style="overflow: visible !important;">
			<div class="ninecol">
				<!-- The Loop -->
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<!-- Post title -->
						<h1><?php the_title(); ?></h1>
						<p class="post-meta">Posted on <strong><? the_date(); ?></strong> by <strong><? the_author(); ?></strong>. <strong><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></strong>. Posted under <?php the_category(', '); ?>.</p>
						<br/>
						<!-- Post content -->
						<?php the_content(); ?>
						<!-- Edit post link -->
						<p><?php edit_post_link('Edit Post'); ?></p>
						<!-- Post comments -->
						<p><?php comments_template(); ?></p>
						<p>Allowed tags are <code>&lt;a&gt;, &lt;acronym&gt;, &lt;blockquote&gt;, &lt;cite&gt;, &lt;abbr&gt;, &lt;p&gt;, &lt;abbr&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;pre&gt;, &lt;code&gt;.</code> For multiline code blocks, use <code>&lt;pre&gt;&lt;code&gt;&lt;/code&gt;&lt;/pre&gt;.</code>
						</p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		<div class="threecol last">
	<!-- Get the footer.php file -->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>