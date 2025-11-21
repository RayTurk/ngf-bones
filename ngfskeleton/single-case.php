<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();?>
<?php 
                        while (have_posts()) {
                            the_post();?>
<div id="content" class="site-content">
     <?php
        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        if (has_post_thumbnail()) {
    ?>
            <img class="page-feature" src="<?php echo $url;?>" alt="Featured Image" title="Featured Image">
    <?php } ?>
    <div class="container main-content">
        <div class="row">
            <div class="col-md-12 sm-12- xs-12" id="primary">

                        

                            <?php get_template_part('content','case');?>



                        

            </div>
        </div>
    </div>
</div>
<?php } //endwhile;
get_template_part('content','connect');?> 
<?php get_footer(); ?> 