<?php 
    // WP_Query arguments
    $args = array(
        'posts_per_page'         => $vars['posts_per_page'],
        'category_name'          => $vars['category_name']
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
        echo '<div class=row>';
        while ( $query->have_posts() ) {
            $query->the_post();
            get_atomic_part('/molecules/hb_post.php', 0);
        }
        echo '</div>';
    } else {
        get_atomic_part('/molecules/posts_not_found.php', 0);
    }

    // Restore original Post Data
    wp_reset_postdata();
?>