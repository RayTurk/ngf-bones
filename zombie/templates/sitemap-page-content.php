<div id="sitemap_content">
    <?php get_atomic_part ('molecules/page_title.php', $args);?>
    <div class="container main-content">
        <div class="row content-row justify-content-center">

            <div class="col-sm-12 main">
                <div class="row">
                    <div class="col-sm-12 pages">
                        
                        
                            <?php 
                                // WP_Query arguments
                                $args = array(
                                    'post_type'              => array( 'page' ),
                                    'posts_per_page'         => '-1',
                                    'order'                  => 'ASC',
                                    'orderby'                => 'title',
                                );

                                // The Query
                                $sitemapPages = new WP_Query( $args );

                                // The Loop
                                if ( $sitemapPages->have_posts() ) {
                                    
                                    echo '<h2>Pages</h2><ul>';
                                    while ( $sitemapPages->have_posts() ) {
                                        $sitemapPages->the_post();
                                        $sitemap = get_field('sitemap');
                                        if (empty($sitemap)) {
                                            echo '<li><a title="View Page '.get_the_title().'" href="'.get_permalink().'">'.get_the_title().'</a></li>';
                                        }
                                    }
                                    echo '</ul>';
                                } else {
                                    // no posts found
                                }

                                // Restore original Post Data
                                wp_reset_postdata();
                            ?>
                
                    </div>
                    <div class="col-sm-12 posts">
                        
                        <?php
                            // WP_Query arguments
                            $args = array(
                                'posts_per_page'         => '-1',
                                'order'                  => 'ASC',
                                'orderby'                => 'title',
                            );

                            // The Query
                            $sitemapPosts = new WP_Query( $args );

                            // The Loop
                            if ( $sitemapPosts->have_posts() ) {
                                echo '<h2>Posts</h2><ul>';
                                while ( $sitemapPosts->have_posts() ) {
                                    $sitemapPosts->the_post();
                                    echo '<li><a title="View Post '.get_the_title().'" href="'.get_permalink().'">'.get_the_title().'</a></li>';
                                }
                                echo '</ul>';
                            } else {
                                // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                        ?>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>