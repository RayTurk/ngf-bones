
<div 
     id="<?php echo get_sub_field('css_id') ;?>" 
     class="page_section section_callout_bar <?php echo get_sub_field('classes');?>" 
     style="<?php if (get_sub_field('text_color')) {echo 'color: '.get_sub_field('text_color').';';} if (get_sub_field('background_color')) {echo 'background-color: '.get_sub_field('background_color').';';};?>"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php the_sub_field('callout_text');?>
            </div>
        </div>
    </div>
</div>