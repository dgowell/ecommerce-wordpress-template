<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

class Custom_Walker_Comment extends Walker_Comment {

/**
* Outputs a comment in the HTML5 format.
*
* @see wp_list_comments()
*
* @param WP_Comment $comment Comment to display.
* @param int $depth Depth of the current comment.
* @param array $args An array of arguments.
*/
protected function html5_comment( $comment, $depth, $args ) {

$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

?>
<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>"
    <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
    <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
        <footer class="comment-meta">
            <div class="comment-author vcard">
                <?php
                        $comment_author_link = get_comment_author_link( $comment );
                        $comment_author_url  = get_comment_author_url( $comment );
                        $comment_author      = get_comment_author( $comment );
                        $avatar              = get_avatar( $comment, $args['avatar_size'] );
                        if ( 0 != $args['avatar_size'] ) {
                            if ( empty( $comment_author_url ) ) {
                                echo $avatar;
                            } else {
                                printf( '<a href="%s" rel="external nofollow" class="url">', $comment_author_url );
                                echo $avatar;
                            }
                        }
                        /*
                         * Using the `check` icon instead of `check_circle`, since we can't add a
                         * fill color to the inner check shape when in circle form.
                         */
                        if ( custom_is_comment_by_post_author( $comment ) ) {
                            printf( '<span class="post-author-badge" aria-hidden="true">%s</span>', custom_get_icon_svg( 'check', 24 ) );
                        }
 
                        /*
                         * Using the `check` icon instead of `check_circle`, since we can't add a
                         * fill color to the inner check shape when in circle form.
                         */
                        if ( custom_is_comment_by_post_author( $comment ) ) {
                            printf( '<span class="post-author-badge" aria-hidden="true">%s</span>', custom_get_icon_svg( 'check', 24 ) );
                        }
 
                        printf(
                            /* translators: %s: comment author link */
                            wp_kses(
                                __( '%s <span class="screen-reader-text says">says:</span>', 'custom' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            '<b class="fn">' . get_comment_author_link( $comment ) . '</b>'
                        );
 
                        if ( ! empty( $comment_author_url ) ) {
                            echo '</a>';
                        }
                        ?>
            </div><!-- .comment-author -->

            <div class="comment-metadata">
                <a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
                    <?php
                                /* translators: 1: comment date, 2: comment time */
                                $comment_timestamp = sprintf( __( '%1$s at %2$s', 'custom' ), get_comment_date( '', $comment ), get_comment_time() );
                            ?>
                    <time datetime="<?php comment_time( 'c' ); ?>" title="<?php echo $comment_timestamp; ?>">
                        <?php echo $comment_timestamp; ?>
                    </time>
                </a>
                <?php
                            $edit_comment_icon = custom_get_icon_svg( 'edit', 16 );
                            edit_comment_link( __( 'Edit', 'custom' ), '<span class="edit-link-sep">&mdash;</span> <span class="edit-link">' . $edit_comment_icon, '</span>' );
                        ?>
            </div><!-- .comment-metadata -->

            <?php if ( '0' == $comment->comment_approved ) : ?>
            <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'custom' ); ?></p>
            <?php endif; ?>
        </footer><!-- .comment-meta -->

        <div class="comment-content">
            <?php comment_text(); ?>
        </div><!-- .comment-content -->

    </article><!-- .comment-body -->

    <?php
            comment_reply_link(
                array_merge(
                    $args,
                    array(
                        'add_below' => 'div-comment',
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'before'    => '<div class="comment-reply">',
                        'after'     => '</div>',
                    )
                )
            );
            ?>
    <?php
    }
}

if ( post_password_required() ) {
    return;
}
?>

    <div id="reviews" class="comments-area section">
        <div class="content container">
            <div class="section">
                <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) :
        ?>
                <h2 class="comments-title">
                    <?php
            $air_head_sweden_comment_count = get_comments_number();
            if ( '1' === $air_head_sweden_comment_count ) {
                printf(
                /* translators: 1: comment count number, 2: title. */
                esc_html( _nx( '%1$s recension för %2$s', '%1$s recensioner för %2$s',
                $air_head_sweden_comment_count, 'comments title', 'air-head-sweden' ) ),
                number_format_i18n( $air_head_sweden_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf( 
                /* translators: 1: comment count number, 2: title. */
                esc_html( _nx( '%1$s recension för %2$s', '%1$s recensioner för %2$s',
                $air_head_sweden_comment_count, 'comments title', 'air-head-sweden' ) ),
                number_format_i18n( $air_head_sweden_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
                </h2><!-- .comments-title -->

                <?php the_comments_navigation(); ?>

                <ul class="comment-list">
                    <?php
            wp_list_comments(
                array(
                    'walker' => new comment_walker(),
                    'style'      => 'ul',
                    'short_ping' => true,
                    'reverse_top_level' => true,
                    'avatar_size' => 0,
                )
            );
            ?>
                </ul><!-- .comment-list -->

                <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() ) :
            ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'air-head-sweden' ); ?></p>
                <?php
        endif;

    endif; // Check for have_comments().

    $comment_author = 'Namn';
    $comment_email = 'Email';
    $args = array(
        // Change the title of the reply section
        'title_reply' => __( 'Skriv ett svar eller en recension', 'textdomain' ),
        'title_reply_to' => __( 'Lämna ett svar', 'textdomain' ),
        'label_submit' => __( 'Skicka in ett svar', 'textdomain'),
        'cancel_reply_link' => '<button class="button ml-4 is-danger is-small">Avbryta svar</button>',
        'comment_field' => '<div class="comment-form-comment field mt-4"><label class="label" for="comment">' . _x(
                'Recension', 'noun' ) . '<span class="required">*<span></label>
            <div class="control"><textarea id="comment" class="textarea" name="comment" cols="45" rows="8"
                    aria-required="true"></textarea></div>
        </div>',
        'comment_notes_before' => 'Ditt e-postmeddelande kommer inte att publiceras',
        'fields' => array(
            //Author field
            'author' => '<div class="field comment-form-author">
                            <label class="label">' . $comment_author . '<span class="required">*<span></label>
                            <div class="control">
                                <input id="author" type="text" class="input" name="author" aria-required="true" placeholder="' . $comment_author .'"></input>
                            </div>
                        </div>',
            //Email Field
            'email' => '<div class="field comment-form-email">
                            <label class="label">' . $comment_email . '<span class="required">*<span></label>
                            <div class="control">
                                <input id="email" class="input" type="email" name="email" placeholder="' . $comment_email .'"></input></div>',
            'cookies' => '',
        ),
        );
    comment_form($args);
    ?>
            </div>
        </div>
    </div><!-- #comments -->