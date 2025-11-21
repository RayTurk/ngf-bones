<div id="rotator" class="carousel slide" data-interval="9000" data-ride="carousel">
	<div class="carousel-inner">
        <?php
                $args = array (
                    'post_type'              => array( 'slide' ),
                    'order'                  => 'ASC',
                    'orderby'                => 'menu_order',
                );

                // The Query
                $queryRotator = new WP_Query( $args );

                // The Loop
                if ( $queryRotator->have_posts() ) {
                    $count=0;
                    while ( $queryRotator->have_posts() ) {
                        $queryRotator->the_post();
                        if ($count == 0 ) {
                            $class ="active";
                        }
                        else {
                            $class ="";
                        }
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
                        
                            <div class="item <?php echo $class;?>">
                                <div class="slide" id="slide<?php echo $post->ID;?>" style="background-image:url(<?php echo $url;?>)">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="inner">
                                                <?php the_content();?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                    $count ++;
                        
                    }
                } 
                else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();	?>
    </div>
    <?php if ($queryRotator->post_count >= 2) {?>
    <a class="left carousel-control" href="#rotator" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
	</a>

	<a class="right carousel-control" href="#rotator" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
    <?php } ?>

</div>