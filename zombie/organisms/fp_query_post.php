<div class="firstpost">
    <h2><?php echo get_sub_field('first_post_headline') ;?></h2>
    <?php
    // WP_Query arguments
    $args = array(
        'posts_per_page'         => '1',
    );

    // The Query
    $queryFirst = new WP_Query( $args );

    // The Loop
    if ( $queryFirst->have_posts() ) {
        while ( $queryFirst->have_posts() ) {
            $queryFirst->the_post();
            get_atomic_part('/molecules/fp_post.php', $args);
        }
    } else {
        get_atomic_part('/molecules/posts_not_found.php', $args);
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>
</div>