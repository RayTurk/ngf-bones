<?php
//Design Library Name: Blog
//Description: This is the Prototype Implimentation of the main Blog Feed  It includes a loop of all blog posts and a fully widgetized sidebar.
?>
<!-- Begin Template: Blog -->
<div id="single-blog">
    
    <div class="container main-content">
        <div class="row justify-content-center">
            <div class="col-lg-10">
        
                <nav class="cats">
                    <?php 
                        global $post;
                    $post_categories = wp_get_post_categories($post->ID);
                    if($post_categories) {
                        $count = 0;
                        foreach($post_categories as $cat){
                            echo '<a href="'.get_category_link($cat).'">'.get_cat_name($cat).'</a>';
                            if ($count > 0) {
                                echo ', ';
                            }
                            $count ++;
                        }
                    }
                    ?>
                </nav>
                <h1><?php the_title();?></h1>    
                <?php echo apply_filters( 'the_content', $args['content']); ?>    
                <?php get_atomic_part('/inc/sharer.php');?>
            </div>
        </div>

    </div>
    <div id="recent_posts">
        <div class="container">
            <h2>Recent Blog Posts</h2>
            <?php 
                // WP_Query arguments
                $args = array(
                    'posts_per_page'         => '3',
                );

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                    echo '<div class="row feedposts">';
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        get_atomic_part('molecules/feed-post.php');
                    }
                    echo '</div>';
                } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();
            ?>
        </div>
    </div>
    <?php 
        get_atomic_part ('/inc/page_builder.php', $args);
        $front_page_id = get_option('page_on_front');
        clone_layout ($front_page_id, 'cta_duo2');
        clone_layout ($front_page_id, 'home_assoc');
        
    ?>       
        
</div>
<!-- End Template: Blog -->