			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.','sheffieldgreens' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<h1 id="express_yourself"><?php
			printf( _n( 'There is One Response to %2$s', 'There are %1$s Responses to %2$s', get_comments_number() ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h1>

<?php if ( get_comment_pages_count() > 1 ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

		<div class="box post-comments">
                
                <div class="content" id="comment-<?php comment_ID(); ?>">

					<?php wp_list_comments( array( 'callback' => 'sgp_comment' ) ); ?>

				</div><!-- #comment-##  -->

		</div>

<?php if ( get_comment_pages_count() > 1 ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.','sheffieldgreens' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>
		
        <h1 id="express_yourself">All comments welcome</h1>
        <p class="express_text"><strong>The Sheffield Green Party welcomes all comments but we will not be held responsible for any user comments. We do reserve the right no to publish comments that may cause offence.</strong></p>
		
        <?php 
ob_start();
$defaults = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
    'author' => '<div class="comment-form-author">' .
	   			'<label for="author">' . __( 'Name','sheffieldgreens' ) . 
				'</label> ' .
                '<input id="author" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30" class="text" />' .
                '</div><!-- #form-section-author .form-section -->',
    'email'  => '<div class="comment-form-email">' .
                '<label for="email">' . __( 'Email','sheffieldgreens' ) . 
				'</label> ' .
                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" class="text" />' .
                '</div><!-- #form-section-email .form-section -->',
    'url'    => '<div class="comment-form-url">' .
                '<label for="url">' . __( 'Website','sheffieldgreens' ) . '</label>' .
                '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" class="text" />' .
                '</div><!-- #form-section-url .form-section -->' ) ),
    'comment_field' => '<div class="comment-form-comment">' .
                '<textarea id="comment" name="comment" cols="" rows=""></textarea>' .
                '</div><!-- #form-section-comment .form-section -->',
				
    'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
    'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%s">%s</a>. <a href="%s" title="Log out of this account">Log out?</a></p>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ),
    'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email addres will <em>not</em> be published nor will it be shared. See our Privacy Policy.','sheffieldgreens' ) . '</p>',
    'comment_notes_after' =>  __( ''),
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'title_reply' => __( '' ),
    'title_reply_to' => __( 'Leave a Reply to %s','sheffieldgreens' ),
    'label_submit' => __( 'Post Comment','sheffieldgreens' ),
); ?>

<?php comment_form($defaults); 
$output = ob_get_contents();
ob_end_clean();

echo str_replace(' id="_wp', ' id="wp', $output);?>

</div><!-- #comments -->
