<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<div class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div class="post">
	  <h1 id="post-<?php the_ID(); ?>"><a href="/archive"><?php the_title();?></a></h1>
	  <div class="entrytext">
	   <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	  </div>
	</div>
	<?php endwhile; endif; ?>			
	<div>
		<h2>Sequential Archives</h2>
		<?php $archive_query = new WP_Query('showposts=1000');
			while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
			<div class="archive-item">
				<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> on <?php the_date("l F j, Y") ?></p>
			</div>
		<?php endwhile; ?>
		<h2>Archives by Category</h2>
		<?php 
		  $categories=  get_categories(); 
		  foreach ($categories as $category) {
		  	$item = '<div class="archive-item">';
			$item .= '<p><a href="/category/'.$category->category_nicename.'" rel="bookmark" title="Category for '.$category->cat_name.'">'.$category->cat_name.'</a>';
			$item .= ' ('.$category->category_count.')</p>';
			$item .= '</div>';
			echo $item;
		  }
		?>
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
<?php get_footer(); ?>