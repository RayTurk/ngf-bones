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
        <h1><?php the_title();?></h1>
        <div class="row">
            <div class="col-md-8 sm-12 xs-12">
                <div id="primary">
                <?php the_content();?>
                </div>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm">
                <?php get_sidebar ('page');?>
            </div>
        </div>
    </div>
</div>
<?php } //endwhile;?> 
<?php get_footer(); ?> 