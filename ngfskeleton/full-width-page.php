<?php
/**
 * Template Name: Full Width Page
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
<div id="content" class="site-content">
    <div class="container featured-image">
         <?php
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                if (has_post_thumbnail()) {
                    
        ?>
            <img src="<?php echo $url;?>" alt="featured image">
        <?php }?>
    </div>
    <div class="container main-content">
        <div class="row">
            <div class="col-md-12 sm-12 xs-12">
                <h1><?php the_title();?></h1>
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>
<?php } //endwhile;?> 
<?php get_footer(); ?> 