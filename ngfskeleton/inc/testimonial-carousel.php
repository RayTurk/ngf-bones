<div id="testimonial_carousel" class="carousel slide" data-interval="9000" data-ride="carousel">
    <h3>What people are saying about our Turning 65 workshops:</h3>
    <div class="carousel-inner">
    <?php // WP_Query arguments
    $args = array (
        'post_type'              => array( 'testimonials' ),
        'posts_per_page'         => '-1',
        'category_name'          => 'medicare'
    );

    // The Query
    $testimonial = new WP_Query( $args );
    $count=0;
    // The Loop
    if ( $testimonial->have_posts() ) {
        while ( $testimonial->have_posts() ) {
            $testimonial->the_post();
            $count++;
            if ($count == 1) { $class="active";}
            else { $class="none";}
        ?>
            <div class="item <?php echo $class;?>">
                <p><?php the_content();?></p>
                <p><?php the_title();?></p>
            </div>
        <?php }
    } else {
        // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();?>
    </div>
    <a class="left carousel-control" href="#testimonial_carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
	</a>

	<a class="right carousel-control" href="#testimonial_carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
    <a class="btn" href="/calendar" title="View Events Calendar">Register for an Event</a>
</div>
