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
