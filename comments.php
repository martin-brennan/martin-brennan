<!-- Check if there are any comments, and print a different message depending on the number of comments -->
<?php if ( have_comments() ) : ?>
	<h4><?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number() ),number_format_i18n( get_comments_number() ) );?></h4>
<?php else: ?>
	<h4>No comments</h4>
<?php endif; ?>

<!-- List all of the comments -->
<?php wp_list_comments('type=comment&callback=advanced_comment'); ?>

<?php

$defaults = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
    'author' => '<table class="comments-structure"><tr><td style="width: 75px;">' .
    			'<p class="comment-form-author"><strong>' .
                '<label for="author">' . __( 'Name' ) . '</label> ' .
                ( $req ? '<span class="required">*</span></strong></p></td>' : '' ) .
                '<td><p><input id="author" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1"' . $aria_req . ' />' .
                '</p></td></tr><!-- #form-section-author .form-section -->',
    'email'  => '<tr><td>' .
    			'<p class="comment-form-email"><strong>' .
                '<label for="email">' . __( 'Email' ) . '</label> ' .
                ( $req ? '<span class="required">*</span></strong></p></td>' : '' ) .
                '<td><p><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" tabindex="2"' . $aria_req . ' />' .
                '</p></td></tr><!-- #form-section-email .form-section -->',
    'url'    => '<tr><td>' .
    			'<p class="comment-form-url"><strong>' .
                '<label for="url">' . __( 'Website' ) . '</label>' .
                '</strong></p></td><td><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />' .
                '<!-- #<span class="hiddenSpellError" pre="">form-section-url</span> .form-section --></p></td></tr></table>' ) ),
    'comment_field' => '<table class="comments-structure"><tr><td colspan="2"><p class="comment-form-comment"><strong>' .
                '<label for="comment">' . __( 'Comment' ) . '</label></strong></td></tr>' .
                '<tr><td colspan="2"><textarea id="comment" name="comment" cols="45" rows="8" tabindex="4" aria-required="true"></textarea>' .
                '</p><!-- #form-section-comment .form-section --></tr></td></table>',
    'must_log_in' => '
<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>

',
    'logged_in_as' => '
<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%s">%s</a>. <a title="Log out of this account" href="%s">Log out?</a></p>

' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ),
    'comment_notes_before' => '<p class="post-meta">' . __( 'Your email is <em>never</em> published nor shared.' ) . ( $req ? __( ' Required fields are marked <span class="required">*</span>' ) : '' ) . '</p>',
    'comment_notes_after' => '',
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'title_reply' => __( 'Leave a Reply' ),
    'title_reply_to' => __( 'Leave a Reply to %s' ),
    'cancel_reply_link' => __( 'Cancel reply' ),
    'label_submit' => __( 'Post Comment' ),
); ?>

<!-- Check if comments are allowed, if not display a message, if they are allowed display the comments form. -->
<?php if ( ! comments_open() ) : ?>
	<h4>Comments are closed.</h4>
<?php else: ?>
	<?php comment_form($defaults); ?>
<?php endif; ?>