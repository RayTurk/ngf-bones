<div class="container">
<?php
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
        echo 'No posts are available at this time';
    }

    // Restore original Post Data
    wp_reset_postdata();    
?>
</div>