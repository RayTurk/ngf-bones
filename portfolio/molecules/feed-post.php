<?php
	global $post;
    $class= "image";
    if (has_post_thumbnail($post->ID)) {
        $theurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    } 
    else { 
        
        
        $theurl = get_stylesheet_directory_uri().'/img/logo.png';
        $class="noimage";
        

     } 
?>
<a style="text-decoration:none; color:inherit" href="<?php echo get_permalink();?>" class="col-md-6 col-lg-4">
    <div class="feedpost">
        <img class="image" src="<?php echo $theurl;?>" alt="<?php echo get_the_title().' Post Thumbnail';?>">
        <div class="content">
            <h2><?php the_title();?></h2>
            <div class="excerpt">
                <?php the_excerpt();?>
            </div>
            <span class="btn">Read More</span>
        </div>
    </div>
</a>