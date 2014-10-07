<?php wp_tag_cloud( array(

    'smallest' => 8,          // font size for the least used tag
    'largest'  => 22,         // font size for the most used tag
    'unit'     => 'px',       // font sizing choice (pt, em, px, etc)
    'number'   => 45,         // maximum number of tags to show
    'format'   => 'flat',     // flat, list, or array. flat = spaces between; list = in li tags; array = does not echo results, returns array
    'orderby'  => 'name',     // name = alphabetical by name; count = by popularity
    'order'    => 'ASC',      // starting from A, or starting from highest count
    'exclude'  => 12,         // ID's of tags to exclude, displays all except these
    'include'  => 13,         // ID's of tags to include, displays none except these
    'link'     => 'view',     // view = links to tag view; edit = link to edit tag
    'taxonomy' => 'post_tag', // post_tag, link_category, category - create tag clouds of any of these things
    'echo'     => true        // set to false to return an array, not echo it

) ); ?>

<!-- The default sizing, if none supplied, for this function is "pt" which is a bit unusual
and often unreliable so make sure you change that parameter to how you size fonts normally on your site. -->

//Less Weird Font Sizing
<!-- Tag clouds accomplish their varied font sizes by applying inline styling to each tag.
The resulting font sizes can be really weird like style='font-size:29.3947354754px;'. -->

<div id="tagCloud">
	<ul>
		<?php
			$arr = wp_tag_cloud(array(
				'smallest'             => 8,                      // font size for the least used tag
				'largest'                => 40,                    // font size for the most used tag
				'unit'                      => 'px',                 // font sizing choice (pt, em, px, etc)
				'number'              => 200,                 // maximum number of tags to show
				'format'                => 'array',            // flat, list, or array. flat = spaces between; list = in li tags; array = does not echo results, returns array
				'separator'          => '',                      //
				'orderby'              => 'name',           // name = alphabetical by name; count = by popularity
				'order'                   => 'RAND',          // starting from A, or starting from highest count
				'exclude'              => '',                      // ID's of tags to exclude, displays all except these
				'include'               => '',                      // ID's of tags to include, displays none except these
				'link'                       => 'view',             // view = links to tag view; edit = link to edit tag
				'taxonomy'         => 'post_tag',    // post_tag, link_category, category - create tag clouds of any of these things
				'echo'                    => true                 // set to false to return an array, not echo it
			));
			foreach ($arr as $value) {
				$ptr1 = strpos($value,'font-size:');
				$ptr2 = strpos($value,'px');
				$px = round(substr($value,$ptr1+10,$ptr2-$ptr1-10));
				$value = substr($value, 0, $ptr1+10) . $px . substr($value, $ptr2);
				$ptr1 = strpos($value, "class=");
				$value = substr($value, 0, $ptr1+7) . 'color-' . $px . ' ' . substr($value, $ptr1+7);
				echo '<li>' . $value . '</li> ';
			}
		?>
	</ul>
</div>


//The result turns this:
<a href='url' class='tag-link-66' title='6 topics' style='font-size:29.3947354754px;'>Tag Name</a>
//into this:

<a href='url' class='color-29 tag-link-66' title='6 topics' style='font-size:29px;'>Tag Name</a>

//Notice the added bonus that the links has a class name of "color-29" now that it didn't before.
//Now you have a hook to colorize tag names based on their size.
