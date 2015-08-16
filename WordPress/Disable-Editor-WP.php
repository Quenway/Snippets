/* Hide editor on specific pages. */
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'Homepage'){ 
    remove_post_type_support('page', 'editor');
  }
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'templates/home.php' && $template_file == 'templates/blog.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}


/* Hide editor on custom post types. */
add_action('init', 'my_rem_editor_from_post_type');
function my_rem_editor_from_post_type() {
    remove_post_type_support('theme', 'editor');
}
