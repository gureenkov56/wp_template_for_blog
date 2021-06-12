
<?php 
comment_form([
    'fields' => [
        'author' => '<p class="comment-form-author">
            <label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
            <input id="author" class="comment__text-input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . $html_req . ' />
        </p>',
        'email'  => '<p class="comment-form-email">
            <label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
            <input id="email" class="comment__text-input" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="20" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
        </p>',
        'cookies' => '<p class="comment-form-cookies-consent">'.
            sprintf( '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"%s />', $consent ) .'
            <label for="wp-comment-cookies-consent">'. __( 'Save my name, email, and website in this browser for the next time I comment.' ) .'</label>
        </p>',
    ],
    'comment_field' => '<p class="comment-form-comment">
                            <label for="comment">' . _x('Comment', 'noun') . '</label> 
                        </p> 
                        <p>
                            <textarea id="comment" name="comment" aria-required="true" class="comment__text-area" rows="5"></textarea>
                        </p>'
]);
?>


<?php 
if($comments){?>
    <ul class="commentlist">
        <?php wp_list_comments([
            'style'       => 'ul',
            'avatar_size' => '20px',
            'max_depth'   => 3,
            'page'              => 1,
            'per_page'          => 0,
        ]); ?>
    </ul>
    <?php
}
paginate_comments_links();
?>