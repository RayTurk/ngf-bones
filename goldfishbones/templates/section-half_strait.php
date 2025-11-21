<?php 
    $side = get_sub_field('text_position');
    
?>
<style>
    .half_strait {
        padding: 0;
    }
    .half_strait .row {
        margin: 0;
    }
    .half_strait .row>div {
        padding: 0;
    }
    .half_strait .text .content  {
        padding: 1em 1em;
    }
    .half_straight .image .content {
        padding-bottom: 50%;
    }
    .half_strait .image .content {
        padding-bottom: 40%;
        background-size: cover;
        background-position: center;
    }
    @media(min-width:768px) {
        .half_strait .text .content  {
            padding: 3em 1em;
        }   
        
    }
    @media (min-width:992px) {
        .half_strait .image .content {
            padding: 0;
            height: 100%;
        }
    }
</style>
<div 
     id="<?php echo get_sub_field('css_id') ;?>" 
     class="page_section half_strait <?php echo get_sub_field('classes');?>" 
     style="<?php if (get_sub_field('text_color')) {echo 'color: '.get_sub_field('text_color').';';} if (get_sub_field('background_color')) {echo 'background-color: '.get_sub_field('background_color').';';};?>"> 
        <div class="row">
            <?php if ($side == 'left') {
                echo '<div class="col-lg-6 text left"><div class="content"><div class="inner">';
                the_sub_field('copy');
                echo '</div></div></div>';
            }?>
            <div class="col-lg-6 image">
                <div class="content" style="background-image:url(<?php echo get_sub_field('image');?>)"></div>
            </div>
            <?php if ($side == 'right') {
                echo '<div class="col-lg-6 text right"><div class="content"><div class="inner">';
                the_sub_field('copy');
                echo '</div></div></div>';
            }?>
        </div>
</div>