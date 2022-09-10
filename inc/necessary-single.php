<?php 

    


/*
* Facebook, Twitter , Google+ and Pinterest social share buttons For Woocommerce Product
*
*/

function my_social_btn() {

   global $post;

   // Get the post's URL that will be shared
   $post_url   = urlencode( esc_url( get_permalink($post->ID) ) );

   // Get the post's title
   $post_title = urlencode( $post->post_title );

   // Compose the share links for Facebook, Twitter and Google+
   $facebook_link    = sprintf( 'https://www.facebook.com/sharer/sharer.php?u=%1$s', $post_url );
   $twitter_link     = sprintf( 'https://twitter.com/intent/tweet?text=%2$s&url=%1$s', $post_url, $post_title );
   $google_plus_link = sprintf( 'https://plus.google.com/share?url=%1$s', $post_url );
   $pinterest_link   = sprintf( 'https://pinterest.com/pin/create/bookmarklet/?media=[post-img]&url=%1$s', $post_url );

   // Wrap the buttons
   $output = '<div id="share-buttons">';

       // Add the links inside the wrapper
       $output .= '<a target="_blank" href="' . $facebook_link . '" class="share-button facebook"><i class="fab fa-facebook"></i></a>';
       $output .= '<a target="_blank" href="' . $twitter_link . '" class="share-button twitter"><i class="fab fa-twitter"></i></a>';
       $output .= '<a target="_blank" href="' . $google_plus_link . '" class="share-button google-plus"><i class="fab fa-google-plus"></i>+</a>';
       $output .= '<a target="_blank" href="' . $pinterest_link . '" class="share-button pinterest"><i class="fab fa-pinterest"></i></a>';

   $output .= '</div>';

   // Return the buttons and the original content
   echo $output;

}

// Remove require field form comment form 

function remove_comment_fields($fields) {
    unset($fields['url']);
    //unset($fields['email']);
    return $fields;
}
add_filter('comment_form_default_fields','remove_comment_fields');


function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );

function halim_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        /* Replace 'halim' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            . _x(
                'Your Name',
                'halim'
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="Your Email"  id="email" name="email"',
        $fields['email']
    );
   

    return $fields;
}
add_filter( 'comment_form_default_fields', 'halim_comment_placeholders' );

function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Comment', 'halim');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field', 20 );

function enable_threaded_comments(){
    if (!is_admin()) {
         if (is_singular() && comments_open() && (get_option('thread_comments') == 1))
              wp_enqueue_script('comment-reply');
         }
    }
    
    add_action('get_header', 'enable_threaded_comments');