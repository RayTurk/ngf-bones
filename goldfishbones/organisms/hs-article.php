<div class="col-md-6 col-lg-3 article">
    <?php //var_dump($vars);?>
    <a class="inner" href="<?php echo $vars['absolute_url'];?>">
        
        <div class="front">
            <div class="type">Blog Post</div>
            <hr>
            <div class="title"><?php echo $vars['html_title'];?></div>
            <div class="bio">
            <?php 
                $avatar = $vars['blog_post_author']['avatar'];
                if ($avatar != "") {
                    echo '<img src="'.$avatar.'" alt="author avatar">';
                }
            ?> 
            <div class="name"><?php echo $vars['blog_post_author']['display_name'];?></div>
            </div>
            <div class="date">
                <?php echo date("M j, Y", $vars['publish_date']/1000);?>
            </div>
            
        </div>
        <div class="back">
            <div class="type">Blog Post</div>
            <hr>
            <div class="content">
            <?php
            $regex = '#(<h([1-6])[^>]*>)\s?(.*)?\s?(<\/h\2>)#';
            $excerpt = $vars['post_summary'];
            $excerpt = preg_replace($regex,'', $excerpt);
            $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
            $excerpt = strip_shortcodes($excerpt);
            $excerpt = strip_tags($excerpt);
            $excerpt = substr($excerpt, 0, 250);
            $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
            $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
            echo $excerpt;
            ?>
            </div>
            <div class="readmore">Read More	&#9658; </div>
        </div>
    </a>
</div>