<!-- In a typical WordPress theme you output the entire list of comments for a Post/Page
by using the function wp_list_comments(). This doesn't offer much by the way of
customizing what HTML markup gets generated for that comment list. To write your own
markup for the comment list, you can use a callback function as a parameter in
wp_list_comments(), so it's just as nicely abstracted. -->

//In functions.php
<?php
function my_custom_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   <?php if ($comment->comment_approved == '0') : ?>
      <em><?php _e('Your comment is awaiting moderation.') ?></em>
   <?php endif; ?>

   // Comments markup code here, e.g. functions like comment_text(); 

}
?>

//In comments.php
<?php 
   wp_list_comments("callback=my_custom_comments"); 
?>
