<div class="container">
<?php
    $args['orderby'] = 'rand';
    $queryHome = new WP_Query( $args );
    
    // The Loop
    if ( $queryHome->have_posts() ) {
        echo '<div class="slider">';
        while ( $queryHome->have_posts() ) {
            $queryHome->the_post();
            get_atomic_part('/molecules/grid_testimonial.php', 0);
        }
        echo '</div>';
    } else {
        echo 'No posts are available at this time';
    }

    // Restore original Post Data
    wp_reset_postdata();    
?>
    
</div>