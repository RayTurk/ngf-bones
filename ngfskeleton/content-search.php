<div class="post row">
    <div class="col-xs-12 col-sm-12">
        <h2><a style="text-decoration:none; color:inherit" href="<?php echo get_permalink();?>"><?php the_title();?></a></h2>
        <p><?php echo get_the_date('F j, Y');?></p>
        <p><?php the_excerpt();?></p>
        <div class="buttons">
            <a class="btn readmore" href="<?php echo get_permalink();?>">Continue Reading</a>
            
        </div>
    </div>
</div>