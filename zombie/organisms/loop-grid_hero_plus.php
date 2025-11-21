
<?php
    $queryHome = new WP_Query( $args );

    // The Loop
    if ( $queryHome->have_posts() ) {
        $count = 0;
        
        while ( $queryHome->have_posts() ) {
            $count ++;
            $queryHome->the_post();
            if($count == 1) {
                get_atomic_part('/molecules/hero_post.php', 0);
                echo '<div class="container">';
                echo '<div class="gridposts">';
            }
            else {
                get_atomic_part('/molecules/grid_post.php', 0);
            }
            
        }
        echo '</div></div>';
    } else {
        echo 'No posts are available at this time';
    }

    // Restore original Post Data
    wp_reset_postdata();    
?>
