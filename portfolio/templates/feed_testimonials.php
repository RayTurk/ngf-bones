<?php
//Design Library Name: Blog
//Description: This is the Prototype Implimentation of the main Blog Feed  It includes a loop of all blog posts and a fully widgetized sidebar.
?>
<!-- Begin Template: Blog -->
<div id="template-blog">
    <?php get_atomic_part ('/molecules/page_title.php', $args);?>
    <div class="container main-content">
        <div class="row testi_feed">
            <?php
            if (have_posts()) { 

                // start the loop
                while (have_posts()) {
                    the_post();
                        get_atomic_part('/molecules/feed-testimonial.php', $args);

                }//
                get_atomic_part('/molecules/pagination-posts.php', $args);
            } 
            else { 
                get_atomic_part('/molecules/posts_not_found.php', $args);
            } // endif; ?>
        </div>
        

    </div>
</div>
<!-- End Template: Blog -->