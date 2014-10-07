//For the functions.php file:
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
Usage

//Use [year] in your posts.
