<?php add_theme_support( 'post-thumbnails' ); ?>
<?php function advanced_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div class="comment-author-avatar">
		<?php echo get_avatar($comment,$size='64'); ?>
	</div>
	<div class="comment-item-wrap">
		<div class="comment-meta">
			<h4><a href="<?php the_author_meta( 'user_url'); ?>"><?php printf(__('%s'), get_comment_author_link()) ?></a></h4>
			<p class="subtitle">Posted <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?></p>
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
	       <em><?php _e('Your comment is awaiting moderation.') ?></em>
	       <br />
	    <?php endif; ?>

	    <div class="comment-text">	
	         <?php comment_text() ?>
	    </div> 
	    <div class="reply">
	      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	    </div>
	</div>
	<div class="clearfix"></div>
<?php
	} 
?>
<?php
// Show the tags if the comments are allowed in post/page
add_filter('comments_open','eg_allow_tags_in_comments');
// For making it sure, we also force the tags again before comment approval
add_filter('pre_comment_approved','eg_allow_tags_in_comments');
function eg_allow_tags_in_comments($data) {
  // This variable is in wp-includes/kses.php file, check it out
  global $allowedtags;

  // You can add HTML tags and their properties by this way
  // Don't force too much, there is a reason they are not allowed
  $allowedtags['pre'] = array('class'=>array());

  // And we return our expanded data for comment approval
  return $data;
}
?>