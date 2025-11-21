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
            $class="noimage";
        }

     } 
?>
<div class="gridpost">
    <a href="<?php the_permalink();?> "class="header">
        <div class="image <?php echo $class;?>" style="background-image:url(<?php echo $theurl;?>)"></div>
        <div class="title"><?php the_title();?></div>
    </a>
    <div class="excerpt">
        <?php 
            $regex = '#(<h([1-6])[^>]*>)\s?(.*)?\s?(<\/h\2>)#';
            $excerpt = get_the_content();
            $excerpt = preg_replace($regex,'', $excerpt);
            $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
            $excerpt = strip_shortcodes($excerpt);
            $excerpt = strip_tags($excerpt);
            $excerpt = substr($excerpt, 0, 150);
            $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
            $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
            $excerpt = $excerpt.'...';
            echo $excerpt;
        ?>
    </div>
</div>