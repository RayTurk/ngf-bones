<style>
    .featured_image {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 0;
        padding-bottom: 18.875%;
    }
</style>
<?php
    global $post;
    if (has_post_thumbnail()) {
        $theurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
        <div class="featured_image" style="background-image:url(<?php echo $theurl;?>);">&nbsp;
        </div>
<?php 
    } //endif 
    else {
?>
        <div class="featured_image fallback">&nbsp;
        </div>
<?php 
    } //end else
?>