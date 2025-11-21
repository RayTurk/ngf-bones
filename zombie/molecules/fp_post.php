<?php
    if (has_post_thumbnail()) {
        $theurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    }
else {  
    $content = get_the_content();
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $content, $matches);
        if (isset($matches[1])) {
            $theurl = $matches[1];
        } else {
            $theurl = get_stylesheet_directory_uri().'/img/logo.png';
            $class = "noimage";
        }
    } 
?>
<h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
<div class="row">
    <div class="col-md-6">
        <a href="<?php echo get_permalink();?>"><img src="<?php echo $theurl;?>" alt="featured image for post: <?php get_the_title();?> View post"></a>
    </div>
    <div class="col-md-6">
        <?php the_excerpt();?>
    </div>
</div>
