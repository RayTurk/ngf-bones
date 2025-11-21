<?php
	global $post;
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
            $class="noimage";
        }

     } 
?>
<div class="feedpost col-sm-12">
    <div class="row">
        <div class="col-md-4 hidden-xs hidden-sm">
            <a style="text-decoration:none; color:inherit" href="<?php echo get_permalink();?>"><img class="image" src="<?php echo $theurl;?>" alt="<?php echo get_the_title().' Post Thumbnail';?>"></a>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12">
            <h2><a style="text-decoration:none; color:inherit" href="<?php echo get_permalink();?>"><?php the_title();?></a></h2>
            <p><?php echo get_the_date('F j, Y');?></p>
            <p><?php the_excerpt();?></p>
        </div>
    </div>
</div>