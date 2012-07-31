<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="ninecol">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="post">
			  <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
			  <div class="entrytext">
			   <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			  </div>
			</div>
			<?php endwhile; endif; ?>			
			<div>
				<h2>Archives by Month:</h2>
				<ul class="archive-list">
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

				<h2>Archives by Category:</h2>
				<ul class="archive-list">
					<?php 
						$args = array(
							'title_li' => ''
						);
						wp_list_categories($args); 
					?>
				</ul>
				<h2>Tags</h2>
				<div class="tag-cloud">
					<?php wp_tag_cloud($args = array(
					    'smallest'                  => 12, 
					    'largest'                   => 24,
					    'unit'                      => 'px', 
					    'number'                    => 30,  
					    'format'                    => 'flat',
					    'orderby'                   => 'name', 
					    'order'                     => 'ASC',
					    'exclude'                   => null, 
					    'include'                   => null, 
					    'topic_count_text_callback' => default_topic_count_text,
					    'link'                      => 'view', 
					    'taxonomy'                  => 'post_tag', 
					    'echo'                      => true )); ?>
				</div>
			</div>
		</div>
		<div class="threecol last">
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>