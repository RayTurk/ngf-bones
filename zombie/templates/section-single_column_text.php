<?php //Single Column Text
    global $post;
?>
<div id="<?php echo get_sub_field('css_id') ;?>" class="page_section single_column_text <?php echo get_sub_field('classes');?>"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 content">
                <?php
                    echo get_sub_field('content_area');
                ?>

            </div>
        </div>
    </div>
</div> 