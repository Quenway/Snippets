<!-- The image that shows for the author comes from the email address set for that user
which goes to a corresponding Gravatar. The display name and bio come from the User
settings area in the Admin. -->

<div class="author-box">
   <div class="author-pic"><?php echo get_avatar( get_the_author_email(), '80' ); ?></div>
   <div class="author-name"><?php the_author_meta( "display_name" ); ?></div>
   <div class="author-bio"><?php the_author_meta( "user_description" ); ?></div>
</div>

<!-- That should be all the CSS hooks you need to style up the area however you want.
Note: some of these functions are WordPress 2.8 and newer only. -->
