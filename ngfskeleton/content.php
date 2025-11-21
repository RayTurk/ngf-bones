
    <div class="post row">
        <div class="col-md-4 hidden-xs hidden-sm">
             <?php
                $theurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    if (has_post_thumbnail()) {
            ?>


            <a href="<?php echo get_permalink();?>"><img class="image" src="<?php echo $theurl;?>" alt="<?php the_title();?>"></a>
        <?php } 
        else { ?> 
            <a href="<?php echo get_permalink();?>"><img class="image" src="<?php
                    $content = get_the_content();
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $content, $matches);
                    if (isset($matches[1])) {
                        $url = $matches[1];
                    } else {
                        $url = get_stylesheet_directory_uri().'/img/logo.png';
                    }
                    Print $url;
                ?>" alt="<?php the_title();?>"></a>
        <?php } ?>
            

        </div>
        <div class="col-md-8 col-xs-12 col-sm-12">
            <h2><a style="text-decoration:none; color:inherit" href="<?php echo get_permalink();?>"><?php the_title();?></a></h2>
            <p><?php echo get_the_date('F j, Y');?></p>
            <p><?php the_excerpt();?></p>
            <div class="buttons">
                <a class="btn readmore" href="<?php echo get_permalink();?>">Continue Reading</a>

                <?php get_template_part ('sharer');?>
            </div>
        </div>
    </div>
