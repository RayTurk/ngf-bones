<?php 
//Design Library Name: All Posts Loop
//Description: this is the Loop of all blog posts with pagination, uses the default WP Settings for Query.
?>
<div id="ajax_product">

    <?php
    if (have_posts()) { 
		echo '<div class="row feedposts">';
        
        while (have_posts()) {
            the_post();
			
                get_atomic_part('/molecules/feed_'.get_post_type().'.php', $args);

        }
		echo '</div>';
        get_atomic_part('/molecules/pagination-posts.php', $args);
		
    } 
    else { 
        get_atomic_part('/molecules/posts_not_found.php', $args);
    } // endif; ?>

</div>