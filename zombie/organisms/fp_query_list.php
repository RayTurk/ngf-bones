<div class="post-list">
<h2><?php echo get_sub_field('post_list_headline') ;?></h2>
<?php
    // WP_Query arguments
    $args = array(
        'posts_per_page'         => get_sub_field('post_count'),
        'offset'                 => 1
    );

    // The Query
    $queryFirst = new WP_Query( $args );

    // The Loop
    if ( $queryFirst->have_posts() ) {
        echo '<ul>';
        while ( $queryFirst->have_posts() ) {
            $queryFirst->the_post();
            echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
        }
        echo '</ul>';
    } else {
        get_atomic_part('/molecules/posts_not_found.php', $args);
    }
    // Restore original Post Data
    wp_reset_postdata();
?>
    <?php get_atomic_part('/molecules/fp_view_all.php', $args);?>
</div> 