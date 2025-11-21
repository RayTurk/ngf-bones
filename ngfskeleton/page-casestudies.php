<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
?> 
<?php 
                while (have_posts()) {
                    the_post();
;?>
<div id="content" class="row row-with-vspace site-content">
     <?php
        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        if (has_post_thumbnail()) {
    ?>
            <img class="page-feature" src="<?php echo $url;?>" alt="Featured Image" title="Featured Image">
    <?php } ?>
    <div class="container main-content">
        <div class="row">
             <?php
                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                if (has_post_thumbnail()) {
            ?>
                    <img class="page-feature" src="<?php echo $url;?>" alt="Featured Image" title="Featured Image">
            <?php } ?>
            <div class="col-md-12 sm-12 xs-12" id="primary">
                <h1><?php the_title();?></h1>
                <?php the_content();?>
                <div class="case-loop">
                    <?php // WP_Query arguments
                    $args = array (
                        'post_type'              => array( 'case' ),
                        'posts_per_page'         => '-1',
                        'order'                  => 'DESC',
                        'orderby'                => 'menu_order',
                    );

                    // The Query
                    $caseStudies = new WP_Query( $args );

                    // The Loop
                    if ( $caseStudies->have_posts() ) {
                        while ( $caseStudies->have_posts() ) {
                            $caseStudies->the_post();?>
                            <div class="case col-md-6">
                                
                                     <?php
                                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                            if (has_post_thumbnail()) {
                                    ?>
                                    <a href="<?php echo get_permalink();?>"><img class="featured" src="<?php echo $url;?>" alt="<?php the_title();?>" title="<?php the_title();?>"></a>
                                            <?php } ?>
                                
                                
                                    <h2><a style="color:inherit; text-decoration:none;" href="<?php echo get_permalink();?>"><?php the_title();?></a></h2>
                                    <h3><?php echo cfs()->get('work_performed').', '; echo cfs()->get('location');?></h3>
                                    <?php the_excerpt();?>
                                    <p><a class="btn" href="<?php echo get_permalink();?>">Learn More</a></p>
                                
                            </div>
                    <?php  }
                    } else {
                        // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();?>
                </div>    
            </div>
        </div>
    </div>
</div>
<?php } //endwhile;
get_template_part ('content','connect');?> 
<?php get_footer(); ?> 