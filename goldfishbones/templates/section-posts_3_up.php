 <div id="<?php echo get_sub_field('css_id');?>" class="page_section posts_three_up"> 
    <div class="container">
        <?php
            if (get_sub_field('title') != "") {
                echo '<h2>'.get_sub_field('title').'</h2>';
            }
            // WP_Query arguments
                $args = array(
                    'posts_per_page'         => '3',
                );

                // The Query
                $queryHome = new WP_Query( $args );

                // The Loop
                if ( $queryHome->have_posts() ) {
                    echo '<div class="row">';
                    while ( $queryHome->have_posts() ) {
                        $queryHome->the_post();
                        get_atomic_part('/molecules/hb_post.php', 0);
                    }
                    echo '</div>';
                } else {
                    get_atomic_part('/molecules/posts_not_found.php', 0);
                }

                // Restore original Post Data
                wp_reset_postdata();    
                        
        ?>
        
        
    </div>
</div>