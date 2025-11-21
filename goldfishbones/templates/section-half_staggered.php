<?php 
    $side = get_sub_field('text_position');
    
?>
<style>
    .section_half_staggered {
        padding: 2em 0;
    }
    .section_half_staggered .row {
        margin: 0;
    }
    .section_half_staggered .col-lg-6 {
        padding: 0;
    }
    
    .section_half_staggered .text .content {
        background:#f6f6f6;
        
        width: 100%;
    }
    .section_half_staggered .image .content {
        background-size: cover;
        background-position: center;
        flex: 0 0 100%;
        padding-bottom: 100%;
    }
    .section_half_staggered .inner {
        padding: 2em 1em;
    }
    @media(min-width:992px) {
        .section_half_staggered .inner {
            width: 480px;
            display: inline-block;
        }
        .section_half_staggered .left .inner {
            position: absolute;
            right: 0;
            padding-right: 2em;
        }
        .section_half_staggered .right .inner {
            padding-left:2em;
        }
        .section_half_staggered .col-lg-6 {
            display: flex;
        }
        .section_half_staggered .col-lg-6 .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .section_half_staggered .content {
            position: relative;
        }
        .section_half_staggered .text .content {
            top: 2em;
        }
        
    }
    @media (min-width:1200px) {
        .section_half_staggered .inner {
            width: 585px;
        }
    }
</style>
<div 
     id="<?php echo get_sub_field('css_id') ;?>" 
     class="page_section section_half_staggered <?php echo get_sub_field('classes');?>" 
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