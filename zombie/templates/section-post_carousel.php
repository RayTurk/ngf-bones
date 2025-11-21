 <div id="<?php echo get_sub_field('css_id');?>" class="page_section post_carousel"> 
    <div class="container">
            <?php
                if (get_sub_field('title') != "") {
                    echo '<h2>'.get_sub_field('title').'</h2>';
                }
                $number = get_sub_field ('number_of_entries');
                $type = get_sub_field('post_type');
                // WP_Query arguments
                    $args = array(
                        'posts_per_page'         => $number,
                        'post_type'              => $type,
                        'orderby'                => 'rand',
                    );

                    // The Query
                    $queryHome = new WP_Query( $args );

                    // The Loop
                    if ( $queryHome->have_posts() ) {

                        while ( $queryHome->have_posts() ) {
                            $queryHome->the_post();
                            get_template_part('/molecules/carousel_post',$type);
                        }
                    } else {
                        get_atomic_part('/molecules/posts_not_found.php', 0);
                    }
                    // Restore original Post Data
                    wp_reset_postdata();    

            ?>
        <p class="text-center"><a class="btn alt" href="/about/quotes/">View All Testimonials</a></p>
    </div>
</div>