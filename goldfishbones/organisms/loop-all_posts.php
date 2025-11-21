<?php 
//Design Library Name: All Posts Loop
//Description: this is the Loop of all blog posts with pagination, uses the default WP Settings for Query.
?>
<div class="row feedposts">
    <?php
    if (have_posts()) { 

        // start the loop
        while (have_posts()) {
            the_post();
                get_atomic_part('/molecules/feed-post.php', $args);

        }//
        get_atomic_part('/molecules/pagination-posts.php', $args);
    } 
    else { 
        get_atomic_part('/molecules/posts_not_found.php', $args);
    } // endif; ?>
</div>