
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
<div class="postwrap col-md-6">
    <div class="post">
        <div class="image <?php echo $class;?>" style="background-image:url(<?php echo $theurl;?>)"></div>
        <h3><?php the_title();?></h3>
        <p><a class="btn" href="<?php echo get_permalink();?>" title="Permalink To:<?php echo get_permalink();?>">READ MORE</a></p>
    </div>
</div>